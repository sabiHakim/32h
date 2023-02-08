<?php
class Echangem extends CI_Model {

    public function insert_echange($id1,$obj1,$id2,$obj2) {
    	$current_date = new DateTime();
		$current_date = $current_date->format("Y-m-d H:i:s");
		$req = "insert into echange (idEchange,id1,idObjet1,id2,idObjet2,etat,dateEnvoi) values (null,%s,%s,%s,%s,0,%s)";
    	$req = sprintf($req,$this->db->escape($id1),$this->db->escape($obj1),$this->db->escape($id2),$this->db->escape($obj2),$this->db->escape($current_date));
    	$query = $this->db->query($req);
    }

    public function get_all_demande($id) {
    	$req = "SELECT * from (select e.idEchange,e.id1,u.pseudo,e.id2,e.idObjet1,e.idObjet2,e.dateEnvoi,e.etat from echange e join utilisateur u on e.id1=u.idUtilisateur join objet o1 on e.idObjet1=o1.idObjet join objet o2 on e.idObjet2=o2.idObjet) as demande where id2 = %s and etat = 0";
    	$req = sprintf($req,$this->db->escape($id));
	    $query = $this->db->query($req);
	    return $query->result_array();
    }

    public function update_etat($id,$etat) {
    	$current_date = new DateTime();
		$current_date = $current_date->format("Y-m-d H:i:s");
    	$req = "Update echange set etat = %s , dateAcceptation= '%s' where idEchange= %s";
    	$req = sprintf($req,$etat,$current_date,$id);
   
	    $this->db->query($req);
	}

	public function echange_effectue() {
    	$req = "SELECT * from echange where etat= 1 ";
	    $query = $this->db->query($req);
	    return $query->result_array();
    }

	public function insert_historique($idObjet,$idProprietaire){
		    	$current_date = new DateTime();
		$current_date = $current_date->format("Y-m-d H:i:s");
	  $req = "insert into historique values (null,%s,%s,'%s')";
	  $req = sprintf($req,$idObjet,$idProprietaire,$current_date);
	 	$this->db->query($req);
	}

	public function get_historique_by_id($id) {
	  $req = "SELECT * from (select h.idHistorique,h.idObjet,h.idProprietaire,u.pseudo,h.daty from historique h join utilisateur u on h.idProprietaire=u.idUtilisateur) as histo where idObjet= %s order by daty desc";
	  $req = sprintf($req,$id);
	  $query = $this->db->query($req);
	  return $query->result_array();
	}

}
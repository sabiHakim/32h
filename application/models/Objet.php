<?php
class Objet extends CI_Model {


    public function get_by_categorie($id,$idProprietaire) {
    	$req = "SELECT * from objet where idCategorie = %s and idProprietaire!= %s";
    	$req = sprintf($req,$this->db->escape($id),$this->db->escape($idProprietaire));
	    $query = $this->db->query($req);
	    return $query->result_array();
    }

    public function get_img_by_id($id){
    	$req = "SELECT * from photo where idObjet = %s";
    	$req = sprintf($req,$id);
	    $query = $this->db->query($req);
	    return $query->result_array();
    }

//detaille objet
    public function get_objet_by_id($id) {
    	$req = "SELECT * from (select o.idProprietaire,u.pseudo,o.idCategorie,c.nom as categorie,o.idObjet,o.nom as objet,o.descri,o.estimation from objet o join utilisateur u on o.idProprietaire=u.idUtilisateur join categorie c on o.idCategorie=c.idCategorie) as list where idObjet = %s limit 1";
    	$req = sprintf($req,$this->db->escape($id));
	    $query = $this->db->query($req);
	    return $query->row_array();
    }

//liste objet 
    public function get_objet_by_proprietaire($id) {
    	$req = "SELECT * from (select o.idProprietaire,u.pseudo,o.idCategorie,c.nom as categorie,o.idObjet,o.nom as objet,o.descri,o.estimation from objet o join utilisateur u on o.idProprietaire=u.idUtilisateur join categorie c on o.idCategorie=c.idCategorie) as list where idProprietaire = %s ";
    	$req = sprintf($req,$this->db->escape($id));
	    $query = $this->db->query($req);
	    return $query->result_array();
    }

	public function changer_proprietaire($idObjet,$idNouveau) {
    	$req = "UPDATE objet set idProprietaire= %s where idObjet= %s";
    	$req = sprintf($req,$idNouveau,$idObjet);
	    $this->db->query($req);
	}

	public function insert_objet($idProprietaire,$nom,$descr,$idCategorie,$estimation) {
    	$req = "insert into objet values (null,%s,'%s','%s',%s,%s)";
    	$req = sprintf($req,$idProprietaire,$descr,$nom,$idCategorie,$estimation);
	    // echo $req;
	    $this->db->query($req);
	}

	public function rechercher($str,$idCategorie) {
		if ($idCategorie == -1) {
			$req = "SELECT * from (select o.idProprietaire,u.pseudo,o.idCategorie,c.nom as categorie,o.idObjet,o.nom as objet,o.descri,o.estimation from objet o join utilisateur u on o.idProprietaire=u.idUtilisateur join categorie c on o.idCategorie=c.idCategorie) as list where objet like '%".$str."%'";
		} else {
			$req = "SELECT * from (select o.idProprietaire,u.pseudo,o.idCategorie,c.nom as categorie,o.idObjet,o.nom as objet,o.descri,o.estimation from objet o join utilisateur u on o.idProprietaire=u.idUtilisateur join categorie c on o.idCategorie=c.idCategorie) as list where objet like '%".$str."%' and idCategorie =".$idCategorie;
		}
	    $query = $this->db->query($req);
	    return $query->result_array();
	}

	public function get_last_objet() {
    	$req = "SELECT idObjet from objet order by idObjet desc limit 1";
	    $query = $this->db->query($req);
	    return $query->row_array()['idObjet'];
    }
}


<?php

class User extends CI_Model {
    public function check_user($mail,$mdp) {	
	    $req = "SELECT * from utilisateur where Mdp = '%s' and email = '%s' limit 1";
    	$req = sprintf($req,$mdp,$mail);
    	// echo $req;
	    $query = $this->db->query($req);
	    return $query->row_array();
    }

    public function get_utilisateur_by_id($id) {
    	$req = "SELECT * from utilisateur where idUtilisateur = %s limit 1";
    	$req = sprintf($req,$this->db->escape($id));
	    $query = $this->db->query($req);
	    return $query->row_array();
    }

    public function get_all_user() {
    	$req = "SELECT * from utilisateur";
	    $query = $this->db->query($req);
	    return $query->result_array();
    }

    public function add_user($nom,$mail,$mdp) {
    	$req = "insert into utilisateur values (null,'%s','%s','%s')";
    	$req = sprintf($req,$nom,$mail,$mdp);
	    $this->db->query($req);
    }
}

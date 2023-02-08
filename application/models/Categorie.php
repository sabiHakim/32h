<?php 

class Categorie extends CI_Model {

    public function get_all_categorie() {
	    $query = $this->db->query('SELECT * FROM categorie');
	    return $query->result_array();
    }

    public function insert_categorie($nom) {
    	$req = "insert into categorie values (null,'%s')";
	  	$req = sprintf($req,$nom);
	 	$this->db->query($req);
    }
}



?>
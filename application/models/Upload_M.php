<?php
class Upload_M extends CI_Model {


  public function insertPhoto($idObjet,$fichier) {
  	    $req = "insert into photo values (null,%s,'%s')";
    	$req = sprintf($req,$idObjet,$fichier);
	    // echo $req;
	    $this->db->query($req);
  }

}
<?php 
class Echange extends CI_Controller {
	public function echange_objet($id1,$obj1,$id2,$obj2) {
		$this->load->model('echangem');
     	$this->echangem->insert_echange($id1,$obj1,$id2,$obj2);

        redirect(base_url('index.php/page'));   
	}

	public function list_demande() {
		$this->load->helper('url_helper'); 
        $this->load->model('echangem');
        $this->load->model('objet');
        $this->load->model('user');
  
        $data['title'] = 'Mes objet';
        $data['content'] = 'listDemande'; 
        $data['list_demande'] = $this->echangem->get_all_demande($_SESSION['id']);
        for ($i=0; $i <count($data['list_demande'] ); $i++) { 
            $data['photo1'][] = $this->objet->get_img_by_id($data['list_demande'][$i]['idObjet1']);
            $data['photo2'][] = $this->objet->get_img_by_id($data['list_demande'][$i]['idObjet2']);
            $data['objet1'][] = $this->objet->get_objet_by_id($data['list_demande'][$i]['idObjet1']);
            $data['objet2'][] = $this->objet->get_objet_by_id($data['list_demande'][$i]['idObjet2']);
        	$data['demandeur'][] = $this->user->get_utilisateur_by_id($data['list_demande'][$i]['id1']); 
        }

       	$data['moi'][] = $this->user->get_utilisateur_by_id($_SESSION['id']); 
        $this->load->view('template', $data);  
	}

	public function accepter($id1,$objet1,$objet2,$idEchange) {
		$this->load->helper('url_helper'); 
        $this->load->model('echangem');
        $this->load->model('objet');
        $etat = 1;
        $this->echangem->update_etat($idEchange,$etat);
        $this->objet->changer_proprietaire($objet1,$_SESSION['id']);
        $this->objet->changer_proprietaire($objet2,$id1);
        $this->echangem->insert_historique($objet1,$_SESSION['id']);
        $this->echangem->insert_historique($objet2,$id1);

        redirect(base_url('index.php/echange/list_demande'));
	}

    public function list_historique($idObjet) {
        $this->load->helper('url_helper'); 
        $this->load->model('echangem');
        $this->load->model('objet');
   
        $data['title'] = 'Historique';
        $data['content'] = 'histo'; 
        $data['liste_histo'] = $this->echangem->get_historique_by_id($idObjet);
        $date['object']= $this->objet->get_objet_by_id($idObjet);
        $this->load->view('template', $data);  
    }

}
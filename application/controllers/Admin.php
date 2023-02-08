<?php 

class Admin extends CI_Controller {

    public function index() {
        $this->load->helper('url_helper'); 
        $this->load->model('user');
        $this->load->model('Echangem');
        $this->load->model('categorie');

        $data['list_categorie'] = $this->categorie->get_all_categorie();

        $data['title'] = 'Mes objet'; 
        $data['list_utilisateur'] = $this->user->get_all_user();
        $data['effectue'] = $this->Echangem->echange_effectue();
        $this->load->view('admin', $data);   
    }

    public function ajouter_categorie() {
        $nom = $this->input->post('nom');
        $this->load->model('categorie');
        $this->categorie->insert_categorie($nom);
        
        redirect(base_url('index.php/admin'));  
    }


}
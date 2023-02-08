<?php 
class Page extends CI_Controller {
    public function index() {	
        $this->load->helper('url_helper'); 
        $this->load->model('categorie');
        $data['title'] = 'home';
        $data['content'] = 'accueil'; 
        $data['list_categorie'] = $this->categorie->get_all_categorie();
        $this->load->view('template', $data);      
    }
}
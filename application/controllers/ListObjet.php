<?php 
class ListObjet extends CI_Controller {
    public function listObjetByCategorie($id) {	
        $this->load->helper('url_helper'); 
        $this->load->model('objet');
        $this->load->model('categorie');
        $data['title'] = 'home';
        $data['list_categorie'] = $this->categorie->get_all_categorie();
        
        $data['list_objet'] = $this->objet->get_by_categorie($id,$_SESSION['id']);
        for ($i=0; $i <count($data['list_objet'] ); $i++) { 
            $data['photo'][] = $this->objet->get_img_by_id($data['list_objet'][$i]['idObjet']);
        }
        $data['content'] = 'listObjet'; 
        $this->load->view('template', $data);      
    }

    public function descriObjet($id) { 
        $this->load->helper('url_helper'); 
        $this->load->model('objet');

        $data['title'] = 'home';
        $data['content'] = 'descri'; 

        $data['objet'] = $this->objet->get_objet_by_id($id);
        $data['photo'] = $this->objet->get_img_by_id($data['objet']['idObjet']);

        $this->load->view('template', $data);      
    }

    public function mesObjetEchange($idProprietaire,$idObjet) { 
        $this->load->helper('url_helper'); 
        $this->load->model('objet');
        $data['objetEchange'] = $this->objet->get_objet_by_id($idObjet);
        $data['title'] = 'Mes objet';
        $data['content'] = 'mesObjetEchange'; 
        $data['list_objet'] = $this->objet->get_objet_by_proprietaire($idProprietaire);
        for ($i=0; $i <count($data['list_objet'] ); $i++) { 
            $data['photo'][] = $this->objet->get_img_by_id($data['list_objet'][$i]['idObjet']);
        }

        $this->load->view('template', $data);      
    }

   public function mesObjet() { 
        $this->load->helper('url_helper'); 
        $this->load->model('objet');

        $data['title'] = 'Mes objet';
        $data['content'] = 'mesObjet'; 
        $data['list_objet'] = $this->objet->get_objet_by_proprietaire($_SESSION['id']);
        for ($i=0; $i <count($data['list_objet'] ); $i++) { 
            $data['photo'][] = $this->objet->get_img_by_id($data['list_objet'][$i]['idObjet']);
        }

        $this->load->view('template', $data);      
    }


    public function form_ajout_objet() {
        $this->load->helper('url_helper'); 
        $this->load->model('categorie');

        $nom = $this->input->post('nom');
        $descri = $this->input->post('descri');
        $idCategorie = $this->input->post('idCategorie');

        $data['title'] = 'Mes objet';
        $data['content'] = 'ajouterObjet'; 
        $data['list_categorie'] = $this->categorie->get_all_categorie();
        $this->load->view('template', $data);   
    }
    public function form_ajout_photo() {
        $this->load->helper('url_helper');
        // $this->load->helper('url_');

        $data['title'] = 'ajouter photo';
        $data['content'] = 'ajouterPhoto'; 
        $this->load->view('template', $data);   
    }

    public function trait_ajouterObjet() {
        $this->load->helper('url_helper'); 
        $this->load->model('categorie');
        $this->load->model('objet');

        $nom = $this->input->post('nom');
        $descri = $this->input->post('descri');
        $idCategorie = $this->input->post('idCategorie');
        $estimation = $this->input->post('estimation');
$data['content'] = 'ajouterPhoto';
        $data['list_categorie'] = $this->categorie->get_all_categorie();
        $this->objet->insert_objet($_SESSION['id'],$nom,$descri,$idCategorie,$estimation);
        $data['objet'] = $this->objet->get_last_objet();
        // redirect(base_url('index.php/list_objet/form_ajout_photo?objet='.$data['objet']['idObjet']));
        $this->load->view('template', $data);     
    }

    public function find() {
        $str = $this->input->post('texte');
        $idCategorie = $this->input->post('categorie');
        $this->load->model('objet');
        $this->load->model('categorie');
        // $data['list_categorie'] = $this->categorie->get_all_categorie();
        $data['list_objet'] = $this->objet->rechercher($str,$idCategorie);
        
        // $data['list_objet'] = $this->objet->get_by_categorie($id,$_SESSION['id']);
        for ($i=0; $i <count($data['list_objet'] ); $i++) { 
            $data['photo'][] = $this->objet->get_img_by_id($data['list_objet'][$i]['idObjet']);
        }

        $data['content'] = 'resultatRecherche'; 
        $this->load->view('template', $data); 
    }

    

}
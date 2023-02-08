<?php 
class Login extends CI_Controller {
    public function index() {    
        $this->load->view('login'); 
    }

    public function check_login() {
        $this->load->model('user');
        $mail = $this->input->post('email');
        $mdp = $this->input->post('mdp');
        $res = $this->user->check_user($mail,$mdp);
    
        if ($res != null) {

            $this->load->library('session'); 
            $_SESSION['id'] = $res['idUtilisateur'];

            if ($mail=='admin@gmail.com' && $mdp == 'admin') {
                // $_SESSION['id'] = 1;
                redirect(base_url('index.php/admin'));
            }
            redirect(base_url('index.php/page'));
            // $this->load->view('accueil');
        }
        $this->load->view('login');
    }

    public function page_insrciption () {
        $this->load->view('inscription'); 
    }

    public function inscription() {
        $this->load->model('user');
        $pseudo = $this->input->post('pseudo');
        $mail = $this->input->post('email');
        $mdp = $this->input->post('mdp');
        
        $this->user->add_user($mail,$mdp,$pseudo);

        redirect(base_url('index.php/login'));
    }

    public function deco() {
        $this->session->unset_userdata('id');
        redirect(base_url('index.php/login'));        
    }
}
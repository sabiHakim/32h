
<?php 
class Upload_CI extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
        }

        public function index()
        {
                $this->load->view('upload_form', array('error' => ' ' ));
        }

        public function do_upload()
        {
        	$this->load->model('Upload_M');
                $config['upload_path']          = 'assets/image/' ;
                $config['allowed_types']        = 'gif|jpg|png';

                $this->load->library('upload', $config);
                 $message['content']="ajouterPhoto";
                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        $message['message']="Echec de l'upload";
                        $message['objet']= $this->input->post('idObjet');
                        $this->load->view('template', $message);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                        $this->Upload_M->insertPhoto($this->input->post('idObjet'),$this->upload->data('file_name'));
                        $message['message']="succes";
                        $message['objet']= $this->input->post('idObjet');
                        $this->load->view('template', $message);
                }
        }
}

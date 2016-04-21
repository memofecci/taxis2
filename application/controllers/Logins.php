<?php

class Logins extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('Logins_model');
    }
        public function index(){
           $this->load->view('Logins_index');
        }
        public function log_in(){
            $username=$this->input->post('username');
            $password=$this->input->post('password');
            $valido=$this->Login_model->validar($username,$password);
            if($valido){
                $usuario_data=array(
                    'login' => TRUE
                );
                $this->session->set_userdata($usuario_data);
                redirect(base_url() . 'index.php/home');
            }else{
                redirect('logins');
            }
        }
        public function log_out(){
            $this->session->sess_destroy();
            redirect(base_url() . 'index.php/logins');
        }
}


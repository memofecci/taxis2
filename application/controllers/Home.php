<?php

class Home extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        if($this->session->userdata('login')){
            
        }else{
            redirect(base_url()."index.php/logins");
        }
    
    }
    public function index(){
        $this->load->view('template/head_index');
        $data['username']=  $this->session->userdata('nombre');
        $data['idusuario']=  $this->session->userdata('id');
        $this->load->view('Home_index');
        $this->load->view('template/footer_index');
    }
}


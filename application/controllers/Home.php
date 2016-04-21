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
        $this->load->view('Home_index');
    }
}


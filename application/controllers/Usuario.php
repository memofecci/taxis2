<?php

class Usuario extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model ('Usuario_model');
        $this->load->model('Ciudad_model');
        $this->load->helper('url');   
        $this->load->library('session');
        if($this->session->userdata('login')){
            
        }else{
            redirect(base_url()."index.php/logins");
        }
    }
    public function index(){
        $this->load->view('template/head_index');
        $data["usuario"]=  $this->Usuario_model->list_all();
        $this->load->view('Usuario_index',$data);
        $this->load->view('template/footer_index');
    }
    
    public function nuevo(){
        $this->load->view('template/head_index');
        $data["ciudad"]=  $this->Ciudad_model->list_all();
        $this->load->view('Usuario_nuevo', $data);
        $this->load->view('template/footer_index');
    }
    public function save(){
        $nombre=$this->input->post('nombre');
        $apepat=$this->input->post('apepat');
        $username=  $this->input->post('username');
        $password=  $this->input->post('password');
        $ciudad_id=  $this->input->post('ciudad_id');
        $this->Usuario_model->save($nombre,$apepat,$username,$password,$ciudad_id);
        redirect('Usuario');
    }
    public function  delete ($usuario_id){
        $this->Usuario_model->delete($usuario_id);
        redirect('Usuario');
    }
    public function detail($usuario_id){
        $this->load->view('template/head_index');
    $data["Usuario"]=  $this->Usuario_model->find_by_id($usuario_id);
    $this->load->view('Usuario_detail',$data);
    $this->load->view('template/footer_index');
        
    }
    public function edit($usuario_id){
        $this->load->view('template/head_index');
        $data['ciudad']=$this->Ciudad_model->list_all();
        $data['usuario']=$this->Usuario_model->find_by_id($usuario_id);
        $this->load->view('usuario_edit',$data);
        $this->load->view('template/footer_index');
    }
    public function update(){
        $this->load->view('template/head_index');
        $usuario_id=  $this->input->post('usuario_id');
        $nombre=$this->input->post('nombre');
        $apepat=$this->input->post('apepat');
        $ciudad_id=  $this->input->post('ciudadlista');
        $this->Usuario_model->edit($usuario_id,$nombre,$apepat,$ciudad_id);
        redirect('Usuario');
        $this->load->view('template/footer_index');
    }
    
}
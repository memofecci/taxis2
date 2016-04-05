<?php

class Usuario extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model ('Usuario_model');
        $this->load->helper('url');        
    }
    public function index(){
        $data["usuario"]=  $this->Usuario_model->list_all();
     
        // llamar vista index
        $this->load->view('Usuario_index',$data);
    }
    public function nuevo(){
        $this->load->view('Usuario_nuevo');
    }
    public function save(){
        $nombre=$this->input->post('nombre');
        $apepat=$this->input->post('apepat');
        $this->Usuario_model->save($nombre,$apepat);
        redirect('Usuario');
    }
    public function  delete ($usuario_id){
        $this->Usuario_model->delete($usuario_id);
        redirect('Usuario');
    }
    public function detail($usuario_id){
    $data["Usuario"]=  $this->Usuario_model->find_by_id($usuario_id);
    $this->load->view('Usuario_detail',$data);
        
    }
    
}
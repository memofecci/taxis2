<?php

class Ciudad extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('Ciudad_model');
        $this->load->helper('url');
        $this->load->librery('session');
        if($this->session->userdata('login')){
            
        }else{
            redirect(base_url() . "index.php/logins");
        }
    }
    public function index(){
        $data["ciudad"]=  $this->Ciudad_model->list_all();
        $this->load->view('Ciudad_index',$data);
    }
    public function nuevo(){
        $this->load->view('Ciudad_nuevo');
    }
    public function save(){
        $nombre=$this->input->post('nombre');
        $this->Ciudad_model->save($nombre);
        redirect('Ciudad');
    }
    public function  delete ($ciudad_id){
        $this->Ciudad_model->delete($ciudad_id);
        redirect('ciudad');
    }
    public function detail($ciudad_id){
    $data["ciudad"]=  $this->Ciudad_model->find_by_id($ciudad_id);
    $this->load->view('Ciudad_detail',$data);
        
    }
    public function edit($ciudad_id){
        $data["ciudad"]=  $this->Ciudad_model->find_by_id($ciudad_id);
        $this->load->view('Ciudad_edit', $data);
    }
    public function update(){
        $id=  $this->input->post('ciudad_id');
        $nombre=  $this->input->post('nombre');
        $this->Ciudad_model->edit($id, $nombre);
        redirect('ciudad');
    }
}


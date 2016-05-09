<?php

class Choferes extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Choferes_model');
        $this->load->helper('url');
        $this->load->library('session');
        if ($this->session->userdata('login')) {
            
        } else {
            redirect(base_url() . "index.php/login");
        }
    }

    public function index() {
        $this->load->view('template/head_index');
        $data["Choferes"] = $this->Choferes_model->list_all();
        $this->load->view('Choferes_index', $data);
        $this->load->view('template/footer_index');
    }

    public function nuevo() {
        $this->load->view('template/head_index');
        $this->load->view('Choferes_nuevo');
        $this->load->view('template/footer_index');
    }

    public function save() {
        $this->load->view('template/head_index');
        $rut = $this->input->post('rut');
        $nombre = $this->input->post('nombre');
        $apepat = $this->input->post('apepat');
        $apemat = $this->input->post('apemat');
        $direccion = $this->input->post('direccion');
        $celular = $this->input->post('celular');
        $this->Choferes_model->save($rut, $nombre, $apepat, $apemat, $direccion, $celular);
        redirect('choferes');
        $this->load->view('template/footer_index');
    }

    public function detail($chofer_id) {
        $this->load->view('template/head_index');
        $data["Choferes"]=  $this->Choferes_model->find_by_id($chofer_id);
        $this->load->view('Choferes_detail',$data);
        $this->load->view('template/footer_index');
    }
    
    public function edit($chofer_id){
        $this->load->view('template/head_index');
        $data["Choferes"]=  $this->Choferes_model->find_by_id($chofer_id);
        $this->load->view('Choferes_edit', $data);
        $this->load->view('template/footer_index');
    }
    public function update(){
        $chofer_id=  $this->input->post('chofer_id');
        $rut = $this->input->post('rut');
        $nombre = $this->input->post('nombre');
        $apepat = $this->input->post('apepat');
        $apemat = $this->input->post('apemat');
        $direccion = $this->input->post('direccion');
        $celular = $this->input->post('celular');
        $estado=  $this->input->post('estado');
        $this->Choferes_model->edit($chofer_id, $rut, $nombre, $apepat, $apemat, $direccion, $celular, $estado);
        redirect('Choferes');
    }
    public function buscar() {
        $this->load->view('template/head_index');
        if($_POST){
            $buscar=  $this->input->post('buscar');            
        }else{
            $buscar='';           
        }     
        $data["choferes"] = $this->Choferes_model->buscar_choferes($buscar);
            $this->load->view('Choferes_buscar', $data);
        $this->load->view('template/footer_index');
    }

}

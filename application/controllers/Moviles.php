<?php

class Moviles extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('Moviles_model');
         $this->load->model('Choferes_model');
        $this->load->helper('url');
        $this->load->library('session');
        if ($this->session->userdata('login')) {
            
        } else {
            redirect(base_url() . "index.php/logins");
        }
        
    }
    public function index() {
        $this->load->view('template/head_index');
        $data["Moviles"] = $this->Moviles_model->list_all();
        $this->load->view('Moviles_index', $data);
        $this->load->view('template/footer_index');
    }
    public function nuevo() {
        $this->load->view('template/head_index');
        $data["Choferes"]=  $this->Choferes_model->list_all();
        $this->load->view('Moviles_nuevo',$data);
        $this->load->view('template/footer_index');
    }
    public function save() {
        $this->load->view('template/head_index');
        $numero = $this->input->post('numero');
        $patente = $this->input->post('patente');
        $patente1 = strtoupper($patente);
        $chofer_id = $this->input->post('chofer_id');
        $this->Moviles_model->save($numero, $patente1, $chofer_id);
        redirect('moviles');
        $this->load->view('template/footer_index');
    }
    public function detail($movil_id) {
        $this->load->view('template/head_index');
        $data["Moviles"]=  $this->Moviles_model->find_by_id($movil_id);
        $this->load->view('Moviles_detail',$data);
        $this->load->view('template/footer_index');
    }
    public function edit($movil_id){
        $this->load->view('template/head_index');
        $data["Choferes"]=$this->Choferes_model->list_all();
        $data["Moviles"]=  $this->Moviles_model->find_by_id($movil_id);
        $this->load->view('Moviles_edit', $data);
        $this->load->view('template/footer_index');
    }
    public function update(){
        $movil_id=  $this->input->post('movil_id');
        $numero = $this->input->post('numero');
        $patente = $this->input->post('patente');
        $patente1 = strtoupper($patente);
        $chofer_id = $this->input->post('chofer_id');
        $estado=  $this->input->post('estado');
        $this->Moviles_model->edit($movil_id,$numero,$patente1, $chofer_id, $estado);
        redirect('Moviles');
    }
    public function buscar() {
        $this->load->view('template/head_index');
        if ($_POST) {
            $buscar = $this->input->post('buscar');
        } else {
            $buscar = '';
        }
        $data["Moviles"] = $this->Moviles_model->buscar_moviles($buscar);
        $this->load->view('Moviles_buscar', $data);
        $this->load->view('template/footer_index');
    }
    public function History() {
        $this->load->view('template/head_index');
        $data["Moviles"] = $this->Moviles_model->history();
        $this->load->view('Moviles_history', $data);
        $this->load->view('template/footer_index');
    }
}


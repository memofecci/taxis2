<?php

class Carreras extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Operadoras_model');
        $this->load->model('Carreras_model');
        $this->load->model('Moviles_model');
        $this->load->model('Choferes_model');
        $this->load->model('Clientes_model');
        $this->load->helper('url');
        $this->load->library('session');
        if ($this->session->userdata('login')) {
            
        } else {
            redirect(base_url() . "index.php/logins");
        }
    }

    public function index() {
        $this->load->view('template/head_index');
        $data["Carreras"] = $this->Carreras_model->list_all();
        $this->load->view('Carreras_index', $data);
        $this->load->view('template/footer_index');
    }
    public function nuevo() {
        $this->load->view('template/head_index');
        $data["Operadoras"]=  $this->Operadoras_model->list_all();
        $data["Moviles"]=  $this->Moviles_model->list_all();
        $data["Clientes"]=  $this->Clientes_model->list_all();
        $this->load->view('Carrera_nuevo',$data);
        $this->load->view('template/footer_index');
    }
    public function save() {
        $this->load->view('template/head_index');
        $pasajero = $this->input->post('pasajero');
        $direccion = $this->input->post('direccion');
        $observacion=  $this->input->post('observacion');
        $movil_id=  $this->input->post('movil_id');
        $operadora_id=  $this->input->post('operadora_id');
        $clientes_id=  $this->input->post('clientes_id');
        $this->Carreras_model->save($pasajero, $direccion, $observacion, $movil_id,$operadora_id, $clientes_id);
        redirect('carreras');
        $this->load->view('template/footer_index');
    }
    public function detail($carrera_id) {
        $this->load->view('template/head_index');
         $data["Operadoras"]=  $this->Operadoras_model->list_all();
        $data["Moviles"]=  $this->Moviles_model->list_all();
        $data["Carreras"]=  $this->Carreras_model->find_by_id($carrera_id);
        $this->load->view('Carreras_detail',$data);
        $this->load->view('template/footer_index');
    }
    public function edit($carrera_id){
        $this->load->view('template/head_index');
        $data["Carreras"]=  $this->Carreras_model->find_by_id($carrera_id);
        $this->load->view('Carreras_edit', $data);
        $this->load->view('template/footer_index');
    }
    public function update(){
        $this->load->view('template/head_index');
        $carrera_id=  $this->input->post('carrera_id');
        $horainicio=  $this->input->post('horainicio');
        $valor = $this->input->post('valor');
        $observacion=  $this->input->post('observacion');
        $this->Carreras_model->edit($carrera_id,$horainicio, $valor, $observacion);
        redirect('carreras');
        $this->load->view('template/footer_index');
    }
    public function History() {
        $this->load->view('template/head_index');
        $data["Operadoras"]=  $this->Operadoras_model->list_all();
        $data["Moviles"]=  $this->Moviles_model->list_all();
        $data["Clientes"]=  $this->Clientes_model->list_all();
        $data["Carreras"] = $this->Carreras_model->history();
        $this->load->view('Carreras_history', $data);
        $this->load->view('template/footer_index');
    }
    public function buscar() {
        $this->load->view('template/head_index');
        if ($_POST) {
            $buscar = $this->input->post('buscar');
        } else {
            $buscar = '';
        }
        $data["Carreras"] = $this->Carreras_model->buscar_carreras($buscar);
        $this->load->view('Carreras_buscar', $data);
        $this->load->view('template/footer_index');
    }
    

}

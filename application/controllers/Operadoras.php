<?php

class Operadoras extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('Operadoras_model');
        $this->load->helper('url');
        $this->load->library('session');
        if ($this->session->userdata('login')) {
            
        } else {
            redirect(base_url() . "index.php/logins");
        }
    }
    public function index() {
        $this->load->view('template/head_index');
        $data["Operadoras"] = $this->Operadoras_model->list_all();
        $this->load->view('Operadoras_index', $data);
        $this->load->view('template/footer_index');
    }
     public function nuevo() {
        $this->load->view('template/head_index');
        $this->load->view('Operadoras_nuevo');
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
        $username=  $this->input->post('username');
        $password=  $this->input->post('password');
        $salida= password_hash($password, PASSWORD_DEFAULT);//condicion para encriptar
        $this->Operadoras_model->save($rut, $nombre, $apepat, $apemat, $direccion, $celular,$username,$salida);
        redirect('Operadoras');
        $this->load->view('template/footer_index');
    }
     public function detail($operadora_id) {
        $this->load->view('template/head_index');
        $data["Operadoras"]=  $this->Operadoras_model->find_by_id($operadora_id);
        $this->load->view('Operadoras_detail',$data);
        $this->load->view('template/footer_index');
    }
    public function edit($operadora_id){
        $this->load->view('template/head_index');
        $data["Operadoras"]=  $this->Operadoras_model->find_by_id($operadora_id);
        $this->load->view('Operadora_edit', $data);
        $this->load->view('template/footer_index');
    }
    public function update(){
        $operadora_id=  $this->input->post('operadora_id');
        $rut = $this->input->post('rut');
        $nombre = $this->input->post('nombre');
        $apepat = $this->input->post('apepat');
        $apemat = $this->input->post('apemat');
        $direccion = $this->input->post('direccion');
        $celular = $this->input->post('celular');
        $username = $this->input->post('username');
        $password = $this->input->post('passsword');
        $salida= password_hash($password, PASSWORD_DEFAULT);
        $estado=  $this->input->post('estado');
        $this->Operadoras_model->edit($operadora_id, $rut, $nombre, $apepat, $apemat, $direccion, $celular,$username, $salida, $estado);
        redirect('Operadoras');
    }
    public function buscar() {
        $this->load->view('template/head_index');
        if ($_POST) {
            $buscar = $this->input->post('buscar');
        } else {
            $buscar = '';
        }
        $data["Operadoras"] = $this->Operadoras_model->buscar_operadoras($buscar);
        $this->load->view('Operadoras_buscar', $data);
        $this->load->view('template/footer_index');
    }
    public function History() {
        $this->load->view('template/head_index');
        $data["Operadoras"] = $this->Operadoras_model->history();
        $this->load->view('Operadoras_history', $data);
        $this->load->view('template/footer_index');
    }
    
    
}


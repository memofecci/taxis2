<?php

class Clientes extends CI_Controller {

    public function __construct() {
        parent::__construct();
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
        $data["Clientes"] = $this->Clientes_model->list_all();
        $this->load->view('Cliente_index', $data);
        $this->load->view('template/footer_index');
    }

    public function nuevo() {
        $this->load->view('template/head_index');
        $this->load->view('Clientes_nuevo');
        $this->load->view('template/footer_index');
    }

    public function save() {
        $this->load->view('template/head_index');
        $nombre = $this->input->post('nombre');
        $direccion = $this->input->post('direccion');
        $telefono = $this->input->post('telefono');
        $this->Clientes_model->save($nombre, $direccion, $telefono);
        redirect('clientes');
        $this->load->view('template/footer_index');
    }

    public function detail($clientes_id) {
        $this->load->view('template/head_index');
        $data["Clientes"] = $this->Clientes_model->find_by_id($clientes_id);
        $this->load->view('Clientes_detail', $data);
        $this->load->view('template/footer_index');
    }

    public function edit($clientes_id) {
        $this->load->view('template/head_index');
        $data["Clientes"] = $this->Clientes_model->find_by_id($clientes_id);
        $this->load->view('Clientes_edit', $data);
        $this->load->view('template/footer_index');
    }

    public function update() {
        $clientes_id = $this->input->post('clientes_id');
        $nombre = $this->input->post('nombre');
        $direccion = $this->input->post('direccion');
        $telefono = $this->input->post('telefono');
        $estado = $this->input->post('estado');
        $this->Clientes_model->edit($clientes_id, $nombre, $direccion, $telefono, $estado);
        redirect('Clientes');
    }

    public function buscar() {
        $this->load->view('template/head_index');
        if ($_POST) {
            $buscar = $this->input->post('buscar');
        } else {
            $buscar = '';
        }
        $data["Clientes"] = $this->Clientes_model->buscar_clientes($buscar);
        $this->load->view('Clientes_buscar', $data);
        $this->load->view('template/footer_index');
    }
    public function History() {
        $this->load->view('template/head_index');
        $data["Clientes"] = $this->Clientes_model->history();
        $this->load->view('Clientes_history', $data);
        $this->load->view('template/footer_index');
    }

}

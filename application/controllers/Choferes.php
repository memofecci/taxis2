<?php

class Choferes extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Choferes_model');
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->library('html2pdf');
        if ($this->session->userdata('login')) {
            
        } else {
            redirect(base_url() . "index.php/logins");
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
    public function History() {
        $this->load->view('template/head_index');
        $data["Choferes"] = $this->Choferes_model->history();
        $this->load->view('Choferes_history', $data);
        $this->load->view('template/footer_index');
    }
    private function createFolder() {
        if (!is_dir("./files")) {
            mkdir("./files", 0777);
            mkdir("./files/pdfs", 0777);
        }
    }

    public function indexPDF() 
    {
        $this->createFolder();
        $this->html2pdf->folde('./files/pdfs/');
        $this->html2pdf->filename('conductores.pdf');
        $this->html2pdf->paper('a4', 'portrait');
        $data = array(
            'title' => 'Listado de Conductores',
            'Choferes' => $this->Choferes_model->getChoferes()
        );
        $this->html2pdf->html(utf8_decode($this->load->view('choferes_index', $data, true)));
        if($this->html2pdf->create('save')) 
        {
            $this->show();
        }
    }
     public function downloadPdf()
    {
        if(is_dir("./files/pdfs"))
        {
            $route = base_url("files/pdfs/conductores.pdf"); 
            $filename = "conductores.pdf"; 
            if(file_exists("./files/pdfs/".$filename))
            {
                header("Cache-Control: public"); 
                header("Content-Description: File Transfer"); 
                header('Content-disposition: attachment; filename='.basename($route)); 
                header("Content-Type: application/pdf"); 
                header("Content-Transfer-Encoding: binary"); 
                header('Content-Length: '. filesize($route)); 
                readfile($route);
            }
        }    
    }
    public function show()
    {
        if(is_dir("./files/pdfs"))
        {
            $filename = "conductores.pdf"; 
            $route = base_url("files/pdfs/conductores.pdf"); 
            if(file_exists("./files/pdfs/".$filename))
            {
                header('Content-type: application/pdf'); 
                readfile($route);
            }
        }
    }
    public function mail_pdf()
    {
        $this->createFolder();
        $this->html2pdf->folde('./files/pdfs/');
        $this->html2pdf->filename('conductores.pdf');
        $this->html2pdf->paper('a4', 'portrait');
        $data = array(
            'title' => 'Listado de Conductores',
            'Choferes' => $this->Choferes_model->getChoferes()
        );
        $this->html2pdf->html(utf8_decode($this->load->view('pdf', $data, true)));
        if($path = $this->html2pdf->create('save')) 
        {
 
            $this->load->library('email');
 
            $this->email->from('your@example.com', 'Your Name');
            $this->email->to('guillermo.fecci@gmail.com'); 
            
            $this->email->subject('Email PDF Test');
            $this->email->message('Listado Conductores');    
 
            $this->email->attach($path);
 
            $this->email->send();
            
            echo "El email ha sido enviado correctamente";
                        
        }
        
    } 

}

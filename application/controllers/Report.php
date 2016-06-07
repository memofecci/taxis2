<?php

class Report extends CI_Controller{
    public function __construct() {
        parent::__construct();
    }
    public function rptUser(){
        $this->load->view('rptusers_view');
        $html=  $this->output->get_output();
        $this->load->library('dompdf_gen');
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("rptuser.pdf");
    }
}


<?php

class Encriptar extends CI_Controller{
    public function __construct() {
        parent::__construct();
        
    }
    public function index(){
        $nombre='Guillermo';
        $salida= password_hash($nombre, PASSWORD_DEFAULT);
        echo $salida;
    }
}


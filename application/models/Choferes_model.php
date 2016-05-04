<?php

class Choferes_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function list_all() {
        $query = $this->db->query("select * from Choferes");
        $result = $query->result_object();
        $this->db->close();
        return $result;
    }

    public function save($rut, $nombre, $apepat, $apemat, $direccion, $celular) {
        // $this->db->query("insert into choferes(rut, nombre, apepat, apemat, direccion, celular ) values ('".$rut."',".$nombre."','".$apepat."','".$apemat."','".$direccion."','".$celular."')");
        $this->db->query("insert into choferes(rut, nombre, apepat, apemat, direccion, celular) values ('" . $rut . "','" . $nombre . "','" . $apepat . "','" . $apemat . "','" . $direccion . "','" . $celular . "')");
        $this->db->close();
    }

}

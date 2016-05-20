<?php

class Operadoras_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function list_all() {
        $query = $this->db->query("select * from Operadoras where estado=1");//muestra todos los choferes en estado 1
        $result = $query->result_object();
        $this->db->close();
        return $result;
    }
    public function save($rut, $nombre, $apepat, $apemat, $direccion, $celular, $username, $salida) {
        $this->db->query("insert into operadoras(rut, nombre, apepat, apemat, direccion, celular, username, password, estado) values ('" . $rut . "','" . $nombre . "','" . $apepat . "','" . $apemat . "','" . $direccion . "','" . $celular . "','".$username."','".$salida."',1)");//guarda automaticamente estado 1
        $this->db->close();
    }
    public function find_by_id($operadora_id){
        $query=  $this->db->query("select * from Operadoras where operadora_id='".$operadora_id."'");
        $result=$query->result_object();
        $this->db->close();
        return $result;
    }
    public function edit($operadora_id,$rut, $nombre, $apepat, $apemat, $direccion, $celular,$username, $salida,$estado){
        $this->db->query("update operadoras set rut='".$rut."',nombre='".$nombre."',apepat='".$apepat."',apemat='".$apemat."',direccion='".$direccion."',celular='".$celular."',username='".$username."',password='".$salida."', estado='".$estado."' where operadora_id='".$operadora_id."'");
        $this->db->close();
    }
    public function buscar_operadoras($buscar){
        $this->db->like('operadora_id',$buscar);
        $this->db->or_like('rut',$buscar);
        $this->db->or_like('nombre',$buscar);
        $this->db->or_like('apepat',$buscar);
        $this->db->or_like('apemat',$buscar);
        $this->db->or_like('direccion',$buscar);
        $this->db->or_like('celular',$buscar);
        $this->db->or_like('username',$buscar);
        $this->db->or_like('password',$buscar);
        $query=  $this->db->get('operadoras');
        $this->db->close();
        return $query->result();
    }
    public function history() {
        $query = $this->db->query("select * from operadoras where estado=0");
        $result = $query->result_object();
        $this->db->close();
        return $result;
    }
}


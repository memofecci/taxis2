<?php

class Clientes_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function list_all() {
        $query = $this->db->query("select * from clientes where estado=1");//muestra todos los choferes en estado 1
        $result = $query->result_object();
        $this->db->close();
        return $result;
    }
    public function save($nombre, $direccion, $telefono) {
        $this->db->query("insert into clientes(nombre, direccion, telefono, estado) values ('" . $nombre . "','" . $direccion . "','" . $telefono. "',1)");//guarda automaticamente estado 1
        $this->db->close();
    }
    public function find_by_id($clientes_id){
        $query=  $this->db->query("select * from Clientes where clientes_id='".$clientes_id."'");
        $result=$query->result_object();
        $this->db->close();
        return $result;
    }
    public function edit($clientes_id, $nombre, $direccion, $telefono, $estado){
        $this->db->query("update Clientes set nombre='".$nombre."', direccion='".$direccion."', telefono='".$telefono."', estado='".$estado."' where clientes_id='".$clientes_id."'");
        $this->db->close();
    }
    public function buscar_clientes($buscar){
        $this->db->like('clientes_id',$buscar);
        $this->db->or_like('nombre',$buscar);
        $this->db->or_like('direccion',$buscar);
        $this->db->or_like('telefono',$buscar);
        $query=  $this->db->get('clientes');
        $this->db->close();
        return $query->result();
    }
    public function history() {
        $query = $this->db->query("select * from clientes where estado=0");
        $result = $query->result_object();
        $this->db->close();
        return $result;
    }
}

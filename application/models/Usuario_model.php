<?php

class usuario_model extends CI_model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    //mostrar usuarios
    public function list_all(){
        $query=$this->db->query("select usuarios.usuario_id, usuarios.nombre, usuarios.apepat, ciudades.nombre as nomciudad from usuarios,ciudades where usuarios.ciudad_id=ciudades.ciudad_id");
        $result=$query->result_object();
        $this->db->close();
        return $result;
    }
    //guardar usuairos
    public function save($nombre,$apepat,$ciudad_id){
        $this->db->query("insert into usuarios(nombre,apepat,ciudad_id) values ('".$nombre."','".$apepat."','".$ciudad_id."')");
        $this->db->close();
        
    }
    public function delete($usuario_id){
        $this->db->query("delete from usuarios where usuario_id='".$usuario_id."'");
        $this->db->close();
    }
    public function edit($usuario_id,$nombre,$apepat,$ciudad_id){
        $this->db->query("update Usuarios set nombre='".$nombre."',apepat='".$apepat."',ciudad_id='".$ciudad_id."' where usuario_id='".$usuario_id."'");
        $this->db->close();
    }

    public function find_by_id($usuario_id){
        $query=$this->db->query("select * from usuarios where usuario_id='".$usuario_id."'");
        $result=$query->result_object();
        $this->db->close();
        return $result;
    }
}


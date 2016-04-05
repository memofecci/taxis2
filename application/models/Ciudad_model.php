<?php

class Ciudad_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function list_all(){
        $query=$this->db->query("select * from ciudades");
        $result=$query->result_object();
        $this->db->close();
        return $result;
    }
    public function save($nombre){
        $this->db->query("insert into ciudades(nombre) values ('".$nombre."')");
        $this->db->close();
        
    }
    public function delete($ciudad_id){
        $this->db->query("delete from ciudades where ciudad_id='".$ciudad_id."'");
        $this->db->close();
    }
    public function find_by_id($ciudad_id){
        $query=$this->db->query("select * from ciudades where ciudad_id='".$ciudad_id."'");
        $result=$query->result_object();
        $this->db->close();
        return $result;
    }
}


<?php

class Logins_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function validar($username, $password){
        $query=  $this->db->query("select * from Usuarios where username='".username."'");
        $result=$query->result_object();
        $this->db->close();
        foreach ($result as $usuario){
            if ($usuario->password==$password){
                return true;
                
            }else{
                return false;
            }
        }
    }
}


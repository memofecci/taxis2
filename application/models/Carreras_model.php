<?php

class Carreras_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function list_all() {
        $query = $this->db->query("select * from carreras where estado=1");//muestra todos los choferes en estado 1
        $result = $query->result_object();
        $this->db->close();
        return $result;
    }
    public function save($pasajero, $direccion, $observacion, $movil_id, $operadora_id, $clientes_id ) {
        $this->db->query("insert into Carreras (pasajero, direccion, horainicio, horatermino, estado, observacion, movil_id, operadora_id, clientes_id) values ('".$pasajero."','".$direccion."',now(), null,1,'".$observacion."','".$movil_id."','".$operadora_id."','".$clientes_id."')");//guarda automaticamente estado 1
        $this->db->close();
    }
    public function find_by_id($carrera_id){
        $query=  $this->db->query("select * from Carreras where carrera_id='".$carrera_id."'");
        $result=$query->result_object();
        $this->db->close();
        return $result;
    }
    public function edit($carrera_id, $horainicio, $valor, $observacion){
        $this->db->query("update carreras set horainicio='".$horainicio."', horatermino=now(), valor='".$valor."', observacion='".$observacion."', estado=0 where carrera_id='".$carrera_id."'     ");
        //$this->db->query("update carreras set horainicio='".$horainicio."' horatermino=now(), valor='".$valor."' observacion='".$observacion."', estado=0 where carrera_id='".$carrera_id."'");
        $this->db->close();
    }
    public function history() {
        $query = $this->db->query("select * from carreras where estado=0");
        $result = $query->result_object();
        $this->db->close();
        return $result;
    }
    public function buscar_carreras($buscar){
        $this->db->like('carrera_id',$buscar);
        $this->db->or_like('pasajero',$buscar);
        $this->db->or_like('direccion',$buscar);
        $this->db->or_like('horainicio',$buscar);
        $this->db->or_like('horatermino',$buscar);
        $this->db->or_like('valor',$buscar);
        $this->db->or_like('observacion',$buscar);
        $this->db->or_like('movil_id',$buscar);
        $this->db->or_like('operadora_id',$buscar);
        $this->db->or_like('clientes_id',$buscar);
        $query=  $this->db->get('carreras');
        $this->db->close();
        return $query->result();
    }
}


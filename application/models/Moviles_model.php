<?php

class Moviles_model extends CI_Model{
    public function __construct() {
        parent::__construct();
         $this->load->database();
    }
    public function list_all() {
        $query = $this->db->query("select * from Moviles where estado=1");//muestra todos los choferes en estado 1
        $result = $query->result_object();
        $this->db->close();
        return $result;
    }
    public function save($numero, $patente1, $chofer_id) {
        $this->db->query("insert into Moviles(numero, patente, chofer_id, estado) values ('".$numero."','".$patente1."','".$chofer_id."',1)");//guarda automaticamente estado 1
        $this->db->close();
    }
    public function find_by_id($movil_id){
        $query=  $this->db->query("select m.movil_id, m.numero, m.patente, c.nombre from moviles m, choferes c  where m.chofer_id=c.chofer_id and m.movil_id='".$movil_id."';");
        //$query=  $this->db->query("select m.movil_id, m.numero, m.patente, c.nombre from choferes c, moviles m where c.chofer_id='".$movil_id."'");
        $result=$query->result_object();
        $this->db->close();
        return $result;
    }
    public function edit($movil_id,$numero, $patente1, $chofer_id,$estado){
       // $this->db->query("update moviles set numero='".$numero."',patente='".$patente1."',chofer_id='".$chofer_id."', estado='".$estado."' where movil_id='".$movil_id."'");
        $this->db->query("update moviles set numero='".$numero."',patente='".$patente1."',chofer_id='".$chofer_id."', estado='".$estado."' where movil_id='".$movil_id."'");
        $this->db->close();
    }
    public function buscar_moviles($buscar){
        $this->db->like('movil_id',$buscar);
        $this->db->or_like('numero',$buscar);
        $this->db->or_like('patente',$buscar);
        $this->db->or_like('chofer_id',$buscar);
        $query=  $this->db->get('moviles');
        $this->db->close();
        return $query->result();
    }
    public function history() {
        $query = $this->db->query("select * from moviles where estado=0");
        $result = $query->result_object();
        $this->db->close();
        return $result;
    }
}


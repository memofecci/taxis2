 <?php

class Choferes_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function list_all() {
        $query = $this->db->query("select * from Choferes where estado=1");//muestra todos los choferes en estado 1
        $result = $query->result_object();
        $this->db->close();
        return $result;
    }
    public function save($rut, $nombre, $apepat, $apemat, $direccion, $celular) {
        // $this->db->query("insert into choferes(rut, nombre, apepat, apemat, direccion, celular ) values ('".$rut."',".$nombre."','".$apepat."','".$apemat."','".$direccion."','".$celular."')");
        $this->db->query("insert into choferes(rut, nombre, apepat, apemat, direccion, celular, estado) values ('" . $rut . "','" . $nombre . "','" . $apepat . "','" . $apemat . "','" . $direccion . "','" . $celular . "',1)");//guarda automaticamente estado 1
        $this->db->close();
    }
    public function find_by_id($chofer_id){
        $query=  $this->db->query("select * from Choferes where chofer_id='".$chofer_id."'");
        $result=$query->result_object();
        $this->db->close();
        return $result;
    }
    public function edit($chofer_id,$rut, $nombre, $apepat, $apemat, $direccion, $celular,$estado){
        $this->db->query("update choferes set rut='".$rut."',nombre='".$nombre."',apepat='".$apepat."',apemat='".$apemat."',direccion='".$direccion."',celular='".$celular."', estado='".$estado."' where chofer_id='".$chofer_id."'");
        //$this->db->query("update choferes set rut='".$rut."',nombre='".$nombre."',apepat='" . $apepat . "', apemat='" . $apemat . "', direccion='" . $direccion . "',celular='" . $celular . "',estado='".$estado."' where chofer_id='".$chofer_id."'");
        $this->db->close();
    }
    public function buscar_choferes($buscar){
        $this->db->like('chofer_id',$buscar);
        $this->db->or_like('rut',$buscar);
        $this->db->or_like('nombre',$buscar);
        $this->db->or_like('apepat',$buscar);
        $this->db->or_like('apemat',$buscar);
        $query=  $this->db->get('choferes');
        $this->db->close();
        return $query->result();
    }
    public function history() {
        $query = $this->db->query("select * from choferes where estado=0");
        $result = $query->result_object();
        $this->db->close();
        return $result;
    }
    public function getChoferes(){
        
        $query=  $this->db->get('choferes');
        $this->db->close();
        return $query->result();
    }

}

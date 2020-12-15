<?php
class Detail_model extends CI_model{
    public function getDetailLaporan(){
        // return $this->db->get('simple_lapor')->result_array();
        $id = $_GET["detail_id"];
        // return "SELECT * FROM simple_lapor WHERE id_lapor= '$id'";
        // return $this->db->get('simple_lapor')->result_array();
        $query = $this->db->get_where('simple_lapor', array('id_lapor' => $id));
        return $query->result_array();
    }
   
}

?>
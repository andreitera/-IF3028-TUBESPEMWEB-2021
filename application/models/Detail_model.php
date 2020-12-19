<?php
class Detail_model extends CI_model{
    public function getDetailLaporan(){
        $id = $_GET["detail_id"];
        $query = $this->db->get_where('tb_laporan', array('id_lapor' => $id));
        return $query->result_array();
    }
   
}

?>

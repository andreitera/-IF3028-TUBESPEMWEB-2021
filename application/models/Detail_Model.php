<?php
  class Detail_Model extends CI_model{
    public function __construct(){
      $this->load->database();
    }

    public function getAllLapor($id = FALSE){
      if($id===FALSE){
        $query = $this->db->get('laporan');
        return $query->result_array();
      }
        $query = $this->db->get_where('laporan', array('id_laporan'=>$id));
        return $query->row_array();
    }

    public function input_laporan($table, $data){
      $this->db->insert($table, $data);
    }
    public function hapus_laporan($where, $table){
      $this->db->where($where);
      $this->db->delete($table);
    }
    public function update_data($update_row, $data, $table){
      $this->db->where($update_row);
      $this->db->update($table, $data);
    }
  }
 ?>

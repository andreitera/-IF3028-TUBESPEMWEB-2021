<?php

class Beranda_model extends CI_model {
  public function getAllLapor() {
     return $this->db->get('laporan')->result_array();
  }
  public function getCari($keyword, $table)
  {
    $this->db->like('kolom_komentar',$keyword);
    $query = $this->db->get($table);
    return $query->result_array();
  }
}
 ?>

<?php
class m_lapor extends CI_Model{
   function tampil_lapor(){
     return $this->db->get('lapor');
   }

  function simpan_lapor($laporan){
    $this->db->insert('lapor',$laporan);
  }

  function tampil_detail($id){
    return $this->db->get_where('lapor', array('id' => $id));
  }

  function edit_lapor($id,$data){
    $this->db->where(array('id' => $id));
    $this->db->update('lapor',$data);
  }

  function hapus_data($data,$table){
    $this->db->where($data);
    $this->db->delete($table);
  }
}
?>
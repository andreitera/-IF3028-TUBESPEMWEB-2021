<?php
class Delete_model extends CI_model{
    public function getHapusLaporan(){

        $id = $_GET["hapus_id"];
       
        $this->db->delete('tb_laporan', array('id_lapor' => $id));
        echo "<script>alert('data terhapus');</script>";
        echo "<script>location='home';</script>"; 
     
     

       
    }
   
}

?>
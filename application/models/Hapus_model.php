<?php
class Hapus_model extends CI_model{
    public function getHapusLaporan(){

        $id = $_GET["hapus_id"];
       
        $this->db->delete('simple_lapor', array('id_lapor' => $id));
        echo "<script>alert('data terhapus');</script>";
        echo "<script>location='home';</script>"; 
     
     

       
    }
   
}

?>
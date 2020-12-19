<?php
class Ubah_model extends CI_model{
    public function getUbahLaporan(){
        $id = $_GET["ubah_id"];
        $query = $this->db->get_where('simple_lapor', array('id_lapor' => $id));
        return $query->result_array();
        
    }
    public function updateLaporan(){
        $id = $_GET["ubah_id"];

        $ekstensi_diperbolehkan	= array('doc','docx','xls','xlsx','ppt','pptx','pdf');
        $file = $_FILES['myFile']['name'];
        $x = explode('.', $file);
        $ekstensi = strtolower(end($x));
        $ukuran	= $_FILES['myFile']['size'];
        $file_tmp = $_FILES['myFile']['tmp_name'];
        
        move_uploaded_file($file_tmp, 'assets/file/'.$file);
    date_default_timezone_set("Asia/Jakarta");
    $now = date("Y-m-d H:i:s");
    
    $data = [ 
        "laporan" => $this->input->post('laporan',true),
        "lampiran" => $file,
        "waktu" => $now,
        "aspek" => $this->input->post('aspek',true)
    ];


    $this->db->update('simple_lapor', $data, array('id_lapor' => $id));
    echo "<script>alert('Berhasil di ubah');</script>";
    echo "<script>location='home';</script>";
    }
   
}

?>
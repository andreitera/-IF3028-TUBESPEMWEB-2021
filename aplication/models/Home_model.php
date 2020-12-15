<?php
class Home_model extends CI_model{
    public function getAllHome(){
        // return $this->db->get('simple_lapor',)->result_array();
        
        $this->db->order_by("id_lapor", "desc");
        return $this->db->get('simple_lapor',4)->result_array();
        // $query = $this->db->get(); 
         
        // return $query->result();
    }
    public function tambahLaporan()
    {
  
			$ekstensi_diperbolehkan	= array('doc','docx','xls','xlsx','ppt','pptx','pdf');
			$file = $_FILES['myFile']['name'];
			$x = explode('.', $file);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['myFile']['size'];
            $file_tmp = $_FILES['myFile']['tmp_name'];
            
            move_uploaded_file($file_tmp, 'assets/file/'.$file);

          

        date_default_timezone_set("Asia/Jakarta");
        // $tgl = date("Y/m/d H:i:s");
        $now = date("Y-m-d H:i:s");
        
        $data = [ 
            "laporan" => $this->input->post('laporan',true),
            "lampiran" => $file,
            "waktu" => $now,
            "aspek" => $this->input->post('aspek',true)
        ];
   

        $this->db->insert('simple_lapor', $data);
        echo "<script>alert('Berhasil di buat');</script>";
        echo "<script>location='home';</script>";
      
    }
}

?>
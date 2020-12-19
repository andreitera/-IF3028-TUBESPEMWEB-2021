<?php
    class M_data extends CI_model {
        function tampil_data(){
            return $this->db->get('lapor');
        }

        function input_data($data, $table){
            $this->db->insert($table,$data);
        }
        
        function hapus_data($where,$table){
            $this->db->where($where);
            $this->db->delete($table);
        }

        function edit_data($where, $table){
            return $this->db->get_where($table,$where);
        }

        function update($where,$data,$table){
            $this->db->where($where);
            $this->db->update($table,$data);
        }

        public function getUbahLaporan(){
            $id = $_GET["ubah_id"];
            $query = $this->db->get_where('lapor', array('id' => $id));
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
            "isi" => $this->input->post('isi',true),
            "lampiran" => $file,
            "waktu" => $now,
            "aspek" => $this->input->post('aspek',true)
        ];
    
    
        $this->db->update('lapor', $data, array('id' => $id));
        // echo "<script>alert('Berhasil di ubah');</script>";
        // echo "<script>location='home';</script>";
        }
        
    }
?>
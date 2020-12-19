<?php 

class Lapor_db extends CI_model{

    public function getLaporan()
    {
        return $this->db->get('lapor')->result_array();
    }

    public function tambahdata()
    {
        date_default_timezone_set('Asia/Jakarta');
        $tanggal=date("Y-m-d H:i:s");

        $file=$_FILES['File'];
        if($file='')
        {

        }
        else
        {
            $config['upload_path']='./asset/upload-file';
            $config['allowed_types'] = 'pdf|doc|docx|xls|xlsx|ppt|pptx';
            
            $this->load->library('upload', $config);

            if(!$this->upload->do_upload('File')){
				echo "gagal";
			}else{
				$file=$this->upload->data('file_name');
			}

        }
        $data = 
        [
            'isi'=>$this->input->POST('isi'),
            'aspek'=>$this->input->POST('aspek'),
            'file'=>$file,
            'tanggal'=>$tanggal
        ];
        $this->db->insert('lapor', $data);

    }

    public function search($search){
		$this->db->like('isi', $search);
		$this->db->or_like('tanggal', $search);
		$this->db->or_like('aspek', $search);

		return $this->db->get('lapor')->result_array();
    }
    
    public function detail($id){
		return $this->db->get_where('lapor', array('id'=>$id))->row_array();
	}	
    
    public function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('lapor');
    }
    
    public function ubah($id){
		
		//validasi form
		$this->form_validation->set_rules('isi', 'Isi', 'required|min_length[250]');
		if($this->form_validation->run() == FALSE){
			$data['aspek'] = ['Dosen','Mahasiswa','Staff'];
			$data['lapor'] = $this->Lapor_db->detail($id);
			$this->load->view('ubah/index', $data);
			//redirect("index.php/Home/detail2/$id");
			
		}else{
			$this->Lapor_db->ubah($id);
			echo "
				<script>
					alert('berhasil update data');
					document.location.href='../';
				</script>
				";
		}
		
	}
    
}
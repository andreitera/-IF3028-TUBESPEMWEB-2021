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
    
}
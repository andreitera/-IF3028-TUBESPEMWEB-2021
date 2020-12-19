<?php
class input_form extends CI_Model{
    public function __construct(){
        $this->load->database();
    }   
    
    public function do_upload(){
        $config['upload_path'] = './images/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size']  = '2048';
        $config['remove_space'] = TRUE;
      
        $this->load->library('upload', $config); 

        if($this->upload->do_upload('lampiran')){ 
          $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
          return $return;
        }else{
          $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
          return $return;
        }
      }
    
    public function create($upload) 
    {
        $data = array(
            'judul' => $this->input->post('judul'),
            'kolom_komentar' => $this->input->post('komen'),
            'lampiran' => $upload['file']['file_name'],
            'aspek_pelaporan' => $this->input->post('pilihan')
          );

          return $this->db->insert('laporan', $data);
    }
}
?>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index(){
        $this->load->view('home');
    }

    function lapor(){
        $this->load->view('lapor');
    }
}

public function ubah($id){
		
    //validasi form
    $this->form_validation->set_rules('isi', 'Isi', 'required|min_length[250]');
    if($this->form_validation->run() == FALSE){
        $data['aspek'] = ['','','','',''];
        $data['lapor'] = $this->Lapor_model->detail($id);
        $this->load->view('tampilan_ubah',$data);
        //redirect("index.php/Home/detail2/$id");
        
    }else{
        $this->Lapor_model->ubah($id);
        echo "
            <script>
                alert('berhasil mengubah data');
                document.location.href='../';
            </script>
            ";
    }
    
}

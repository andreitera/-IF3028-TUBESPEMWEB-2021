<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Update extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('model_data');
        $this->load->helper(array('form', 'url'));
        $this->load->library('upload');
        $this->load->library('form_validation');
    }
    
    public function index()
    {
        $data ['ubah'] = $this->model_data->ubahLaporan();
       
        $this->form_validation->set_rules('laporan','Laporan','required');
        $this->form_validation->set_rules('aspek','Aspek','required');
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('judul','Judul','required');

        if($this->form_validation->run() == FALSE){
            $this->load->view('tampilan_update',$data);
        }
        else{
            $this->model_data->updateLaporan();
         
        }
    }

    
}

?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ubah extends CI_Controller{
  public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelData');
        $this->load->helper(array('form', 'url'));
        $this->load->library('upload');
        $this->load->library('form_validation');
    }
    
    public function index()
    {
        $data ['ubah'] = $this->ModelData->ubahLaporan();
       
        $this->form_validation->set_rules('laporan','Laporan','required');
        $this->form_validation->set_rules('aspek','Aspek','required');
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('judul','Judul','required');

        if($this->form_validation->run() == FALSE){
            $this->load->view('tampilanUbah', $data);
        }
        else{
            $this->ModelData->updateLaporan();
         
        }
    }
}

?>
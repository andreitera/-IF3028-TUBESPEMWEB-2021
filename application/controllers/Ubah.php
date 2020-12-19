<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Ubah extends CI_Controller{

    public function index()
    {

        $data ['judul'] = 'Ubah Laporan';
        $this->load->view('ubah/index',$data);

    }

    
}

?>
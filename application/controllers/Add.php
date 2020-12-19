<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Add extends CI_Controller{

    public function index()
    {
            $data ['judul'] = 'Buat Laporan';
            $this->load->view('buat_laporan/index',$data);
    }


}

?>
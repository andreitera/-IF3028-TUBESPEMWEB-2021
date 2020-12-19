<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Detail extends CI_Controller{
    
    public function index()
    {
        $data ['judul'] = 'Detail Laporan';
        $this->load->view('detail/index',$data);
     
    }
}

?>
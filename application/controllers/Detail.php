<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Detail extends CI_Controller{
    
    public function __construct()
	{
		parent::__construct();
        $this->load->model('Model_lapor');
		
	}
    
    public function index()
    {
        $data ['judul'] = 'Detail Laporan';
        $data ['detail'] = $this->Model_lapor->getDetailLaporan();
        $this->load->view('detail/index',$data);
     
    }
}

?>
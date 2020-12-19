<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Detail extends CI_Controller{
    public function __construct()
	{
		parent::__construct();
        $this->load->model('Detail_model');
		
	}
    
    public function index()
    {
        $data ['judul'] = "Tugas Besar PWB 118140048-118140103-118140105"; 
        $data ['detail'] = $this->Detail_model->getDetailLaporan();
        $this->load->view('detail/index',$data);
     
    }
}

?>

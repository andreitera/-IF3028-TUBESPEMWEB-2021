<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Detail extends CI_Controller{
    public function __construct()
	{
		parent::__construct();
        $this->load->model('ModelData');
		
	}
    
    public function index()
    {
        $data ['detail'] = $this->ModelData->detailLaporan();
        $this->load->view('tampilanDetail',$data);
     
    }
}

?>
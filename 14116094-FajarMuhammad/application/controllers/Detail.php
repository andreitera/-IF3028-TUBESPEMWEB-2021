<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Detail extends CI_Controller{
    public function __construct()
	{
		parent::__construct();
        $this->load->model('model_data');
		
	}
    
    public function index()
    {
        $data ['detail'] = $this->model_data->detailLaporan();
        $this->load->view('tampilan_detail',$data);
     
    }
}

?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buat extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
        $this->load->model('Home_model');
        $this->load->library('form_validation');
        $this->load->library('upload');
        $this->load->helper(array('form', 'url'));
        
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->form_validation->set_rules('laporan','Laporan','required');
        $this->form_validation->set_rules('aspek','Aspek','required');
        
        if($this->form_validation->run() == FALSE){
            $data ['judul'] = 'Buat Laporan';
            $this->load->view('v_tambah',$data);
        }
        else{
            $this->Home_model->tambahLaporan();
            redirect('home');
        }
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller{
	public function __construct(){
        parent ::__construct();
        $this->load->model('berita_model'); 
    }

	public function index()
	{
		$this->load->view('laporan');
	}

	public function delete($id_laporan)
	{
		$berita=$this->berita_model->detail($id_laporan);
		if($berita->file != ""){
			unlink('./asset/file/'.$berita->file);
		}
		$data = array('id_laporan' => $berita->id_laporan);
		$this->berita_model->delete($data);
		$this->session->set_flashdata('sukses','data telah dihapus');
		redirect(base_url('home'),'refresh');		
	}
}

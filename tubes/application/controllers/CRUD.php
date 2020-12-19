<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CRUD extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('model_input');
	}
	public function add() {
		date_default_timezone_set('Asia/jakarta'); 
		$data['title']='Buat Laporan';
		$isi	= $this->input->post('isi');
		$aspek	= $this->input->post('aspek');
		$waktu	= date('Y-m-d H:i:s');
		$samaran = "Anonymous";

		$config['upload_path']          = 'upload/file/';
		$config['allowed_types']        = 'doc|docx|xls|xlsx|ppt|pptx|pdf';
		$config['max_size']             =  2048;

		$this->load->library('upload', $config);

		if (! $_FILES['lampiran']['error'] <> 4) {
			$uploadData = $this->upload->data();
			$data = array(
				'isi' 		=> $isi,
				'kategori' 	=> $aspek,
				'lampiran' 	=> $uploadData['file_name'],
				'waktu' 	=> $waktu
			);
			$this->model_input->tambah($data,'laporan');
			redirect('home/index');
		} elseif (!$this->upload->do_upload('lampiran')) { //Ketika eror ketika upload file
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('templates/header',$data);
			$this->load->view('home/form', $error);
			$this->load->view('templates/footer'); 
		} else { //Ketika tidak ada upload file
			$uploadData = $this->upload->data();
			$data = array(
				
				'isi' 		=> $isi,
				'kategori' 	=> $aspek,
				'lampiran' 	=> $uploadData['file_name'],
				'waktu' 	=> $waktu
			);
			$this->model_input->tambah($data,'laporan');
			redirect('home/index');
		}
	}


}
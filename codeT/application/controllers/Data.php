<?php

class Data extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Data_model');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['judul'] = 'Data';
		$data['lapor'] = $this->Data_model->getDataLapor();
		$this->load->view('templates/header', $data);
		$this->load->view('data/index', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$data['judul'] = 'tambah data lapor';
		$data['link'] = 'user/index';
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$this->form_validation->set_rules('lapor', 'Lapor', 'required');
		$this->form_validation->set_rules('aspek', 'Aspek', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('data/tambah');
			$this->load->view('templates/footer');
		} else {
			$config['upload_path'] = './asset/gambar/';
			//deteksi gambarnya
			$config['allowed_types'] = 'gif|jpg|jpeg|png|doc|docx|xls|xlsx|ppt|pptx|pdf';
			// load library upload
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('gambar')) {
				$error = $this->upload->display_errors();
				print_r($error);
			} else {
				$result = $this->upload->data();
				echo "<pre>";
				print_r($result);
				echo "</pre>";
			}
			$this->Data_model->tambahDataLapor();
			redirect('user/index');
		}
	}
	public function detailPerUser($username)
	{
		$data['judul'] = 'Detail laporan';
		$data['link'] = 'user/index';
		$data['keluhan'] = $this->Data_model->getDataByUsername($username);
		$this->load->view('templates/header', $data);
		$this->load->view('data/detail', $data);
		$this->load->view('templates/footer');
	}
	public function detailDalam($id)
	{
		$data['judul'] = 'Detail laporan';
		$data['link'] = 'home';
		$data['keluhan'] = $this->Data_model->getDataById($id);
		$this->load->view('templates/header', $data);
		$this->load->view('data/detail', $data);
		$this->load->view('templates/footer');
	}

	public function detail($id)
	{
		$data['judul'] = 'Detail laporan';
		$data['link'] = 'home';
		$data['keluhan'] = $this->Data_model->getDataById($id);
		$this->load->view('templates/header', $data);
		$this->load->view('data/detailLuar', $data);
		$this->load->view('templates/footer');
	}
	public function poto()
	{
		if ($this->input->post('upload')) {
			$config = array(
				'allowed_types' => 'jpg|jpeg|gif|png',
				'upload_path' => $this->gallery_path,
				'max_size' => 2000
			);
			$this->load->library('upload', $config);
			$this->upload->do_upload();
		}
	}

	public function hapus($id)
	{
		$this->Data_model->hapusDataLapor($id);
		//$this->session->set_flashdata('flash','Dihapus');
		redirect('user/index');
	}

	public function ubah($id)
	{

		$data['judul'] = 'ubah data lapor';
		$data['link'] = 'user/index';
		$data['keluhan'] = $this->Data_model->getDataById($id);
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$this->form_validation->set_rules('lapor', 'Lapor', 'required');
		$this->form_validation->set_rules('aspek', 'Aspek', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('data/ubah', $data);
			$this->load->view('templates/footer');
		} else {

			$config['upload_path'] = './asset/gambar/';
			$config['allowed_types'] = 'gif|jpg|jpeg|png|doc|docx|xls|xlsx|ppt|pptx|pdf';
			// load library upload
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('gambar')) {
				$error = $this->upload->display_errors();
				// nampil eror pesan
				print_r($error);
			} else {
				$result = $this->upload->data();
				echo "<pre>";
				print_r($result);
				echo "</pre>";
			}
			$this->Data_model->ubahDataLapor($id);
			redirect('user/index');
		}
	}
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

	class User extends CI_Controller{
		public function index(){
			$this->load->model('Data_model');
			$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

			$data['judul'] = 'laporan saya';
			$data['link'] = 'user/index';
			$data['lapor'] = $this->Data_model->getDataLapor();
				if ($this->input->post('keyword')) {
					$data['lapor'] = $this->Data_model->cariDataKeluhan();
				}
			
			$this->load->view('templates/header', $data);
			$this->load->view('user/index', $data);
			$this->load->view('templates/footer');
	}
}
?>

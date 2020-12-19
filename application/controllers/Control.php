<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control extends CI_Controller {

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

	public function __construct(){
        parent::__construct();
        $this->load->model('laporan_model');
        $this->load->helper('url_helper');
	}

	public function hapus($id){
		$delete_row = array('no' => $id);
		$this->laporan_model->hapus_data($delete_row, 'laporan');
		redirect('');
	}

	public function update($id){
	//	$komentar = $th
		$update_row = array('no' => $id);
		$this->laporan_model->update_data($update_row);

		redirect('');

	}
	public function index()
	{
		$data['laporan'] = $this->laporan_model->get_laporan();
		// $data['lampiran'] = '';
		$this->load->helper('url_helper');
		$this->load->view('home' , $data);
		
	}
	public function buat(){
		$this->load->view('buatlapor');	
	}

	public function search(){
		$keyword = $this->input->get('keyword');
		$data['result'] = $this->laporan_model->search_data($keyword, ['laporan']);
		$this->load->view('search_result' , $data);
		
	}

	public function tambah(){
		$nama = $this->input->post('nama');
		$kontak = $this->input->post('kontak');
		$komentar = $this->input->post('komentar');
		$aspek = $this->input->post('aspek_pelaporan');
		$lampiran = $this->input->post('lampiran');

		$data = array(
			'nama_lengkap' => $nama,
			'kontak' => $kontak,
			'komentar' => $komentar,
			'aspek_pelaporan' =>$aspek,
			'lampiran' =>$lampiran
		);
			$this->laporan_model->input_laporan('laporan', $data);
			redirect('');


	}
	public function detail($id){

		$data['laporan_item'] = $this->laporan_model->get_laporan($id);
		$this->load->view('detail' ,$data);
	}    
/*
	public function home(){
		$this->load->view('home');
	}
	*/
}

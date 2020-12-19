<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Model_Laporan');
    }
    
	public function index(){
		if($_GET){
			$keyword = $_GET['cari'];
			$data['laporan'] = $this->Model_Laporan->cari_data($keyword);
			$this->load->view('beranda', $data);
			$_GET = NULL;
		}else{
		$data['laporan'] = $this->Model_Laporan->get_laporan();
		$this->load->view('beranda', $data);
		}
	}

	public function tambah(){
		if(!empty($_FILES['lampiran'])){
			//$lampiran = array('image_metadata' => $this->upload->data());
			$config['upload_path']          = './upload/';
			$config['allowed_types']        = '*';
			$config['overwrite']			= true;
			// $config['max_width']            = 1024;
			// $config['max_height']           = 768;
			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('lampiran')) {
				$error = array('error' => $this->upload->display_errors());
			}else{
				$lampiran = $this->upload->data();
				$lampiran = $lampiran['file_name'];
				$aspek = $this->input->post('aspek');
				$komentar = $this->input->post('komentar');
				$data = array(
					'isi' => $komentar,
					'lampiran' => $lampiran,
					'aspek' => $aspek
				);
			$this->Model_Laporan->set_laporan($data);
			redirect('beranda');
			return;
		}
		}
		$this->load->view('buat_lapor');
	}

	public function cari(){
		$keyword = $_GET['cari'];
		//$keyword = $this->input->get('cari');
		$data['laporan'] = $this->Model_Laporan->cari_data($keyword);
		$this->load->view('beranda', $data);
	}

	public function update(){
		$id = $this->uri->segment(3);
		$data['item'] = $this->Model_Laporan->get_laporan($id);
		
		if(!empty($_FILES['lampiran'])){
			//$lampiran = array('image_metadata' => $this->upload->data());
			$config['upload_path']          = './upload/';
			$config['allowed_types']        = '*';
			$config['overwrite']			= true;
			// $config['max_width']            = 1024;
			// $config['max_height']           = 768;
			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('lampiran')) {
				$error = array('error' => $this->upload->display_errors());
			}else{
				$lampiran = $this->upload->data();
				$lampiran = $lampiran['file_name'];
				$aspek = $this->input->post('aspek');
				$komentar = $this->input->post('komentar');
				$id = $this->input->post('id');
				$data_update = array(
					'isi' => $komentar,
					'lampiran' => $lampiran,
					'aspek' => $aspek
				);
			$this->Model_Laporan->update_data($id, $data_update);
			redirect('beranda');
			}
		}
		$this->load->view('edit', $data);
	}

	public function hapus(){
		$id = $this->uri->segment(3);
		$this->Model_Laporan->hapus_data($id); 
		redirect('');
	}

	public function detail($id){
		$data['laporan_item'] = $this->Model_Laporan->get_laporan($id);
		$this->load->view('detail' ,$data);
	}    
}
?>

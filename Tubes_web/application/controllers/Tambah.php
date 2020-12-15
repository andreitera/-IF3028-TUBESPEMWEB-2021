<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambah extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Berita_model');
		$this->load->library('upload');
	}

	public function index()
	{
		$this->load->view('tambah');
	}

	public function simpan(){
				$config['upload_path'] = './asset/file/'; //path folder
	            $config['allowed_types'] = 'jpg|png|doc|docx'; //type yang dapat diakses bisa anda sesuaikan
	            $config['max_size'] = 0;				

	            $this->upload->initialize($config);
	            if ($this->upload->do_upload('file')){
	                        $data = $this->upload->data();
	                        $file=$data['file_name'];
	                        $isi=strip_tags($this->input->post('isi'));
							$aspek=strip_tags($this->input->post('aspek'));
							$waktu=strip_tags(date('Y-m-d , strtotime($tanggal)'));
							$this->Berita_model->simpan($isi,$file,$aspek,$waktu);
							echo $this->session->set_flashdata('msg','success');
							redirect('home');
				}else{
	                    $this->load->view('tambah');

	            }
	        }
}

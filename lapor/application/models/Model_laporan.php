<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_laporan extends CI_Model {

	public function getlapor(){
			return $this->db->get('laporan')->result_array(); //ambil seluruh data dari tabel lapor
	}
	
	public function tambah(){

		//mengambil waktu saat ini
		date_default_timezone_set('Asia/Jakarta');
		$waktu = date("Y-m-d H:i:s");

		//mengolah file
		$lampiran = $_FILES['file'];
		if($lampiran = ''){}else{
			$config['upload_path'] = './assets/img';
			$config['allowed_types'] = 'jpeg|jpg|png|gif|pdf';

			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('file')){
				echo "gagal";
			}else{
				$file = $this->upload->data('file_name');
			}
		}


		$data = [
			"komentar" => $this->input->post('komentar'),
			"aspek" => $this->input->post('aspek'),
      		"lampiran" => $file,
      		"waktu" => $waktu
		];

		$this->db->insert('laporan', $data);
  	}
  
	public function detail($id){
		return $this->db->get_where('laporan', array('id'=>$id))->row_array();
	}	
  
  	public function cari($cari){
		$this->db->like('komentar', $cari);
		$this->db->or_like('waktu', $cari);
		$this->db->or_like('aspek', $cari);

		return $this->db->get('laporan')->result_array();
	}

	public function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('laporan');
	}

	public function edit($id){

		//mengambil waktu saat ini
		date_default_timezone_set('Asia/Jakarta');
		$waktu = date("Y-m-d H:i:s");

		//mengolah file
		$file = $_FILES['file'];
		if($file = ''){}else{
			$config['upload_path'] = './assets/img';
			$config['allowed_types'] = 'jpeg|jpg|png|gif|pdf';

			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('file')){
				echo "gagal";
			}else{
				$file = $this->upload->data('file_name');
			}
		}

		$komentar = $this->input->post('komentar');
		$aspek = $this->input->post('aspek');

		$this->db->set('komentar', $komentar);
		$this->db->set('aspek', $aspek);
		$this->db->set('waktu', $waktu);
		$this->db->set('lampiran', $file);
		$this->db->where('id', $id);
		$this->db->update('laporan');
	}

}

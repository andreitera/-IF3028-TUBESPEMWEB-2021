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
      "lampiran" => $lampiran,
      "waktu" => $waktu
		];

		$this->db->insert('laporan', $data);
	}

}

<?php

class Lapor_model extends CI_model
{
	// public function ubah($id){

	// 	//menset waktu saat ini
	// 	date_default_timezone_set('Asia/Jakarta');
	// 	$tanggal = date("Y-m-d H:i:s");

	// 	//mengolah file
	// 	$file = $_FILES['File'];
	// 	if($file = ''){}else{
	// 		$config['upload_path'] = './asset/file';
	// 		$config['allowed_types'] = 'jpeg|jpg|png|gif|pdf';

	// 		$this->load->library('upload',$config);
	// 		if(!$this->upload->do_upload('File')){
	// 			echo "gagal";
	// 		}else{
	// 			$file = $this->upload->data('file_name');
	// 		}
	// 	}

	// 		$isi = $this->input->post('isi');
	// 		$aspek = $this->input->post('aspek');

	// 	$this->db->set('isi', $isi);
	// 	$this->db->set('aspek', $aspek);
	// 	$this->db->set('tanggal', $tanggal);
	// 	$this->db->set('file', $file);
	// 	$this->db->where('id', $id);
	// 	$this->db->update('lapor');
	// }
	public function uploadLaporan($table, $data)
    {
        return $this->db->insert($table, $data);
	}
}
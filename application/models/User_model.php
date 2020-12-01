<?php

class User_model extends CI_Model {

  public function __construct()
  {
			$this->load->database();
	}


  function cek_login($table,$where)
  {
		return $this->db->get_where($table,$where);
	}

  function getinfolaporan($key)
  {
    return $this->db->get_where('laporan', ['id_laporan'=>$key])->row_array();
  }

  function getinfomhs($nim)
  {
    return $this->db->get_where('mahasiswa', ['nim'=>$nim])->row_array();
  }

  function editinfomhs()
  {
    $data = [
              "password" => md5($this->input->post('password', true)),
              "prodi" => $this->input->post('prodi', true),
              "nama" => $this->input->post('nama', true),
              "verif" => "1"
            ];
    $this->db->where('nim', $this->session->userdata("nim"));
    $this->db->update('mahasiswa', $data);
  }

  function tambahlaporan()
  {
    $lampiran = $_FILES['berkas']['name'];
    $nim = $this->input->post('nim');
    $cp = $this->input->post('cp');
    $hal = $this->input->post('hal');
    $status = "MENUNGGU";

    $config['allowed_types']	= 'gif|jpeg|jpg|png|pdf|docx|doc|GIF|JPEG|JPG|PNG|DOCX|DOC|PDF';
		$config['max_size'] 			= '8192';
		$config['upload_path'] 		= './assets/lampiran';

    $this->load->library('upload',$config);

    if (!$this->upload->do_upload('berkas')) {
      echo "Gagal Menggunggah Lampiran!"; die();
    } else {
      $gambar = $this->upload->data('file_name');
    }

    $data = array(
                    'nim' => $nim,
                    'cp' => $cp,
                    'hal' => $hal,
                    'status' => $status,
                    'lampiran' => $lampiran
                 );
    $this->db->insert('laporan', $data);
  }






}

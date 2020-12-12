<?php

class Admin_model extends CI_Model {

  public function __construct()
  {
			$this->load->database();
	}


  function cek_login($table,$where)
  {
		return $this->db->get_where($table,$where);
	}

  function gantipassword($id_admin, $password_hash)
  {
    $this->db->set('password', $password_hash);
    $this->db->where('username', $id_admin);
    $this->db->update('admin');
  }

  function list_mhs($keyword)
  {
    $this->db->SELECT('mahasiswa.nim, mahasiswa.nama,
                       mahasiswa.prodi, mahasiswa.verif');
    $this->db->FROM('mahasiswa');
    if ($keyword != '') {
      $this->db->like('mahasiswa.verif', $keyword);
      $this->db->or_like('mahasiswa.nim', $keyword);
      $this->db->or_like('mahasiswa.nama', $keyword);
      $this->db->or_like('mahasiswa.prodi', $keyword);
    }
    $this->db->order_by('mahasiswa.verif', 'ASC');
    return $this->db->get();
  }

  function getinfolaporan($key)
  {
    return $this->db->get_where('laporan', ['id_laporan'=>$key])->row_array();
  }

  function hapuslaporan($id_laporan)
  {
    $this->db->where('id_laporan', $id_laporan);
    $this->db->delete('laporan');
  }

  function proses($id_laporan)
  {
    $this->db->set('status', "BERHASIL");
    $this->db->where('id_laporan', $id_laporan);
    $this->db->update('laporan');
  }


}

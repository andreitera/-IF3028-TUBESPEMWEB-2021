<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class Model_data extends CI_model
{
    public function getdataadmin()
  	{
  		$data = "SELECT * FROM user";
  		return $this->db->query($data);
  	}

    public function getdatalapor()
    {
      $data = "SELECT * FROM `laporan` JOIN user WHERE laporan.pelapor = user.id";
      return $this->db->query($data)->result();
    }

    public function tambah($namauser,$isi,$aspek,$file)
    {
      var_dump($namauser,$isi,$aspek,$file);
        if ($namauser=='admin') {
          $username=1;
        } elseif ($namauser=='user') {
          $username=4;
        }
        date_default_timezone_set('Asia/Jakarta');
        $tanggal = date("Y-m-d H:i:s");
        $this->db->query("INSERT INTO laporan (id_laporan, pelapor, isi_laporan, file, created_at, updated_at, aspek)
        VALUES (NULL,'$username','$isi', '$file', '$tanggal', '$tanggal', '$aspek')");
        redirect(user);
    }
    public function detail($id_laporan)
    {
      return $this->db->get_where('laporan', array('id_laporan'=>$id_laporan))->row_array();
    }
}
?>

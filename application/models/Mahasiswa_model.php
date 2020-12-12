<?php

class Mahasiswa_model extends CI_Model
{

  function __construct()
  {
    $this->load->database();
  }

function getinfomhs($nim)
{
  return $this->db->get_where('mahasiswa', ['nim'=>$nim])->row_array();
}

function hapusmhs($nim)
{
  $this->db->where('nim', $nim);
  $this->db->delete('mahasiswa');
}

function aktivasi($nim)
{
  $this->db->set('verif', "1");
  $this->db->where('nim', $nim);
  $this->db->update('mahasiswa');
}

function unaktivasi($nim)
{
  $this->db->set('verif', "0");
  $this->db->where('nim', $nim);
  $this->db->update('mahasiswa');
}




}

 ?>

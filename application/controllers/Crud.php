<?php
defined ('BASEPATH') or exit ('No Direct Script Allowed');
/**
 *
 */
class Crud extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('Model');
    $this->load->model('Model_data', 'md');
    $this->load->library('form_validation');
  }
  public function buat()
  {
    $this->load->view('templates/template_buat');
  }
  public function do_buat()
  {
    $namauser = $this->session->userdata('username');
    $this->form_validation->set_rules('isi', 'Isi', 'required|min_length[250]');
    if ($this->form_validation->run() == FALSE) {
        $this->load->view('templates/template_buat');
    } else {
        $this->md->tambah($namauser);
        echo "
    <script>
      alert('berhasil menambah data');
      document.location.href='../';
    </script>
    ";
    }
  }
}

 ?>

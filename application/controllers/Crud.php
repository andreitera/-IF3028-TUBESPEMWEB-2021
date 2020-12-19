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
    $isi = $this->input->post('isi');
    $aspek = $this->input->post('aspek');
    $file = $_FILES['dokumen'];
    if ($file = '') {
    } else {
        $config['upload_path'] = './assets/file';
        $config['allowed_types'] = 'xlsx|xls|pdf|doc|docx|ppt|pptx';

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('dokumen')) {
            echo "gagal";
        } else {
            $file = $this->upload->data('file_name');
        }
    }
    $this->form_validation->set_rules('isi', 'Isi', 'required|min_length[10]');
    if ($this->form_validation->run() == FALSE) {
        $this->load->view('templates/template_buat');
    } else {
        $this->md->tambah($namauser,$isi,$aspek,$file);
        echo "
    <script>
      alert('berhasil menambah data');
      document.location.href='../';
    </script>
    ";
    }
  }
  public function do_ubah()
  {
    $isi = $this->input->post('isi');
    $aspek = $this->input->post('aspek');
    $id_laporan = $this->input->post('id_laporan');
    $file = $_FILES['dokumen'];
    if ($file = '') {
    } else {
        $config['upload_path'] = './assets/file';
        $config['allowed_types'] = 'xlsx|xls|pdf|doc|docx|ppt|pptx';
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('dokumen')) {
            echo "gagal";
        } else {
            $file = $this->upload->data('file_name');
        }
    }
    $this->form_validation->set_rules('isi', 'Isi', 'required|min_length[10]');
    if ($this->form_validation->run() == FALSE) {
        $this->load->view('templates/template_buat');
    } else {
        $this->md->ubah($id_laporan, $isi, $aspek, $file);
        echo "
    <script>
      alert('berhasil menambah data');
      document.location.href='../';
    </script>
    ";
    }
  }
  public function hapus()
  {
		$id_laporan = $this->uri->segment(3);
		$this->db->delete('laporan', array('id_laporan' => $id_laporan));
		redirect('user');
  }
}
 ?>

<?php
  defined ('BASEPATH') or exit ('No Direct Script Allowed');
  /**
   *
   */
  class Home extends CI_Controller
  {
    public function __construct()
    {
      parent::__construct();
      $this->load->model('Model');
      $this->load->model('Model_data', 'md');
    }
    public function index()
    {
      $isi['data'] = $this->md->getdatalapor();
      $isi['content'] = 'home/content';
      $this->load->view('templates/template_home', $isi);
    }
    public function edit($id_laporan)
    {
      $isi['lapor'] = $this->md->detail($id_laporan);
      $isi['aspek'] = $this->db->get('aspek')->result_array();
      $this->load->view('templates/template_edit',$isi);
    }
    public function cari($cari){
  		$isi['cari'] = $this->md->caridata($cari); //getlapor() ada di model Model_lapor
      $isi['content'] = 'admin/index';
  		$isi['coba'] = $cari;
  		$this->load->view('templates/template_home',$isi);
  	}
    public function buka($id_laporan)
    {
      $isi['lapor'] = $this->md->detail($id_laporan);
      $isi['aspek'] = $this->db->get('aspek')->result_array();
      $this->load->view('templates/template_buka',$isi);
    }
  }
 ?>

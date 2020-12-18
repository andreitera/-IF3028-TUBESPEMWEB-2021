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
  }
 ?>

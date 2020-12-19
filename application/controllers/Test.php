<?php
  /**
   *
   */
  class Test extends CI_Controller
  {

    function __construct()
    {
      parent::__construct();
      $this->load->model('Model');
      $this->load->model('Model_data');
    }
    public function index()
    {
      $this->load->view('test/index');
    }
  }

 ?>

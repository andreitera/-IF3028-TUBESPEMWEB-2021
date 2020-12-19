<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {
	public function index($halaman = 'home'){
        $data['posts'] = $this->post_model->get_posts();

        $this->load->helper('url');
        $this->load->view('template/header');
        $this->load->view('pages/'.$halaman, $data);
        $this->load->view('template/footer');
    }
}

<?php 
 
 
class Crud extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');
 
	}
 
	function index(){
		$data['lapor'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_home',$data);
	}
 
	function tambah(){
		$this->load->view('v_input');
    }
    
    function tambah_aksi(){
        $isi = $this->input->post('isi');
        $aspek = $this->input->post('aspek');

        $data = array (
            'isi' => $isi,
            'aspek' => $aspek
        );

        $this->m_data->input_data($data,'lapor');
        redirect('v_home');
    }
 
}
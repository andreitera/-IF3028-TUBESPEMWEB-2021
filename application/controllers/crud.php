<?php 
 
 
class Crud extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url','form');
    $this->load->library('upload');
    $this->load->library('form_validation');
	}
 
	function index(){
		$data['lapor'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_home',$data);
	}
 
	function tambah(){
		$this->load->view('v_tambah');
    }
    
    public function tambah_aksi(){
        $isi = $this->input->post('isi');
        $aspek = $this->input->post('aspek');
        $data_file = $this->input->post('myfile');

        date_default_timezone_set("asia/jakarta");
        $now = date("y-m-d h:i:s");

        $data = array (
            'isi' => $isi,
            'aspek' => $aspek,
            'waktu' => $now,
            'lampiran' => $data_file
        );

        $this->m_data->input_data($data,'lapor');
        redirect('');
    }

    public function hapus($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'lapor');
		redirect('');
    }
    
    public function hasil($id){
        $where = array('id' => $id);
        $data['lapor'] = $this->m_data->edit_data($where,'lapor')->result();
        $this->load->view('v_hasil',$data);
    }

    public function edit($id){
      $where = array('id' => $id);
      $data['lapor'] = $this->m_data->edit_data($where,'lapor')->result();
      $this->load->view('v_edit',$data);
  }

    public function update(){
      $isi = $this->input->post('isi');
      $aspek = $this->input->post('aspek');
      $myfile = $this->input->post('myfile');

      date_default_timezone_set("asia/jakarta");
        $now = date("y-m-d h:i:s");

        $data = array (
            'isi' => $isi,
            'aspek' => $aspek,
            'waktu' => $now,
            'lampiran' => $myfile
        );

        $where = array ('id' => $id);

        $this->m_data->update($where,$data,'lapor');
        redirect('');
    }

    // public function update()
    // {

    //     $data ['ubah'] = $this->m_data->getUbahLaporan();
       
    //     $this->form_validation->set_rules('isi','isi','required');
    //     $this->form_validation->set_rules('aspek','Aspek','required');

    //     if($this->form_validation->run() == FALSE){
    //         $data ['judul'] = 'Ubah Laporan';
    //         $this->load->view('v_edit',$data);
    //     }
    //     else{
    //         $this->m_data->updateLaporan();
         
    //     }
    // }
}
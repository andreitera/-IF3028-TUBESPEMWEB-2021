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
		$this->load->view('v_tambah');
    }
    
    public function tambah_aksi(){
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
        $this->m_data->update_data($where,$data,'lapor');
        redirect('');
    }
}
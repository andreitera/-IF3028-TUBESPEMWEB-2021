<?php

class Home extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Lapor_db');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['lapor'] = $this->Lapor_db->getLaporan();
        $this->load->view('home/index', $data);
    }

    public function tambah_data()
    {
        $this->form_validation->set_rules('isi','Isi','required|min_length[250]');
        
        if($this->form_validation->run() == FALSE)
        {
            
            $this->load->view('buatlaporan/index');
        }
        else
        {
            $this->Lapor_db->tambahdata();
            echo "<script>alert('Berhasil Menambah Data!'); document.location.href='../';</script>";
        }
    }

    public function search($search){
		$data['lapor'] = $this->Lapor_db->search($search);
		$data['search'] = $search;
		$this->load->view('home/search',$data);
	}

    public function detail($id)
    {
        $data['lapor']=$this->Lapor_db->detail($id);
        $this->load->view('detaillaporan/index', $data);
    }

    public function detail_ubah($id)
    {
		$data['aspek'] = ['Dosen','Mahasiswa','Staff'];
		$data['lapor'] = $this->Lapor_model->detail($id);
		$this->load->view('ubah/index',$data);
    }
    
    public function ubah($id)
    {
        $this->form_validation->set_rules('isi','Isi','required|min_length[250]');

        if($this->form_validation->run()==FALSE)
        {
            $data['aspek']=['Dosen','Mahasiswa','Staff'];
            $data['lapor']=$this->Lapor_db->detail($id);
            $this->load->view('ubah/index', $data);
        }
        else
        {
            $this->Lapor_db->ubah($id);
            echo "<script>alert('Berhasil mengubah data!');document.location.href='../';</script>";
        }
    }

    public function delete($id){
		$this->Lapor_db->delete($id);
		redirect('home');
	}

}
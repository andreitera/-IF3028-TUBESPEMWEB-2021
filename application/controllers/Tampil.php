 <?php


class Tampil extends CI_Controller {

	//tampilan awal
	public function index()
	{
		
		$this->load->model('m_lapor');
		$data['lapor']=$this->m_lapor->get_data();
		$this->load->view('tampil_awal', $data);
	}

	//tambah data dan validasi
	public function tambah()
    {
    	$this->load->library('form_validation');
        $Laporan = $this->m_lapor;
        $validation = $this->form_validation;
        $validation->set_rules($Laporan->rules());

        if ($validation->run()) {
            $Laporan->tambahLaporan();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect('Tampil/index');
        }

        $this->load->view('buat_laporan');
    }

    //melihat data selengkapnya
	public function detail($id){

		$data['lapor']= $this->m_lapor->get_dataById($id);
		$this->load->view('detail', $data);
	}

	//mengapus data
	public function hapus($id){
		$this->m_lapor->hapusData($id);
		$this->session->set_flashdata('flash','dihapus');
		redirect('Tampil/index');
		
	}

	//mencari data dari keywordnya
	public function search(){
		$keyword = $this->input->post('keyword');
		$data['lapor']=$this->m_lapor->get_keyword($keyword);
		$this->load->view('tampil_awal', $data);
	}
}

<?php
error_reporting(0);

class Home extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('Lapor_model');
		$this->load->library('form_validation');
	}
	
	public function index(){
		$data['lapor'] = $this->Lapor_model->getlapor();
		$this->load->view('home/index',$data);
	}

	public function tambah(){
		
		$this->form_validation->set_rules('isi', 'Isi', 'required|min_length[250]');
		if($this->form_validation->run() == FALSE){
			$this->load->view('tambah/index');
		}else{
			$this->Lapor_model->tambah();
			echo "
				<script>
					alert('berhasil menambah data');
					document.location.href='../';
				</script>
				";
		}
		
	}

	public function detail($id){
		$data['lapor'] = $this->Lapor_model->detail($id);
		$this->load->view('detail/index',$data);
	}

	public function detail2($id){
		$data['aspek'] = ['Dosen','Staff','Mahasiswa','Infrastruktur','Pengajaran'];
		$data['lapor'] = $this->Lapor_model->detail($id);
		$this->load->view('ubah/index',$data);
	}


	public function delete($id){
		$this->Lapor_model->delete($id);
		redirect('index.php/Home');
	}

	public function cari($cari){
		$data['lapor'] = $this->Lapor_model->cari($cari); 
		$data['coba'] = $cari;
		$this->load->view('home/cari',$data);
	}

	public function ubah($id){
		
		$this->form_validation->set_rules('isi', 'Isi', 'required|min_length[250]');
		if($this->form_validation->run() == FALSE){
			$data['aspek'] = ['Dosen','Staff','Mahasiswa','Infrastruktur','Pengajaran'];
			$data['lapor'] = $this->Lapor_model->detail($id);
			$this->load->view('ubah/index',$data);
			
		}else{
			$this->Lapor_model->ubah($id);
			echo "
				<script>
					alert('berhasil update data');
					document.location.href='../';
				</script>
				";
		}
		
	}
}

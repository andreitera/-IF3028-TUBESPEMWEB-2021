<?php
error_reporting(0);

class Home extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('Lapor_model'); //mengambil model model_lapor dari folder models
		$this->load->library('form_validation');
	}
	
	public function index(){
		$data['lapor'] = $this->Lapor_model->getlapor(); //getlapor() terdapat di model Model_lapor
		$this->load->view('home/index',$data);
	}

	public function tambah(){
		
		//validasi form
		$this->form_validation->set_rules('isi', 'Isi', 'required|min_length[100]');
		if($this->form_validation->run() == FALSE){
			$this->load->view('tambah/index');
		}else{
			if($this->Lapor_model->tambah() == true){
			echo "
				<script>
					alert('berhasil menambah data');
					document.location.href='../';
				</script>
				";
			}else{
				echo "
				<script>
					alert('gagal menambahkan laporan/komentar! format file yang anda upload tidak sesuai / ukuran melebihi 2Mb');
					document.location.href='';
				</script>
				";
			}
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
		$data['lapor'] = $this->Lapor_model->cari($cari); //getlapor() terdapat di model Model_lapor
		$data['coba'] = $cari;
		$this->load->view('home/cari',$data);
	}

	public function ubah($id){
		
		//validasi form
		$this->form_validation->set_rules('isi', 'Isi', 'required|min_length[100]');
		if($this->form_validation->run() == FALSE){
			$data['aspek'] = ['Dosen','Staff','Mahasiswa','Infrastruktur','Pengajaran'];
			$data['lapor'] = $this->Lapor_model->detail($id);
			$this->load->view('ubah/index',$data);
			//redirect("index.php/Home/detail2/$id");
			
		}else{
			if($this->Lapor_model->ubah($id) == true){
			echo "
				<script>
					alert('berhasil update laporan/komentar');
					document.location.href='../';
				</script>
				";
			}else{
				echo "
				<script>
					alert('gagal upload file, format file yang anda upload tidak sesuai / melebihi ukuran minimum');
					document.location.href='../';
				</script>
				";
			}
		}
	}
}

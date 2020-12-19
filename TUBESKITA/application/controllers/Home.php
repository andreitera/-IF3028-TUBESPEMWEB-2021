<?php
error_reporting(0);

class Home extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('Lapor_model'); //ngambil model model_lapor dari folder models
		$this->load->library('form_validation');
	}
	
	public function index(){
		$data['lapor'] = $this->Lapor_model->getlapor(); //getlapor() ada di folder models Model_lapor
		$this->load->view('home/index',$data);
	}

	public function tambah(){
		
		//validasi form
		$this->form_validation->set_rules('isi', 'Isi','required');
		if($this->form_validation->run() == FALSE){
			$this->load->view('tambah/index');
		}else{
			if($this->Lapor_model->tambah() == true){
			echo "
				<script>
					alert('data berhasil ditambahkan');
					document.location.href='../';
				</script>
				";
			}else{
				echo "
				<script>
					alert('gagal menambah data,file yang anda upload tidak sesuai / melebihi 2Mb');
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
		$data['aspek'] = ['Dosen','Staff','Mahasiswa','Infrastruktur','Pengajaran','Logistik'];
		$data['lapor'] = $this->Lapor_model->detail($id);
		$this->load->view('ubah/index',$data);
	}


	public function delete($id){
		$this->Lapor_model->delete($id);
		redirect('index.php/Home');
	}

	public function cari($cari){
		$data['lapor'] = $this->Lapor_model->cari($cari); //getlapor() ada di models Model_lapor
		$data['coba'] = $cari;
		$this->load->view('home/cari',$data);
	}

	public function ubah($id){
		
		//validasi form
		$this->form_validation->set_rules('isi', 'Isi', 'required');
		if($this->form_validation->run() == FALSE){
			$data['aspek'] = ['Dosen','Staff','Mahasiswa','Infrastruktur','Pengajaran','Logistik' ];
			$data['lapor'] = $this->Lapor_model->detail($id);
			$this->load->view('ubah/index',$data);
			//redirect("index.php/Home/detail2/$id");
			
		}else{
			if($this->Lapor_model->ubah($id) == true){
			echo "
				<script>
					alert('berhasil update data');
					document.location.href='../';
				</script>
				";
			}else{
				echo "
				<script>
					alert('gagal update data,file yang anda upload tidak sesuai / melebihi 2Mb');
					document.location.href='../';
				</script>
				";
			}
		}
		
	}
}

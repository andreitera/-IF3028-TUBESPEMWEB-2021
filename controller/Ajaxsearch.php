<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajaxsearch extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper(array('form', 'url', 'html'));
		$this->load->library(array('form_validation','session'));
		$this->load->model('Ajaxsearch_model');
       
    }

	function index()
	{
		$this->load->view('tampilan');
	}

	function search(){
		$this->load->view('ajaxsearch');
	}

	function fetch()
	{
		
		
		$query = '';
		$this->load->model('Ajaxsearch_model');
		if($this->input->post('query'))
		{
			$query = $this->input->post('query');
		}
		$data = $this->Ajaxsearch_model->fetch_data($query);
	
		
		if($data->num_rows() > 0)
		{
			?>
			<div style="margin-left: 50px; margin-right:50px;"><?php
			echo "Laporan/komentar terakhir"
			?>
			<hr/>
			<?php 
			echo '<br>';
			foreach($data->result() as $row)
			{
							echo 'Judul : ';
							echo $row->judul;
							echo '<br>';
							echo 'Laporan : ';
							echo $row->laporan;
							echo '<br>';
							echo '<br>';
							echo 'Lampiran : ';
							echo $row->cover_img; 
							echo '      ';
							?><div style="float: right; width: 400px;"><?php
							echo 'Waktu : ';
							echo $row->created_at ;
							echo '   ';
							echo anchor('Ajaxsearch/selengkapny/'.$row->id, 'Lihat Selengkapnya', ['class' => '']);
							?></div><?php
							echo '<br>';
							echo '<br>';
							?><hr />
			<?php 
							
					
			}?></div><?php
		}
		else
		{
		
			echo ' No Data Found ';
						
		}
		
	}
	
	public function tambahLapor()
    {
		$this->load->view('addLapor', array('error' => ' '));
	}

	 
	 public function tambahLaporan()
    {
		
		$this->form_validation->set_rules('judul','Judul','required',array('required' => 'Judul wajib diisi'));
		$this->form_validation->set_rules('laporan','Laporan','required',array('required' => 'Laporan Wajib di Isi'));
		$this->form_validation->set_rules('aspek','Aspek','required',array('required' => 'Aspek Wajib di Isi'));
		
		if($this->form_validation->run() != false){
            
            $config['upload_path']			=	'./upload   /';
            $config['allowed_types']		=	'gif|png|jpg|doc|docx|xls|xlsx|ppt|pptx|pdf';
            $config['max_size']			    =	10000;

            $this->load->library('upload' ,$config);
            $this->upload->initialize($config);

			$judul   = $this->input->post('judul');
			$laporan = $this->input->post('laporan');
			$aspek   = $this->input->post('aspek');
	
    
                
			if (!$this->upload->do_upload('cover_img')) {
					$error = array('error' => $this->upload->display_errors());
					$this->load->view('addLapor', $error);
					return 0;
					$this->session->set_flashdata('error_upload_Images' ,'gagal upload Images');
				}else{
					
				$data = array('upload_data' => $this->upload->data());
				$name = $data['upload_data'];
				
                $data = array(
                    'id'   => $this->session->userdata('id'),
                    'judul' => $judul,
                    'laporan' => $laporan,
					'aspek'   => $aspek ,
					'cover_img' => $name['file_name'],
				);
			}
    
                $this->Ajaxsearch_model->uploadArticle('tbl_lapor', $data);
                
                if(str_word_count($laporan) >= 20){
					redirect('Ajaxsearch/search', 'refresh');
					return 0;
					}else{
						$message = "laporan harus lebih dari 20 kata";
					echo "<script type='text/javascript'>alert('$message');</script>";
					$this->load->view('addLapor', array('error' => ' '));
					}
            
            }else{
				$message = "tidak boleh kosong";
				echo "<script type='text/javascript'>alert('$message');</script>";
				$this->load->view('addLapor', array('error' => ' '));
			}
		}
		public function selengkapny($id)
    {
        $where = [ 'id' => $id];
        $data['laporan'] = $this->Ajaxsearch_model->selengkapnya('tbl_lapor', $where)->result();
        $this->load->view('selengkapnyaa', $data);
	}
	
	public function hapus($id)
    {
        $where = ['id' => $id];
		$delete = $this->Ajaxsearch_model->delete($where, "tbl_lapor");
		$message = "Berhasil dihapus";
		echo "<script type='text/javascript'>alert('$message');</script>";
		redirect('Ajaxsearch/search', 'refresh');
        
	}
	
	public function update($id)
    {
        $where = [ 'id' => $id ];
        $data['laporan'] = $this->Ajaxsearch_model->selengkapnya("tbl_lapor", $where)->result();
        $this->load->view('updateLapor', $data);
	}

	public function updateLaporan()
    {
		
		$this->form_validation->set_rules('judul','Judul','required',array('required' => 'Judul wajib diisi'));
		$this->form_validation->set_rules('laporan','Laporan','required',array('required' => 'Laporan Wajib di Isi'));
		$this->form_validation->set_rules('aspek','Aspek','required',array('required' => 'Aspek Wajib di Isi'));
		
		if($this->form_validation->run() != false){
            
            $config['upload_path']			=	'./upload   /';
            $config['allowed_types']		=	'gif|png|jpg|doc|docx|xls|xlsx|ppt|pptx|pdf';
            $config['max_size']			    =	10000;

            $this->load->library('upload' ,$config);
            $this->upload->initialize($config);

			$judul   = $this->input->post('judul');
			$laporan = $this->input->post('laporan');
			$aspek   = $this->input->post('aspek');
			$id      = $this->input->post('id');

			$where = [ 'id' => $id ];

			if (!$this->upload->do_upload('cover_img')) {
    
                $data = array(
                    
                    'judul'   => $judul,
                    'laporan' => $laporan,
					'aspek'   => $aspek ,
				);
				
                
                if(str_word_count($laporan) >= 20){
					$this->Ajaxsearch_model->updateL('tbl_lapor', $data,$where);
					redirect('Ajaxsearch/search', 'refresh');
					return 0;
					}else{
						$message = "laporan harus lebih dari 20 kata";
					echo "<script type='text/javascript'>alert('$message');</script>";
					$this->load->view('ajaxsearch', array('error' => ' '));
					}
			}else{
				$data = array('upload_data' => $this->upload->data());
				$name = $data['upload_data'];

				$data = array(
                    
                    'judul'   => $judul,
                    'laporan' => $laporan,
					'aspek'   => $aspek ,
					'cover_img' => $name['file_name'],
				);

				
                
                if(str_word_count($laporan) >= 20){
					$this->Ajaxsearch_model->updateL('tbl_lapor', $data,$where);
					redirect('Ajaxsearch/search', 'refresh');
					return 0;
					}else{
						$message = "laporan harus lebih dari 20 kata";
					echo "<script type='text/javascript'>alert('$message');</script>";
					$this->load->view('ajaxsearch', array('error' => ' '));
					}
            
			}
            }else{
				$message = "tidak boleh kosong";
				echo "<script type='text/javascript'>alert('$message');</script>";
				$this->load->view('updateLapor', array('error' => ' '));
			}
		}
	
    }





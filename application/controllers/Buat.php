<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buat extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        // ambil data aspek
        $data['aspek'] = $this->db->get('aspek')->result();
        
		$this->load->view('buat', $data);
    }
    
    public function tambah()
    {
		try {
			$config = array(
				array(
					'field' => 'isi',
					'label' => 'Isi',
					'rules' => 'required'
				),
				array(
					'field' => 'id_aspek',
					'label' => 'Id Aspek',
					'rules' => 'required'
				)
			);

			$this->form_validation->set_rules($config);

			if ($this->form_validation->run() == FALSE){
				echo "Silahkan lengkapi form";
			}else{
				$isi = $_POST['isi'];
				$id_aspek = $_POST['id_aspek'];
				$waktu = date("Y-m-d");
				$lampiran = $waktu . '-' . $_FILES['lampiran']['name'];
	
				$data = array(
					'isi' => $isi,
					'id_aspek' => $id_aspek,
					'lampiran' => $lampiran,
					'waktu' => $waktu
				);
	
				$this->db->insert('lapor', $data);
	
				$config['upload_path'] = './uploads/';
				$config['allowed_types'] = 'doc|docx|xls|xlsx|ppt|pptx|pdf|txt|png|jpg|jpeg|mp3|mp4|wav|mkv|txt';
				$config['file_name'] = $lampiran;
	
				$this->upload->initialize($config);
	
				if(! $this->upload->do_upload('lampiran')){
					$error = array('error' => $this->upload->display_errors());
					echo "error : " . $error['error'];
				}else{
					echo 'Laporan berhasil dibuat <a href=' . base_url('buat') . ' >Kembali ke halaman buat laporan</a>';
				}
				
			}  

			$db_error = $this->db->error();
			if (!empty($db_error) && $db_error['code'] != 0) {
				throw new Exception('Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message']);
				return false; // unreachable retrun statement !!!
			}
		} catch (Exception $e) {
			echo "error : " . $e->getMessage();
		}
    }
}

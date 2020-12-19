 
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function index()
	{
		$data = $this->modelLapor->GetLapor();

		$this->load->view('beranda', array('data' => $data));
	}

	public function TampilLaporan($id)
	{
		$data = $this->modelLapor->GetData($id);
		$this->load->view('detail_laporan', array('data' => $data));
	}

	public function BuatLaporan()
	{
		$this->load->view('buat_laporan');
	}

	public function UbahLaporan($id)
	{
		$data = $this->modelLapor->GetData($id);
		$this->load->view('edit_laporan', array('data' => $data), $id);
	}

	public function HapusLaporan($id)
	{
		$isi = $this->modelLapor->DeleteData(
			array("id" => $id)
		);
	}
}

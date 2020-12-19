<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {

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
	public function id($id)
	{
		$this->db->select('*');
		$this->db->where('id_lapor', $id);
		$this->db->from('lapor');
		$this->db->join('aspek', 'aspek.id_aspek = lapor.id_aspek');
		$query = $this->db->get();
		$data['data'] = $query->result()[0];
		
		$this->load->view('detail', $data);
		
	}
	
	public function hapus($id) {
		$this->db->delete('lapor', array('id_lapor' => $id));
		redirect('Utama');
	}
	
 
}

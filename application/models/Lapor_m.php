<?php 

class Lapor_m extends CI_Model
{
	
	public function get()
	{
		$this->db->select('*');
		$this->db->from('lapor');
		$query = $this->db->get();
		return $query;
	}
}

 ?>
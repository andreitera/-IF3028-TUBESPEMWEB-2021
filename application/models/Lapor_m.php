<?php 

class Lapor_m extends CI_Model
{
	
	public function get()
	{
		$this->db->select('*');
		$this->db->from('db_lapor');
		$query = $this->db->get();
		return $query;
	}
}

 ?>
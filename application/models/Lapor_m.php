<?php 

class Lapor_m extends CI_Model
{
	
	public function get()
	{
		$query = $this->db->query("SELECT * FROM lapor");
		return $query;
	}
}

 ?>
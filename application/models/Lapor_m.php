<?php 

class Lapor_m extends CI_Model
{
	
	public function get()
	{
		$query = $this->db->query("SELECT * FROM lapor ORDER BY waktu DESC");
		return $query;
	}
}

 ?>
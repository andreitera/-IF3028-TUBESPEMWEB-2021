<?php
class Cari_model extends CI_model{

    public function cariData($keyword = null)
	{
		if($keyword){
			$this->db->like('isi', $keyword);
			$this->db->or_like('aspek',$keyword);
		}
		$this->db->order_by("id", "desc");

		return $this->db->get('lapor',4)->result_array();
    }


}

?>
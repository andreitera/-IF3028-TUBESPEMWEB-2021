<?php
class Ajaxsearch_model extends CI_Model
{
	function fetch_data($query)
	{
		$this->db->select("*");
		$this->db->from("tbl_lapor");
		if($query != '')
		{
			$this->db->like('judul', $query);
			$this->db->or_like('laporan', $query);
			$this->db->or_like('aspek', $query);
			$this->db->or_like('created_at', $query);
		}
		$this->db->order_by('id', 'DESC');
		return $this->db->get();
	}

	public function insertUser($table, $data)
    {
        return $this->db->insert($table, $data);
	}
	
	public function uploadArticle($table, $data)
    {
        return $this->db->insert($table, $data);
	}
	
	public function getArticle()
    {
        return $this->db->select("*")->from("tbl_customer")->order_by("created_at", "desc")->get();
	}
	
	public function deleteArticle($data, $table)
    {
        $this->db->where($data);
        $this->db->delete($table);
	}
	
	public function selengkapnya($table, $data)
    {
        return $this->db->get_where($table, $data);
	}
	
	public function delete($data, $table)
    {
        $this->db->where($data);
        $this->db->delete($table);
	}
	
	public function updateL($table, $data, $where)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

}
?>
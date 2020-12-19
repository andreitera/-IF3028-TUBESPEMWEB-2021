<?php
class Model_lapor extends CI_model{

    public function __construct()
    {
        $this->load->database();
    }

    public function get_news($slug = FALSE){

        if ($slug === FALSE){
            $query = $this->db->get('lapor');
            return $query->result_array();
        }
        $query = $this->db->get_where('laporan', array('laporan' => $slug));
        return $query->row_array();
    }

    public function cariData($keyword = null)
	{
		if($keyword){
			$this->db->like('laporan', $keyword);
			$this->db->or_like('aspek',$keyword);
		}
		$this->db->order_by("id", "desc");

		return $this->db->get('lapor',4)->result_array();
    }
    
    public function getDetailLaporan(){
        $id = $_GET["detail_id"];
        $query = $this->db->get_where('lapor', array('id' => $id));
        return $query->result_array();
    }

    public function getHapusLaporan(){

        $id = $_GET["hapus_id"];
        $this->db->delete('simple_lapor', array('id' => $id));
        echo "<script>alert('data terhapus');</script>";
        echo "<script>location='home';</script>"; 
       
    }
   

}

?>

<?php

	class News_model extends CI_Model
	{
		
		public function __construct()
		{
			$this->load->database();
		}

		public function get_news($slug = FALSE){

			if ($slug === FALSE){
				$query = $this->db->get('simple_lapor');

				return $query->result_array();
			}

			$query = $this->db->get_where('laporan', array('laporan' => $slug));

			return $query->row_array();
		}
	}
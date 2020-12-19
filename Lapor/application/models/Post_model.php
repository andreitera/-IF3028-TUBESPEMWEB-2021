<?php 
	class Post_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_posts($id = FALSE){
			if ($id == FALSE) {
				$this->db->order_by('id', 'DESC');
				$query = $this->db->get('simple_lapor');
				return $query->result_array();
			}
			$query = $this->db->get_where('simple_lapor', array('id' => $id));
			return $query->row_array();
		}

		public function create_post($lampiran){
			$data = array(
				'deskripsi' => $this->input->post('deskripsi'),
				'lampiran' => $lampiran,
				'kategori' => $this->input->post('kategori')
			);

			return $this->db->insert('simple_lapor', $data);
		}

		public function delete_post($id){
			$this->db->where('id', $id);
			$this->db->delete('simple_lapor');
			return true;
		}

		public function update_post($lampiran){
			$data = array(
				'deskripsi' => $this->input->post('deskripsi'),
				'lampiran' => $lampiran,
				'kategori' => $this->input->post('kategori'),
			);

			$this->db->where('id', $this->input->post('id'));
			return $this->db->update('simple_lapor', $data);
		}
	}
 ?>
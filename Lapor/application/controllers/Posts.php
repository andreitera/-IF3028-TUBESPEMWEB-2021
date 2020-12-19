<?php 
	class Posts extends CI_Controller{
		public function index(){
			
			$data['title'] = 'Latest Posts';

			$data['posts'] = $this->Post_model->get_posts();

			$this->load->view('templates/header');
			$this->load->view('posts/index', $data);
			$this->load->view('templates/footer');
		}
		
		public function view($id = NULL){
			$data['post'] = $this->Post_model->get_posts($id);

			if (empty($data['post'])) {
				show_404();
			}

			$data['title'] = 'SIMPLE LAPOR';

			$this->load->view('posts/view', $data);
		}

		public function create(){
			$data['title'] = 'Create Post';
			
			$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|min_length[20]');
			$this->form_validation->set_rules('kategori', 'Kategori', 'required');
			if (empty($_FILES['userfile']['name'])) {
					$this->form_validation->set_rules('userfile', 'Document', 'required');
			}


			if ($this->form_validation->run() == FALSE) {
				$this->load->view('posts/create', $data);
			}else{
				$config['upload_path'] = './assets/lampiran/';
				$config['allowed_types'] = 'gif|jpg|png|doc|docx|xls|xlsx|ppt|pptx|pdf';
				

				$this->load->library('upload', $config);

				$data = array('upload_data' => $this->upload->data());
				$lampiran = $_FILES['userfile']['name'];

				$this->Post_model->create_post($lampiran);
				redirect($_SERVER['HTTP_REFERER'].'../../../');
			}
		}

		public function delete($id){
			$this->Post_model->delete_post($id);
			redirect($_SERVER['HTTP_REFERER'].'../../../');
		}

		public function edit($id){
			$data['post'] = $this->Post_model->get_posts($id);

			if (empty($data['post'])) {
				show_404();
			}

			$data['title'] = 'Edit Post';

			$this->load->view('posts/edit', $data);
		}

		public function update(){
			$data['title'] = 'Update Post';
			
			$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|min_length[20]');
			$this->form_validation->set_rules('kategori', 'Kategori', 'required');
			if (empty($_FILES['userfile']['name'])) {
					$this->form_validation->set_rules('userfile', 'Document', 'required');
			}

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('posts/edit', $data);
			}else{
				$config['upload_path'] = './assets/lampiran/';
				$config['allowed_types'] = 'gif|jpg|png|doc|docx|xls|xlsx|ppt|pptx|pdf';

				$this->load->library('upload', $config);

				$data = array('upload_data' => $this->upload->data());
				$lampiran = $_FILES['userfile']['name'];

			$this->Post_model->update_post($lampiran);
			redirect($_SERVER['HTTP_REFERER'].'../../../../');

			}
		}
	}
 ?>
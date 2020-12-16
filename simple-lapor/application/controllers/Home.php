<?php
class Home extends CI_Controller
{
  public function index()
  {
  	if ($this->session->has_userdata('logged_in')){
  		redirect(base_url('home/user_logged_in'));
  	}else{
  		$this->load->model('M_comment');
  		$data['result'] = $this->M_comment->showAllComments();
		$data['title'] = "Halaman Utama";
  		$this->load->view('templates/index_header', $data)
    	$this->load->view('home/index', $data);
    	$this->load->view('templates/footer');
  }
}

public function user_logged_in(){
	$this->load->model('M_comment');
  	$data['result'] = $this->M_comment->showAllComments();
	$data['title'] = "Halaman Utama";
  	$this->load->view('templates/userloggin_header', $data)
    $this->load->view('home/user_logged_in', $data);
    $this->load->view('templates/footer');
}

public function commentDetail(){

    $this->load->model('M_comment');
    $data['comm_id'] = $this->uri->segment(3);
    $data['result'] = $this->M_comment->showCommDetail($data['comm_id']);
    $this->load->view('home/comm_detail', $data);

}
 public function logOut()
  {
    $this->session->sess_destroy();
    redirect(base_url('home'));
  }
  public function myLapor()
  {
    $this->load->model('M_comment');
    $data['result'] = $this->M_comment->myLapor();
    $this->load->view('home/myLapor', $data);
  }

  public function deleteComm()
  {
    $comm_id = $this->uri->segment(3);
    $this->load->model('M_comment');
    $this->M_comment->deleteComment($comm_id);
    redirect('home');
  }

  public function updateComm()
  {
    $comm_id = $this->uri->segment(3);
    $this->load->model('M_comment');
    $data['result'] = $this->M_comment->showCommDetail($comm_id);
    // var_dump($data);
    $this->load->view('home/edit_lapor', $data);
    if (isset($_POST['edit'])) {
      $this->M_comment->editComment($comm_id);
    }
  }
}

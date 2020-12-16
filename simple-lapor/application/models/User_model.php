<?php
class User_model extends CI_model
{
  public function getAllUser()
  {
    $users = $this->db->get('user');
    return $users->result_array();
  }

  public function insertUserData()
  {
    $data = [
      'user_id' => '',
      'fullname' => htmlspecialchars($this->input->post('fullname', true)),
      'password' => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
      'image' => "default.jpg",
      'email' => htmlspecialchars($this->input->post('email', true)),
      'role_id' => 1
    ];
    // var_dump($data);
    // die;

    $this->db->insert('user', $data);
  }

  public function logOut()
  {
    $this->session->unset_userdata();
    redirect(base_url('auth'));
  }

  public function email_verify()
  {
    $email = $this->input->post('email');
    $data = $this->db->query("select email from user where email = '$email'")->result_array();
    $temp = 0;

    foreach ($data as $d) {
      if ($d['email'] == $email) {
        $temp = true;
      }
    }
    return $temp;
  }

  public function matching_password()
  {
    $firstpswd = $this->input->post('password');
    $secondpswd = $this->input->post('password2');

    if ($firstpswd == $secondpswd) {
      return 1;
    } else {
      return 0;
    }
  }

  public function search()
  {
    $keyword = $this->input->post('keyword');
    var_dump($keyword);
    die;
    $data = $this->db->query("select * from user where fullname like %'$keyword'%")->result_array();
    return $data;
  }
}

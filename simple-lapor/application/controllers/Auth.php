<?php
class Auth extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('User_model');
  }

  private function _login()
  {
    if ($this->session->has_userdata('logged_in')) {
      redirect(base_url('home/user_logged_in'));
    }
    $email = $this->input->post('email');
    $password = $this->input->post('password');
    // cek email terdaftar
    if (isset($_POST['login'])) {
      $user = $this->db->get_where('user', ['email' => $email])->row_array();
      // $user_data = "select * from user natural join comment natural join user_role where email='$email'";
      // var_dump($user);
      // die;

      if (!empty($user)) {
        if (password_verify($password, $user['password'])) {

          // var_dump($user_data);
          // die;

          $this->session->set_userdata('logged_in', true);
          $this->session->set_userdata('id', $user['user_id']);
          $this->session->set_userdata('fullname', $user['fullname']);
          // var_dump($this->session->userdata());
          // die;
          redirect(base_url('home/user_logged_in'));
        } else {
          echo "<script>
                    alert('Password Anda Salah');
                </script>
            ";
        }
      } else {
        // redirect('auth/register');
        echo "<script>
                    alert('Pengguna Tidak Ditemukan');
              </script>
            ";
      }
    }
  }

  public function index()
  {
    $data['title'] = "User Login";
    // $data['users'] = $this->User_model->getAllUser();
    $this->load->view('templates/login_header', $data);
    $this->load->view('auth/login', $data);
    $this->load->view('templates/footer', $data);

    $this->_login();
  }

  public function register()
  {
    $data['title'] = "Register page";
    $this->load->view('templates/register_header', $data);
    $this->load->view('auth/register', $data);
    $this->load->view('templates/footer', $data);

    // $data = [
    //   'user_id' => '',
    //   'username' => htmlspecialchars($this->input->post('username', true)),
    //   'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
    //   'image' => "default.jpg",
    //   'email' => htmlspecialchars($this->input->post('email', true)),
    //   'role_id' => 1
    // ];

    if (isset($_POST['register'])) {
      $result = $this->User_model->email_verify();

      if ($result == 1) {
        echo "<script>
                    alert('Email telah terdaftar');
              </script>
            ";
      } else {
        $match_pswd = $this->User_model->matching_password();

        if ($match_pswd == 1) {
          $this->User_model->insertUserData();
          redirect('auth');
        } else {
          echo "<script>
                    alert('Password Tidak Sama');
              </script>
            ";
        }
      }
    }
  }
}

<?php
  /**
   *
   */
  class Model extends CI_model
  {
    public function getakun($username,$password)
    {
      return $this->db->query("SELECT * FROM user WHERE username='$username' AND password='$password'");
    }
    public function isLoginExpired()
    {
      $login_session_duration = 500000;
      $current_time = time();
      if (isset($_SESSION['loggedin_time']) and isset($_SESSION['username']))
      {
        if ((time() - $this->session->userdata('loggedin_time')) > $login_session_duration)
        {
          return true;
        }
      }
      return false;
    }
  }
 ?>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class Model_data extends CI_model
{
  public function getdataadmin()
  	{
  		$data = "SELECT * FROM user";
  		return $this->db->query($data);
  	}

    public function getdatalapor()
    {
      $data = "SELECT * FROM `laporan` JOIN user WHERE laporan.pelapor = user.id";
      return $this->db->query($data)->result();
    }
}
?>

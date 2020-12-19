<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Input_model extends CI_Model{
	private $_table = "laporan";
    public function tambah($data,$table){    
        return $this->db->insert($table, $data);
    }

}
?>
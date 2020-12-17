<?php
class Upload_model extends CI_Model {

    // this function will be called instantenneously
    
        public function __construct()
        {
            parent::__construct();
    
            $this->load->database();
        }
        public function upload_path(){
    
    // ::::::::UNDER CONSTRUCTION::::::::::
    
            $data = array(
                'path' =>$upload_data['full_path'],
    
                );
    
            return $this->db->insert('upload', $data);
    
    
        }
    
    }

?>
<?php
    class M_data extends CI_model {
        function tampil_data(){
            return $this->db->get('lapor');
        }

        function input_data($data, $table){
            $this->db->insert($table,$data);
        }
    }
?>
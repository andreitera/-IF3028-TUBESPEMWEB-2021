<?php
    class M_data extends CI_model {
        function tampil_data(){
            return $this->db->get('lapor');
        }

        function input_data($data, $table){
            $this->db->insert($table,$data);
        }
        
        function hapus_data($where,$table){
            $this->db->where($where);
            $this->db->delete($table);
        }

        function edit_data($where, $table){
            return $this->db->get_where($table,$where);
        }

        function update($where,$data,$table){
            $this->db->where($where);
            $this->db->update($table,$data);
        }
        
    }
?>
<?php

class lapor_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('menu_model');
        $this->load->helper('url_helper');
    }

    public function tambah()
    {
        /*$data = [
            "isi" =>  $this->input->post('isi'),
            "aspek" => $this->input->post('aspek'),
            "waktu" => date("Y-m-d H:i:s"),
            //"file" => $lampiran
        ];*/

        $isi = $this->input->post('isi');
        $aspek = $this->input->post('aspek');
        $lampiran = $_FILES['berkas']['name'];

        if ($lampiran = '') {
        } else {
            $config = array(
                'upload_path' => './file/',
                'allowed_types' => 'gif|jpg|png',
                'file_name' => date('Y-m-d H-i-s', time()),
            );
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('berkas')) {
            } else {
                $lampiran = $this->upload->data('file_name');
            }

            
            $data = array(
                'isi' => $isi,
                'aspek' => $aspek,
                'file' => $lampiran,
                'waktu' => date('Y-m-d H-i-s', time())
            );

            $this->db->insert('laporan', $data);
            redirect('menu');
        }
    }
}

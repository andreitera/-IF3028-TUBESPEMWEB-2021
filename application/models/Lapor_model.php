<?php
class Lapor_model extends CI_Model
{
    public function getlapor()
    {
        return $this->db->get('lapor')->result_array();
    }

    public function tambah()
    {

        date_default_timezone_set('Asia/Jakarta');
        $tanggal = date("Y-m-d H:i:s");

        $file = $_FILES['File'];
        if ($file = '') {
        } else {
            $config['upload_path'] = './asset/file';
            $config['allowed_types'] = 'jpeg|jpg|png|gif|pdf';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('File')) {
                echo "gagal";
            } else {
                $file = $this->upload->data('file_name');
            }
        }

        $data = [
            "isi" => $this->input->post('isi'),
            "aspek" => $this->input->post('aspek'),
            "tanggal" => $tanggal,
            "file" => $file
        ];

        $this->db->insert('lapor', $data);
    }
}

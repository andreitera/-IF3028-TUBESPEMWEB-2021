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
    public function tambah($namauser)
    {
        if ($namauser=='admin') {
          $username=1;
        } elseif ($namauser=='user') {
          $username=4;
        }
        date_default_timezone_set('Asia/Jakarta');
        $tanggal = date("Y-m-d H:i:s");
        $file = $_FILES['File'];
        if ($file = '') {
        } else {
            $config['upload_path'] = './assets/file';
            $config['allowed_types'] = 'xlsx|xls|pdf|doc|docx|ppt|pptx';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('File')) {
                echo "gagal";
            } else {
                $file = $this->upload->data('file_name');
            }
        }

        $data = [
            "id_pelapor"=>$username,
            "isi_laporan" => $this->input->post('isi'),
            "aspek" => $this->input->post('aspek'),
            "created_at" => $tanggal,
            "file" => $file
        ];

        $this->db->insert('laporan', $data);
    }
}
?>

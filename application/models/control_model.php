<?php defined('BASEPATH') or exit('No direct script access allowed');

class Control_model extends CI_Model
{
    public function index()
    {
    }

    // proses CREATE ==========================================================
    public function upload()
    {
        $config['upload_path'] = './lampiran/';
        $config['allowed_types'] = 'jpg|png|jpeg|doc|docx|xls|xlsx|ppt|pptx|pdf';
        $config['max_size']  = '2048';
        $config['remove_space'] = TRUE;

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('lampiran')) {
            return array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
        }
    }

    public function create($upload)
    {
        $object = array(
            'laporan' => $this->input->post('laporan'),
            'aspek' => $this->input->post('aspek'),
            'lampiran' => $upload['file']['file_name'],
            'ukuran_file' => $upload['file']['file_size'],
            'tipe_file' => $upload['file']['file_type']
        );

        return $this->db->insert('laporan', $object);
    }


    // proses READ ==========================================================
    public function read()
    {
        $this->db->order_by('waktu', 'DESC');
        return $this->db->get('laporan')->result();
    }

    public function view_by($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('laporan')->row();
    }

    // proses UPDATE ==========================================================
    public function update($id, $upload)
    {
        $object = array(
            'laporan' => $this->input->post('laporan'),
            'aspek' => $this->input->post('aspek'),
            'lampiran' => $upload['file']['file_name'],
            'ukuran_file' => $upload['file']['file_size'],
            'tipe_file' => $upload['file']['file_type']
        );

        return $this->db->update('laporan', $object, array('id' => $id));
    }

    // proses DELETE ==========================================================
    public function delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('laporan');
    }

    // proses SEARCH ==========================================================
    public function search_laporan($keyword)
    {
        $this->db->like("laporan", $keyword);
        $this->db->order_by("waktu", "desc");
        $query = $this->db->get("laporan");
        return $query->result();
    }
}

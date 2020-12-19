<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lapor extends CI_Controller {

	public function add() {
        $this->load->model('Laporan');

		$laporan = array(
            'id_kategori' => $this->input->post('add_kategori'),
            'user_token' => $this->session->userdata('user_token'),
            'nama' => $this->input->post('add_nama'),
            'judul' => $this->input->post('add_judul'),
            'isi' => $this->input->post('add_isi'),
            'is_anonim' => $this->input->post('add_is_anonim'),
            'is_public' => $this->input->post('add_is_public')
        );

        if(empty($_FILES['add_foto']['name'])) {
            if($this->Laporan->add($laporan)) {
                return 'Berhasil lapor!';
            } else {
                return 'Maaf, laporan gagal dibuat.';
            }            
        } else {
            $uniq_id = uniqid();
            $laporan[] = $uniq_id . '.jpg';

            $config['upload_path'] = './resources/foto/';
            $config['allowed_types'] = 'jpg|png';
            $config['file_name'] = $uniq_id;
            $config['max_size'] = 4096;

            $this->load->library('upload', $config);
            if($this->upload->do_upload('add_foto')) {
                if($this->Laporan->add($laporan)) {
                    return 'Berhasil lapor!';
                } else {
                    return 'Maaf, laporan gagal dibuat.';
                }
            } else {
                return 'Maaf, foto yang diunggah tidak sesuai dengan ketentuan.';
            }
        }
    }
    
    public function update() {
        $this->load->model('Laporan');

        $laporan = array(
            'id_kategori' => $this->input->post('update_kategori'),
            'nama' => $this->input->post('update_nama'),
            'judul' => $this->input->post('update_judul'),
            'isi' => $this->input->post('update_isi')
        );

        $id = $this->input->post('update_id');
        $user_token = $this->session->userdata('user_token');

        if($this->Laporan->update($id, $user_token, $laporan)) {
            return 'Berhasil mengedit laporan!';
        } else {
            return 'Maaf, gagal mengedit laporan.';
        }
    }

    public function delete() {
        $this->load->model('Laporan');

        $id = $this->input->post('delete_id');
        $user_token = $this->session->userdata('user_token');

        if($this->Laporan->update($id, $user_token)) {
            return 'Berhasil menghapus laporan!';
        } else {
            return 'Maaf, gagal menghapus laporan.';
        }
    }
}

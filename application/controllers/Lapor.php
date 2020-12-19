<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lapor extends CI_Controller {

    public function load() {
        $this->load->model('Laporan');
        $this->load->model('Kategori');

        $result = $this->Laporan->get();

        $html = '';
        foreach($result as $row) {
            if($row['is_public']) {
                $html .= '
                    <div class="box">
                        <h3>' . $row['judul'] . '</h3>
                        <small>' . $this->Kategori->get_by_id($row['id_kategori']) . '</small>
                        <h4>dari ' . (($row['is_anonim'])? 'Anonim' : $row['nama']) . '</h4>
                        <p>' . $row['isi'] . '</p>
                ';

                if($row['foto'] != '') {
                    $html .= '
                    <img src="' . base_url() . 'resources/foto/' . $row['foto'] . '" width="300" height="200">
                    ';
                }

                if($row['user_token'] == $this->session->userdata('user_token')) {
                    $html .= '
                        <form method="POST" id="form_delete' . $row['id'] . '">
                            <input type="hidden" name="delete_id" value="' . $row['id'] . '">
                        </form>
                        <button onclick="del(\'' . $row['id'] . '\')">Hapus</button>
                        <button onclick="upd(\'' . $row['id'] . '\')">Edit</button>
                    ';
                }
                
                $html .= '
                    </div>
                ';
            }
        }

        echo $html;
    }

	public function add() {
        $this->load->model('Laporan');

		$laporan = array(
            'id_kategori' => $this->input->post('add_kategori'),
            'user_token' => $this->session->userdata('user_token'),
            'nama' => $this->input->post('add_nama'),
            'judul' => $this->input->post('add_judul'),
            'isi' => $this->input->post('add_isi'),
            'foto' => '',
            'is_anonim' => ($this->input->post('add_is_anonim') == NULL)? false : true,
            'is_public' => ($this->input->post('add_is_public') == NULL)? true : false
        );

        var_dump($laporan);

        if($this->Laporan->add($laporan)) {
            return 'Berhasil lapor!';
        } else {
            return 'Maaf, laporan gagal dibuat.';
        } 

        if(empty($_FILES['add_foto']['name'])) {
            if($this->Laporan->add($laporan)) {
                return 'Berhasil lapor!';
            } else {
                return 'Maaf, laporan gagal dibuat.';
            }            
        } else {
            $uniq_id = uniqid();
            $laporan['foto'] = $uniq_id . '.jpg';

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

        if($this->Laporan->delete($id, $user_token)) {
            return 'Berhasil menghapus laporan!';
        } else {
            return 'Maaf, gagal menghapus laporan.';
        }
    }
}

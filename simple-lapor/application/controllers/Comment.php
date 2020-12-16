<?php
class Comment extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_comment');
    }
    public function index()
    {
        if ($this->session->has_userdata('logged_in')) {
            $data['title'] = "Tambah Komentar/Laporan";
            $this->load->view('templates/comm_header', $data);
            $this->load->view('comment/index.php', $data);
            $this->load->view('templates/footer');

            if (isset($_POST['submit'])) {
                $this->M_comment->addComment();
                echo "<script>
                    alert('Report / Comment added successfully!');
                    window.location.href= '" . base_url('home/user_logged_in') . "'
                    </script>
                ";
            }
        } else {
            echo "<script>
                    alert('anda belum login!');
                    window.location.href=('" . base_url('auth') . "');
                </script>
            ";
        }
    }

    public function _uploadFile()
    {
        $config['upload_path']          = base_url('assets/doc');
        $config['allowed_types']        = 'gif|jpg|png}pdf|doc|docx|xls|xcls';
        $config['max_size']             = 5000;

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('lampiran')) {
            echo " <script>
            alert('berhasil');
            </script>";
        } else {
            echo " <script>
            alert('gagal');
            </script>";
        }
    }
}

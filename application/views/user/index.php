    <table border="0" cellpadding="10" cellspacing="1" width="100%">
      <tr>
        <td align="center">User Dashboard</td>
      </tr>
      <tr>
        <td>Selamat Datang <?= $this->session->userdata('username'); ?> klik disini untuk <a href="<?= base_url('index.php/user/logout');?>" title="logout">Logout</td>
      </tr>
    </table>

    <!-- <table border="0" cellpadding="10" cellspacing="1" width="100%">
      <tr>
        <td align="center">User Dashboard</td>
      </tr>
      <tr>
        <td>Selamat Datang <?= $this->session->userdata('username'); ?> klik disini untuk <a href="<?= base_url('index.php/user/logout');?>" title="logout">Logout</td>
      </tr>
    </table> -->
    <div class="content">
      <button class="button button1" onclick="location.href='<?php echo base_url();?>crud/buat'">Buat Laporan</button>
      <?php foreach ($data as $key): ?>
      <?php if ($key->username=='user'): ?>
      <div class="card">
        <H2><?= $key->username; ?> </H2>
        <p><?= $key->isi_laporan; ?></p>
        <img src="./assets/file/<?= $key->file; ?>">
      </div>
      <?php endif; ?>
      <?php endforeach; ?>
      <div>
        <button class="button button1" onclick="location.href='<?php echo base_url();?>user/logout'">Logout</button>
      </div>
    </div>
  </div>

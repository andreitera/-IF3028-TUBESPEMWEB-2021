    <!-- <table border="0" cellpadding="10" cellspacing="1" width="100%">
      <tr>
        <td align="center">User Dashboard</td>
      </tr>
      <tr>
        <td>Selamat Datang <?= $this->session->userdata('username'); ?> klik disini untuk <a href="<?= base_url('index.php/user/logout');?>" title="logout">Logout</td>
      </tr>
    </table> -->
  <button class="button button1" onclick="location.href='<?php echo base_url();?>crud/buat'">Buat Laporan</button>
    <div class="content">
      <?php foreach ($data as $key): ?>
      <?php if ($key->username=='user'): ?>
      <div class="card">
        <H2><?= $key->username; ?> </H2>
        <p><?= $key->isi_laporan; ?></p>
        <img src="./assets/file/<?= $key->file; ?>">
        <p> Dibuat pada tanggal (<?= $key->created_at; ?>)</p>
        <p> Diupdate pada tanggal (<?= $key->updated_at; ?>)</p>
      </div>
      <button class="button button1" onclick="location.href='<?php echo base_url() ?>Home/buka/<?= $key->id_laporan; ?>'"><h4 class="detail">Selengkapnya >>></h4></button>
      <button class="button button1" onclick="location.href='<?php echo base_url() ?>Home/edit/<?= $key->id_laporan; ?>'"><h4 class="detail">Ubah >>></h4></button>
      <a href="<?php echo base_url() ?>crud/hapus/<?= $key->id_laporan; ?>"onclick="return confirm ('Apakah yakin ingin menghapus data ini ?');"><h4 class="detail">Hapus >>></h4></a>
      <?php endif; ?>
      <?php endforeach; ?>
      <div>
        <button class="button button1" onclick="location.href='<?php echo base_url();?>user/logout'">Logout</button>
      </div>
    </div>
  </div>

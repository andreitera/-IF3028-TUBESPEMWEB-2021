      <div class="content">
        <button class="button button1" onclick="location.href='<?php echo base_url();?>crud/buat'">Buat Laporan</button>
        <?php foreach ($data as $key): ?>
        <?php if ($key->username=='admin'): ?>
        <div class="card">
          <H2><?= $key->username; ?> </H2>
          <p><?= $key->isi_laporan; ?></p>
          <img src="./assets/file/<?= $key->file; ?>">
          <a href="<?php echo base_url() ?>Home/edit/<?= $key->id_laporan; ?>"><h4 class="detail">Ubah >>></h4></a>
        </div>
        <?php endif; ?>
        <?php endforeach; ?>
        <div>
          <button class="button button1" onclick="location.href='<?php echo base_url();?>user/logout'">Logout</button>
        </div>
      </div>
    </div>

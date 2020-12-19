		<!-- <input type="text" name="cari" id="cari" placeholder="ketik kata kunci pencarian"></input> -->
<button class="button button1" onclick="location.href='<?php echo base_url();?>crud/buat'">Buat Laporan</button>
      <div class="content" id="konten">
        <?php foreach ($data as $key): ?>
        <?php if ($key->username=='admin'): ?>
        <div class="card">
          <H2><?= $key->username; ?> </H2>
          <p><?= $key->isi_laporan; ?></p>
          <p> Dibuat pada tanggal (<?= $key->created_at; ?>)</p>
          <p> Diupdate pada tanggal (<?= $key->updated_at; ?>)</p>
          <img src="./assets/file/<?= $key->file; ?>">
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

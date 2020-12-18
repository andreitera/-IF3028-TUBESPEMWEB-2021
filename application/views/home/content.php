
<?php foreach ($data as $key): ?>
  <div class="card">
     <H2><?= $key->username; ?> </H2>
     <p><?= $key->isi_laporan; ?></p>
     <img src="./assets/image/<?= $key->image; ?>">
  </div>
<?php endforeach; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/master.css" type="text/css">
    <title>LAPOR!</title>
  </head>
  <body>
    <h1><center>SIMPLE LAPOR!</center></h1>
    <div class="cari">
      <form action= "<?php echo base_url('cari'); ?>" method="get">
        <center><input class="pencarian" type="text" name="cari">
        <input class="button" type="submit" value="Cari"></center><br>
      </form>
    </div>
    <div class="container">
      <h3>Hasil Pencarian</h3>
      <a class="back" href= <?php echo base_url();?>>Kembali</a>
      <hr>
      <?php foreach ($result as $cari): ?>
        <?php if (strlen($cari['kolom_komentar'])<=200) { ?>
          <p><?php echo $cari['kolom_komentar']; ?></p>
        <?php } else { ?>
          <p><?php echo substr($cari['kolom_komentar'],0,200).'....'; ?></p>
        <?php } ?>
        <br>
        <div class="lampiran">Lampiran : <?php echo $cari['lampiran']; ?></div>
        <a class="detail" href= <?php echo base_url().'index.php/laporan/view/'.$cari['id_laporan'];?>>Lihat Detail ></a>
        <div class="waktu">Waktu : <?php echo $cari['waktu']; ?></div>
        <br>
        <hr>
      <?php endforeach; ?>
    </div>
  </body>
</html>

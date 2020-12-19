<?php/* include 'koneksi.php'; */?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/master.css" type="text/css">
  </head>
<body>
  <h1><center>Layanan Aspirasi dan Pengaduan Mahasiswa ITERA</center></h1>
    <div class="container">
    <h3>Detail Laporan/Komentar</h3>
    <a class="back" href= <?php echo base_url();?>>Kembali</a>
    <hr>
      <?php echo $laporan['kolom_komentar'];?>
      <div class="arsip">
      <span>Lampiran:</span>
      <img src="<?php echo base_url().'/gambar/'. $laporan['lampiran']; ?>" width="200  " height="200">
      <br>
      <br>
      <span>Aspek : <?php echo $laporan['aspek_pelaporan'];?></span><br>
      <span>Waktu : <?php echo $laporan['waktu']; ?></span>
      <?php $id= $laporan['id_laporan']; ?>
      <a class="hapus" href="<?php echo base_url().'index.php/laporan/hapus/'.$laporan['id_laporan'];?>">Hapus Laporan</a>
      </a>
      <a class="edit" href="<?php echo base_url().'index.php/laporan/edit/'.$laporan['id_laporan'];?>">Edit Detail</a>
      <hr>
      </div>
    </div>

</body>
</html>

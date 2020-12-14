<!DOCTYPE html>
<html>
<head>
	<title>Laporan|Lapor.Itera</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/style.css') ?>">
</head>
<body>
  <h1>Simple Laporan</h1>

  <legend>Detail Laporan</legend>
  <hr>

  <div class="artikel">
  <p><?php echo $berita->isi ?></p>
  </div>

  <br>

  <div class="Lampiran">
    <label>Lampiran : </label>
    <a href=""><img src="<?php echo base_url('asset/file/'.$berita->file) ?>"></a>
  </div>
   
  
  <ul>
    <li>Waktu: <?php echo $berita->waktu ?></li>
    <li>Aspek: <?php echo $berita->aspek ?></li>
    <li style="float: right;"><a href="<?php echo base_url('laporan/delete/'.$berita->id_laporan) ?>">Hapus Laporan/Komentar</a></li>
  </ul>
  <br>
  <br>
  <hr>



</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title>Lapor.Itera</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/style.css') ?>">
</head>
<body>
  <h1> SIMPLE Laporan </h1>

  <form>
      <div class="col-75">
        <input type="search" name="search" placeholder="Cari...">
      </div>
      <div class="col-25">
        <input type="submit" value="cari" name="cari">
      </div>
  </form>
<br>
  <a href="<?php echo base_url('Tambah') ?>"><h3>Buat laporan/ komentar</h3></a>
<br>
<br>
  <legend>laporan/komentar terakhir</legend>
  <hr>
  
  <?php foreach ($berita as $berita) {?>
  <div class="Artikel">
    <p><?php echo $berita->isi ?></p>
    <br>

    <ul>
    <li>Lampiran: <?php echo $berita->file ?></a></li>
    <li>Waktu: <?php echo $berita->waktu ?></li>
    <li style="float: right;"><a href="<?php echo base_url('home/read/'.$berita->id_laporan) ?>">lihat selengkapnya></a></li>
    </ul>
    <br>
    <br>
    <hr>
    <?php } ?>
  </div>
<br>
<br>
      <div class="page">
        <?php if (isset($page) && $total > $limit) {
               $page;
        }?>
        </div>

  


</body>
</html>

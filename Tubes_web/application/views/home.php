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
  <a href="<?php echo base_url('Tambah') ?>"><h3>Buat laporan/komentar</h3></a>
<br>
<br>
  <legend>laporan/komentar terakhir</legend>
  <hr>
  <div class="Artikel">s
    <p>isi berita</p>
    <br>
    <ul>
    <li>Lampiran: </a></li>
    <li>Waktu: </li>
    <li style="float: right;"><a href="<?php echo base_url('Laporan')?>">lihat selengkapnya></a></li>
    </ul>
    <br>
    <br>
    <hr>
  </div>
<br>
<br>
      <div class="page">
        <p>page</p>
        </div>

  


</body>
</html>

<!DOCTYPE html>
<html>

<head>
    <title>SIMPLE LAPOR!</title>
    <!-- file css ada di asset/css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/reset.css">
</head>

<body>
    <div class="container">
        <h1 class="judul">SIMPLE LAPOR !</h1>
        <form class="pencarian" action="index.php">
            <!-- <input type="text" name="cari" id="cari" placeholder="Masukkan kata kunci pencarian ..."> </input> -->
            <input class="input-cari" type="text" name="cari" id="cari" placeholder="Masukkan kata kunci pencarian ..."> </input>
            <button type="submit">Cari</button>
        </form>
        <br><br><br>
        <a href="<?php echo base_url('home/tambah') ?>">
            <h3>Tambah Laporan / Komentar +</h3>
        </a>
        <h4>Laporan / Komentar Terakhir</h4>
        <hr />
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sistem Lapor!</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>
<body>
    
    <h1 align="center">SIMPLE LAPOR!</h1>

    <form align="center" action="#" method="POST">
        <input type="text" name="cari">
        <button type="submit" name="submit"><i class="fa fa-search"> CARI</i></button>
      </form>
      <p align="center">Buat Laporan/Komentar
        <i class="fa fa-plus-square"></i></p><br>
      <label>Laporan/Komentar Terakhir</label>
  <hr>
      
          <p align="left"> <i class="fa fa-user-circle"></i> Nama:
          <i class="fa fa-pencil"></i> Judul: </p>
          <p align="justify">Isi</p>
            <p align="left">
            <i class="fa fa-folder"></i>Lampiran:
          <span>
            <i class="fa fa-calendar"></i>Waktu:
            Lihat Selengkapnya<i class="fa fa-arrow-right"></i></span>
          </p>
        
  <hr> 
</body>
</html>
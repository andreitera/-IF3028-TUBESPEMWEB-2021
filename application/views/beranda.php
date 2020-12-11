<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/beranda.css" type="text/css" media="screen">
    <style>
      .header {
        position : relative;
        margin : auto;
      }
      .judul {
        color: #f2f2f2;
        font-size: 80px;
        padding: 0px 12px;
        position: absolute;
        bottom: 0px;
        width: 100%;
        text-align: center;
      }
      .judul img {
        vertical-align: middle;
      }
    </style>
    <title>Lapor ITERA</title>
  </head>
  <body>
    <div class="header">
      <div class="slides">
        <img src="assets/embung.jpg" width="100%" height="350px" alt="">
        <div class="judul">
          <img src="assets/logo2.png" width="100px" height="100px" alt="">
          <br>LAPOR ITERA
        </div>
      </div>
    </div>
    <div class="topnav">
      <a href="<?php echo base_url('beranda'); ?>">BERANDA</a>
      <a href="<?php echo base_url('laporan'); ?>">LAPORAN</a>
      <a onclick="document.getElementById('id01').style.display='block'">MASUK</a>

      <div id="id01" class="modal">
          <form class="modal-content animate" action="<?php echo base_url('authm/login'); ?>" method="post">
            <div class="imgcontainer">
              <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Tutup">&times;</span>
              <img src="assets/avatar.png" alt="Avatar" class="avatar">
            </div>
            <div class="container-form">
              <label for="nim"><b>NIM</b></label><br><br>
              <input type="number" placeholder="Masukkan NIM" name="nim" required autocomplete="off">
              <br><br><label for="psw"><b>Kata Sandi</b></label>
              <input type="password" placeholder="Masukkan kata Sandi" name="password" required>
              <button type="submit">Masuk</button>
            </div>
          </form>
        </div>
        <a onclick="document.getElementById('id02').style.display='block'">DAFTAR</a>
        <div id="id02" class="modal">
            <form class="modal-content animate" action="<?php echo base_url('guest/regis') ?>" method="post">
              <div class="imgcontainer">
                <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Tutup">&times;</span>
                <img src="assets/avatar.png" alt="Avatar" class="avatar">
              </div>
              <div class="container-form">
                <label for="nim"><b>NIM</b></label><br><br>
                <input type="number" placeholder="Masukkan NIM" name="nim" required autocomplete="off">
                <br><br><label for="password"><b>Kata Sandi</b></label>
                <input type="password" placeholder="Masukkan Kata Sandi" name="password" required>
                <label for="nama"><b>Nama</b></label>
                <input type="text" placeholder="Masukkan Nama" name="nama" required autocomplete="off">
                <label for="prodi"><b>Program Studi</b></label>
                <input type="text" placeholder="Masukkan Program Studi" name="prodi" required autocomplete="off">
                <button type="submit">Daftar</button>
              </div>
            </form>
          </div>

      <div class="searchbar">
        <form class="" action="<?php echo base_url('guest/cari'); ?>" method="post">
          <input type="text" name="keyword" id="keyword" placeholder="Cari Laporan" autocomplete="off">
          <button type="submit" name="carilaporan">Cari</button>
        </form>
      </div>
    </div>
    <?php if($this->session->flashdata('daftar')): ?>
    <div class="alertinfo">
      <span class="closebtn">&times;</span>
      <?php echo $this->session->flashdata('daftar'); ?>
    </div>
    <?php endif; ?>

    <div class="timeline">
      <?php if($this->session->flashdata('login')): ?>
      <div class="alert">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <?php echo $this->session->flashdata('login'); ?>
      </div>
      <?php endif; ?>
      <div class="container left">
          <div class="content">
            <p>
              Pengelolaan pengaduan pelayanan di sebuah instituti terkhususnya di perguruan tinggi belum terkelola secara efektif dan terintegrasi.
              Masing-masing bidang penyelenggara mengelola pengaduan secara parsial dan tidak terkoordinir dengan baik.
            </p>
          </div>
        </div>
        <div class="container right">
          <div class="content">
            <p>
              Akibatnya terjadi duplikasi penanganan pengaduan, atau bahkan bisa terjadi suatu pengaduan tidak satupun ditangani.
              Oleh karena itu, perlunya untuk mengintegrasikan system pengelolaan pengaduan pelayanan terhadap mahasiswa dalam suatu perguruan tinggi.
            </p>
          </div>
        </div>
    </div>
    <div class="row" width="100%">
      <h2>DEVELOPER</h2>
          <img src="assets/firman.png" alt="Firman" style="width:7%">
          <div class="container-team">
            <h2>Yusuf Firmansyah W. P.</h2>
            <p class="title">Teknik Informatika - 14116097</p>
          </div>
    </div>

    <div class="footer">
      <p>Copyright 2020. Tugas Besar Pemrograman Web RA</p>
    </div>
    <!-- Login User -->
    <script>
      var modal = document.getElementById('id01');
      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
          if (event.target == modal) {
              modal.style.display = "none";
          }
      }
      </script>
      <!-- Sign Up User -->
      <script>
      // Get the modal
      var modal = document.getElementById('id02');
      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      }
      </script>
      <!-- Alert Registration -->
      <script>
      var close = document.getElementsByClassName("closebtn");
      var i;

      for (i = 0; i < close.length; i++) {
        close[i].onclick = function(){
          var div = this.parentElement;
          div.style.opacity = "0";
          setTimeout(function(){ div.style.display = "none"; }, 600);
        }
      }
      </script>


  </body>
</html>
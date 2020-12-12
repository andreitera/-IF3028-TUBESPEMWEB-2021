<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
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
    .topnav {
      background-color:#f2f2f2;
       overflow: hidden;
       border-bottom: 3px solid transparent;
    }
    .topnav a:hover {
      background-color: #ddd;
      color: black;
    }
    .topnav a {
      float: left;
      color: black;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 25px;
      margin-top: 20px;
    }
    .topnav a.active {
      background-color: #4CAF50;
      color: white;
    }
    .searchbar {
      float: right;
      border: none;
      font-size: 17px;
      margin-right: 15px;
      margin-top: 7px;
    }
    .searchbar button {
      float: right;
      margin-bottom: 7px;
    }
    .footer {
      position: fixed;
      left: 0;
      bottom: 0;
      width: 100%;
      text-align: center;
      background-color: #f2f2f2;
    }
    html {
      box-sizing: border-box;
    }
    *, *:before, *:after {
      box-sizing: inherit;
    }
    .column {
      float: left;
      width: 33.3%;
      margin-bottom: 16px;
      padding: 0 8px;
    }
    @media screen and (max-width: 650px) {
      .column {
        width: 100%;
        display: block;
      }
    }
    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    }
    .card img {
      transition: transform .2s;
    }
    .card img:hover {
      -ms-transform: scale(2); /* IE 9 */
      -webkit-transform: scale(2); /* Safari 3-8 */
      transform: scale(2);
    }
    .container-team {
      padding: 0 16px;
    }
    .container::after, .row::after {
      content: "";
      clear: both;
      display: table;
    }
    .title {
      color: grey;
    }
    .row {
      margin-top: 30px;
      margin-bottom: 50px;
      text-align: center;
    }
    /* The actual timeline (the vertical ruler) */
    .timeline {
      position: relative;
      max-width: 1200px;
      margin: 0 auto;
    }
    /* The actual timeline (the vertical ruler) */
    .timeline::after {
      content: '';
      position: absolute;
      width: 6px;
      background-color: black;
      top: 0;
      bottom: 0;
      left: 50%;
      margin-left: -3px;
    }
    /* Container around content */
    .container {
      padding: 10px 40px;
      position: relative;
      background-color: inherit;
      width: 50%;
    }
    /* Place the container to the left */
    .left {
      left: 0;
    }
    /* Place the container to the right */
    .right {
      left: 50%;
    }
    /* The actual content */
    .content {
      padding: 20px 30px;
      background-color: white;
      position: relative;
      border-radius: 6px;
      font-size: 20px;
    }
    /* Media queries - Responsive timeline on screens less than 600px wide */
    @media screen and (max-width: 600px) {
      /* Place the timelime to the left */
      .timeline::after {
      left: 31px;
      }
      /* Full-width containers */
      .container {
      width: 100%;
      padding-left: 70px;
      padding-right: 25px;
      }
      /* Make sure that all arrows are pointing leftwards */
      .container::before {
      left: 60px;
      border: medium solid white;
      border-width: 10px 10px 10px 0;
      border-color: transparent white transparent transparent;
      }
      /* Make sure all circles are at the same spot */
      .left::after, .right::after {
      left: 15px;
      }
      /* Make all right containers behave like the left ones */
      .right {
      left: 0%;
      }
    }
    /* Full-width input fields */
    input[type=text], input[type=password] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }
    /* Center the image and position the close button */
    .imgcontainer {
      text-align: center;
      margin: 20px 0 10px 0;
      position: relative;
    }
    img.avatar {
      width: 20%;
      border-radius: 10%;
    }
    .container-form {
      padding: 50px;
    }
    span.psw {
      float: right;
    }
    /* The Modal (background) */
    .modal {
      display: none; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 1; /* Sit on top */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
      padding-top: 60px;
    }
    /* Modal Content/Box */
    .modal-content {
      background-color: #fefefe;
      margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
      border: 1px solid #888;
      width: 70%; /* Could be more or less, depending on screen size */
    }
    /* The Close Button (x) */
    .close {
      position: absolute;
      right: 25px;
      top: 0;
      color: #000;
      font-size: 35px;
      font-weight: bold;
    }
    .close:hover,
    .close:focus {
      color: red;
      cursor: pointer;
    }
    /* Add Zoom Animation */
    .animate {
      -webkit-animation: animatezoom 0.6s;
      animation: animatezoom 0.6s
    }
    @-webkit-keyframes animatezoom {
      from {-webkit-transform: scale(0)}
      to {-webkit-transform: scale(1)}
    }
    @keyframes animatezoom {
      from {transform: scale(0)}
      to {transform: scale(1)}
    }
    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
      span.psw {
         display: block;
         float: none;
      }
    }
    .alertinfo {
      padding: 20px;
      background-color: #ffff4d;
      color: black;
      opacity: 1;
      transition: opacity 0.6s;
      margin-bottom: 15px;
    }
    .closebtn {
      margin-left: 15px;
      color: black;
      font-weight: bold;
      float: right;
      font-size: 22px;
      line-height: 20px;
      cursor: pointer;
      transition: 0.3s;
    }
    </style>
    <title>Lapor ITERA</title>
  </head>
  <body>
    <div class="header" >
      <div class="slides">
        <img src="<?php echo base_url('assets/embung.jpg'); ?>" width="100%" height="350px" alt="">
        <div class="judul" >
          <img src="<?php echo base_url('assets/logo2.png'); ?>" width="100px" height="100px" alt="">
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
              <img src="<?php echo base_url('assets/avatar.png'); ?>" alt="Avatar" class="avatar">
              <h2>MASUK</h2>
              <hr>
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
                <img src="<?php echo base_url('assets/avatar.png'); ?>" alt="Avatar" class="avatar">
                <h2>DAFTAR</h2>
                <hr>
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
        <form class="" action="<?php echo base_url('guest/cari'); ?>" method="post" >
          <input type="text" name="keyword" class="keyword" id="keyword" placeholder="Cari Laporan" autocomplete="off">
          <button type="submit" name="carilaporan" class="carilaporan" id="carilaporan">Cari</button>
        </form>
      </div>
    </div>

    <h1 style="text-align:center;">DAFTAR LAPORAN</h1>
   <div class="containerlaporan" id="containerlaporan">
    <div class="row" width="100%">
      <?php $i=1; ?>
      <?php foreach ($laporan as $daftar) : ?>
      <div class="column">
        <div class="card">
          <div class="container-team">
            <h2><?php echo $daftar['nama']; ?></h2>
            <p class="title"><?php echo $daftar['prodi']; ?> - <?php echo $daftar['nim']; ?></p>
            <p><?php echo $daftar['hal']; ?></p>
            <?php if ($daftar['lampiran'] == null) {
              $daftar['lampiran'] = "-";
            } ?>
            <p>Lampiran : <?php echo $daftar['lampiran']; ?></p>
            <p>Status : <?php echo $daftar['status']; ?></p>
            <p>Waktu : <?php echo $daftar['created']; ?></p>
          </div>
        </div>
      </div>
      <?php $i++; ?>
      <?php endforeach ?>
    </div>
   </div>


    <div class="footer">
      <p>Copyright 2019. Tugas Besar Pemrograman Web RA</p>
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
      
      <!-- AJAX Search Laporan -->
      <script>
      
        const cari = document.querySelector('.carilaporan');
        const keyword = document.querySelector('.keyword');
        const container = document.querySelector('.containerlaporan');

        keyword.addEventListener('keyup', function () {

          const xhr = new XMLHttpRequest();

          xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
              container.innerHTML = xhr.responseText;
            }
          };

          xhr.open('get', 'ajax/guestcari.php?keyword='+keyword.value);
          xhr.send();

        });
      
      </script>

  </body>
</html>

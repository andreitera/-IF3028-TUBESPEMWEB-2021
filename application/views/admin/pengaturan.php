<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <style>
    .sidebar {
      margin: 0;
      padding: 0;
      width: 200px;
      background-color: #f1f1f1;
      position: fixed;
      height: 100%;
      overflow: auto;
    }
    .sidebar a {
      display: block;
      color: black;
      padding: 16px;
      text-decoration: none;
    }
    .sidebar a:hover:not(.active) {
      background-color: #555;
      color: white;
    }
    div.content {
      margin-left: 200px;
      padding: 1px 16px;
      height: 1000px;
    }
    .alertinfo {
      padding: 20px;
      background-color: #green;
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
    <title>ADMINISTRATOR</title>
  </head>
  <body>
    <div class="sidebar">
      <img src="<?php echo base_url('assets/avatar.png'); ?>" style="height:8%; weight:8%; display:block; margin-left:auto; margin-right:auto; margin-top:15%;"alt="">
      <h4 style="text-align:center;">Administrator</h4>
      <br>
      <a href="<?php echo base_url('admin/beranda'); ?>">Laporan</a>
      <a href="<?php echo base_url('admin/mahasiswa'); ?>">Mahasiswa</a>
      <a href="#<?php echo base_url('admin/pengaturan'); ?>">Pengaturan</a>
      <a href="<?php echo base_url('auth/logout') ?>">Keluar</a>
    </div>

    <div class="content">
      <img src="<?php echo base_url('assets/logo2.png'); ?>" style="height:10%; width:7%; display:block; margin-left:auto; margin-right:auto;"alt="">
      <h2 style="text-align:center;">LAPOR ITERA</h2>
      <hr>

      <div class="laporan">
        <h2 style="text-align:center;">PENGATURAN</h2>
        <form class="" action="<?php echo base_url('admin/gantipw'); ?>" method="post">
          <label for="psw"><b>Kata Sandi</b></label><br><br>
          <input type="password" placeholder="Masukkan Kata Sandi Baru" name="password" required>
          <button type="submit" class="btn">Ganti Kata Sandi</button>
        </form>
      </div>
    </div>



  </body>
</html>

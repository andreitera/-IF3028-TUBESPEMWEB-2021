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
    * {box-sizing: border-box;}
    input[type=text], select, textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      margin-top: 6px;
      margin-bottom: 16px;
      resize: vertical;
    }

    input[type=submit] {
      background-color: #4CAF50;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type=submit]:hover {
      background-color: #45a049;
    }

    .container {
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 20px;
    }
    </style>
    <title>MAHASISWA</title>
  </head>
  <body>
    <div class="sidebar">
      <img src="<?php echo base_url('assets/avatar.png'); ?>" style="height:8%; weight:8%; display:block; margin-left:auto; margin-right:auto; margin-top:15%;"alt="">
      <h4 style="text-align:center;"><?php echo $this->session->userdata("nim"); ?></h4>
      <br>
      <a href="<?php echo base_url('mahasiswa/beranda'); ?>">Laporan</a>
      <a href="<?php echo base_url('mahasiswa/edit/'.$this->session->userdata("nim")); ?>">Pengaturan</a>
      <a href="<?php echo base_url('authm/logout') ?>">Keluar</a>
    </div>

    <div class="content">
      <img src="<?php echo base_url('assets/logo2.png'); ?>" style="height:10%; width:7%; display:block; margin-left:auto; margin-right:auto;"alt="">
      <h2 style="text-align:center;">LAPOR ITERA</h2>
      <hr>

      <div class="laporan">
        <h2 style="text-align:center;">PENGATURAN AKUN</h2>

          <div class="container">
            <form action="<?php echo base_url(); ?>mahasiswa/edit/<?php echo $this->session->userdata("nim"); ?>" method="post">
              <label for="nim">NIM</label>
              <input type="text" name="nim" value="<?php echo $this->session->userdata("nim"); ?>" readonly>

              <label for="nama">NAMA</label>
              <input type="text" name="nama" value="<?php echo $mahasiswa['nama']; ?>" >

              <label for="prodi">PRODI</label>
              <input type="text" name="prodi" value="<?php echo $mahasiswa['prodi']; ?>" >

              <label for="prodi">KATA SANDI</label>
              <input type="password" name="password" value="" required><br><br>

              <input type="submit" value="Ubah">
            </form>
          </div>

      </div>
    </div>



  </body>
</html>

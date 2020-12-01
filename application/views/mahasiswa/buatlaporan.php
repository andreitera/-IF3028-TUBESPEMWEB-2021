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
    .btn {

      background-color: white;
      color: black;
      padding: 5px 10px;
      font-size: 14px;
      cursor: pointer;
      position: relative;
    }
    .buat {
      border-color: #blue;
      color: blue;
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
      <a href="<?php echo base_url('mahasiswa/ubah/'.$this->session->userdata("nim")); ?>">Pengaturan</a>
      <a href="<?php echo base_url('authm/logout') ?>">Keluar</a>
    </div>

    <div class="content">
      <img src="<?php echo base_url('assets/logo2.png'); ?>" style="height:10%; width:7%; display:block; margin-left:auto; margin-right:auto;"alt="">
      <h2 style="text-align:center;">LAPOR ITERA</h2>
      <hr>

      <div class="laporan">
        <h1 style="text-align:center;">FORMULIR LAPORAN</h1>
        <hr>
        <br>
        <a href="<?php echo base_url('mahasiswa/beranda'); ?>" class="btn buat">KEMBALI</a>
        <br><br>

        <div class="container">
          <?php echo form_open_multipart('mahasiswa/lapor') ?>
            <label for="nim">NIM</label>
            <input type="text" name="nim" value="<?php echo $this->session->userdata("nim"); ?>" readonly>

            <label for="lname">Kontak Pribadi (Nomor Telepon) : </label>
            <input type="tel" size="13" maxlength="13" name="cp" placeholder="ex: 082281718656" required autocomplete="off"><br><br>

            <label for="subject">Hal</label>
            <textarea name="hal" placeholder="Hal..." style="height:200px" required autocomplete="off"></textarea>

            <label for="berkas">Berkas : </label><br><br>
            <input type="file" name="berkas">

            <br><br><br>

            <input type="submit" name="submit" value="LAPOR">
          <?php echo form_close() ?>
        </div>

      </div>
    </div>
    </div>


  </body>
</html>

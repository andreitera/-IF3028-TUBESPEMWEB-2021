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
    .alert {
      padding: 20px;
      background-color:green;
      color: white;
    }

    .closebtn {
      margin-left: 15px;
      color: white;
      font-weight: bold;
      float: right;
      font-size: 20px;
      line-height: 10px;
      cursor: pointer;
      transition: 0.3s;
    }

    .closebtn:hover {
      color: black;
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
      font-style:oblique;
    }
    i {
      border: solid black;
      border-width: 0 3px 3px 0;
      display: inline-block;
      padding: 3px;
    }
    .btn {
      border: 2px solid black;
      background-color: white;
      color: black;
      padding: 5px 10px;
      font-size: 16px;
      cursor: pointer;
    }
    .danger {
      border-color: #f44336;
      color: red
    }
    .danger:hover {
      background: #f44336;
      color: white;
    }
    /* Green */
    .success {
      border-color: #4CAF50;
      color: green;
    }
    .success:hover {
      background-color: #4CAF50;
      color: white;
    }}
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
      <a href="<?php echo base_url('admin/pengaturan'); ?>">Pengaturan</a>
      <a href="<?php echo base_url('auth/logout') ?>">Keluar</a>
    </div>

    <div class="content">
      <img src="<?php echo base_url('assets/logo2.png'); ?>" style="height:10%; width:7%; display:block; margin-left:auto; margin-right:auto;"alt="">
      <h2 style="text-align:center;">LAPOR ITERA</h2>
      <hr>
      <div class="searchbar" style="">
        <form class="" action="<?php echo base_url('admin/beranda'); ?>" method="post">
          <input type="text" name="keyword" id="keyword" placeholder="Cari Laporan" autocomplete="off">
          <button type="submit" name="carilaporan">Cari</button>
        </form>
      </div>
      <hr>
      <div class="laporan">
        <h2 style="text-align:center;">DETAIL LAPORAN</h2>
        <br>
        <a style="float:left;"href="<?php echo base_url('admin/beranda/'); ?>">
          <i class="arrow right" style="transform: rotate(135deg); -webkit-transform: rotate(135deg);"></i>
          Kembali
        </a>
        <br>
        <p>Hal :</p>
        <p><?php echo $laporan['hal']; ?></p>
        <br>
        <p>Lampiran : </p>

        <?php if ($laporan['lampiran'] != null): ?>
            <a href="<?php echo base_url('assets/lampiran/'.$laporan['lampiran']); ?>">Download</a> <br><br>
        <?php else: ?>
          <?php echo "-" ?>
        <?php endif; ?>
        <br><br>

        <p>Status : <?php echo $laporan['status']; ?></p>
        <p>Waktu : <?php echo $laporan['created']; ?></p>
        <br>

        <a class="btn danger"href="<?php echo base_url('admin/hapusl/'); ?><?php echo $laporan['id_laporan']; ?>"> Hapus</a>
        <?php if ($laporan['status'] == "MENUNGGU"): ?>
          <a class="btn success"href="<?php echo base_url('admin/prosesl/'); ?><?php echo $laporan['id_laporan']; ?>"> Proses</a>
        <?php endif; ?>


      </div>
    </div>



  </body>
</html>

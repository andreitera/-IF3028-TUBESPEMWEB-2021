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
    }
    i {
      border: solid black;
      border-width: 0 3px 3px 0;
      display: inline-block;
      padding: 3px;
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
      <div class="searchbar" style="">
        <form class="" action="<?php echo base_url('mahasiswa/beranda'); ?>" method="post">
          <input type="text" name="keyword" id="keyword" placeholder="Cari Laporan" autocomplete="off">
          <button type="submit" name="carilaporan">Cari</button>
        </form>
      </div>
      <hr>
      <div class="laporan">
        <h1 style="text-align:center;">DAFTAR LAPORAN</h1>
        <a href="<?php echo base_url('mahasiswa/buatlaporan/'.$this->session->userdata("nim")); ?>" class="btn buat">BUAT LAPORAN</a>
        <br>
        <?php if($this->session->flashdata('pesan')): ?>
        <div class="alert">
          <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
          <?php echo $this->session->flashdata('pesan'); ?>
        </div>
        <?php endif; ?>
        <div class="row" width="100%">
          <?php $i=1; ?>
          <?php foreach ($laporan as $daftar) : ?>
          <div class="column">
            <div class="card">
              <div class="container-team" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">
                <br>
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
    </div>
    </div>


  </body>
</html>

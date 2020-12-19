<?php

if (isset($_POST['cari'])) {
  $key = $_POST['keyword'];
  
  //menampilkan yang dicari berdasarkan kata kunci
  $data = $this->db->query("select * from comment natural join user where 
  timestamp like '%$key%' or 
  fullname like '%$key%' or
  comm_title like '%$key%' or
  comm like '%$key%' or
  aspek like '%$key%'")->result_array();
 
  $result = $data;
}
?>

<div class="container">

    <div class="nav-bar">
      <a href="<?= base_url()?>">HOME</a>
      <a href="<?= base_url('auth') ?>">LOGIN</a>
      <a href="<?= base_url('auth/register') ?>">REGISTER</a>
    </div>

    <div class="heading-icon">
      <img src=<?= base_url('assets/img/hmif.jpg') ?> alt="ini foto.png">
      <img src=<?= base_url('assets/img/logoitera.png') ?> alt="ini foto.png">
      <h1>SIMPLE LAPOR!</h1>
    </div>
   <br><br>
  
    <form class="form" action="" method="post">
      <input type="text" name="keyword" id="keyword" aria-describedby="helpId" placeholder="Masukkan Keyword">
      <button type="submit" name="cari">Cari</button>
    </form>

    <br>

    <div class="buat_comm">
      <a href="<?= base_url('comment') ?>">Buat Laporan/Komentar </a>
      <i class="fa fa-plus-circle" ></i>
    </div> 

    <div class="container1">
    <p>Laporan/Komentar Terkini</p>
    <hr>

    <?php foreach ($result as $d) :
      ?>
      <div class="laporan">
        <a>
          <a href="<?= base_url('home/commentDetail/') . $d['comm_id'] ?>"><?= $d['comm_title'] ?></a>
          <small>Pelapor : <?= $d['fullname'] ?></small>
        </a>

        <p><?= $d['comm'] ?></p>

        <div class="details">
          <span class="status">
            <span id="lampiran">lampiran :<?= $d['lampiran'] ?> </span>
            <span id="timestamp">| waktu :<?= $d['timestamp'] ?> WIB</span>
          </span>

          <span>
            <a href="<?= base_url('home/commentDetail/') . $d['comm_id'] ?>">Selengkapnya</a>
          </span>
        </div>

        <hr>
      </div>
      
    <?php endforeach;
    ?>
  </div>
</div>

<script src="<?= base_url('assets/js/liveSearch.js') ?>"></script>
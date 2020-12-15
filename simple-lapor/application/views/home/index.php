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
  <div class="container1">
    <div class="log-reg">
      <a href="<?= base_url()?>">HOME</a>
      <a href="<?= base_url('auth') ?>">Login</a>
      <a href="<?= base_url('auth/register') ?>">Register</a>
    </div>

    <div class="heading-icon">
      <img src=<?= base_url('assets/img/logoitera.png') ?> alt="logoItera">
      <h1>AYO LAPORKAN!</h1>
    </div>

    <form class="form" action="" method="post">
      <input type="text" name="keyword" id="keyword" aria-describedby="helpId" placeholder="Masukkan Keyword">
      <button type="submit" name="cari">Cari</button>
    </form>

    <br>

    <div class="com_link">
      <a href="<?= base_url('comment') ?>">Buat Laporan/Komentar </a>
      <i class="fa fa-plus-circle" aria-hidden="true"></i>
    </div>

  </div>

  <div class="container2">
    <h4>Laporan/Komentar Terkini</h4>
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
          <span>
            <span id="lampiran"><?= $d['lampiran'] ?> </span>
            <span id="timestamp">| <?= $d['timestamp'] ?> WIB</span>
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
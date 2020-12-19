<?php
// $_POST['keyword'] = $this->uri->segment(3);
// var_dump($_POST['keyword']);
if (isset($_POST['cari'])) {
  $key = $_POST['search'];
  // var_dump($key);
  $data = $this->db->query("select * from comment natural join user where 
  timestamp like '%$key%' or 
  fullname like '%$key%' or
  comm_title like '%$key%' or
  comm like '%$key%' or
  aspek like '%$key%'")->result_array();
  // var_dump($data);
  $result = $data;
}
?>
<div class="container">
  <?php
  // var_dump($this->session->userdata());
  // var_dump($result);
  if (!isset($this->session->userdata['logged_in'])) {
    echo "<script>
        alert('you have not access to this page!');
        window.location.href= '" . base_url('auth') . "'
        </script>
  ";
  }
  ?>

    <div class="heading-icon">
      <img src=<?= base_url('assets/img/hmif.jpg') ?> alt="ini foto.png">
      <img src=<?= base_url('assets/img/logoitera.png') ?> alt="ini foto.png">
      <h1>SIMPLE LAPOR!</h1>
    </div>


    <div class="nav-bar">
      <a href="<?= base_url()?>">HOME</a>
      <a href="<?= base_url('home/myLapor') ?>">Laporanku</a>
      <a href="<?= base_url('home/logOut') ?>">Logout</a>
    </div>
    <br><br>
    <form class="form" action="" method="post">
      <label for=""></label>
      <input type="text" name="search" id="search" aria-describedby="helpId" placeholder="Masukkan keyword">
      <button type="submit" name="cari">Cari</button>
    </form>
    <br>
    <div class="buat_comm">
      <a href="<?= base_url('comment') ?>">Buat Laporan/Komentar </a>
      <i class="fa fa-plus-circle" ></i>
    </div> 

  
    <p><strong>Laporan/Komentar Terkini</strong></p>

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
            <span id="lampiran">Lampiran :<?= $d['lampiran'] ?> </span>
            <span id="timestamp">| Waktu: <?= $d['timestamp'] ?> WIB</span>
          </span>

          <span>
            <a href="<?= base_url('home/commentDetail/') . $d['comm_id'] ?>">Lihat Selengkapnya ></a>
          </span>
        </div>
        <hr>
      </div>
    <?php endforeach;
    ?>
  </div>

</div>
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

  <div class="container1">
    <div class="heading-icon">
      <img src=<?= base_url('assets/img/logoitera.png') ?> alt="ini foto.png">
      <h1>LAPOR ITERA!</h1>
    </div>

    <div class="nav-bar">
      <span>
        <p>HAI! <?= $this->session->userdata("fullname"); ?></p>
      </span>
      <div class="right-menu">
        <span><a href="<?= base_url('home/myLapor') ?>">Laporanku</a></span>
        <span>
          <a href="<?= base_url('home/logOut') ?>">Logout</a>
        </span>
      </div>
    </div>

    <form action="" method="post">
      <label for=""></label>
      <input type="text" name="search" id="search" aria-describedby="helpId" placeholder="Masukkan keyword">
      <button type="submit" name="cari">Cari</button>
    </form>
    <br>
    <a href="<?= base_url('comment') ?>">Buat Laporan/Komentar &plus;</a>

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
            <span id="timestamp"><?= $d['timestamp'] ?> WIB</span>
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
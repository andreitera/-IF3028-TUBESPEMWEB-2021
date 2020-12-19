<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="<?= base_url('assets/css/myLapor.css') ?>">
  <title>Laporanku</title>
  <link rel="stylesheet" href="<?= base_url('assets/css/mylapor_style.css') ?>">
</head>

<body>
  <div class="container">
    
      <h1>Laporanku</h1>
    
    
    <div class="container1">
      <?php foreach ($result as $d) :
        ?>
        <div class="laporan">
          <a>
            <a href="<?= base_url('home/commentDetail/') . $d['comm_id'] ?>"><?= $d['comm_title'] ?></a>
            <br>
            <small>Pelapor : <?= $d['fullname'] ?></small>
          </a>

          <p><?= $d['comm'] ?></p>

          <div class="details">
            <span>
              <span id="lampiran">lampiran :<?= $d['lampiran'] ?> </span>
              <span id="timestamp">waktu :<?= $d['timestamp'] ?> WIB</span>
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
</body>

</html>
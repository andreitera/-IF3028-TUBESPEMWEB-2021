<?php

$conn = mysqli_connect('localhost', 'root', '', 'lapor');

$keyword = $_GET['keyword'];

  $query = "
            SELECT * 
            FROM laporan AS l 
            INNER JOIN mahasiswa AS m 
            ON l.nim = m.nim
            WHERE l.hal LIKE '%$keyword%' OR l.nim LIKE '%$keyword%' OR m.nama LIKE '%$keyword%' OR m.prodi LIKE '%$keyword%'  
          ";

  $result=mysqli_query($conn,$query);

?>

<div class="row" width="100%">
      <?php $i=1; ?>
      <?php while ($daftar = mysqli_fetch_array($result)) { ?>
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
      <?php } ?>
    </div>
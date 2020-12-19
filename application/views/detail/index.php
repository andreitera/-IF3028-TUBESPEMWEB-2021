<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $judul; ?></title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css?v=1.1">
    <script src="assets/js/validasi.js"></script>
</head>
<body>
<p class="judul">LAPORIN!</p>
    <div class="lapor">
    <p class="subjudul">Detail Laporan / Komentar</p>
    <hr>
<br>
<div class="arsip">
    <?php foreach ($detail as $key )  :?>
        <?php $id = $key['id']; ?>
        <p><?= $key['laporan']; ?> </p>
    <?php endforeach; ?>
 </div>
<br>
    <p class="arsip">Lampiran:</p>
    <img src="<?php echo base_url(); ?>assets/icon/file.png" width="250" height="250">
 
<br>
<br>
<br>
<br>
<div class="waktu2">
    <?php 
    $date = new DateTime($key['waktu']);
    echo 'Waktu : ';
    echo $date->format('d-m-Y H:i');
    ?>
</div> 
<div class="aspek">
    <?php
    echo 'Aspek : '; 
    echo  $key['aspek']; 
    ?>
</div>

            <?php
                echo "
                <a class='more' href= javascript:confirmDelete('hapus?hapus_id=$id')>Hapus Laporan/Komentar  &nbsp<img src='assets/icon/hapus.png' height=13px> </a>
               
                <a class='waktu' href='ubah?ubah_id=$id'>Ubah Laporan/Komentar  &nbsp<img src='assets/icon/edit.png' height=13px> </a>		
                ";
            ?>
<br>
<hr>
<br>

    </div>
    
</body>
</html>

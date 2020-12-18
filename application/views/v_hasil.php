<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="asset/css/hasil.css">
    <script src="assets/js/validasi.js"></script>
    <title>Detail Laporan</title>
</head>
<body>

<h1>SIMPLE LAPOR!</h1>
<p>Detail Laporan/Komentar</p>
<hr>
<br>
<div class="arsip">
    <?php foreach ($detail as $hm )  :?>
        <?php $id = $hm['id']; ?>
        <p><?= $hm['isi']; ?> </p>
    <?php endforeach; ?>
 </div>
 <br>
<p class="arsip">Lampiran</p>
<br>
<br>
<div class="waktu">
    <?php 
    $date = new DateTime($hm['waktu']);
    echo 'Waktu : ';
    echo $date->format('d-m-Y H:i');
    ?>
</div> 
<div class="aspek">
    <?php
    echo 'Aspek : '; 
    echo  $hm['aspek']; 
    ?>
</div>

<?php
    echo "
    <a class='hapus' href= javascript:confirmDelete('hapus?hapus_id=$id')>Hapus Laporan/Komentar  > </a>           
    <a class='waktu2' href='ubah?ubah_id=$id'>Ubah Laporan/Komentar  > </a>";
?>
<br>
<hr>	

    
</body>
</html>
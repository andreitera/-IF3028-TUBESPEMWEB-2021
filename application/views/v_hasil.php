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
<?php foreach($lapor as $u) { ?>
<h1>SIMPLE LAPOR!</h1>
<p>Detail Laporan/Komentar</p>
<hr>
<p><?php echo $u->isi ?></p>
<p>Lampiran :</p>
<img src="<?php echo base_url(); ?>asset/icon/square.png" width="250" height="250">
<br>
<p>Waktu : <?php echo $u->waktu ?></p>
<p>Aspek : <?php echo $u->aspek ?></p>
<div style="width: 20%; float: right;">
<!-- 
<?php
                echo "<tr>
                
                <a class='link' href='edit/$u->id'>Edit</a>		
              
                </tr>";
              
              ?> -->

<a class="link" style="float: right"><?php echo anchor('crud/edit/'.$u->id,'Edit'); ?></a>
<a class="link" style="float: right"><?php echo anchor('crud/hapus/'.$u->id,'Delete'); ?></a>


<!-- <a class='waktu' href='ubah?ubah_id=$id'>Ubah Laporan/Komentar  &nbsp<img src='assets/icon/edit.png' height=13px> </a>		
<a class='more' href='detail?detail_id=$id'>Lihat Selengkapnya</a>		 -->
                

</div>
<br>
<br>
<hr>	
<?php } ?>
    
</body>
</html>
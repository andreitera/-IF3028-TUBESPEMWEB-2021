<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?= base_url('asset/css/hasil.css');?>">
    <title>Detail Laporan</title>
</head>
<body>
<?php foreach($lapor as $u) { ?>
<h1>SIMPLE LAPOR!</h1>
<p>Detail Laporan/Komentar</p>
<hr>
<p><?php echo $u->isi ?></p>
<p>Lampiran :</p>
<img src="<?php echo base_url(); ?>asset/icon/email.png" width="250" height="250">
<br>
<p>Waktu : <?php echo $u->waktu ?></p>
<p>Aspek : <?php echo $u->aspek ?></p>
<div style="width: 20%; float: right;">
<a class="link" style="float: right"><?php echo anchor('crud/edit/'.$u->id,'Edit'); ?></a>
<a class="link" style="float: right"><?php echo anchor('crud/hapus/'.$u->id,'Delete / Hapus'); ?></a>
</div>
<br>
<br>
<hr>	
<?php } ?>
    
</body>
</html>
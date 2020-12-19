<!DOCTYPE html>
<html>
<head>
	<title>Tampilan Laporan</title>
	<link rel="stylesheet" href="<?php echo base_url('style/style_tampilan.css') ?>">

</head>
<body>

	<div class="container">
		
		<div class="content">

		<div class="header">
	
			<strong>Layanan Aspirasi dan Pengaduan Online Mahasiswa IF ITERA</strong>
			
			<br><br>

		</div>

		<form action="" method="POST">
			
			<center>
			
				<input type="text" name="cari">
			
				<button type="submit" name="btncari">Cari</button>
			
			</center>

		</form>

		<br>

		<center>
		
			<a href="<?php echo site_url('Laporan_controller/tambah') ?>">Buat Laporan/Komentar 

			<div style="margin-top: -18px; margin-left: 195px;">
	
				<a href="<?php echo site_url('Laporan_controller/tambah') ?>">

					<img src="<?php  echo base_url('img/plus.png') ?>" width="20px" height="20px">

				</a>	
			
			</div>

		</center>
		

		<br>
		
			<p>Laporan/Komentar Terakhir</p>
		
		<hr>

		<?php foreach ($laporan as $value): ?>
			 
			 <?php  echo "<p>$value->isi</p><br>"; ?>
			 <p><img src="<?php  echo base_url('img/file.png') ?>" width="20px" height="20px"></p>

			 <div style="margin-top: -40px; margin-bottom: 17px; margin-left: 25px; width: 290px;">

			 Lampiran: <?= $value->lampiran ?>

			 </div>
			 
			 <?php echo "<p style='width: auto; height: auto; margin-top:-35.9px; margin-left: 325px;'>Waktu: $value->waktu</p>"; ?>
		
		
		
		<p style="margin-top: -35.6px; margin-left: 538px;">
			<a href="<?php echo site_url('Laporan_controller/detail/'.$value->id) ?>">Lihat Selengkapnya
		</p>

		<div style="margin-top: -34px; margin-left: 678px;">
	
					<img src="<?php  echo base_url('img/next-button.png') ?>" width="20px" height="20px">

				</a>	
			
		</div>
		
		<hr>
		
		<?php endforeach; ?>

		</div>

		<br><br>

	</div>

</body>
</html>
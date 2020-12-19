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

			<div style="margin-top: -18px; margin-left: 200px;">
	
				<a href="<?php echo site_url('Laporan_controller/tambah') ?>">

					<img src="<?php  echo base_url('icon/plus.png') ?>" width="20px" height="20px">

				</a>	
			
			</div>

		</center>
		

		<br>
		
			<p>Laporan/Komentar Terakhir</p>
		
		<hr>

		<?php foreach ($laporan as $value):
			 
			 echo "<p>$value->isi</p><br>";
			 echo "<p>Lampiran: $value->lampiran</p>";  
			 echo "<p style='width: auto; height: auto; float: right; margin-top:-35.9px; margin-right: 150px;'>Waktu: $value->waktu</p>";
		
		?>
		
		<a href="<?php echo site_url('Laporan_controller/detail/'.$value->id) ?>" style="float: right; margin-top:-35.9px;">Lihat Selengkapnya</a>

		<div style="margin-top: -35px; margin-left: 700px;">
	
				<a href="<?php echo site_url('Laporan_controller/detail') ?>">

					<img src="<?php  echo base_url('icon/next-button.png') ?>" width="20px" height="20px">

				</a>	
			
		</div>
		
		<hr>
		
		<?php endforeach; ?>

		</div>

		<br><br>

	</div>

</body>
</html>
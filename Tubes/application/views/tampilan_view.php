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
		<a href="<?php  echo site_url('Laporan_controller/tambah') ?>">Buat Laporan/Komentar</a>
		</center>
		

		<br>

		<?php 
		foreach ($laporan as $value):
			 echo $value->isi; 
			 echo $value->aspek; 
			 echo $value->lampiran; 
			 echo $value->waktu; 
		 endforeach; ?>
		<hr>
			<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>

			<p>Lampiran File: Nama File </p>

			<div class="detail">Tampilan Waktu <a href="<?php  echo site_url('Laporan_controller/detail') ?>">Lihat Selengkapnya</a></div>
			

		<hr>
			<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
			
			<p>Lampiran File: Nama File </p>

			<div class="detail">Tampilan Waktu <a href="<?php  echo site_url('Laporan_controller/detail') ?>">Lihat Selengkapnya</a></div>

		<hr>
			<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>

			<p>Lampiran File: Nama File </p>

			<div class="detail">Tampilan Waktu <a href="<?php  echo site_url('Laporan_controller/detail') ?>">Lihat Selengkapnya</a></div>

		</div>

		<br><br>

	</div>

</body>
</html>
<!DOCTYPE html>
<html>

<head>
	<title>Halaman Utama</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div class="pembungkus">
		<header>
			SIMPLE LAPOR!
			<div class="search-box">
				<form action="" method="POST">
					<input name="search" required="yes" type="text">
					<button type="submit"><img src="img/search.png">Cari</button>
				</form>
			</div>
			<p>Buat Laporan/Komentar <a href="http://localhost/-IF3028-TUBESPEMWEB-2021/index.php/Welcome/BuatLaporan"><img src="img/insert.png"></a></p>
		</header>

		<div class="konten">
			<p>Laporan/Komentar Terakhir</p>
			<hr>

			<?php
			foreach ($data as $key) {
				echo "<p>" . $key['laporan'] . "</p>";
				echo "<div class='lampiran'> Lampiran:" . $key['file'] . "</div>";
				echo "<div class='selengkapnya'> Waktu: " . $key['waktu'] . " <a href='http://-IF3028-TUBESPEMWEB-2021-master/-IF3028-TUBESPEMWEB-2021-master/CodeIgniter-3.1.11/index.php/Welcome/TampilLaporan/" . $key['id'] . "'>Lihat Selengkapnya ></a> </div> <hr>";
			} ?>
		</div>

		<footer>
			<br><img src="img/option.png"><br>
			<img src="img/option.png">
		</footer>
	</div>
	<!-- <div class="kotak-pencarian">
		<input type="search" name="cari">
	</div>
	<button type="submit"></button> -->
</body>

</html>

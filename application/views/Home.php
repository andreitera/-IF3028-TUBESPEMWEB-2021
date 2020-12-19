<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>LAPOR! - Laporkeun gaskuy.</title>
		<link rel="stylesheet" href="<?= base_url('resources/css/style.css') ?>">
		<script src="<?= base_url('resources/js/jquery-3.5.1.min.js') ?>"></script>
	</head>
	<body>
		<div id="container">
			<center>
				<h1>Layanan Aspirasi dan Pengaduan Online Rakyat</h1>
				<h2>Sampaikan laporan Anda langsung kepada instansi pemerintah berwenang</h2>
			
				<div id="body">
					<form action="lapor/add" method="POST" enctype="multipart/form-data">
						<input type="text" name="nama" placeholder="Nama" required><br>
						<input type="text" name="judul" placeholder="Judul Laporan" required><br>
						<textarea name="isi" rows="5" placeholder="Ketik Isi Laporan Anda" required></textarea><br>
						<select name="kategori">
							<option disabled selected>-Pilih-</option>

						</select>
					</form>
					<input type="submit" action="add()">
				</div>

				<div id="content">
					<div class="box">
						<h3>Judul Laporan</h3>
						<h4>Nama Pengirim</h4>
						<p>Isi Laporan ehehehe eheheheheheh eheheh eheh eheheheheh eheh</p>
						<img src="<?= base_url('resources/foto/test.png') ?>" width="300" height="200">
					</div>
					<div class="box">
						<h3>Judul Laporan</h3>
						<h4>Nama Pengirim</h4>
						<p>Isi Laporan ehehehe eheheheheheh eheheh eheh eheheheheh eheh</p>
						<img src="<?= base_url('resources/foto/test.png') ?>" width="300" height="200">
					</div>
				</div>
			</center>
		</div>

		<script src="<?= base_url('resources/js/main.js') ?>"></script>
	</body>
</html>
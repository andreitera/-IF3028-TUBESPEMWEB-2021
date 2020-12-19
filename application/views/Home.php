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
			<h1>Layanan Aspirasi dan Pengaduan Online Rakyat</h1>
			<h2>Sampaikan laporan Anda langsung kepada instansi pemerintah berwenang</h2>
			
			<div id="body">
				<form id="form_add" method="POST">
					<input type="text" name="add_nama" placeholder="Nama" required><br>
					<input type="text" name="add_judul" placeholder="Judul Laporan" required><br>
					<textarea name="add_isi" rows="5" placeholder="Ketik Isi Laporan Anda" minlength="20" required></textarea><br>
					<select name="add_kategori">
						<option disabled selected>-Pilih-</option>
						<?php
							foreach($kategori as $row) {
								echo '<option value="' . $row['id'] . '">' . $row['kategori'] . '</option>';
							}
						?>
					</select><br>
					<input type="checkbox" name="add_is_anonim" id="add_is_anonim" value="True">
					<label for="add_is_anonim"> Lapor sebagai anonim</label><br>
					<input type="checkbox" name="add_is_public" id="add_is_public" value="False">
					<label for="add_is_public"> Sembunyikan laporan saya di halaman ini</label><br>
				</form>
				<input type="submit" onclick="add()" value="Lapor">
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
		</div>

		<script src="<?= base_url('resources/js/main.js') ?>"></script>
	</body>
</html>
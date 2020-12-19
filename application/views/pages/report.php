<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url('assets/css/report.css') ?>" />

	<title>Tampilan Lapor</title>

	<script type="text/javascript" src="<?php echo base_url('assets/js/script.js') ?>"></script>
</head>

<body>
	<fieldset>
		<header>
			<div class="container">
				<center>
					<h1><a href="<?php echo base_url() ?>" style="color: white; text-decoration: none;">Layanan Aspirasi
							dan Pengaduan Online Mahasiswa ITERA <br>
							Sampaikan laporan Anda langsung kepada instansi Kampus ITERA</a></h1>
					<hr style="width: 80px;">
				</center>
			</div>
		</header>
		<section id="buatlaporan">
			<div class="container">
				<h3>Buat Laporan/Komentar</h3>
				<hr>
				<br>
			</div>
		</section>

		<section id="formbuatlaporan">
			<div class="container">
				<form name="createForm" onsubmit="return validasi()" action="tambah" method="POST" enctype="multipart/form-data">

					<textarea name="laporan" id="laporan" cols="77" rows="20" placeholder="Laporan/Komentar"></textarea>
					<br><br>

					<select name="aspek" id="aspek">
						<option disabled selected value>Pilih Aspek Pelaporan/Komentar</option>
						<option value="Dosen">Dosen</option>
						<option value="Staf">Staff</option>
						<option value="Mahasiswa">Mahasiswa</option>
						<option value="Infrastruktur">Infrastruktur</option>
						<option value="Pengajaran">Pengajaran</option>
					</select>
					<br>
					<br>
					<input type="file" name="lampiran" id="lampiran">
					<br><br>
					<hr>
					<br>
					<button type="submit" class="button-1" name="submit" value="simpan">Buat LAPOR!</button>
					<br>
				</form>
				<br>
			</div>
		</section>
	</fieldset>
</body>

<!-- <script type="text/javascript">
	function validasi() {
		var laporan = document.getElementById("laporan").value;
		var aspek = document.getElementById("aspek").value;
		var lampiran = document.getElementById("lampiran").value;
		if (laporan == "" || aspek == "" || lampiran == "") {
			alert('Anda harus mengisi data dengan lengkap !');

		} else if (laporan.length <= 20) {
			alert('Anda harus mengisi laporan lebih dari 20 huruf');
		} else {
			alert('Kamu berhasil membuat laporan');
		}
	}
</script> -->

</html>
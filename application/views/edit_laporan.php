<!DOCTYPE html>
<html>

<head>
	<title>Ubah Laporan</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div class="pembungkus">
		<header>SIMPLE LAPOR!</header>

		<div class="konten">
			<form action="http://localhost/-IF3028-TUBESPEMWEB-2021-master/" method="POST" onSubmit="Validasi()">
				<p>Ubah Laporan/Komentar</p>
				<hr><br>
				<?php
				foreach ($data as $key) {
					if ($key['id'] == $id) {
						break;
					}
				}
				?>
				<textarea input type="text" name="Laporan" id="Laporan" value=" <?php $key['laporan'] ?> ">Laporan/Komentar</textarea><br>
				<select input type="select" name="Aspek" id="Aspek" value=" <?php $key['aspek'] ?> ">
					<option value="">Pilih Aspek Pelaporan/Komentar</option>
					<option value="Dosen">Dosen</option>
					<option value=" Ruang Kelas">Ruang Kelas</option>
					<option value="Parkiran">Parkiran</option>
					<option value="Jalanan">Jalanan</option>
					<option value="Gedung">Gedung</option>
				</select> <br><br>
				<input type="file" name="" id="File" value=" <?php $key['file'] ?> "> <br><br>
				<button type=" submit">Buat LAPOR!</button>
				<br><br><br>
				<hr>
			</form>
		</div>
	</div>
</body>

<script>
	function Validasi() {
		var laporan = document.getElementById("Laporan").value;
		var aspek = document.getElementById("Aspek").value;
		var file = documet.getElementById("File").value;
		var waktu = date_timestamp_get();

		if (laporan == "" || aspek == "") {
			alert('Mohon lemgkapi isi pada data!');
			return false;
		} else {
			var yakin = confirm("Apakah Anda yakin?");

			if (yakin) {


				$this - > ModelLapor - > UpdateData(
					array(
						"id" => "",
						"laporan" => laporan,
						"aspek" => aspek,
						"file" => file,
						"waktu" => waktu
					)
				);


				return true;
			} else {
				return false;
			}
		}
	}
</script>

</html>

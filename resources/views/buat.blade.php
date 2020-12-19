<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="/css/buat.css">
</head>
<body>
<div class="container">
	<h2>SIMPLE LAPOR!</h2>
	<div class="main">
		
			<p>Buat Laporan/Komentar</p>
			<hr>
			
			<form action="/process" method="post" enctype="multipart/form-data" onsubmit="return validation()">
				{{csrf_field()}}
			<textarea name="komentar" id="komentar">Laporan/Komentar</textarea>
			
			<p id="errComm"></p>
			
			<select id="aspek" name="aspek">
				<option selected value="">Pilih Aspek Pelaporan/Komentar</option>
				<option value="Dosen">Dosen</option>
				<option value="Staff">Staff</option>
				<option value="Mahasiswa">Mahasiswa</option>
				<option value="Infrastruktur">Infrastruktur</option>
				<option value="Pengajaran">Pengajaran</option>
			</select>

			<p id="errAspek"></p>

			<input type="file" style="padding: 15px;" name="file">

			<div class="tombol">
			<button type="submit"  onclick="test()">Buat Lapor!</button>
			</div>

			<hr>
			</form>
	</div>
</div>

<script src="/js/buat.js"></script>
</body>
</html>

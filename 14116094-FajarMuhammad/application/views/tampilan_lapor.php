<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Buat Laporan!</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/tampilan_lapor.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

	<script type='text/javascript' src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>

</head>

<body>
	<a href="<?php echo site_url('home')?>">
	<h1>SIMPLE LAPOR!</h1></a>
	<label>Buat Laporan</label>
	<hr><br>

	<form method="POST" action="tambah_aksi" name="myForm" onsubmit="return validateForm(this)">
		<input type="text" class="nama" name="nama" placeholder=" Nama"><br><br>
		<input type="text" class="judul" name="judul" placeholder=" Judul Laporan"> <br><br>
		<textarea class="area" id="card" name="laporan" placeholder=" Laporan/Komentar"></textarea> <span></span>
		<br><br>
		<select style="height: 40px;" name="aspek">
			<option>Pilih Aspek Pelaporan/Komentar:</option>
			<option>Dosen</option>
			<option>Infrastruktur</option>
			<option>Staff</option>
			<option>Mahasiswa</option>
			<option>Pengajaran</option>
		</select>
		<br><br>
		Pilih file: <input type="file" name="file" placeholder="File"  name="kirim" accept=".img, .png, .jpeg, .jpg, .doc, .docx, .xls, .xlsx, .ppt, .pptx, .pdf">
		<?php
		date_default_timezone_set('Asia/Jakarta'); //memanggil fungsi waktu dan membuat format waktu Jakarta 
		?>
		<input type="text" name="waktu" value="<?php echo date('d-m-Y H:i:s')?>" hidden>
		<br><br>
		<p align="right">
		<input type="submit" class="but" value="Buat LAPOR!" onclick="return confirm('Apakah anda yakin datanya sudah benar?')"></p>

		<hr>
	</form>

</body>
</html>
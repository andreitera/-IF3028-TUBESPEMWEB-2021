<!DOCTYPE html>
<html>
<head>
	<title>SIMPLE LAPOR!</title>
	<!-- file css ada di asset/css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/asset/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/asset/css/reset.css">
</head>
<body>

<div class="container">
	<h1>SIMPLE LAPOR!</h1>
    <h4>Buat Laporan/Komentar</h4>
   <hr />
   <br>
   <?php 
   if(validation_errors()):
   echo validation_errors(); 
   endif;
	?>
   <?php echo form_open_multipart('index.php/Home/tambah'); ?>
<br>		
   <textarea rows="16" cols="136" style="width: 800px;" name="isi" ></textarea><br \>
		<select name="aspek">
			<option >- Pilih Aspek Pelaporan/Komentar -</option>
			<option value="Dosen">Dosen</option>
			<option value="Staff">Staff</option>
			<option value="Mahasiswa">Mahasiswa</option>
			<option value="Infrastruktur">Infrastruktur</option>
			<option value="Pengajaran">Pengajaran</option>
		</select><br />
		<label>File Harus Berformat Gambar/PDF (Max Ukuran File 2Mb)</label>
		<br>
		<br>
		<input id="file" type="file" name="File" ><br />
		<button id="submit" type="submit" name="submit">Buat LAPOR!</button>
		<div style="clear: both;"></div>
	<?php echo form_close(); ?>
	<hr>
	<footer class="kaki">Copyright &copy 2020 - Web Lapor</footer>

</div>
</body>
</html>
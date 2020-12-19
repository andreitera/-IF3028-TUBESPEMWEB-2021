<!DOCTYPE html>
<html>
<head>
	<title>ITERA MELAPOR!</title>
	
	<!-- file css ada di asset/css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/asset/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/asset/css/reset.css">
</head>
<body>

<div class="container">
	<h1>ITERA MELAPOR!</h1>
	<h2>Platform Lapor untuk seluruh civitas akademika ITERA<h3>
    <h4>Buat Laporan/Komentar</h4>
   <hr />
   <?php 
   if(validation_errors()):
   echo validation_errors(); 
   endif;
	?>
   <?php echo form_open_multipart('index.php/Home/tambah'); ?>
	    <textarea rows="16" cols="136" style="width: 800px;" name="isi" ></textarea><br \>
		<select name="aspek">
			<option >- Pilih Aspek Pelaporan/Komentar -</option>
			<option value="Dosen">Dosen</option>
			<option value="Staff">Staff</option>
			<option value="Mahasiswa">Mahasiswa</option>
			<option value="Infrastruktur">Infrastruktur</option>
			<option value="Pengajaran">Pengajaran</option>
		</select><br />
		<label>Dokumen (Maksimal: 2Mb)<br></label><br \>
		<input id="file" type="file" name="File" ><br />
		<input id="submit" value="Buat Lapor!" type="submit" name="submit">
		<div style="clear: both;"></div>
	<?php echo form_close(); ?>
	<hr>
	<footer>
	&copyCopyright 2020 - <a href="https://itera.ac.id">Institut Teknologi Sumatera
	</footer>

</div>
</body>
</html>
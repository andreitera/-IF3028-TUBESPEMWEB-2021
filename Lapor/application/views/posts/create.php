<html>
<head>
	<title>Simple Lapor</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<br><br>
	<!-- Header -->
	<header>
		<h1 class="judul">SIMPLE LAPOR!</h1>
	</header>
	<!-- Akhir Header -->
	
	<div class="wrap">
			<h3><?php echo validation_errors(); ?></h3>
	</div>

	
	<!-- Isi -->
	<div class="wrap"> 
		<div class="konten">
			<h2>Buat Laporan/Komentar</h2>
			<hr>
			<?php echo form_open_multipart('../../../../posts/create'); ?>
  				<div>
 				 	 <textarea name="deskripsi" rows="10" placeholder="Komentar"></textarea>
 			 	</div>

 			 	<select name="kategori">
 			 		<option disabled selected>Pilih Kategori Pelaporan/Komentar :</option>
 			 		<option value="Dosen">Dosen</option>
					<option value="Staff">Staff</option>
					<option value="Mahasiswa">Mahasiswa</option>
					<option value="Infrastruktur">Infrastruktur</option>
					<option value="Pengajar">Pengajar</option>
 			 	</select>

				<br><br>
				<div>
					<input name="userfile" type="file" >
				</div>
 			 	<div class="sbmt">
 			 		<button type="submit">Buat LAPOR!</button>
 			 	</div>
 			 	<br><br><br>
 			</form>
 			<hr>
		</div>
	</div>
	<!-- Akhir Isi -->

	
	<div class="footer">
  		<p>&copy; Anggara Maulana Mafdivia, Qisra Lutfi Ranev & Talitha Brillinia Batari</p>
	</div>
	<script type="text/javascript" src="../assets/js/javascript.js" ></script>
	<script type="text/javascript" src="../assets/js/ajax.js" ></script>
</body>
</html>


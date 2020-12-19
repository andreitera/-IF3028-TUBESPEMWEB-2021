<!DOCTYPE html>
<html>
<head>
	<title>LAPOR!</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('SimpleLAPOR/tampilan/css/style.css'); ?>">
	<link rel="shortcut icon" href="tampilan/gambar/download.jpg">
</head>
<body>
	<div class="header">
	  <h1>LAPOR!</h1>
	</div>
	<div class="navbar">
		<ul>
		  <li><a class="active" href="<?php echo base_url().'';?>">Beranda</a></li>
		  <span><li><a href="">Masuk</a></li>
		  <li><a href="#">Daftar</a></li></span>
		  <li><a href="<?php echo base_url().'create'; ?>">Buat Laporan/Komentar</a></li>
		</ul>
	</div>
	<div id="box">	
		<form action="" method="POST">
			<input class="nama" type="text" value="nama" placeholder="Nama">	
			<input class="email" type="text" value="email" placeholder="email">	
		</form>									
	</div>
		
</body>
</html>	

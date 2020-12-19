<!DOCTYPE html>
<html>
<head>
	<title>LAPOR!</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('tampilan/css/style.css'); ?>">
	<link rel="shortcut icon" href="tampilan/gambar/download.jpg">
</head>
<body>
	<div class="header">
	  <h1>LAPOR!</h1>
	</div>
	<div class="navbar">
		<ul>
		  <li><a class="active" href="<?php echo base_url().''; ?>">Beranda</a></li>
		  <li><a href="<?php echo base_url().'create'; ?>">Buat Laporan/Komentar</a></li>
		</ul>
	</div>
	<div id="box">	
		<form action="<?php echo base_url().'search' ?>"   method="GET" >
			<input type="text" name ="keyword" placeholder="cari..." class="cari">	
			<input type="submit" value="Cari" class="submit"><br>
		</form>				
		<div class="konten1">
		<h4>Laporan/Komentar Terakhir</h4>
		<hr>
		<div class="output">
		<?php foreach($laporan as $laporan_item){?>
		<?php if(strlen($laporan_item['komentar']) <= 400){?>
			<p> <?php echo $laporan_item['komentar'];?></p>
	<?php	}else { ?>
		<p> <?php echo substr ($laporan_item['komentar'] ,0, 400).'...';?></p>
		<?php		}  ?>
		 <?php echo '<img src="data:image/;base64,'.base64_encode( $laporan_item['lampiran'] ).'"/>' ?>
		 <div class="tgl">
		<p> <?php echo $laporan_item['tanggal'];?>
		 <!-- <h4>Lampiran: Gambar.jpg <span>(WAKTU)  </span></h4>  -->
		<a href="<?php echo base_url().'detail/'.$laporan_item['no']; ?>"> Lihat Selengkapnya ></a>></p>
	</div>
	<hr>
		<?php } ?>
	</div>

		</div>
		
			
</body>
</html>	

<?php
defined('BASEPATH') OR exit('No direct script access allowed');


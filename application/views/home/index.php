<!DOCTYPE html>
<html>
<head>
	<title>SIMPLE LAPOR!</title>
	<!-- file css ada di asset/css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/asset/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/asset/css/reset.css">
</head>
<body >

<div class="container" >
	<h1 >SIMPLE LAPOR !</h1>
	<input type="text" name="cari" id="cari" placeholder="ketik kata kunci pencarian">   </input>
	<a href="<?php echo base_url() ?>index.php/Home/tambah" ><h3>Buat Laporan / Komentar</h3></a>
	<h4>Laporan / Komentar Terakhir</h4>
	<hr />
	<div id="konten">
	<ul>
	<?php foreach ($lapor as $value){ ?> <!--$lapor didapet dari controller home -->
		<li>
			<?php if(strlen($value["isi"]) > 300){ ?>
			<h4 style="margin-bottom: 20px;"><?php echo substr($value["isi"], 0, 300); ?>.....</h4>
			<?php }else{ ?>
				<h4 style="margin-bottom: 20px;"><?php echo $value["isi"]; ?></h4>
			<?php } ?>
			<h4 class="lampiran">Lampiran : <?php echo $value["file"]; ?></h4>
			<a href="<?php echo base_url() ?>index.php/Home/detail/<?php echo $value["id"] ?>"><h4 class="detail">Selengkapnya >>></h4></a>
			<h4 class="waktu" style="margin-right: 10px;">Waktu : <?php echo $value["tanggal"]; ?></h4>
			<div style="clear: both"></div>
		</li>
		<br>
		<hr />
	<?php } ?>
	</ul>
	</div>
	<footer>&copyCopyright 2019 - itera.ac.id</footer>
</div>

</div>

<input id="alamat" value="<?php echo base_url() ?>index.php/Home/cari/" hidden>
<script src="<?php echo base_url() ?>/asset/ajax/ajax.js"></script>

</body>
</html>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>SIMPLE LAPOR!</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/atributweb/css/detail.css">

</head>

<body>
	<div class="recomended">
		<h1>Layanan Aspirasi dan Pengaduan Massa Informatika ITERA</h1>
		<h4>Detail Laporan / Komentar</h4>
		<hr />
		<div class="recomendedkiri">
			<h4 class="isi"><?php echo $lapor["isi"]; ?></h4>
			<h4 class="lampiran">Lampiran : </h4>
			<?php
			$ekstensifile = explode('.', $lapor["file"]); //fungsi untuk mecah string dengan pemecah . ,ardi.jpg = ['ardi','jpg']
			$ekstensifile = strtolower(end($ekstensifile));
			if ($ekstensifile == "pdf") {
			?>
				<embed src="<?php echo base_url() ?>/atributweb/file/<?php echo $lapor["file"]; ?>" />
			<?php } else { ?>
				<img id="filedetail" style="width: 500px;" src="<?php echo base_url() ?>/atributweb/file/<?php echo $lapor["file"]; ?>">
			<?php } ?>
		</div>
		<div class="recomendedkanan">
			<a href="<?php echo base_url() ?>index.php/Home/delete/<?php echo $lapor["id"] ?>" onclick="return confirm('yakin ingin hapus?');">
				<h4 class="hapus">| Hapus laporan / komentar</h4>
			</a>
			<a href="<?php echo base_url() ?>index.php/Home/detail2/<?php echo $lapor["id"] ?>">
				<h4 class="ubah">Ubah laporan / komentar |</h4>
			</a>
			<br>
		</div>

		<div class="wit">
			<h4>Waktu : <?php echo $lapor["tanggal"]; ?></h4>
			<h4>Aspek : <?php echo $lapor["aspek"]; ?></h4>
		</div>
		<br>
		<footer class="inifot">
			&copyCopyright 2019 - informatika.itera.ac.id
			<br>118140088 118140114 118140041</br>
		</footer>

	</div>

</body>

</html>
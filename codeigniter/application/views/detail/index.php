<<<<<<< HEAD
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>SIMPLE LAPOR!</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/atributweb/css/detail.css">

</head>

<body>
	<div class="recomended">
		<h1>SIMPLE LAPOR!</h1>
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

=======
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

		<h4>Detail Laporan / Komentar</h4>
		<hr />

		<ul>
			<li>
				<h4 style="margin-bottom: 20px;"><?php echo $lapor["isi"]; ?></h4>
				<h4 class="lampiran">Lampiran : </h4><br \>

				<?php
				$ekstensifile = explode('.', $lapor["file"]); //fungsi untuk mecah string dengan pemecah . ,aldi.jpg = ['aldi','jpg']
				$ekstensifile = strtolower(end($ekstensifile));
				if ($ekstensifile == "pdf") {
				?>
					<embed src="<?php echo base_url() ?>/asset/file/<?php echo $lapor["file"]; ?>" />
				<?php } else { ?>
					<img id="filedetail" style="width: 500px;" src="<?php echo base_url() ?>/asset/file/<?php echo $lapor["file"]; ?>">
				<?php } ?>

				<div style="clear: both"></div>
				<a href="<?php echo base_url() ?>index.php/Home/delete/<?php echo $lapor["id"] ?>" onclick="return confirm('yakin ingin hapus?');">
					<h4 class="hapus">| Hapus laporan / komentar</h4>
				</a>
				<a href="<?php echo base_url() ?>index.php/Home/detail2/<?php echo $lapor["id"] ?>">
					<h4 class="hapus">Ubah laporan / komentar |</h4>
				</a>
				<h4 class="waktudetail" style="margin-right: 30px;">Waktu : <?php echo $lapor["tanggal"]; ?></h4>
				<h4 class="aspek">Aspek : <?php echo $lapor["aspek"]; ?></h4>
				<div style="clear: both"></div>
			</li>
			<br>
			<hr />
		</ul>

		<footer>
			&copyCopyright 2019 - itera.ac.id
		</footer>
	</div>

</body>

>>>>>>> 39462ae4bc22c375153b367965504090af312017
</html>
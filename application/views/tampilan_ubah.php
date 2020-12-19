<!DOCTYPE html>
<html>

<head>
	<title>SIMPLE LAPOR!</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/asset/css/tampilanubah.css">


</head>

<body>

	<div class="container">
		<h1>SIMPLE LAPOR!</h1>
		<h4>Buat Laporan/Komentar</h4>
		<hr />

		<?php
		if (validation_errors()) :
			echo validation_errors();
		endif;
		?>

		<?php echo form_open_multipart('Home/ubah/' . $lapor["id"]); ?>
		<textarea rows="16" cols="136" style="width: 800px;" name="isi"><?php echo $lapor["laporan"]; ?></textarea><br \>
		<br><select name="Aspek">
			<option value="" disabled selected>Pilih Aspek Pelaporan/Komentar</option>
			<option value="Agama">Agama</option>
			<option value="Corona Virus">Corona Virus</option>
			<option value="Ekonomi">Ekonomi</option>
			<option value="Lingkungan">Lingkungan</option>
			<option value="Kependudukan">Kependudukan</option>
			<option value="Lalu Lintas">Lalu Lintas</option>

			<?php foreach ($aspek as $i) { ?>
				<?php if ($i == $lapor["Aspek"]) { ?>
					<option value="<?= $i; ?>" selected><?= $i; ?></option>
				<?php } else { ?>
					<option value="<?= $i; ?>"><?= $i; ?></option>
				<?php } ?>

			<?php } ?>
		</select><br /><br />
		<label>File Diwajibkan Dalam Bentuk Gambar / PDF</label><br \>
		<input id="file" type="file" name="File"><br /><br />
		<input id="submit" value="Ubah" type="submit" name="submit">
		<div style="clear: both;"></div>
		<?php echo form_close(); ?>
		<hr>
		<a href="<?= base_url(); ?>Home">
			< Back </a> </div> <footer>
				&copyCopyright 2020 - itera.ac.id
				</footer>

	</div>
</body>

</html>
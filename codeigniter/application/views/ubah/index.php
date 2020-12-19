<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>SIMPLE LAPOR!</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/atributweb/css/style.css">
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
		<?php echo form_open_multipart('index.php/Home/ubah/' . $lapor["id"]); ?>
		<textarea rows="16" cols="136" style="width: 800px;" name="isi"><?php echo $lapor["isi"]; ?></textarea><br \>
		<select name="aspek">
			<?php foreach ($aspek as $i) { ?>
				<?php if ($i == $lapor["aspek"]) { ?>
					<option value="<?= $i; ?>" selected><?= $i; ?></option>
				<?php } else { ?>
					<option value="<?= $i; ?>"><?= $i; ?></option>
				<?php } ?>

			<?php } ?>
		</select><br />
		<label>File Diwajibkan Dalam Bentuk Gambar / PDF</label><br \>
		<input id="file" type="file" name="File"><br />
		<input id="submit" value="Ubah" type="submit" name="submit">
		<div style="clear: both;"></div>
		<?php echo form_close(); ?>
		<hr>
		<footer>&copyCopyright 2020 -informatika.itera.ac.id
			<br>118140088 118140114 118140041</br>
		</footer>

	</div>
</body>

</html>
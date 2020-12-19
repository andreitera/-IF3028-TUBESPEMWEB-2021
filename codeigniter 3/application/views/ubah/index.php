<!DOCTYPE html>
<html>
<head>
	<title>ITERA MELAPOR!</title>
	<!-- file css terdapat di asset/css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/asset/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/asset/css/reset.css">
</head>
<body>

<div class="container">
	<h1>ITERA MELAPOR!</h1>
	<h2>Platform Lapor untuk seluruh civitas akademika ITERA<h2>
    <h4>Buat Laporan/Komentar</h4>
   <hr />
   <?php 
   if(validation_errors()):
   echo validation_errors(); 
   endif;
	?>
   <?php echo form_open_multipart('index.php/Home/ubah/'.$lapor["id"]); ?>
	    <textarea rows="16" cols="136" style="width: 800px;" name="isi" ><?php echo $lapor["isi"]; ?></textarea><br \>
		<select name="aspek">
			<?php foreach ($aspek as $i) { ?>
				<?php if($i == $lapor["aspek"]){ ?>
					<option value="<?= $i; ?>" selected><?= $i; ?></option>
				<?php }else{ ?>
					<option value="<?= $i; ?>"><?= $i; ?></option>
				<?php } ?>

			<?php } ?>
		</select><br />
		<label>File diwajibkan dalam bentuk Gambar / PDF (Max 2Mb)</label><br \>
		<input id="file" type="file" name="File" ><br />
		<input id="submit" value="Ubah" type="submit" name="submit">
		<div style="clear: both;"></div>
	<?php echo form_close(); ?>
	<hr>
	<footer>
	&copyCopyright 2020 - <a href="https://itera.ac.id">Institut Teknologi Sumatera
	</footer>

</div>
</body>
</html>
<div class="container">
	<h1>SIMPLE LAPOR!</h1>
    <h4>Buat Laporan/Komentar</h4>
   <hr />
   <?php
   if(validation_errors()):
   echo validation_errors();
   endif;
	?>
   <?php echo form_open_multipart('Home/ubah/'.$lapor["id_laporan"]); ?>
	  <textarea rows="16" cols="136" style="width: 800px;" name="isi" ><?= $lapor["isi_laporan"]; ?></textarea><br \>

    <select name="aspek">
      <?php foreach ($aspek as $a): ?>
        <option value="<?= $a['id_aspek']; ?>" <?= ($a['id_aspek'] == $lapor['aspek']) ? "selected" : ""; ?>><?= $a['aspek']; ?></option>
      <?php endforeach; ?>
      <option value=""></option>

    </select>
    <br />
		<label>File Diwajibkan Dalam Bentuk Gambar / PDF</label><br \>
		<input id="file" type="file" name="File" ><br />
		<input id="submit" value="Ubah" type="submit" name="submit">
		<div style="clear: both;"></div>
	<?php echo form_close(); ?>
	<hr>
	<footer>
		&copyCopyright 2019 - itera.ac.id
	</footer>

</div>

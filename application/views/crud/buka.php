<div class="container">
	<h1>SIMPLE LAPOR!</h1>
    <h4>Buat Laporan/Komentar</h4>
   <hr />
   <?php
   if(validation_errors()):
   echo validation_errors();
   endif;
	?>
   <input type="text" name="id_laporan" value="<?= $lapor["id_laporan"]; ?>" hidden>
	  <textarea rows="16" cols="136" style="width: 800px;" name="isi" readonly><?= $lapor["isi_laporan"]; ?></textarea><br \>
    <select name="aspek" disabled="true">
      <?php foreach ($aspek as $a): ?>
        <option value="<?= $a['id_aspek']; ?>" <?= ($a['id_aspek'] == $lapor['aspek']) ? "selected" : ""; ?>><?= $a['aspek']; ?></option>
      <?php endforeach; ?>
      <option value=""></option>
    </select>
    <br />
    <?php
      $ekstensifile = explode('.',$lapor["file"]); //fungsi untuk mecah string dengan pemecah . ,aldi.jpg = ['aldi','jpg']
      $ekstensifile = strtolower(end($ekstensifile));
    ?>
    <embed src="<?php echo base_url() ?>/asset/file/<?php echo $lapor["file"]; ?>" />
    <img id="filedetail" style="width: 500px;" src="<?php echo base_url() ?>/assets/file/<?php echo $lapor["file"]; ?>">
		<label>Nama file</label><br \>
    <?= $lapor["file"]; ?>
    <a href="<?php echo base_url();?>user">kembali</a>
		<div style="clear: both;"></div>
	<?php echo form_close(); ?>
	<hr>
	<footer>
		&copyCopyright 2019 - itera.ac.id
	</footer>

</div>

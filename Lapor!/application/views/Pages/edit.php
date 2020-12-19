<section class="about" id="buat-lapor">
	<div class="buat-laporan">
		<p><b>Edit Laporan/Komentar</b></p>
		<hr>
		<?php echo form_open_multipart('laporan/update/'.$laporan['id'], array('id' => 'form_laporan')); ?>
			<textarea placeholder="Ketik Laporan Anda..." name="isi-laporan" class="form_field" id="isi_laporan"><?php echo $laporan['isi']; ?></textarea>
           
			<div class="custom-select">
            <br>
				<select name="aspek" class="form_field" id="aspek">
					<?php $default_aspek = $laporan['aspek'] ?>
					<option value>Pilih Aspek Pelaporan/Komentar</option>
					<option value="Dosen" <?php echo ($default_aspek == "Dosen")?"selected":""; ?>>Dosen</option>
					<option value="Staff" <?php echo ($default_aspek == "Staff")?"selected":""; ?>>Staff</option>
					<option value="Mahasiswa" <?php echo ($default_aspek == "Mahasiswa")?"selected":""; ?>>Mahasiswa</option>
					<option value="Infrastruktur" <?php echo ($default_aspek == "Infrastruktur")?"selected":""; ?>>Infrastruktur</option>
					<option value="Pengajaran" <?php echo ($default_aspek == "Pengajaran")?"selected":""; ?>>Pengajaran</option>
				</select>
			</div><br>
			<input type="file" name="lampiran" class="form_field" id="real-file" hidden="hidden" />
			<button type="button" id="custom-button">Choose File</button><br>
			<span id="custom-text">No file chosen, yet.</span>
            <br>
            
			<input type="submit" name="send" id="send-button" value="LAPOR!">
        <?php echo form_close(); ?>
        <br><br><br><hr>
	</div>
</section>

<script src="<?php echo base_url(); ?>js/script2.js"></script>
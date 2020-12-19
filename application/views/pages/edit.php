<section class="about" id="buat-lapor">
	<div class="container">
		<div class="alas">
			<div class="buat-laporan">
				<!-- <p>Buat Laporan/Komentar</p>
				<hr> -->
				<?php echo form_open_multipart('laporan/update/'.$laporan['id'], array('id' => 'form_laporan')); ?>
					<textarea placeholder="Ketik Laporan Anda..." name="isi-laporan" class="form_field" id="isi_laporan"><?php echo $laporan['isi']; ?></textarea>

					<div class="custom-select">
						<select name="aspek" class="form_field" id="aspek">
							<?php $default_aspek = $laporan['aspek'] ?>
							<option value"" hidden d>Pilih Aspek Pelaporan/Komentar</option>
							<option value="Dosen" <?php echo ($default_aspek == "Dosen")?"selected":""; ?>>Dosen</option>
							<option value="Staff" <?php echo ($default_aspek == "Staff")?"selected":""; ?>>Staff</option>
							<option value="Mahasiswa" <?php echo ($default_aspek == "Mahasiswa")?"selected":""; ?>>Mahasiswa</option>
							<option value="Infrastruktur" <?php echo ($default_aspek == "Infrastruktur")?"selected":""; ?>>Infrastruktur</option>
							<option value="Pengajaran" <?php echo ($default_aspek == "Pengajaran")?"selected":""; ?>>Pengajaran</option>
						</select>
					</div>
					<input type="file" name="lampiran" class="form_field" id="real-file" hidden="hidden" />
					<button type="button" id="custom-button">Choose File</button>
					<span id="custom-text">No file chosen, yet.</span>
					<br>

					<input class="btn px-5" type="submit" name="send" id="send-button" value="LAPOR!">
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</section>

<script src="<?php echo base_url(); ?>js/script2.js"></script>

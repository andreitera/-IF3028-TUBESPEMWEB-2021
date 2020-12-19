<section class="about" id="buat-lapor">
			<div class="buat-laporan">
                <p><b>Edit Laporan/Komentar</b></p>
				<hr>
				<?php echo form_open_multipart('laporan/input', array('id' => 'form_laporan')); ?>
					<textarea placeholder="Ketik Laporan Anda..." name="isi-laporan" class="form_field" id="isi_laporan"></textarea>

					<div class="custom-select"><br>
						<select name="aspek" class="form_field" id="aspek">
							<option value="">Pilih Aspek Pelaporan/Komentar</option>
							<option value="Dosen">Dosen</option>
							<option value="Staff">Staff</option>
							<option value="Mahasiswa">Mahasiswa</option>
							<option value="Infrastruktur">Infrastruktur</option>
							<option value="Pengajaran">Pengajaran</option>
						</select>
					</div><br>
					<input type="file" name="lampiran" class="form_field" id="real-file" hidden="hidden" />
					<button type="button" id="custom-button">Choose File</button><br>
					<span id="custom-text" style=>No file chosen, yet.</span>
					<br>

					<input  type="submit" name="send" id="send-button" value="LAPOR!">
                <?php echo form_close(); ?>
                
			</div>
		<br><br><br><hr>
</section>

<script src="<?php echo base_url(); ?>js/script2.js"></script>
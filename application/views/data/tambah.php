<fieldset>
	<br><br>
	<div class="wrapper">
		<h1> SIMPLE LAPOR! </h1>
	</div>

	<?= validation_errors(); ?>
	<div class="tambah">
		<form name="formTambah" action="" onsubmit="return validasiKeluhan()" method="post" enctype="multipart/form-data">
			<br>
			<label for="username">Username</label>
			<input type="text" name="username" id="username" readonly value="<?= $user['username'] ?>">
			<br><br>
			<label for="lapor">Buat Laporan/Komentar
				<br>
			</label>
			<br>
			<textarea name="lapor" id="lapor" placeholder="Masukan komentar anda. Minimal 20 Kata " rows="4" cols="50"></textarea>
			<br><br>
			<select id="aspek" name="aspek">
				<option value="" hidden>Pilih Aspek</option>
				<option>Dosen</option>
				<option>Staff</option>
				<option>Infrastruktur</option>
				<option>Pengajar</option>
				<option>Mahasiswa</option>
			</select>
			<br><br>
			<input type="file" name="gambar" id="gambar">
			<br><br>
			<div style="text-align: right;">
				<button type="submit" id="submit" onclick="return checkWordCount()" name="submit"> Buat Lapor</buttons>
			</div>
		</form>
	</div>
</fieldset>

<hr />
<div class="wrapper">
	<br><br>
	<h1>UBAH LAPORAN</h1>
</div>

<?= validation_errors(); ?>

<form action="" name="formUbah" onsubmit="return validasiUbah()" method="post" enctype="multipart/form-data">
	<br>
	<label for="username">Username</label>
	<input type="text" name="username" id="username" readonly value="<?= $user['username'] ?>">
	<br>
	<hr />
	<label for="lapor">Masukkan Keluhan/Komentar
		<br>
		<textarea name="lapor" id="lapor"><?= $keluhan['lapor']; ?></textarea>
	</label>
	<br><br>

	<select id="aspek" name="aspek">
		<option value="" hidden>Pilih Aspek/komentar</option>
		<option>Dosen</option>
		<option>Staff</option>
		<option>Mahasiswa</option>
		<option>Infrastruktur</option>
		<option>Pengajar</option>
	</select>
	<br><br>
	<input type="file" name="gambar" id="gambar">
	<br><br>
	<div style="text-align: right;">
		<button type="submit" name="ubah" onclick="return checkWordCount()">Ubah data</button>
	</div>

</form>
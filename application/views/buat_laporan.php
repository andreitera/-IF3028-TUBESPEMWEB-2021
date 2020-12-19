<!DOCTYPE html>
<html>
<head>
	<title>Buat Laporan</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style_lapor.css')?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="container">
		<div class="judul">
			<label> SIMPLE LAPOR! </label>
		</div>
		<div class="Lapor">
			<label>Buat Laporan/Komentar</label>
			<hr>
			<b><?= validation_errors(); ?></b>
			<br>


			<form action="" method="POST" enctype="multipart/form-data">
				<div>
					<textarea placeholder="Laporan/Komentar" name="deskripsi" ></textarea>
				</div>
				<br>
				<div>
					<select name="aspek">
					<option default >Pilih Aspek Laporan/Komentar</option>
					<option>Umum</option>
					<option>Infrastruktur</option>
					<option>Pendidikan</option>
					<option>Bidang Resejahteraan Rakyat</option>
					<option>Pemilu</option>
					<option>Energi dan Sumber Daya Alam</option>
					<option>Bidang Politik, Hukum, dan Kesejahteraan</option>
					<option>Kesehatan</option>
					<option>Pekerjaan</option>
					<option>Mancanegera</option>
				</select>
				</div>
				<br>
				<div>
					<input type="file" name="file">
				</div>
				<br>
				
				<div class="sumbit">
					<button>Buat Laporan</button>
				</div>

				<div class="buatLapor">
			
					<a href="<?php echo base_url()?>Tampil/index">
						<button type="button">Kembali</button>
					</a>
				</div>
				<br>
				<br>
				<hr>

			</form>
		</div>
	</div>

</body>
</html>
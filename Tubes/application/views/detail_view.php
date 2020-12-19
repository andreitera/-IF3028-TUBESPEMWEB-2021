<!DOCTYPE html>
<html>
<head>
	<title>Tampilan Laporan</title>



	<link rel="stylesheet" type="text/css" href="<?php echo base_url('style/style_detail.css') ?>">

</head>
<body>

	<div class="container">
		
		<div class="content">

		<div class="header">
	
			<strong>Layanan Aspirasi dan Pengaduan Online Mahasiswa IF ITERA</strong>
			
			<br><br>

		</div>

		
		<br>
		
		<p>Detail Laporan/Komentar</p>
		<hr>

		<br>
		
			<p>
				<?php echo $laporan->isi; ?>
			</p>
			
			<p>Lampiran: </p>


			<div class="file">
				
			</div>

		

			<p>Waktu: <?php echo $laporan->waktu; ?> Aspek: <?php echo $laporan->aspek; ?> </p>

			<a href="<?php  echo site_url('Laporan_controller/edit/'.$laporan->id) ?>" style="width: auto; height: auto; float: right; margin-top: -34px; margin-right: 186px;">Edit |</a>

			<div class="detail"><a href = "#" onclick="deleteConfirm('<?php echo site_url('Laporan_controller/delete/'.$laporan->id) ?>')">Hapus Laporan/Komentar</a></div>
		<hr>
		


		<br><br>

	</div>

</body>
</html>
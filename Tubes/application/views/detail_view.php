<!DOCTYPE html>
<html>
<head>
	<title>Detail Laporan</title>



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

			<div>

				<a href="<?php echo site_url('Laporan_controller/edit/'.$laporan->id) ?>">

				<img src="<?php echo base_url('img/edit-file.png') ?>" width="25px" height="25px" style="margin-bottom: -43px; margin-left: 425px;"> 

				</a>

			</div>

			<p>Waktu: <?php echo $laporan->waktu; ?> Aspek: <?php echo $laporan->aspek; ?> </p>

			<a href="<?php  echo site_url('Laporan_controller/edit/'.$laporan->id) ?>" style="width: auto; height: auto; float: right; margin-top: -34px; margin-right: 210px;">Edit |</a>

			<div class="detail">

				<a href="<?php echo site_url('Laporan_controller/delete/'.$laporan->id) ?>" onclick="return confirm('Anda yakin ingin menghapus laporan ini?');" style="color: rgb(212, 54, 36);">
				Hapus Laporan/Komentar
			</a>
			</div>

			<div style="margin-left: 495px; margin-top:-33px;">

				<a href="<?php echo site_url('Laporan_controller/delete/'.$laporan->id) ?>">

				<img src="<?php echo base_url('img/delete.png') ?>" width="20px" height="20px"> 

				</a>

			</div>
		
		<hr>

		<br><br>

	</div>

</body>
</html>
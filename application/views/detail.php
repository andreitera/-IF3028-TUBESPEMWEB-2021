<!DOCTYPE html>
<html>
<head>
	<title>Detail Laporan</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style_detail.css')?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="container">
		<div class="judul">
			<label> SIMPLE LAPOR! </label>
		</div>
		<div class="content">
		<table>
			<tr>
				<td>
					<p>Detail Laporan/Komentar</p>
					<hr>
				</td>
			</tr>
			<tr>
				<td>
					<p><?=$lapor['deskripsi']?></p>
				</td>
			</tr>
			<tr>
				<td>
					<p class="lampiran"> <b>Lampiran <b> : </p>
					<img src="<?php echo base_url('assets/lampiran/'.$lapor['berkas']) ?>" width="300" height="300"/>
				</td>
			</tr>
			<tr>
				<td>
					<br>
					<a class="Waktu">Waktu: <?=$lapor['created_at']?></a>
					<a class="Aspek">Aspek: <?=$lapor['aspek']?></a>
					<a class="hapus" href="<?= base_url(); ?>Tampil/hapus/<?= $lapor['id']; ?>" onclick="return confrim('yakin?');"> Hapus Laporan/Komentar <i class="fa fa-times"> </i></a><br>
					<hr>
				</td>
			</tr>
		</table>
		<!-- <div class="detail">
			<label>Detail Laporan/Komentar</label>
		<hr>
		</div> -->	
			<a class="kembali" href="<?php echo base_url()?>Tampil/index">
						<button type="button">Kembali</button>
					</a>


				</div>
			</div>
</body>
</html>
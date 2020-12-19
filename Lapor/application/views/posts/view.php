<html>
<head>
	<title>Simple Lapor</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<br><br>
	<!-- Header -->
	<header>
		<h1 class="judul">SIMPLE LAPOR!</h1>
	</header>
	<!-- Akhir Header -->
	
	<!-- Isi -->
	<div class="wrap"> 
		<div class="konten">
			<h2>Detail Laporan/Komentar</h2>
			<hr>
			<p>
				<?php echo $post['deskripsi']; ?>
			</p>
			<p>Lampiran:</p>
			<div>
				<img src="../assets/lampiran/<?php echo $post['lampiran']; ?>">
			</div>
			<form>
				<label>Waktu: <?php echo $post['waktu']; ?>  ||</label>	
				<label> Aspek: <?php echo $post['kategori']; ?></label>	<br>
				<a href="edit/<?php echo $post['id']; ?>" class="next">Ubah Laporan/Komentar <i class="fa fa-pencil"></i></a>
			</form>

			<?php echo form_open('../../../../posts/delete/'.$post['id']); ?>
					<input class="danger" type="submit" value="Delete" onclick="clicked(event)">
			</form>
			<br><br><br>
			<hr>
		</div>
	</div>
	<!-- Akhir Isi -->
	
	<div class="footer">
  		<p>&copy; Anggara Maulana Mafdivia, Qisra Lutfi Ranev & Talitha Brillinia Batari</p>
	</div>

	<script type="text/javascript" src="../assets/js/javascript.js" ></script>
	<script type="text/javascript" src="../assets/js/ajax.js" ></script>
</body>
</html>
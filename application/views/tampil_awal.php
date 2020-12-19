<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style_awal.css')?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<title>Lapor Homepage</title>
</head>
<body>
	<div class="container">


		<header>
		<div class="judul">
			<label> SIMPLE LAPOR! </label>
		</div>
		<?php echo form_open('Tampil/search')?>
		<div class="search">
			<input type="text" class="searchTerm" name="keyword">
			<button type="submit" class="searchButton" >
        	<i class="fa fa-search"></i> Cari
    		</button>
		</div>
		<?php echo form_close()?>
		<div class="buatLapor">
			<label>Buat Laporan/Komentar</label>
			<a href="<?php echo base_url()?>Tampil/tambah">
			<i class="fa fa-plus"></i>
			</a>
		</div>
		</header>
<!-- 		<?php if ($this->session->flashdata()) : ?>
			<p>Laporan</p><b>Berhasil</b><b>Dihapus</b>
			<?=$this->session->flashdata('flash');?>
			<?php endif; ?>	 -->
		<div class="content">
			<table>
				<tr>
					<td>
						<p>
							Laporan/Komentar Terakhir
						</p>
						<hr>
					</td>
				</tr>
				<tr>
					<?php foreach ($lapor as $lb): ?>

						<td>
							<p>
								<?php echo $lb['deskripsi'] ?>
							</p>
						</td>
						<br>
				</tr>
				<tr>
					<td>
						<a class="lampiran">Lampiran : <?php echo $lb['berkas'] ?></a>
						<a class="Waktu">Waktu:<?php echo $lb['created_at'] ?></a>
						<a class="Selengkapnya" href="<?= base_url(); ?>Tampil/detail/<?= $lb['id'];?>"> Lihat Selengkapnya ></a>
						<hr>
					</td>
				</tr>

			</table>
			<?php endforeach?>
		</div>
		<div class="footer">

		</div>
	</div>

</body>
</html>
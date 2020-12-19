<!-- View pada Beranda Home Web  -->
<div id="badan">
	<form action="<?= base_url(); ?>Search" method="POST">
		<input type="text" placeholder="Cari laporan disini..." 
		name="keyword" id="keyword" autocomplete="off">
		<input type="submit" name="cari" value="Cari" id="cari-data">
	</form>
	<a href="home/form">Buat Laporan/komentar <img height="20px" src="asset/icon/add.png"></a>
</div>
<div id="konten">
	<br><br>
	<p>
		<?php if (isset($name)) {
			echo "$name";
		} else {
			echo "Laporan/Komentar Terakhir ";
		}
		?>
	</p>
	<br><hr>
	<?php foreach ($laporan as $value): ?>
		<div class="wrapper">
			
			
		</div>
		<p><?= $value['isi']; ?></p>
		<br>
		<?= $value['lampiran']; ?> (ini lampiran)
		<span>
			<p><?= $value['waktu']; ?> &nbsp 
			 <a href="<?= base_url ('haldetail'); ?>">Lihat Selengkapnya </a></p>
		</span>
		<hr>
	<?php endforeach; ?>
	<?php if ($laporan == null): ?>
		<br><center> Data tidak ditemukan </center>
	<?php endif; ?>
</div> 

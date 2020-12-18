	<div class="container-laporan">
		<div class="search">
			<form action="" method="post">
				<input type="text">
				<button type="submit">Cari</button>
			</form>
		</div>
		<div class="buat-lapor">
			<a href="<?= base_url('formlapor')?>">
				Buat Laporan/Komentar
				<img src="<?= base_url()?>/assets/img/Plus.svg" alt="">
			</a>
		</div>

		<p>Laporan/Komentar Terakhir</p>
		<div class="line"></div>
		
		<?php foreach ($laporan as $value) {?>
				<div class="data">
				<?php if(strlen($value["komentar"]) > 300){ ?>
					<p style="margin-bottom: 20px;"><?php echo substr($value["komentar"], 0, 300); ?>.....</p>
				<?php }else{ ?>
					<p style="margin-bottom: 20px;"><?php echo $value["komentar"]; ?></p>
				<?php } ?>
				<p> Lampiran : <?= $value["lampiran"];?></p>
				<label>Waktu : <?= $value["waktu"];?></label>
				<label>Aspek : <?= $value["lampiran"];?></label>
				<a href="<?= base_url() ?>/Home/detail/<?php echo $value["id"] ?>"><p>Selengkapnya ></p></a>
				<div class="line"></div>
			</div>	
		<?php }?>
	</div>
</body>
</html>
<ul>
	<?php foreach ($lapor as $data){ ?> <!--$lapor didapet dari controller home -->
		<li>
			<h4 style="margin-bottom: 20px;"><?php echo substr($data["isi_laporan"], 0, 100); ?>.....</h4>
			<h4 class="lampiran">Lampiran : <?php echo $data["file"]; ?></h4>
			<a href="<?php echo base_url() ?>index.php/Home/detail/<?php echo $data["id_laporan"] ?>""><h4 class="detail">Selengkapnya >>></h4></a>
			<h4 class="waktu" style="margin-right: 10px;">Waktu : <?php echo $data["created_at"]; ?></h4>
			<div style="clear: both"></div>
		</li>
		<br>
		<hr />
	<?php } ?>
	</ul>

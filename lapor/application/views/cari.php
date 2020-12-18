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
				<label>Aspek : <?= $value["aspek"];?></label>
				<a href="<?= base_url() ?>/home/detail/<?php echo $value["id"] ?>"><p>Selengkapnya ></p></a>
				<div class="line"></div>
			</div>	
		<?php }?>
	</div>
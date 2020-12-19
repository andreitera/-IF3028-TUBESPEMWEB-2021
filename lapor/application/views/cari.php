<?php foreach ($laporan as $value) {?>
				<div class="data">
				<?php if(strlen($value["komentar"]) > 300){ ?>
					<p style="margin-bottom: 20px;"><?php echo substr($value["komentar"], 0, 300); ?>.....</p>
				<?php }else{ ?>
					<p style="margin-bottom: 20px;"><?php echo $value["komentar"]; ?></p>
				<?php } ?>
				<p> Lampiran : <?= $value["lampiran"];?></p>
				<label>Waktu : <?= $value["waktu"];?></label>
				<label style="margin-left: 20px;">Aspek : <?= $value["aspek"];?></label>
				<a class="button-detail" href="<?= base_url() ?>/home/detail/<?php echo $value["id"] ?>"><p>Selengkapnya-></p></a>
				<div class="line" style="clear:both;"></div>
			</div>	
		<?php }?>
	</div>
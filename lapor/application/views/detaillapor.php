<div class="container-laporan">
		<p>Detail Laporan/Komentar</p>
		<div class="line"></div>

        <div class="data">
            <?= $laporan["komentar"]; ?>
        </div>

        <div class="data">
            <label for="">Lampiran :</label><br>
            <?php 
				$lampiran = explode('.',$laporan["lampiran"]); //fungsi untuk mecah string dengan pemecah . ,aldi.jpg = ['aldi','jpg']
				$lampiran = strtolower(end($lampiran));
				if($lampiran == "pdf"){
			?>
			<embed src="<?php echo base_url() ?>/assets/img/<?php echo $laporan["lampiran"]; ?>" />
			<?php } else { ?>
			<img id="filedetail" style="width: 500px;" src="<?php echo base_url() ?>/assets/img/<?php echo $laporan["lampiran"]; ?>">
			<?php } ?>
        </div>

        <div class="data">
            <label>Waktu: <?= $laporan["waktu"]; ?></label>
            <label style="margin-left: 20px;">Aspek: <?= $laporan["aspek"]; ?></label>

            <a class="btn-detail" href="">Hapus Laporan/Komentar</button>        
            <a class="btn-detail" style="margin-right:20px;" href="<?= base_url()?>home/edit/<?= $laporan["id"]?>">Edit Laporan/Komentar</a>    
        </div>

        <div class="line" style="clear: both;"></div>
	</div>
</body>
</html>
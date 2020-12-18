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

        <div class="data" style="float: left;">
            <label for="">Waktu: </label>
            <?= $laporan["waktu"]; ?>
        </div>
        
        <div class="data" style="float: left;"> 
            <label for="">Aspek: </label>
            <?= $laporan["aspek"]; ?>
        </div>

        
        <div class="data" style="float: right;"> 
            <button class="submit" type="submit">Edit Laporan/Komentar</button>    
            <button class="submit" type="submit">Hapus Laporan/Komentar</button>        
        </div>

        <div class="line" style="clear: both;"></div>
	</div>
</body>
</html>
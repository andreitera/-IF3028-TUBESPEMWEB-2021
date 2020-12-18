<div class="container-laporan">
		<p>Edit Laporan/Komentar</p>
		<div class="line"></div>
        <?php 
            if(validation_errors()):
            echo validation_errors(); 
            endif;
	    ?>
        <!-- <form action="<?=base_url('formlapor/edit')?>" method="post"> -->
        <?php echo form_open_multipart('formlapor/edit/'.$laporan["id"]);?>
            <div class="data">
                <textarea name="komentar" id="laporan" placeholder="Laporan/Komentar">
                <?= $laporan["komentar"];?>
                </textarea>
            </div>
            <div class="data">
                <select class="aspek" name="aspek" id="aspek">
                    <?php   foreach ($aspek as $i) {
                            if($i == $laporan["aspek"]){ 
                    ?>
                    <option value="<?= $i; ?>" selected><?= $i; ?></option>

                    <?php }else{ ?>
                        <option value="<?= $i; ?>"><?= $i; ?></option>
                    <?php } ?>

                    <?php } ?>
                </select>
            </div>
            <div class="data">
                <!-- <input type="button" class="btn-file" value="Pilih Lampiran" onclick="document.getElementById('pic').click()">
                <input type="text" class="file" id="filename" name="file">
                <input type="file" id="pic" name="pic" style="display:none" onchange="document.getElementById('filename').value=this.value"> -->
                <input class="file" name="file" type="file">
            </div>
            <div class="data">
                <button class="submit" type="submit">Edit LAPOR!</button>
                <!-- <input class="button" type="submit" name="submit" value="submit"> -->
            </div>
        <?php echo form_close(); ?>
        <div class="line" style="clear: both;"></div>
	</div>
</body>
</html>
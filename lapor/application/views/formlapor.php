    <div class="container-laporan">
		<p>Buat Laporan/Komentar</p>
		<div class="line"></div>
        <?php 
            if(validation_errors()):
            echo validation_errors(); 
            endif;
	    ?>
        <!-- <form action="<?=base_url('formlapor/newLapor')?>" method="post"> -->
        <?php echo form_open_multipart('formlapor/newLapor');?>
            <div class="data">
                <textarea name="komentar" id="laporan" placeholder="Laporan/Komentar"></textarea>
            </div>
            <div class="data">
                <select class="aspek" name="aspek" id="aspek">
                    <option value="default" selected='selected'>Pilih Aspek Pelaporan/Komentar</option>
                    <option value="Dosen">Dosen</option>
                    <option value="Staff">Staff</option>
                    <option value="Mahasiswa">Mahasiswa</option>
                    <option value="Infrastruktur">Infrastruktur</option>
                    <option value="Pengajaran">Pengajaran</option>
                </select>
            </div>
            <div class="data">
                <!-- <input type="button" class="btn-file" value="Pilih Lampiran" onclick="document.getElementById('pic').click()">
                <input type="text" class="file" id="filename" name="file">
                <input type="file" id="pic" name="pic" style="display:none" onchange="document.getElementById('filename').value=this.value"> -->
                <input class="file" name="file" type="file">
            </div>
            <div class="data">
                <!-- <button class="submit" type="submit">Buat LAPOR!</button> -->
                <input class="button" type="submit" name="submit" value="submit">
            </div>
        <?php echo form_close(); ?>
        <div class="line" style="clear: both;"></div>
	</div>
</body>
</html>
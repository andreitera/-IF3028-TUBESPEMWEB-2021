    <div class="container-laporan">
		<p>Buat Laporan/Komentar</p>
		<div class="line"></div>

        <form action="<?=base_url('formlapor/newLapor')?>" method="post">
            <div class="data">
                <textarea name="laporan" id="laporan" placeholder="Laporan/Komentar"></textarea>
            </div>
            <div class="data">
                <select class="aspek" name="aspek" id="aspek">
                    <option value="default" selected='selected'>Pilih Aspek Pelaporan/Komentar</option>
                    <option value="akademik">Akademik</option>
                    <option value="fasilitas">Fasilitas</option>
                    <option value="infrastruktur">Insfrasruktur</option>
                    <option value="keamanan">Keamanan</option>
                    <option value="keuangan">Keuangan</option>
                </select>
            </div>
            <div class="data">
                <input type="button" class="btn-file" value="Pilih Lampiran" onclick="document.getElementById('pic').click()">
                <input type="text" class="file" id="filename">
                <input type="file" id="pic" name="pic" style="display:none" onchange="document.getElementById('filename').value=this.value">
                <!-- <input class="file" name="file" type="file"> -->
            </div>
            <div class="data">
                <button class="submit" type="submit">Buat LAPOR!</button>
            </div>
        </form>
        <div class="line" style="clear: both;"></div>
	</div>
</body>
</html>
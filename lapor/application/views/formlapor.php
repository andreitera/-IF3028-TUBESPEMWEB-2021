    <div class="container-laporan">
		<p>Buat Laporan/Komentar</p>
		<div class="line"></div>

        <form action="<?=base_url('formlapor/newLapor')?>" method="post">
            <div class="data">
                <textarea name="laporan" id="laporan" cols="30" rows="10"></textarea>
            </div>
            <div class="data">
                <select name="aspek" id="aspek">
                    <option value="1">Akademik</option>
                    <option value="2">Fasilitas</option>
                    <option value="3">Insfrasruktur</option>
                    <option value="4">Keamanan</option>
                    <option value="5">Keuangan</option>
                </select>
            </div>
            <div class="data">
                <p>Upload Lampiran</p>
                <input type="file">
            </div>
            <div class="data">
                <button class="submit" type="submit">Buat LAPOR!</button>
            </div>
        </form>
	</div>
</body>
</html>
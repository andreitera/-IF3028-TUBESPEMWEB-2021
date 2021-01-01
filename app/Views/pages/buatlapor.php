<!DOCTYPE html <html>

<head>
    <title>lapor.go.id</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/css/laporan.css">
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>SIMPLE LAPOR</h1>
            <h3>Buat Laporan Komentar</h3>
        </div>
        <hr>
        <div class="conten">
            <form class="lapor" enctype="multipart/form-data" action="<?= base_url('Lapor/simpan'); ?>" method="POST">
                <div class="tampilan">
                    <fieldset>
                        <textarea name="isi" cols="100" rows="10" class="textarea" placeholder="Laporan"></textarea>
                        <br>
                        <br>
                        <select class="pilihan" name="aspek">
                            <option>Pilih Aspek Pengaduan/Komentar</option>
                            <option value="pengaduan">PENGADUAN</option>
                            <option value="aspirasi">ASPIRASI</option>
                            <option value="permintaan">PERMINTAAN INFORMASI</option>
                        </select>
                        <br>
                        <br>
                        <input type="file" name="lampiran">
                        <br>
                        <br>
                        <div class="submit">
                            <button type="submit">LAPOR!</button>
                        </div>
                    </fieldset>
                </div>
            </form>

        </div>
	<script src="<?= base_url() ?>/js/validate.js"></script>
</body>

</html>
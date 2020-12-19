<!DOCTYPE html <html>

<head>
    <title>lapor.go.id</title>
    <link rel="stylesheet" type="text/css" href="laporan.css">
</head>
<style>
    * {
        box-sizing: border-box;
    }

    body {
        background-color: #eaeaea;
        color: #333333;
    }

    .container {
        max-width: 100%;
        margin-left: auto;
        margin-right: auto;
        padding-left: 30px;
        padding-right: 30px;
        background-color: white;
        position: relative;
    }

    .conten {
        max-width: 100%;
        margin-left: auto;
        margin-right: auto;
    }
</style>

<body>
    <div class="container">
        <div class="header">
            <h1>SIMPLE LAPOR</h1>
            <p>Buat Laporan Komentar</p>
        </div>
        <hr>
        <div class="conten">
            <form enctype="multipart/form-data" action="<?= base_url('Lapor/simpan'); ?>" method="POST">
                <textarea name="isi" cols="100" rows="10" class="textarea"></textarea>
                <br>
                <br>
                <select class="select" name="aspek">
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
                    <button type="submit">Buat LAPOR!</button>
                </div>
            </form>
            </class>
            <hr>
        </div>
    </div>
</body>

</html>
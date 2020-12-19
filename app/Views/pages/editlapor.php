<!DOCTYPE html>
<html>

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
        margin-left: auto;
        margin-right: auto;
        padding-left: 30px;
        padding-right: 30px;
        width: 100% !important;
        background-color: white;
        position: relative;
    }

    .header {
        font-size: 24pt;
        font-style: Calibri;
        padding: 20px;
    }
</style>

<body>
    <div class="container">
        <h1>SIMPLE LAPOR</h1>
        <p>Buat Laporan Komentar</p>
        <hr>
        <div enctype="multipart/form-data" action="<?= base_url('Lapor/simpan'); ?>" method="POST">
            <textarea name="isi" cols="100" rows="10" class="textarea"><?= $lapor['isi'] ?></textarea>
            <br>
            <br>
            <select class="select" name="aspek">
                <option selected=<?= $lapor['aspek'] ?>>Pilih Aspek Pengaduan/Komentar</option>
                <option value="pengaduan">PENGADUAN</option>
                <option value="aspirasi">ASPIRASI</option>
                <option value="permintaan">PERMINTAAN INFORMASI</option>
            </select>
            <br>
            <br>
            <img style="width: 100px; height:100px" src="/gambar/<?= $lapor['lampiran'] ?>" alt="">
            <input type="file" name="lampiran">
            <br>
            <br>
            <div class="submit">
                <button type="submit">Buat LAPOR!</button>
            </div>
            </form>
            <hr>
        </div>
    </div>
</body>

</html>
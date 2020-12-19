<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lapor.go.id</title>
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
    }

    .container img {
        width: 200px;
        height: 200px;
        display: block;
    }

    .footer {
        padding: 10px;
    }

    .terakhir {
        float: right;
        margin-left: 15px;
    }
</style>

<body>
    <div class="container">
        <div class="header">
            <center>
                <h1>
                    SIMPLE LAPOR
                </h1>
            </center>
        </div>
        <P>Detail Laporan/Komentar</P>
        <hr>
        <div class="conten">
            <p><?= $lapor['isi']; ?></p>
            <p>Lampiran</p>
            <img src="<?= base_url(); ?>/gambar/<?= $lapor['lampiran'] ?>" alt="Avatar">
        </div>
        <div class="footer">
            <span>Waktu : <?= $lapor['create_at'] ?></span>
            <span>Aspek : <?= $lapor['aspek'] ?></span>
            <span class="terakhir"><a href="<?= base_url(); ?>/Lapor/delete/<?= $lapor['id'] ?>">Hapus Laporan &#10006</a></span>
            <span class="terakhir"><a href="<?= base_url(); ?>/Lapor/edit/<?= $lapor['id'] ?>">Ubah</a></span>
            <hr>
        </div>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * {
        box-sizing: border-box;
    }

    .container {
        width: 90%;
        margin-left: auto;
        margin-right: auto;
    }

    .container h1 {
        font-size: 24pt;
        font-style: Calibri;
    }

    .container img {
        width: 200px;
        height: 200px;
        display: block;
    }

    .terakhir {
        float: right;
        margin-left: 15px;
    }
</style>

<body>
    <div class="container">
        <center>
            <h1>
                SIMPLE LAPOR!
            </h1>
        </center>

        <P>Detail Laporan/Komentar</P>
        <hr>
        <p><?= $lapor['isi']; ?></p>
        <p>Lampiran</p>
        <img src="<?= base_url(); ?>/gambar/<?= $lapor['lampiran'] ?>" alt="Avatar">
        <div class="foot">
            <span>Waktt : 20-11-2019 20:00</span>
            <span>Aspek: Infrasturktur</span>
            <span class="terakhir"><a href="<?= base_url(); ?>/Lapor/delete/<?= $lapor['id'] ?>">Hapus Laporan &#10006</a></span>
            <span class="terakhir"><a href="<?= base_url(); ?>/Lapor/edit/<?= $lapor['id'] ?>">Ubah</a></span>
            <hr>
        </div>

    </div>
</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <title>Lapor</title>
    <link href="<?= base_url('/css/style_details.css') ?>" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="judul">
        <br>
        <h1>SIMPLE LAPOR!</h1>
    </div>

    <div class="kolom">
        <p>Detail Laporan/Komentar</p>
        <hr>
        <p align="justify"><?= $laporan['isi'] ?></p><br>
        <img src="<?= base_url('file/') . $laporan['file']; ?>" width="150px"><br>
        <p>Waktu : <?= $laporan['waktu'] ?> Aspek : <?= $laporan['aspek'] ?></p>
        <div class="hapus">
            <a href="<?= base_url('detail/hapus_data/') . $laporan['id'] ?>" onclick="return confirm('Hapus?');">Hapus Laporan/Komentar</a>

        </div>
    </div>
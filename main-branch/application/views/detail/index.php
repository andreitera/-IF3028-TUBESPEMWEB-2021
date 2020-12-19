<!DOCTYPE html>
<html>

<head>
    <title>Lapor</title>
    <link href="<?= base_url('/css/style_details.css') ?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<a href="<?= base_url('menu') ?>" class="back"><i class="fa fa-chevron-left"></i> Kembali</a>

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
            <a href="<?= base_url('detail/hapus_data/') . $laporan['id'] ?>" onclick="return confirm('Hapus?');"><i class="fa fa-times"></i> Hapus Laporan/Komentar</a>

        </div>
        <hr>
    </div>
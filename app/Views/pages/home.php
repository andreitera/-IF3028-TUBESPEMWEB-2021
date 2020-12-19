<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="<?php base_url() ?>/css/home.css">
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

    .card {
        width: 80%;
        margin-left: auto;
        margin-right: auto
    }
</style>

<body>
    <div class="container">
        <div class="header">
            <h1>SIMPLE LAPOR</h1>
            <h3>LAYANAN ASPIRASI DAN PENGADUAN ONLINE RAKYAT</h3>
            <h5>Sampaikan laporan anda kangsung kepada instansi pemerintah berwenang</h5>
        </div>
        <div class="conten">
            <form>
                <input type="text" class="search" placeholder="cari disini..." required>
                <input type="button" value="Cari" class="button">
            </form>
            <h5>Buat laporan atau komentar<a href="<?= base_url('Lapor/buatlapor') ?>"> klik</a></h5>
            <?php foreach ($lapor as $arr) { ?>
                <div class="card">
                    <p><?= substr($arr['isi'], 0, 250) . "...."; ?></p>
                    <div class="footer">
                        <span>Lampiran : <?= $arr['lampiran']; ?></span>
                        <span style="float:right">
                            <span style="margin-right: 20px;">Waktu : <?= $arr['create_at']; ?></span>
                            <span><a href="<?= base_url('Lapor/detil/' . $arr['id']) ?>">Lihat Selengkapnya &#9658;</a></span></span>
                        <hr>
                    </div>

                </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>
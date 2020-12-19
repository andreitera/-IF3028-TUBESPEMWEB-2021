<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url('css/style.css'); ?>">
    <title>Detail Laporan</title>
</head>

<body>
    <div class="main-wrapper">
        <div class="container-beranda">
            <header>
                <h1>SIMPLE LAPOR!</h1>
            </header>

            <p>Detail Laporan/Komentar</p>
            <br><br>
            <p class="isi-laporan"><?= $laporan['isi_laporan']; ?></p>
            <p>Lampiran:</p>
            <img src="/img/<?= $laporan['lampiran']; ?>" alt="Lampiran" height="300px" width="200px">
            <br><br>
            <div class="bottom-bar">
                <p> Waktu: <time datetime="2019-11-20">20-11-2019 20:00</time> </p>
                <p> Aspek: Infrastruktur </p>
                <p> Laporan/Komentar</p>
            </div>

        </div>
    </div>
</body>

</html>
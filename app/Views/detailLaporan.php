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

            <p class="isi-laporan"><?= $laporan['isi_laporan']; ?></p>
            <p class="lampiran">Lampiran:</p>
            <img src="/img/<?= $laporan['lampiran']; ?>" alt="Lampiran" height="300px" width="200px">
            <br><br>
            <div class="bottom-bar">
                <p>Waktu:</p>
                <p>Aspek: Infrastruktur</p>
                <form action="/detail/<?= $laporan['id']; ?>" method="POST">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit">Hapus Laporan/Komentar</button>
                </form>
            </div>

        </div>
    </div>
</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <title>Lapor</title>
    <link href="<?= base_url('/css/style_menu.css') ?>" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="judul">
        <br>
        <h1>SIMPLE LAPOR!</h1>
        <div class="cari">
            <form action="<?= base_url('detail/cari') ?>">
                <label for="cari"></label>
                <input type="text" class="kotak" id="cari" name="cari" placeholder="cari">
                <input class="up" type="submit" value="Cari">
            </form>
        </div>
        <br>
        <a href="<?= base_url('lapor') ?>">Buat laporan/komentar</a>
        <?php echo date("d-m-Y H:i a"); ?>
    </div>
    <br>
    <br>
    <div class="kolom">
        <p>Laporan/Komentar Terakhir</p>
        <hr>
        <div class="kiri">
            <?php foreach ($laporan as $lapor) : ?>
                <?php if (strlen($lapor["isi"]) <= 300) { ?>
                    <p class="isi"><?= $lapor["isi"]; ?></p>
                <?php } else { ?>
                    <p class="isi"><?= substr($lapor["isi"], 0, 300); ?>...</p>
                <?php } ?>
                <p>Lampiran : <?= $lapor['file']; ?></p>
                <div class="kanan">
                    <p>Waktu : <?= $lapor['waktu']; ?> <a href="<?= base_url('Detail/index/') ?><?= $lapor['id'] ?>">Lihat selengkapnya</a></p>
                </div>
                <hr>

            <?php endforeach; ?>
        </div>
    </div>

    <div>

    </div>
</body>

</html>
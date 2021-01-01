<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="../css/home.css">
    <title>Lapor.go.id</title>
    
</head>

<body>
<div class="bg">
    <div class="header">
    <h1 class="h1">SIMPLE LAPOR!!</h1>
    <h3 class="h3">LAYANAN ASPIRASI DAN PENGADUAN ONLINE RAKYAT</h3>
    <h5 class="h5">Sampaikan laporan anda langsung kepada instansi pemerintah berwenang</h4>
    </div>
        <hr>
        <form class="form">
            <input type="text" class="search" placeholder="cari disini..." required>
            <input type="button" value="Cari" class="button">
        </form>
        <h6 class="h6"><a href="<?= base_url('Lapor/buatlapor') ?>">Buat laporan atau komentar &#x2B;</a></h6>
        <?php foreach ($lapor as $arr) { ?>
            <div style="width: 90%; margin-left: auto; margin-right:auto" class="card">
                <p><?= substr($arr['isi'], 0, 250) . "...."; ?></p>
                <div class="foot">
                    <span>Lampiran : <?= $arr['lampiran']; ?></span>
                    <span style="float:right">
                        <span style="margin-right: 20px;">Waktu : <?= $arr['create_at']; ?></span>
                        <span><a href="<?= base_url('Lapor/detil/' . $arr['id']) ?>">Lihat Selengkapnya &#9658;</a></span>
                    </span>

                    <hr>
                </div>

            </div>
        <?php } ?>
    </div>
</body>

</html>
<html>

<head>
    <script src="assets/js/kode.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css" />
    <title>Detail Laporan</title>

</head>

<body>
    <center>
        <h1><br> LAPORAN <br> </h1>
    </center>
    <div class="content">
        <div class="left"">Detail Laporan/Komentar<div> 
        </div>
<hr><br><br>

<?php
foreach ($komentar as $datanya) {
    echo $datanya->isi;
    echo "<br><br><br>";
    ?>
    <span class="left">Lampiran: <?= $datanya->file; ?>
            <br><br><br> Waktu: <?= $datanya->tanggal; ?>
            <span><br> Kategori: <?= $datanya->type; ?></span>
            </span>
            <span class="waktu"><a onclick=" hapus()" href="<?php echo base_url('auth/hapus/') . $datanya->id ?>">Hapus Komentar <strong>x</strong></a>
                <a class="detail" href="<?php echo base_url('auth/edit/') . $datanya->id ?>">Edit Komentar <strong><></strong> </a></span>
        <?php
        }
        ?>
        <hr>
        </div>
</body>

</html>
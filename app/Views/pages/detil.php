<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/css/detil.css">
</head>
<body class="body">
    
    <div class="header">
            <h1 class="h1">SIMPLE LAPOR! </h1>
    </div>
        <P><b>Detail Laporan/Komentar</b></P>
        <hr>
        <p class=""><?= $lapor['isi']; ?></p>
        <p>Lampiran</p>
        <div>
        <img src="<?= base_url(); ?>/gambar/<?= $lapor['lampiran'] ?>" alt="Avatar">
        </div>       
        <div class="foot">
            <span>Waktu : 20-11-2019 20:00</span>
            <br>
            <span>Aspek: Infrasturktur</span>
            <br><br>
            <span class="terakhir"><a href="<?= base_url(); ?>/Lapor/delete/<?= $lapor['id'] ?>">Hapus Laporan &#10006</a></span>
            <span class="terakhir"><a href="<?= base_url(); ?>/Lapor/edit/<?= $lapor['id'] ?>">Ubah </a></span>
            <hr>
        </div>

       
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lapor</title>
</head>
<body>
    <h1>Simpel Lapor</h1>
    <p>detail lapran</p>
    <p><?= $all->laporan ;?></p>
    <p>Lapiran</p>
    <img src="<?= base_url('lampiran/'. $all->lampiran)?>" alt="">
    <p>Waktu : <?= $all->created_date ;?></p>
    <a href="<?= base_url('laporan/deleteData/' . $all->id); ?>">hapus Laporan</a>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat selengkapnya</title>
    <style>

    
    </style>
</head>
<body>
    <h1 style="text-align: center;">SIMPLE LAPOR!</h1>
    <p>Detail laporan/komentar </p>
    <hr>
    <?= $data->isi; ?>
    <h4>Lampiran: <?= $data->lampiran; ?> </h4>
    <embed src="<?= base_url('/uploads/') ?><?= $data->lampiran; ?>">
<table ></table>
    <tr>
        <td>Waktu: <?= $data->waktu; ?> </td>
        <td>Aspek: <?= $data->aspek; ?> </td>
        <td>Hapus Laporan/Komentar</td>
    </tr>
    <hr>
</body>
</html>
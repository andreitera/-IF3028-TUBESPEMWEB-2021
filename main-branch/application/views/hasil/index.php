<a href="<?= base_url('menu') ?>" class="back">Kembali</a>

<!DOCTYPE html>

<head>
    <title>Lapor</title>
    <link href="<?= base_url('/css/style_cari.css') ?>" rel="stylesheet" type="text/css">
</head>

<div class="judul">
    <br>
    <h1>SIMPLE LAPOR!</h1>
</div>
<div class="hasil">
    <h4>Hasil Pencarian :</h4>
    <?php foreach ($cari as $data) : ?>
        <p><?= $data['isi'] ?></p> <br>
        <p>Lampiran : </p>
        <img src="<?= base_url('file/') . $data['file']; ?>" width="150px"><br>
    <?php endforeach; ?>
</div>
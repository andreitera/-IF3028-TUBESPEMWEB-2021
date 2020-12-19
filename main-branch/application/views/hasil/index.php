<div class="judul">
    <br>
    <h1>SIMPLE LAPOR!</h1>
</div>

<h4>Hasil Pencarian :</h4>
<?php foreach ($cari as $data) : ?>
    <?= $data['isi'] ?> <br>
    <p>Lampiran : </p>
    <img src="<?= base_url('file/') . $data['file']; ?>" width="150px"><br>
<?php endforeach; ?>
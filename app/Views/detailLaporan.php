<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<p>Detail Laporan/Komentar</p>

<p class="isi-laporan"><?= $laporan['isi_laporan']; ?></p>
<p class="lampiran">Lampiran:</p>
<img src="/img/<?= $laporan['lampiran']; ?>" alt="Lampiran" height="300px" width="200px">
<br><br>
<div class="bottom-bar">
    <p>Waktu: <?= $laporan['created_at']; ?></p>
    <p>Aspek: <?= $laporan['aspek']; ?></p>
    <a href="/beranda/edit/<?= $laporan['id']; ?>">Ubah Laporan</a>
    <form action="/detail/<?= $laporan['id']; ?>" method="POST">
        <?= csrf_field(); ?>
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit" onclick="return confirm('Apakah anda yakin?');">Hapus Laporan/Komentar</button>
    </form>
</div>
<?= $this->endSection(); ?>
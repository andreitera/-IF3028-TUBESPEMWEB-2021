<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container-buatLaporan">
    <p>Edit Laporan/Komentar</p>

    <form action="/beranda/update/<?= $laporan['id']; ?>" method="POST" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <textarea cols="30" rows="10" placeholder="Laporan/Komentar" name="isiLaporan" autofocus><?= $laporan['isi_laporan']; ?></textarea>

        <select name="aspek">
            <option value="<?= $laporan['aspek']; ?>"><?= $laporan['aspek']; ?></option>
            <option value="Dosen">Dosen</option>
            <option value="Staff">Staff</option>
            <option value="Mahasiswa">Mahasiswa</option>
            <option value="Infrastruktur">Infrastruktur</option>
            <option value="Pengajaran">Pengajaran</option>
        </select>

        <input type="file" name="lampiran" value="<?= $laporan['lampiran']; ?>">

        <button type="submit" id="submit">Buat LAPOR!</button>
    </form>
</div>

<?= $this->endSection(); ?>
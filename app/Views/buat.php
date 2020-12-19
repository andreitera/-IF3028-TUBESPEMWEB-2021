<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container-buatLaporan">
    <p>Buat Laporan/Komentar</p>

    <form action="/beranda/buat" method="POST" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <textarea cols="30" rows="10" placeholder="Laporan/Komentar" name="isiLaporan" autofocus></textarea>

        <select name="aspek">
            <option>Pilih Aspek Pelaporan/Komentar</option>
            <option value="Dosen">Dosen</option>
            <option value="Staff">Staff</option>
            <option value="Mahasiswa">Mahasiswa</option>
            <option value="Infrastruktur">Infrastruktur</option>
            <option value="Pengajaran">Pengajaran</option>
        </select>

        <input type="file" name="lampiran" id="file">

        <button type="submit" id="submit">Buat LAPOR!</button>
    </form>
</div>

<?= $this->endSection(); ?>
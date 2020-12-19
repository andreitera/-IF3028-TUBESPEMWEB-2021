<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <header>
        <h1>SIMPLE LAPOR!</h1>
    </header>
    <p>Buat Laporan/Komentar</p>
    <hr>
    <form action="/lapor/save" method="post" enctype="multipart/form-data" onSubmit="validasi()" name="createLapor">
        <?= csrf_field(); ?>
        <div class="input-nama">
            <input type="text" id="nama" name="nama" placeholder="Masukan Nama Pelapor.." required>
        </div>

        <div>
            <textarea id="isi" name="isi" rows="3" required></textarea>
        </div>

        <div class="pilihAspek">
            <select id="aspek" name="aspek" required>
                <option value="" disabled selected hidden>Pilih Aspek Pelaporan/Komentar</option>
                <option>Dosen</option>
                <option>Staff</option>
                <option>Mahasiswa</option>
                <option>Infrastruktur</option>
                <option>Pengajaran</option>
            </select>
        </div>

        <div class="inputLampiran">
            <input type="file" id="lampiran" name="lampiran" required>
        </div>
        <div class="btn">
            <a class="btn-back" href="/">Kembali</a>
            <button class="btn-lapor" type=" submit" onclick="return confirm('yakin tambah?')">Buat LAPOR!</button>
        </div>
        <div class="clearfix"></div>
        <div class="hr-create">
            <hr>
        </div>
    </form>

</div>

<?= $this->endSection(); ?>
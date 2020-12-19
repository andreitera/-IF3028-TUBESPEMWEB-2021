<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">

    <h1>SIMPLE LAPOR!</h1>

    <form action="/lapor/update/<?= $lapor['id']; ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <input type="hidden" name="lampiranLama" value="<?= $lapor['lampiran']; ?>">
        <div class="input-nama">
            <input type="text" id="nama" name="nama" placeholder="nama anda.." value="<?= (old('nama')) ? old('nama') : $lapor['nama'] ?>">
        </div>

        <div>
            <textarea id="isi" name="isi" rows="3"><?= (old('isi')) ? old('isi') : $lapor['isi'] ?></textarea>
        </div>

        <div class="pilihAspek">
            <select id="aspek" name="aspek">
                <option selected hidden><?= $lapor['aspek']; ?></option>
                <option>Dosen</option>
                <option>Staff</option>
                <option>Mahasiswa</option>
                <option>Infrastruktur</option>
                <option>Pengajaran</option>
            </select>
        </div>
        <div class="inputLampiran">
            <input type="file" id="lampiran" name="lampiran">
        </div>
        <div class="btn"></div>
        <a class="btn-back" href="/">Kembali</a>
        <button class="btn-lapor" type="submit" onclick="return confirm('yakin edit?')">Ubah LAPOR!</button>
        <div class="clearfix"></div>
        <div class="hr-create">
            <br>
            <hr>
        </div>
    </form>

</div>

<?= $this->endSection(); ?>
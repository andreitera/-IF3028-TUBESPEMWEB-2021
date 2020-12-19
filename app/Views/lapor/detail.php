<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div>
        <div>
            <header>
                <h1>SIMPLE LAPOR!</h1>
            </header>
            <p>Detail Laporan/Komentar</p>
            <hr>
            <p class="dt-dari"><span>Dari: </span> <?= $lapor['nama']; ?></p>
            <p class="isi-detail"><?= $lapor['isi']; ?></p>
            <h4>Lampiran:</h4>
            <?php
            $allowed = ['jpg', 'png', 'jpeg'];
            $ext = explode(".", $lapor['lampiran']);
            $extFile = strtolower(end($ext));
            ?>

            <?php if (in_array($extFile, $allowed)) : ?>
                <img id="lampiran-detail" src="/img/<?= $lapor['lampiran']; ?>">
            <?php endif; ?>

            <?php if (!in_array($extFile, $allowed)) : ?>
                <a href="/img/<?= $lapor['lampiran']; ?>"> <?= $lapor['lampiran']; ?></a>
            <?php endif; ?>

            <div class="wrap">
                <div class="konten">
                    <p class="dt-waktu">Waktu: <?= $lapor['created_at']; ?></p>
                    <p class="dt-aspek">Aspek: <?= $lapor['aspek']; ?></p>
                    <form action="/lapor/<?= $lapor['id']; ?>" method="post">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="dt-delete" type="submit" onclick="return confirm('Apakah anda yakin?');">Hapus Laporan/Komentar <i class="fa fa-times"></i></button>
                    </form>
                    <a class="dt-ubah" href="/lapor/edit/<?= $lapor['id']; ?>">Ubah <i class="fa fa-pencil"></i></a>
                </div>
            </div>
            <br><br>
            <hr>
            <div>
                <a class="dt-back" href="/"><i class="fa fa-arrow-left"></i> Kembali</a>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>
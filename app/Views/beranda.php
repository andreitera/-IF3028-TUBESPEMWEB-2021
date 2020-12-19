<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container-beranda">
    <div class="search-box">
        <input type="text">
        <button>Cari</button>
    </div>

    <div class="buat-laporan">
        <a href="/buatLaporan">Buat Laporan/Komentar</a>
        <img src="<?= base_url('img/bx-plus.svg'); ?>" alt="Icon Tambah">
    </div>

    <div class="container-listLaporan">
        <?php if (session()->getFlashdata('pesan')) : ?>
            <p><?= session()->getFlashdata('pesan'); ?></p>
        <?php endif; ?>
        <p>Laporan/Komentar Terakhir</p>

        <?php foreach ($laporan as $lapor) : ?>
            <div class="item-laporan">
                <p><?= $lapor['isi_laporan']; ?></p>
                <div class="detail-laporan">
                    <p>Lampiran: <?= $lapor['lampiran']; ?></p>
                    <p>Waktu: <?= $lapor['created_at']; ?></p>
                    <a href="/detail/<?= $lapor['id']; ?>">Lihat Selanjutnya</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?= $this->endSection(); ?>
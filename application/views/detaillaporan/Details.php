<div class="komentar">
    <p> Detail Laporan/Komentar </p>
    <hr width="100%" color="grey" />

    <p><?php echo $lapor['laporan']; ?></p>
    <div>
        <span>lampiran</span>
        <img src="<?php echo base_url() . 'file/' . $lapor['file']; ?>" alt="file">
    </div>

    <br>
    <div class="baca1">
        <span class="tanggal">Waktu: <?php echo $lapor['tanggal']; ?></span>
        <span class="tanggal">Aspek: <?php echo $lapor['Aspek']; ?></span>
    </div>
    <?php $id = $lapor['id']; ?>
    <a class="baca" href="<?php echo base_url() . 'Home/hapus/' . $id; ?>">Hapus Laporan/Komentar<button class="button3">x</button></a></a>

    <hr width="100%" color="grey" />
    <a href="<?= base_url(); ?>Home"><button class="button3">
            <</button>Back </a> </div> </body> </html>
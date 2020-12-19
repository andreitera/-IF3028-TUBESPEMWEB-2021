<fieldset>
    <br><br>
    <div class="wrapper">
        <h1> SIMPLE LAPOR </h1>
    </div>
    <h3>Detail laporan/Komentar oleh <?= $keluhan['username'] ?></h3>
    <div class="pusing">
        <p><?= $keluhan['lapor']; ?></p>
        <p><b> Lampiran :</b></p>
        <div id="container_detail">
            <div id="si_foto">
                <img src="<?php echo base_url(); ?>asset/gambar/<?php echo $keluhan['gambar']; ?>" widht="400" height="550">
            </div>
            <br>
            <table id="footer_detail">
                <tr>
                    <td id="si_waktu"> Waktu : <?= $keluhan['waktu']; ?> | Aspek : <?= $keluhan['aspek']; ?> </td>
                    <td id="pening">
                        <a href="<?= base_url(); ?>data/ubah/<?= $keluhan['id']; ?>">Ubah | </a>
                        <a href="<?= base_url(); ?>data/hapus/<?= $keluhan['id']; ?>" onclick="return confirm('Ingin Menghapus ?')">Hapus</a>
                        <a href="<?= base_url('user/index'); ?>">| < Kembali </a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</fieldset>

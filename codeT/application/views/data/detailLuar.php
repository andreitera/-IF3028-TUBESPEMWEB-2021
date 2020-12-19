<fieldset>
    <br><br>
    <div class="wrapper">
        <h1> LAPOR.ID </h1>
    </div>
    <h3>Detail laporan/Komentar oleh <?= $keluhan['username'] ?></h3>
    <div class="pusing">
        <p><?= $keluhan['lapor']; ?></p>
        <p><b>Lampiran :</b></p>
        <div id="container_detail">
            <div id="si_foto">
                <img src="<?php echo base_url(); ?>asset/gambar/<?php echo $keluhan['gambar']; ?>" widht="400" height="550">
            </div>
            <br>
            <table id="footer_detail">
                <tr>
                    <td id="si_waktu"> Waktu : <?= $keluhan['waktu']; ?> | Aspek : <?= $keluhan['aspek']; ?> </td>
                    <td id="pening">
                        <a href="#" onClick='alert("Anda harus login terlebih dahulu sebagai <?= $keluhan['username'] ?>")'> Hapus |</a>
                        <a href="<?= base_url('user/index'); ?>" style="padding-right:20px ;"> > Kembali</a>
                    </td>
                </tr>
            </table>
        </div>
        <br>
    </div>
</fieldset>

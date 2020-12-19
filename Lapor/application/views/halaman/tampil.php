<section id="detail">
    <div class="container">
        <div class="content-wrapper">
            <h3>Detail Laporan</h3>
            <hr>
            <p><?php echo $post_item['isi']; ?></p>
            <div class="lampiran">
                <span>Lampiran:</span>
                <img src="<?php echo base_url() . 'lampiran/' . $post_item['file_lapor']; ?>" alt="Lampiran">
            </div>

            <span>Aspek : <?php echo $post_item['aspek']; ?></span><br>
            <span>Dibuat pada : <?php echo $post_item['waktu']; ?> </span>
            <?php $id = $post_item['id']; ?>
            <a class="black" href="<?php echo base_url('tampil/delete/') . $id; ?>">Hapus</a>
            <a class="black" href="<?php echo base_url('tampil/edit/') . $id; ?>">Edit</a>
        </div>
    </div>
</section>

<script src="<?php echo base_url(); ?>js/script.js"></script>
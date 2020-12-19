<section id="detail">
    <div class="content-wrapper">
        <h3>Detail Laporan/Komentar</h3>
        <hr>
        <p><?php echo $post_item['isi']; ?></p>
        <div class="lampiran">
            <span>Lampiran:</span>
            <img src="<?php echo base_url().'./lampiran/'.$post_item['lampiran']; ?>" alt="Lampiran">
        </div><br>
        <span>Aspek : <?php echo $post_item['aspek']; ?></span><br>
        <span>Dibuat pada : <?php echo $post_item['waktu']; ?> </span>
        <?php $id = $post_item['id'];?>
        <a id="hapus" class="black" href="<?php echo base_url('laporan/delete/').$id; ?>"onclick="return confirm('Are you sure you want to delete this item?');">Hapus</a>
        <a class="black" href="<?php echo base_url('laporan/edit/').$id;?>">Edit</a> 
        <input class="back-beranda" type="button" onclick="window.location.href='<?=base_url()?>';" value="Beranda" />
        
    </div><br>
</section>

<script src="<?php echo base_url(); ?>js/script.js"></script>

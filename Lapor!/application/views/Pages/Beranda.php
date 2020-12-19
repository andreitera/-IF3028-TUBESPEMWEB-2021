    <div class="search-bar" >
        <form class="example" action="action_page.php">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i>Cari</button>
        </form>	
    </div>
    <br>
    <div class="buat-laporan">
        <a href="<?php echo site_url().'laporan/add/'; ?>" style="color:black">Buat Laporan/Komentar <i class="fa fa-plus-square"></i></a>
    </div>    
    <br><br>
    <div class="tampil-database">
        <p><b>Laporan/Komentar terakhir</b></p><hr>         
        
        <?php $sort = array_reverse((array) $posts) ?>
        <?php foreach ($sort as $post) : ?>
            <?php if(strlen($post['isi']) <= 400) {?>
                <p class="isi"><?= $post['isi']; ?><br></p>
            <?php } else { ?>
                <p class= "isi"><?= substr($post['isi'],0,400).'...'; ?> </p>
            <?php } ?>
                <p class="lampiran">Lampiran : <?=$post['lampiran'];?></p>
            
            <div class="waktu-selengkapnya">
                Waktu: <?= $post['waktu']; ?> 
                <a href="<?= base_url().'laporan/view/'.$post['id'];?>">   Lihat Selengkapya > </a>
            </div>
            <hr>
        <?php endforeach;?>
    </div>    
    <script src="<?php echo base_url(); ?>js/script3.js"></script>

    
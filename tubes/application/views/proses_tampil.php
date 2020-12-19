<div class=”con”>
<div class=”posts”>
<h3><?php echo $detail[‘judul’] ?></h3>
<div class=”rekap”><?php echo $detail[‘isi’] ?></div>
</div>
<div class=”part”>
<h3>Berita Terkini!</h3>

<ul>
<?php foreach($laporan as $list) { ?>
<li><a href=”<?php echo base_url() ?>home/read/<?php echo $list[‘slug’]; ?>”><?php echo $list[‘judul’]; ?></a></li>
<?php } ?>
</ul>
</div>
</div>
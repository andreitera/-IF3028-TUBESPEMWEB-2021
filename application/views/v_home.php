<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?= base_url('asset/css/home.css');?>">
    <title>Lapor!</title>
</head>
<body>
        <h1>SIMPLE LAPOR!</h1>
    <br>
        <form class="form_div" onSubmit="return pencarian(this)" action="<?php echo base_url('cari')?>" method="post">
            <input type="text" class="search_bar" name="keyword" placeholder="search" autocomplete="off" autofocus>
            <input class="search_btn" type="submit" name="submit"  placeholder="cari" value="Cari">
        </form>
        <a class="komentar" href="<?php base_url();?>crud/tambah">Buat Laporan / Komentar</a>
    <br>
        <p>Laporan/Komentar Terakhir</p>
    <hr>
    <?php foreach($lapor as $u) { ?>
        <?php echo $u -> isi ?>
        <br>
        <br>
        <div class="waktu">
            <div class="row40">
                <p>Lampiran : <?php echo $u -> lampiran ?> </p>
            </div>
            <div class="row40">
                <p class="right">Waktu : <?php echo $u -> waktu ?> </p>
            </div>
            <div class="row20">
                <p class="link" style="float: right"><?php echo anchor('crud/hasil/'.$u->id,'Lihat Selengkapnya'); ?></P>
            </div>
        </div>
        <hr>

    <?php
    }
    ?>

    <br>
        <img src="asset/icon/menu.png" class="more_pic" alt="TITIK3">
    <br>
        <img src="asset/icon/menu.png" class="more_pic" alt="TITIK3">
</body>

</html>
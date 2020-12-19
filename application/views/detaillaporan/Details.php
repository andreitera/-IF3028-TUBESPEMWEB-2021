<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/asset/css/detail.css">
</head>
<body>
    <div class="nav">
        <ul>
            <li><a href="<?php echo base_url('home'); ?>">Home</a></li>
            <li><a href="<?php echo base_url('Home/Tampillapor'); ?>">Buat Laporan</a></li>
        </ul>
    </div>
    <div class="container">
        <div class="komentar">
            <h1>SIMPLE LAPOR!</h1>
 
            <p> Detail Laporan/Komentar </p>
            <div class="card">
                <hr width="100%" color="grey" />
                <p class="isiLaporan"><?php echo $lapor['laporan']; ?></p>
                <div>
                    <p>Lampiran<p>
                    <img src="<?php echo base_url() . 'asset/' . $lapor['File']; ?>" alt="file" class="lampiran">
                </div>
                <br>
                <div class="baca1">
                    <?php $id = $lapor['id']; ?>
                    <p class="waktudetail" style="margin-right: 30px;">Waktu : <?php echo $lapor["tanggal"]; ?></p>
                    <p class="aspek">Aspek : <?php echo $lapor["Aspek"]; ?></p>
                    <a class="hapus" href="<?php echo base_url() . 'Home/hapus/' . $id; ?>" onclick="return confirm('Anda yakin ingin menghapus laporan ini ?')">Hapus Laporan/Komentar X</a>
                    <a href="<?php echo base_url() ?>Home/update_data/<?php echo $lapor["id"]?>" class="ubah">Ubah laporan / komentar | </a>
                    <hr width="100%" color="grey" />
                    <a href="<?= base_url(); ?>Home">< Back </a> </div> 
                </div>
                
            </div>    
    </div>
    <div class="footer">
            &copyCopyright 2020 - itera.ac.id
    </div>
</body>
</html>
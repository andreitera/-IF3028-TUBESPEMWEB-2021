<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/asset/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/asset/reset.css">
    <title>Detail Laporan</title>
</head>

<body>
    <div class="container">
        <h1>SIMPLE LAPOR!</h1>
        <h4>Detail Laporan / Komentar</h4> 
        <hr>

        <ul>
            <li>
                <h4 style="margin-bottom: 20px;"><?php echo $lapor["isi"]; ?></h4>
                <h4 class="lampiran">Lampiran :</h4><br>

                <?php
                    $ekstensifile = explode('.',$lapor["file"]);
                    $ekstensifile = strtolower(end($ekstensifile));
                    if($ekstensifile == "pdf"){
                ?>
                    <embed src="<?php echo base_url() ?>/asset/upload-file/<?php echo $lapor["file"]; ?>" />
                    <?php } else { ?>
                        <img id="filedetail" style="width: 500px;" src="<?php echo base_url() ?>/asset/upload-file/<?php echo $lapor["file"];?>">
                    <?php } ?>

                    <div style="clear: both"></div>
                    <a href="<?php echo base_url() ?>index.php/Home/delete/<?php echo $lapor["id"]?>" onclick="return confirm('apakah anda yakin ingin menghapus?');"><h4 class="hapus">| Hapus Laporan / Komentar</h4></a>

                    <a href="<?php echo base_url() ?>index.php/Home/detail_ubah/<?php echo $lapor["id"]?>"><h4 class="hapus">Ubah Laporan / Komentar |</h4></a>

                    <h4 class="waktudetail" style="margin-right: 30px;">Waktu : <?php echo $lapor["tanggal"]; ?></h4>

                    <h4 class="aspek">Aspek : <?php echo $lapor["aspek"];?></h4>

                    <div style="clear: both"></div>
            </li>
            <br>
            <hr>
        </ul>   

    </div>
</body>
</html>
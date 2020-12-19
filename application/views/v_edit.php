<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?= base_url('asset/css/tambah.css');?>">
    <title>Document</title>
</head>
<body>

        <h1>SIMPLE LAPOR!</h1>
        <p>Buat Laporan/Komentar</p>
    <hr>
    <?php foreach($lapor as $u) { ?>
        <form action="<?php echo base_url(). 'crud/update';?>" method="post" ecntype="multipart/form-data">
            <textarea name="isi" id="" ><?php echo $u->isi ?></textarea>
            <br>
            <select name="aspek" id="">
                <option value="">Pilih Pelapor</option>
                <option value="Mahasiswa">Mahasiswa</option>
                <option value="Dosen">Dosen</option>
                <option value="Staff">Staff</option>
                <option value="Infra">Infrastruktur</option>
            </select>
        <br>
            <input type="file" name="myfile">
        <br>
            <button type="submit" class="buat_btn">Buat LAPOR!</button>
    </form>
    <br>
    <br>
    <hr>
    <?php } ?>
</body>
</html>
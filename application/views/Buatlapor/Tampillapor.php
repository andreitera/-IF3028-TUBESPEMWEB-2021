<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/asset/css/tampillapor.css">
</head>

<body>
    <div class="nav">
        <ul>

            <li><a href=" <?php echo base_url(''); ?>">Home</a></li>
            <li><a href="<?php echo base_url() ?>/Home/Tampillapor/">Buat Laporan</a></li>
        </ul>
    </div>
    <div class="container">
        <h1>SIMPLE LAPOR!</h1>
        <p>Buat Laporan/Komentar</p>
        <hr>
        <div class="form-lapor">
            <?php echo form_open_multipart('/Home/tambahLaporan'); ?>
            <!-- <input type="text" placeholder="Laporan/Komentar"> -->
            <textarea placeholder="Laporan atau Komentar" name="laporan" id="" cols="117" rows="10"></textarea><br>
            <select style="padding: 10px;" name="aspek" id="">
                <option value="" disabled selected>Pilih Aspek Pelaporan/Komentar</option>
                <option value="Aspek1">Agama</option>
                <option value="Aspek2">Corona Virus</option>
                <option value="Aspek3">Ekonomi</option>
                <option value="Aspek4">Lingkungan</option>
                <option value="Aspek3">Kependudukan</option>
                <option value="Aspek3">Lalu Lintas</option>
            </select><br><br>
            <input type="file" name="file"><br><br>
            <input type="submit" placeholder="Buat LAPOR!" class="submit-lapor">
        </div>
    </div>
</body>

</html>
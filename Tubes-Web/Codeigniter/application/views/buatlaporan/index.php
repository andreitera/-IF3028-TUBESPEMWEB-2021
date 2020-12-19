<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/asset/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/asset/reset.css">
    <title>Buat Laporan</title>
</head>

<body>
    <div class="container">
        <h1>SIMPLE LAPOR!</h1>
        <h4>Buat Laporan/Komentar</h4>
        <hr>

        <?php 
        if(validation_errors()): echo validation_errors();
        endif; ?>

        <?php echo form_open_multipart('home/tambah_data'); ?>

        <textarea name="isi" cols="136" rows="10" style="width: 700px;"></textarea>
        <br>

        <select name="aspek" id="">
            <option value="Dosen">Dosen</option>
            <option value="Mahasiswa">Mahasiswa</option>
            <option value="Staff">Staff</option>
        </select>
        <br>

        <label for="">Upload file dalam format pdf, doc, docx, xls, xlsx, ppt, pptx</label>

        <input type="file" name="File" id="file">
        <br>
        <input type="submit" value="Tambah Laporan" name="submit">

        <div style="clear: both;"></div>
        <?php echo form_close(); ?>
        <hr>

    </div>
</body>
</html>
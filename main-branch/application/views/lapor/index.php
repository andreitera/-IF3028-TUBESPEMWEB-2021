<!DOCTYPE html>
<html>

<head>
    <title>Lapor</title>
    <link href="<?= base_url('css/style_lapor.css') ?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<a href="<?= base_url('menu') ?>" class="back"><i class="fa fa-chevron-left"></i> Kembali</a>

<body>
    <div class="judul">
        <br>
        <h1>SIMPLE LAPOR!</h1>
    </div>
    <div class="buat">
        <p>Buat Laporan/Komentar</p>
        <hr>
        <form method="POST" action="<?= base_url('lapor/lapor') ?>" enctype="multipart/form-data">
            <textarea name="isi" style="height: 50%; width:100%;"></textarea>

            <br><br>

            <select class="o" name="aspek">
                <option hidden value="">Pilih Aspek Pelaporan/Komentar</option>
                <option>Laporan</option>
                <option>Komentar</option>
            </select>

            <br><br><br>

            <label class="ch">
                <input type="file" name="berkas" id="" value="choose file">Choose File
            </label>

            <br><br>

            <div class="u">
                <input class="up" type="submit" value="Buat LAPOR">
            </div>  
            <hr>
        </form>
    </div>
</body>

</html>
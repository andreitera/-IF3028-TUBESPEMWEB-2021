<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    h1{
        text-align: center;
    }
    body {
        margin: 0;
        padding: 0;
    }

    .nav{
        text-align: right;
        background-color: #2E8B57;
        padding: 5px;
        position: sticky;
        top: 0;
    }

    .nav a{
        font-size: 18px;
        font-weight: 400;
        text-decoration: none;
        color: white;
    }

    .nav a:hover{
        font-weight: bold;
    }

    .nav li{
        display: inline;
        list-style-type: none;
        margin-right: 20px;
    }
    .container{
        margin-left: 25%;
        margin-right: 25%;
    }
    textarea{
        resize: none;
    }
    .submit-lapor{
        float: right;
    }
    </style>
</head>
<body>
    <div class="nav">
        <ul>
            <li><a href="<?php echo base_url('home'); ?>">Home</a></li>
            <li><a href="<?php echo base_url('lapor'); ?>">Buat Laporan</a></li>
            <li><a href="<?php echo base_url(''); ?>">Masuk</a></li>
            <li><a href="<?php echo base_url(''); ?>">Daftar</a></li>
        </ul>
    </div>
    <div class="container">
        <h1>SIMPLE LAPOR!</h1>
        <p>Buat Laporan/Komentar</p>
        <hr>
        <div class="form-lapor">
            <!-- <input type="text" placeholder="Laporan/Komentar"> -->
            <textarea placeholder="Laporan/Komentar" name="" id="" cols="117" rows="10"></textarea><br>
            <select style="padding: 10px;" name="" id="">
                <option value="" disabled selected>Pilih Aspek Pelaporan/Komentar</option>
                <option value="">Aspek1</option>
                <option value="">Aspek2</option>
                <option value="">Aspek3</option>
            </select><br><br>
            <input type="file"><br><br>
            <input type="submit" placeholder="Buat LAPOR!" class="submit-lapor">
        </div>
    </div>
</body>
</html>
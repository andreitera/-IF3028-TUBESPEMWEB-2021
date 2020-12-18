<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> 
    .container {
            width: 1000px;
            margin: auto;
            background: white;
            padding: 10px;
            height: auto;
            font-family: Arial, Helvetica, sans-serif;
        }
        .isi {
            text-align:justify;
            font-size: 16px;
            font-family: Arial, Helvetica, sans-serif;
            line-height: 1.5em;
        }
        .penutup{
            float: left;
           
        
        }
        .penutup span {
            padding-left: none;
        }
        a {
            list-style: none;
        }
        .hapus {
            margin-left: 600px;
        }
        .edit {
            margin-left: 10px;
        }
        p{
            font-size: 16px;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
<div class="container">
<center><h1>SIMPLE LAPORAN</h1></center>
        <div class="content-wrapper">
            <h2>Detail Laporan/Komentar</h2>
            <hr>
            <h2>{{$laporan->judul_laporan}}</h2>
            <p class="isi">{{$laporan->isi_laporan}}</p>
            <div class="lampiran">
                <span>Lampiran: {{$laporan->lampiran}} </span> <br>
                <img src="{{asset('assets/upload/lapor-detail.jpg')}}" alt="Lampiran">
            </div>
            <br>
            <br>
        <div class="penutup">
            <span>Aspek : {{$laporan->tipe_laporan}}</span>
            <span>Dibuat pada : {{$laporan->tgl_kejadian}}</span>
            
            <a class="hapus" href="">Hapus</a>
            <a class="edit" href="">Edit</a>

        </div>
            <br>
            <hr>
        </div>
    </div>    
</body>
</html>


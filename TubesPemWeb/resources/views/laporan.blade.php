<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
        <div class="content-wrapper">
            <h3>Detail Laporan/Komentar</h3>
            <hr>
            <h2>{{$laporan->judul_laporan}}</h2>
            <p>{{$laporan->isi_laporan}}</p>
            <div class="lampiran">
                <span>Lampiran: {{$laporan->lampiran}} </span> <br>
                <img src="{{asset('assets/upload/lapor-detail.jpg')}}" alt="Lampiran">
            </div>

            <span>Aspek : {{$laporan->tipe_laporan}}</span><br>
            <span>Dibuat pada : {{$laporan->tgl_kejadian}} </span>
            
            <a class="black" href="">Hapus</a>
            <a class="black" href="">Edit</a>
        </div>
    </div>    
</body>
</html>

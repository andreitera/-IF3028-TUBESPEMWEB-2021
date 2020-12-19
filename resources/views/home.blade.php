<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="/css/home.css">
    <title>Utama Page</title>
</head>
<body>
<div class="container">
    <h2>SIMPLE LAPOR!</h2>

    <div class="input-group">
        <input type="text" name="search" placeholder="Filter .." >
        <button>Search</button>
    </div>

    <div class="link">
        <small><a href="#" >Buat Laporan/Komentar</a></small>
    </div>
    <div class="list">

        <div class="header">
            <p>Laporan/Komentar Terakhir</p>
            <hr>
        </div>

        @foreach($data as $Data)
        <div class="list-item">
            <p>{{$Data->komentar}}</p>

            <div class="list-nav">
                <span>{{$Data->lampiran}}</span>
                <span class="nav1">Waktu {{$Data->waktu}} <a href="/detail/{{$Data->id}}">Lihat Selengkapnya ></a></span>
            </div>

            <hr>
        </div>
        @endforeach
    </div>
</div>
</body>
</html>

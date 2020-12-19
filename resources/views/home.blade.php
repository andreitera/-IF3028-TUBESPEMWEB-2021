<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Lapor</title>
    <style>
    h1{
        text-align: center;
    }
    .kaki{
        margin-left: 20px;
    }
    .kanan{
        float : right;
    }
    </style>
</head>
<body>
<h1>SIMPLE LAPOR!!</h1>
    <a href="{{route('daftarlaporan')}}">lihat list laporan</a>
    <a href="{{route('buatlaporan')}}">buat laporan</a>
    <form action="{{ route('cari') }}" method="POST">
        @csrf
        
        cari:
        <input type="text" name="cari">
        </label>
        <button type="submit">cari laporan</button>
    </form>
    <p>Laporan/Komentar Terakhir</p>
    <hr>
    @foreach ($data as $lapor)
    <div class="container">
    <div class="card">
    <p>{{$lapor->isilaporan}}</p>
    <div class="kaki">
    <span>Lampiran : {{$lapor->file}}</span>
    <span class="kanan">
    <span>Waktu : {{$lapor->created_at}}</span>
    <span> <a href="/laporan/{{$lapor->id}}">Lihat Selengkapnya X</a></span>
    </span>
    </div>
    <hr>
    </div>
    </div>
    @endforeach
</body>
</html>
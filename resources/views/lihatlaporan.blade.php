<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>
.header{
        text-align : center;
        font-size : 24px;

    }

    .textlaporan{
        width : 85%;
        display : inline-block;
    }
    .kaki{
        margin-top: 40px;
        display: inline-block;
    }
    .kaki p{
        display: inline;
        margin-right: 20px;
        
    }
    .btn{
        display: inline;
        float: right;
        margin-left: 20px;
    }
    .button{
        margin-top: 40px;
        width: 200px;
        display: inline-block;
        float: right;
    }
    .lampiran{
        display: block;
    }
    </style>

    </head>
    <body>
        <div class="header">
            <h1>SIMPLE LAPOR!!</h1>
        </div>
        <div class="conten">
        <p class="textlaporan"> Buat Laporan/Komentar</p>
        <hr><br>

    @if(session('pesan'))
    {{ session('pesan')}}
    @endif
    <p>{{$lengkap->pengirim}}</p>
    <p>{{$lengkap->judul}}</p>
    <p>{{$lengkap->isilaporan}}</p>
    <a class="lampiran" href="{{ $lengkap->file }}">lihat lampiran</a>
    
    <div class="kaki">
    <p>Waktu : {{$lengkap->created_at}}</p>
    <p>Aspek : {{$lengkap->aspect}}</p>
    </div >
    <span class="button">
    <form action="{{ route('edit', $lengkap->id) }}" method="POST">
    @csrf

    <button class="btn" type="submit">edit</button>
    </form>
    <form action="{{ route('hapus', $lengkap->id) }}" method="POST">
    @csrf
    <button class="btn" type="submit">hapus</button>
    </form>
    </span>
    <hr>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if(session('pesan'))
    {{ session('pesan')}}
    @endif
    <p>{{$lengkap->pengirim}}</p>
    <p>{{$lengkap->judul}}</p>
    <p>{{$lengkap->isilaporan}}</p>
    <p>{{$lengkap->aspect}}</p>
    <a href="{{ $lengkap->file }}">lihat lampiran</a>
    <form action="{{ route('edit', $lengkap->id) }}" method="POST">
    @csrf
    <button type="submit">edit</button>
    </form>
    <form action="{{ route('hapus', $lengkap->id) }}" method="POST">
    @csrf
    <button type="submit">hapus</button>
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if(session('pesan'))
    <div>
    {{session('pesan')}}
    </div>
    @endif
    <table border="1">
    @foreach ($lapor as $lapor)
    <tr>
        <td>{{$lapor->judul}}</td>
        <td>{{$lapor->pengirim}}</td>
        <td><a href="{{ route('lihatlaporan', $lapor->id) }}">lihat selengkapnya</a></td>
    </tr>
    @endforeach
    </table>
</body>
</html>
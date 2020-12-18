<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Lapor</title>
</head>
<body>
    <a href="{{route('daftarlaporan')}}">lihat list laporan</a>
    <a href="{{route('buatlaporan')}}">buat laporan</a>
    <form action="{{ route('cari') }}" method="POST">
        @csrf
        <label for="">
        cari:
        <input type="text" name="cari">
        </label>
        <button type="submit">cari laporan</button>
    </form>
    <table border="1">
    @foreach ($data as $data)
    <tr>
        <td>{{$data->pengirim}}</td>
        <td>{{$data->judul}}</td>
    </tr>
    @endforeach
    </table>
</body>
</html>
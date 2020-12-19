<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utama </title>
    <link rel="stylesheet" href=" {{ asset('css/style.css') }} ">
</head>

<body>

    <p>Tampilkan Laporan</p>

    <ul>
        @foreach ($data as $data)
        <li>
            {{ $data->laporan }}
            <a href="{{ route('show', $data->id) }}">Lihat Selengkapnya</a>
        </li>
        @endforeach
    </ul>
</body>

</html>
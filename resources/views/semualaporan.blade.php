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

<form action="{{ route('semualaporan', $data->id) }}" method="POST">
        @csrf
        <button type="submit">Tampilkan Semua Laporan</button>
    </form>
    <ul>
        @foreach ($data as $report)
            <li>
                {{ $report->laporan }}
                <a href="{{ route('show', $report->id) }}">Lihat Selengkapnya</a>
            </li>
        @endforeach
    </ul>
</body>
</html>
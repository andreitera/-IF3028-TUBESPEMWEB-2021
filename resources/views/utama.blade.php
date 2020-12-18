<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utama</title>
    <link rel="stylesheet" href=" {{ asset('css/style.css') }} ">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href=" {{ asset('css/styleUtama.css') }} ">
</head>

<body>
    <h1>SIMPLE LAPOR!</h1>
    <form action="{{ route('search') }}" method="POST">
        @csrf
        <label for="">
            <input type="text" name="cari" autocomplete="off">
        </label>
        <button type="submit">Cari</button>
    </form>
    <a href="{{ url('/formlapor') }}">Buat laporan/komentar</a>
    <a href="{{ url('/listlaporan') }}">Lihat Semua Laporan/Komentar</a>

    <ul>
        @foreach ($data as $report)
        <li>
            {{ $report->laporan }}
            <a href="/reports/{{ $report->id }}">Lihat Selengkapnya</a>
        </li>
        @endforeach
    </ul>
</body>

</html>
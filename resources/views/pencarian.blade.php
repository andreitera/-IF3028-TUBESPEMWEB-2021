<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pencarian</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href=" {{ asset('css/style.css') }} ">
</head>
<body>

<h1>Berikut hasil pencarian</h1>

    @foreach ($data as $report)
        <li>
            {{ $report->laporan }}
            <a href="/reports/{{ $report->id }}">Lihat Selengkapnya</a>
        </li>
    @endforeach
</body>
</html>
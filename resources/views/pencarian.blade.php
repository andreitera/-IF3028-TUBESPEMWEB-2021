<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pencarian</title>
</head>
<body>
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
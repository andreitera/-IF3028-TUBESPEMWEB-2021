<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utama</title>
</head>
<body>
    <h1>SIMPLE LAPOR!</h1>
    <form action="" method="POST">
    <label for="">
        <input type="text" name="cari" autocomplete="off" >
    </label>
    <button name="cari">Cari</button>
    </form>
    <a href="{{ url('/buatlaporan') }}">Buat laporan/komentar</a>

    <ul>
        @foreach ($reports as $report)
            <li>
                {{ $report->laporan }}
                <a href="/reports/{{ $report->id }}">Lihat Selengkapnya</a>
            </li>
        @endforeach
    </ul>
</body>
</html>
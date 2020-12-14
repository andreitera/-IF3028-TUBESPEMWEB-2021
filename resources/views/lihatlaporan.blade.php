<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Laporan</title>
</head>
<body>
    <h1>SIMPLE LAPOR!</h1>
    <p>Detail Laporan/Komentar</p>
    -------------------------------
    <p>{{$report->laporan}}</p>
    <p>{{$report->lampiran}}</p>
    <p>{{$report->datetime}}</p>
    <p>{{$report->aspek}}</p>

    <button name="hapus">Hapus Laporan/Komentar</button>
</body>
</html>
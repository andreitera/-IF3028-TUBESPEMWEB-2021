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
<p>LAPOR!</p>
<p>Tentang Lapor!</p>
<p>Laporan</p>
<p>Cari Aduan</p>

<h1>Berikut hasil pencarian</h1>

<form action="" method="POST">
        @csrf
        <button type="submit">Cari Aduan</button>
    </form>

    <ul>
        <li>
            <a href="">Lihat Selengkapnya</a>
        </li>
    </ul>
</body>
</html>
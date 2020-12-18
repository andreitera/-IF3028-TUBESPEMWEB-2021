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

    <div class="container">
        <div class="title">
            <h1>Simple Lapor!</h1>
        </div>
        
        <form action="" method="POST">
            <label for="">
                <input type="text" name="cari" autocomplete="off" >
            </label>
            <button name="cari">Cari</button>
        </form>
        <a href="{{ url('/formlapor') }}">Buat laporan/komentar</a>
    
        <ul>
            @foreach ($data as $report)
                <li>
                    {{ $report->laporan }}
                    <a href="/reports/{{ $report->id }}">Lihat Selengkapnya</a>
                </li>
            @endforeach
        </ul>
    </div>


    <script> 
        console.log("hello");
    </script>
</body>
</html>
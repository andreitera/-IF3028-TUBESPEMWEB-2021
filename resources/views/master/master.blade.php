<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('image/logo.png') }}">
    @yield('css')
    @yield('jsatas')
    <title>@yield('judul')</title>
</head>

<body>
    <nav>
        <a href="{{ route('home') }}"><img src="{{ asset('image/logo-white.png') }}" alt="logo lapor" class="logo"></a>
        <a class="nav-item" href="{{ route('tentang') }}"> Tentang LAPOR!</a>
        <a class="nav-item" href="{{ route('lapor') }}"> SEMUA LAPORAN</a>
        <a style="flex:1;" class="nav-item" href="{{ route('laporbuatView') }}"> BUAT LAPORAN</a>
    </nav>
    <div class="home">
        <img src="{{ asset('image/home-cover.jpg') }}" alt="home-cover" class="home-cover">
        <img src="{{ asset('image/bawahheader.svg') }}" alt="home-white" class="home-white">
    </div>
    <div class="judul">
        <div class="judul-kata1">Layanan Aspirasi dan Pengaduan Online Teknik Informatika ITERA</div>
        <div class="judul-kata2">Sampaikan Laporan Anda Langsung Kepada Pihak Terkait</div>
        <div class="judul-bar"></div>
    </div>
    @yield('isi')
    @yield('jsbawah')
</body>
<script>
    var nav = document.querySelector('nav'); // Identify target

    window.addEventListener('scroll', function(event) { // To listen for event
        event.preventDefault();

        if (window.scrollY <= 150) { // Just an example
            nav.style.backgroundColor = 'transparent';
        } else {
            nav.style.backgroundColor = '#000'; // or default color
        }
    });
</script>

</html>
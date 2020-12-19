<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('css')
    @yield('jsatas')
    <title>@yield('judul')</title>
</head>
<body>
    <nav>
        <img src="{{ asset('image/logo-white.png') }}" alt="logo lapor" class="logo">
        <div>TENTANG LAPOR!</div>
        <div>LAPORAN</div>
        <div style="display:flex;flex:1;align-items:center;">
            <img src="{{ asset('image/search.svg') }}" alt="logo lapor" class="search">
            CARI ADUAN
        </div>
        <div>MASUK</div>
        <div>
            <a href="#">DAFTAR</a>
        </div>
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
</html>
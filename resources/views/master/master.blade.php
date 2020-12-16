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
    @yield('isi')
    @yield('jsbawah')
</body>
</html>
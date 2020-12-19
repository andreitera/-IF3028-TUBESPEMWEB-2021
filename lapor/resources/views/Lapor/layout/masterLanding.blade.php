<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lapor</title>
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">    

    <link rel="stylesheet" href="{{ asset('asset/css/Mainstyle.css') }}">
    @yield('css')
    
    <script src="{{ asset('asset/js/search.js') }}"></script>
</head>
<body>

    <div class="banner" style="background-image: url('{{ asset('asset/images/user-cover.png') }}')">
        <div class="red-background-transparent">
            
            {{-- Search Template --}}
            @include('Lapor.layout.search')

            {{-- navbar Template --}}
            <section id="" class="navbar-landing">
                <div class="container">
                    <div class="d-flex space-bettwen">
                        <div class="left d-flex">
                            <a href="{{ route('landing') }}">
                                <div class="logo">
                                    <img src=" {{ asset('asset/images/logo-white.png') }} " width="190px" height="60px" alt="Logos">
                                </div>
                            </a>
                            
                            {{-- Menu --}}
                            <ul class="d-flex menus-nav menus-nav-lad">
                                <li><a href="">Tentang Lapor!</a></li>
                                <li><a href="">Laporan</a></li>
                                <li><a href="#" onclick="showSearch()">Cari Aduan</a></li>
                            </ul>
                        </div>

                        <div class="profile" style="padding: 20px !important;">

                            {{-- @if (!Auth::check())
                                <img src=" {{ asset('asset/images/user-icon.png') }} " width="50px" height="50px" alt="profile">
                                <span class="color-white">Nestiawan Ferdiyanto</span>
                                <span><img class="icon-down" class="color-white" src="{{ asset('asset/images/icons/caret-down.svg') }}" width="15px" height="15px" alt=""></span>
                            @else --}}
                                <a href="{{ route('login.user') }}">Masuk</a>
                                <a href="{{ route('register.user') }}">Daftar</a>    
                            {{-- @endif --}}

                        </div>
                    </div>
                </div>
            </section>

            <div class="center-content-banner">
                <h3 class="title-banner color-white">Layanan Aspirasi dan Pengaduan Online Rakyat</h3>
                <p class="text-banner color-white">Sampaikan laporan Anda langsung kepada instansi pemerintah berwenang</p>
                <div class="border-bttn"></div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="margin-top: -50px;" class="svg-btn">
                <path fill="#ffffff" fill-opacity="0.3" d="M0,256L40,250.7C80,245,160,235,240,240C320,245,400,267,480,245.3C560,224,640,160,720,149.3C800,139,880,181,960,202.7C1040,224,1120,224,1200,218.7C1280,213,1360,203,1400,197.3L1440,192L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
                <path fill="#ffffff" fill-opacity="0.5" d="M0,160L40,165.3C80,171,160,181,240,165.3C320,149,400,107,480,117.3C560,128,640,192,720,218.7C800,245,880,235,960,224C1040,213,1120,203,1200,218.7C1280,235,1360,277,1400,298.7L1440,320L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
            </svg>
            <div class="absolute-svg">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                    <path fill="#ffffff" fill-opacity="1" d="M0,160L48,186.7C96,213,192,267,288,256C384,245,480,171,576,165.3C672,160,768,224,864,213.3C960,203,1056,117,1152,106.7C1248,96,1344,160,1392,192L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
                </svg>
            </div>
        </div>
    </div>


    @yield('content')

    {{-- Footer Template --}}
    @include('Lapor.layout.footer')

</body>
</html>
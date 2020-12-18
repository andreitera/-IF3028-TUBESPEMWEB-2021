<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hasil Pencarian Laporan</title>

    <link rel="stylesheet" href="{{ asset('css/styleUtama.css') }}">
</head>
<body>
    
    <section id="header">
        <div class="container">
            <div class="flex-display bettwen">
                <div class="flex-display">
                    <div class="logo">
                        <img src=" {{ asset('images/logos.png') }} " width="150px" height="60px" alt="Logo">
                    </div>
                    <ul class="flex-display menus">
                        <li><a href="#">Menu</a></li>
                        <li><a href="#">Menu</a></li>
                        <li><a href="#">Menu</a></li>
                    </ul>
                </div>
                <div class="user">
                    <img src="{{ asset('images/user-placeholder-m.png') }}" alt="user-profile" width="60px" height="60px">
                    <span>Nazla</span>
                </div>
            </div>
        </div>
    </section>    

    @yield('content')

    <footer>
        Footer
    </footer>

</body>
</html>
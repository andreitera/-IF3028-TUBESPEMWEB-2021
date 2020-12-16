<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lapor</title>
</head>
<body>
    
    {{-- navbar Templae --}}
    <section id="navbar">
        Navbar
    </section>

    @yield('content')

    {{-- Footer Template --}}
    @include('Lapor.layout.footer')

</body>
</html>
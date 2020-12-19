<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <title>UniqID</title>
</head>
<body>
    <div class="info">
        <img src='{{ asset('image/bell.svg') }}' alt='icon hapus' class='bell'>
        <p>UniqID anda</p>
        <p style="font-size: 40px !important">{{$uniqid}}</p>
        <p>UniqID tersebut harap disimpan dan digunakan sebagai mana mestinya</p>
    </div>
</body>
</html>
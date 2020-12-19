<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('asset/css/LoginRegisterstyle.css') }}">
</head>
<body>
    <div class="center">
        <div class="header">
            <div class="daftar-header">Daftar</div>
        </div>
        <div class="middle"> 
            <form >
                <div class="login-form">
                    <input type="text" name="namalengkap" class="text-box" placeholder="Nama Lengkap">
                    <input type="text" name="email" class="text-box" placeholder="Email">
                    <input type="text" name="username" class="text-box" placeholder="Username">
                    <input type="number" name="notelepon" class="text-box" placeholder="No. Telepon">
                    <input type="password" name="password" class="text-box" placeholder="Password">
                    <input type="password" name="confirmpass" class="text-box" placeholder="Confirm Password">
                </div>
                <div>
                    <button type="submit" class="button">DAFTAR</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
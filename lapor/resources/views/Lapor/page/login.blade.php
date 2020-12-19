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
            <div class="close-button">x</div>
            <div class="masuk">MASUK</div>
        </div>
        <div class="middle"> 
            <form >
                <div class="login-form">
                    <input type="text" name="username" class="text-box" placeholder="Enter email or username">
                    <input type="password" name="password" class="text-box" placeholder="Password">
                </div>
                <div>
                    <button type="submit" class="button">Login</button>
                </div>
            </form>
        </div>
        <div class="footer">
            <div>Anda belum memiliki akun?</div>
            <div class="daftar">DAFTAR SEKARANG</div>
        </div>
    </div>
</body>
</html>
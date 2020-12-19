<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<<<<<<< HEAD
    <title>Register - Lapor</title>

    <link rel="stylesheet" href=" {{ asset('asset/css/Mainstyle.css') }} ">
    <link rel="stylesheet" href=" {{ asset('asset/css/registerStyle.css') }} ">
</head>
<body>
    
    <section id="register">
        <div class="logo">
            <img src=" {{ asset('asset/images/logo-white.png') }} " width="190px" height="60px" alt="Logos">
        </div>
        <div class="center-item">
            <h2>Daftar</h2>

            <form action="" method="psot">
                <div class="d-flex">
                    <div class="form-input">
                        <p>Nama Lengkap</p>
                        <input type="text" name="" id="">
                    </div>
                    <div class="form-input">
                        <p>Username</p>
                        <input type="text" name="" id="">
                    </div>
                    <div class="form-input">
                        <p>E-mail</p>
                        <input type="email" name="" id="">
                    </div>
                    <div class="form-input">
                        <p>No. Telp</p>
                        <input type="text" name="" id="">
                    </div>
                    <div class="form-input">
                        <p>Password</p>
                        <input type="password" name="" id="">
                    </div>
                    <div class="form-input">
                        <p>Password Confirmation</p>
                        <input type="password" name="" id="">
                    </div>
                </div>
                <input type="checkbox" name="" id=""><span>Saya telah membaca dan menyetujui Syarat dan Ketentuan Layanan</span>
            </form>
        </div>
    </section>

=======
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
>>>>>>> 580de0c4f63bc64b02151c11745de1e9776b69f7
</body>
</html>
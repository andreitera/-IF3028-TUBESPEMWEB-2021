<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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

</body>
</html>
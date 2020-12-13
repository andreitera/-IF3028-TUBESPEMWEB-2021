<html>
    <head>
        <title>Beranda</title>
        <link rel="stylesheet" href="<?php echo base_url('style/styleBeranda.css'); ?>">
    </head>
    <h1>SIMPLE LAPOR!</h1>
    <br>
    <body>
        <form method="GET" action="<?php echo base_url().'cari' ?>">
            <input type="search" name="cari">
            <button type="submit" id="tombolcari">Cari</button>
        </form>
        <br>
        <form method="POST">
            <table>
            <tr>
                <td><p>Buat Laporan/Komentar</p></td>
                <td><button type="submit" id="tombolbuat">+</button></td>
            </tr>
            </table>
        </form>
    </body>
</html>

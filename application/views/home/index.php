<html>
    <head>
        <title>Beranda</title>
        <link rel="stylesheet" href="<?php echo base_url(''); ?>">
    </head>
    <h1 align="center">SIMPLE LAPOR!</h1><br>
    <br>
    <body>
        <form method="GET" action="<?php echo base_url().'cari' ?>">
            <input type="search" name="cari">
            <button type="submit" id="tcari">Cari</button>
        </form>
        <br>
        <form method="POST">
            <table>
            <tr>
                <td><p align="center">Buat Laporan/Komentar</p></td>
                <td><button type="submit" id="tombolbuat">+</button></td>
            </tr>
            <tr>
                <td>Laporan/Komentar Terakhir</td></td>
            </tr>
            </table>
        </form>
    </body>
</html>

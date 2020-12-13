<!DOCTYPE html>
<html lang=en>
    <head>
        <title>Simple lapor</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('style/styleBuatLapor.css'); ?>">
    </head>
    <body>
        <h1>SIMPLE LAPOR</h1>
        <div id="badan" class="badan">
            <p>Buat Laporan/komentar</p>
        </div>
        <form action="<?php echo base_url().'tambah'?>" method="POST">            
            <hr width="70%">
            <div id="pala2" class="pala2">
            <textarea name="komentar" required placeholder="Laporan/komentar"></textarea><br><br>
            <select name="aspek" required>
                <option value="" hidden>Pilih Aspek Pelaporan/komentar</option>
                <option value="a">aspek a</option>
                <option value="b">aspek b</option>
                <option value="c">aspek c</option>
                <option value="d">aspek d</option>
            </select><br><br>
            <input type="file" accept="image/*" name="lampiran"><br><br>
            <input type="submit" value="Buat LAPOR!" name="buat"><br>
            </div>
            <hr width="70%">
        </form>
    </body>
</html>

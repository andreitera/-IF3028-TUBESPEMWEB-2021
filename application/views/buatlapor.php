<!DOCTYPE html>
<html lang=en>
    <head>
        <title>LAPOR!</title>
    </head>
    <body>
    <div >
        <h1 align="center">SIMPLE LAPOR!</h1><br>
        <div id="badan" class="badan">
            <p>Buat Laporan/komentar</p>
        </div>
        <form action="<?php echo base_url().'tambah'?>" method="POST">            
            <hr><br>
            <div id="kepala" class="kepala">
            <textarea onkeypress="activateSubmit()" id="#some-textarea" cols="110" rows="20" name ="komentar" placeholder="Laporan/Komentar"></textarea><br>
            <select name="aspek" required>
                <option value="" hidden>Pilih Aspek Pelaporan/komentar</option>
                <option value="a">List 1</option>
                <option value="b">List 2</option>
                <option value="c">List 3</option>
                <option value="d">List 4</option>
                <option value="d">List 5</option>
            </select><br><br>
            <input class="upload" type="file" accept="image/*" name="lampiran" value="Choose File"><br><br>
            <input class="buat" type="submit" value="Buat LAPOR!" name="buat"><br><br>
            </div>
            <hr>
        </form>
    </div>
    </body>
</html>

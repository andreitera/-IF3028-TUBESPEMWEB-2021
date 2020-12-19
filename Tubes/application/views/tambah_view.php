<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">

        
        <title>Tambah Laporan</title>
        <link rel="stylesheet" href="<?php echo base_url('style/style_tambah.css') ?>">
    </head>
    <body style="background-image: url('<?php echo base_url('img/bg1.jpg') ?>'); background-size: cover; ">
        <div class="container" style="margin: 0 auto; margin-top: 100px; margin-bottom: 100px; width: 850px; height: auto;border: 1px solid gray; background-color: white; border-radius: 15px; box-shadow: 2px 5px 20px rgba(0,0,0,100%);">
            <div class="content">
                <h1>Layanan Aspirasi dan Pengajuan Online Mahasiswa IF ITERA</h1>
                <br>
                <form method="POST" onsubmit="return alert('Data berhasil ditambah');">
                    <p>Buat Laporan/Komentar</p>
                    <hr><br>
                    <div>
                        <textarea name="isi" placeholder="Laporan/Komentar" class="textarea"></textarea>
                    </div><br>
                    <div>
                        <select name="aspek" class="select">
                            <option>Pilih Aspek Pelaporan/Komentar</option>
                            <option value="Dosen">Dosen</option>
                            <option value="Staff">Staff</option>
                            <option value="Mahasiswa">Mahasiswa</option>
                            <option value="Infrastruktur">Infrastruktur</option> 
                            <option value="Pengajaran">Pengajaran</option> 
                        </select>
                    </div>
                    <div>
                        <br>
                        <input type="file" name="lampiran" class="file">
                    </div>
                    <br>
                    <button type="submit" class="btn_tambah" style="color: white; background-color: green; border-radius: 5px;">BUAT LAPOR!</button>
                    <hr><br><br>
                </form>
            </div>
        </div>
    </body>
</html>
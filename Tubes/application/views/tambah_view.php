<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tampilan Buat Laporan</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style/style_tambah.css"></link>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <h1>Layanan Aspirasi dan Pengajuan Online Mahasiswa IF ITERA</h1>
                <form method="POST" enctype="multipart/form-data">
                    <p>Buat Laporan/Komentar</p>
                    <hr><br>
                    <div class="form-group">
                        <textarea placeholder="Laporan/Komentar" class="textarea"></textarea>
                    </div><br>
                    <div class="form-group">
                        <select class="select">
                            <option>Pilih Aspek Pelaporan/Komentar</option>
                            <option>Pelaporan</option>
                            <option>Komentar</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <br>
                        <input type="file" class="file">
                    </div>
                    <br>
                    <button type="submit" class="btn">Buat LAPOR!</button>
                    <hr><br><br>
                </form>
            </div>
        </div>
    </body>
</html>
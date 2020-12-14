<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Laporan/Komentar</title>
</head>
<body>
    <h1>SIMPLE LAPOR!</h1>
    <p>Buat Laporan/Komentar</p>
    ---------------------------------
    <form action="" method="POST">
        <input type="textarea" name="laporan" id="" autocomplete="off" style="display: block; padding-top: 5px;">
        <select name="aspek" id="" style="display: block; padding-top: 5px;">
                <option value="1">Pilih Aspek Pelaporan/Komentar</option>
                <option value="2">Dosen</option>
                <option value="3">Mahasiswa</option>
                <option value="4">Infrastruktur</option>
                <option value="5">Pengajaran</option>
            </select>
            <input type="file" name="lampiran" required style="display: block; padding-top: 5px;">
            <button name="buat" style="display: block; padding-top: 5px;">Buat LAPOR!</button>
            --------------------------------------
    </form>
</body>
</html>
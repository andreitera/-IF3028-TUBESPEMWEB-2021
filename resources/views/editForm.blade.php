<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan</title>
    <link rel="stylesheet" href="home.css">
</head>
<style>
.margin {
    margin: auto 100px auto 100px;
}

#contents{
    width: 100%;
    height: 250px;
}
#file{
    margin-top: 5px;
}
#submit{
    margin: 5px 0px 5px auto;
    display: block;
}
</style>
<body>
    <br />
    <br />
    <div class="margin">
        <center><h1>SIMPLE LAPOR!</h1></center>
        <br />
        <br />
        <br />
        <span>Buat Laporan/Komentar</span>
        <hr>
        <textarea name="contents" id="contents" sy>Laporan/Komentar</textarea><br>
        <select name="aspect" id="aspect">
            <option value="" selected hidden>Pilih Aspek Pelaporan/Komentar</option>
            <option value="Dosen">Dosen</option>
            <option value="Staff">Staff</option>
            <option value="Mahasiswa">Mahasiswa</option>
            <option value="Infrastruktur">Infrastruktur</option>
            <option value="Pengajaran">Pengajaran</option>
        </select><br>
        <input type="file" name="file" id="file"><br>
        <div style="width: 100%">
            <input type="submit" value="Buat LAPOR!" id="submit" onclick="up()">
        </div>
        <hr>
    </div>
</body>
</html>

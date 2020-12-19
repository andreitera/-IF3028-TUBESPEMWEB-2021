<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="/css/input.css">
</head>
<body>
<div class="container">
    <h2>SIMPLE LAPOR!</h2>
    <div class="main">

        <p>Buat Laporan/Komentar</p>
        <hr>

        <form action="/prosesdata" method="post" enctype="multipart/form-data" >
            {{csrf_field()}}
            <textarea name="komentar" id="komentar">Laporan/Komentar</textarea>



            <select id="aspek" name="aspek">
                <option selected value="">Pilih Aspek Pelaporan/Komentar</option>
                <option value="Dosen">Dosen</option>
                <option value="Staff">Staff</option>
                <option value="Mahasiswa">Mahasiswa</option>
                <option value="Infrastruktur">Infrastruktur</option>
                <option value="Pengajaran">Pengajaran</option>
            </select>

            <input type="file" style="padding: 15px;" name="file">

            <div class="tombol">
                <button type="submit"  >Buat Lapor!</button>
            </div>

            <hr>
        </form>
    </div>
</div>

<script src="/js/validate.js"></script>
</body>
</html>

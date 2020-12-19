<!DOCTYPE html>
<html>
<head>
    <title></title>

</head>
<body>
<div class="container">
    <h2>SIMPLE LAPOR!</h2>
    <div class="main">

        <p>Buat Laporan/Komentar</p>
        <hr>

        <form action="/update" method="post" enctype="multipart/form-data" onsubmit="return validation()">
            {{csrf_field()}}

            <textarea name="komentar" id="komentar"></textarea>


            <select id="aspek" name="aspek">
                <option value="">Pilih Aspek Pelaporan/Komentar</option>
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


</body>
</html>

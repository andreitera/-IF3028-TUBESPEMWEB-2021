    <link rel="stylesheet" href="{{ asset('/css/createStyle.css') }}" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:ital,wght@0,400;1,700&display=swap" rel="stylesheet">
    <script src="createScript.js"></script>
    <div class="container">
        Layanan Aspirasi dan Pengaduan Mahasiswa ITERA
    </div>
        <div class="container-2">
        <form action="/reports/save" method="post" id="formtambah" onsubmit="return validasi()" enctype="multipart/form-data">
            @csrf
            <p>Buat Laporan/Komentar</p>
            <hr>
            <div class="text-bar">
                    <div id="error_pesan"></div>
                <input class="judul" name="judul" type="text" placeholder="Judul..">
                <textarea class="textinput" name="isi" cols="117" rows="10" placeholder="Ketikan laporan Anda..."></textarea>
                <select class="select" name="aspect" placeholder="Pilih Kategori">
                    <option value=""> --Pilih Aspek Pelaporan/Komentar-- </option>
                    <option value="Dosen">Dosen</option>
                    <option value="Infrasturktur">Infrasturktur</option>
                    <option value="Mahasiswa">Mahasiswa</option>
                    <option value="Pengajaran">Pengajaran</option>
                    <option value="Staff">Staff</option>
                </select>
                 <div id="input">
                    <input type="file" name="file">
                </div>
                    <input class="button" type="submit" value="sumbit">
            </div>
        </form>
        </div>

<div class="container">
    <div class="content">
        <div class="heading-icon">
            <img src=<?= base_url('assets/img/logoitera.png') ?> alt="ini foto.png">
            <h1>LAPOR ITERA!</h1>
        </div>

        <div class="head">
            Buat Laporan/Komentar
        </div>

        <hr>

        <form method="post" action="#" enctype="multipart/form-data">


            <div class="main">
                <input type="text" placeholder="Judul Laporan/Komentar" name="comm_title" required>
                <br>
                <textarea minlength="100" name="comment" placeholder="Laporan/Komentar (Minimal 100 Karakter)" required></textarea>
            </div>

            <br>

            <div class="aspect">
                <select name="aspect" required>
                    <option value="">Pilih Aspek Pelaporan/Komentar</option>
                    <option value="Dosen">Dosen</option>
                    <option value="Staff">Staff</option>
                    <option value="Mahasiswa">Mahasiswa</option>
                    <option value="Infrastruktur">Infrastruktur</option>
                    <option value="Pengajaran">Pengajaran</option>
                </select>
            </div>
            <br>
            <div class="file">
                <input class="file_in" type="file" name="lampiran">
            </div>
            <br>
            <div class="btn_submit">
                <button type="submit" name="submit">Buat LAPOR!</button>
            </div>
        </form>

        <br>

        <br>

        <hr>
    </div>
</div>
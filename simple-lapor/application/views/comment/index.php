<div class="container">
    <div class="content">
        <div class="heading-icon">
            <img src=<?= base_url('assets/img/hmif.jpg') ?> alt="hmifITERA">
            <img src=<?= base_url('assets/img/logoitera.png') ?> alt="logoitera">
            <h1>SIMPLE LAPOR!</h1>
        </div>
        <div class="nav-bar">
      <a href="<?= base_url()?>">HOME</a> 
    </div>
        <br><br>
        <div class="head">
            Buat Laporan/Komentar
        </div>

        <hr>

        <form id="form" method="post" action="" enctype="multipart/form-data">


            <div class="main">
            <input id="judul" type="text" placeholder="Judul Laporan/Komentar" name="comm_title" required> <br>
                <textarea id="teks" minlength="50" name="comment" placeholder="Laporan/Komentar (Minimal 50 Karakter/20 kata)" required></textarea>
            </div>

            <br>

            <div class="aspect">
                <select id="aspek" name="aspect" required>
                    <option value="">Pilih Aspek Pelaporan/Komentar</option>
                    <option value="Dosen">Dosen</option>
                    <option value="Staff">Staff</option>
                    <option value="Mahasiswa">Mahasiswa</option>
                    <option value="infrastruktur">Infrastruktur</option>
                    <option value="pengajar">Pengajar</option>
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

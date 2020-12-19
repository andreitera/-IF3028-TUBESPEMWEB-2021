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

        <form method="post" action="" enctype="multipart/form-data">


            <div class="main">
            <input type="text" placeholder="Judul Laporan/Komentar" name="comm_title"> <br>
                <textarea minlength="50" name="comment" placeholder="Laporan/Komentar (Minimal 50 Karakter/20 kata)"></textarea>
            </div>

            <br>

            <div class="aspect">
                <select name="aspect">
                    <option value="">Pilih Aspek Pelaporan/Komentar</option>
                    <option value="Dosen">Dosen</option>
                    <option value="Staff">Staff</option>
                    <option value="Mahasiswa">Mahasiswa</option>
                    <option value="infrastruktur">Infrastruktur</option>
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
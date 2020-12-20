<main>
    <div class="container">
        <h3 class="pt-2">Buat Laporan/Komentar</h3>
        <form onsubmit="return validasi()" action="/laporan/save" method="POST" class="main-form" id="form" enctype="multipart/form-data">
            <textarea name="konten" id="konten" class="mb-1" 
                        placeholder="Laporan/Komentar"></textarea>
            <select name="aspek" id="aspek" class="mb-1">
                <option disabled selected value="0">Pilih Aspek Pelaporan/Komentar</option>
                <option value="Dosen">Dosen</option>
                <option value="Staff">Staff</option>
                <option value="Mahasiswa">Mahasiswa</option>
                <option value="Infrastruktur">Infrastruktur</option>
                <option value="Pengajaran">Pengajaran</option>
            </select>
            <input type="file" name="lampiran" id="input-lampiran">
            <input type="submit" name="lapor" class="btn-secondary" 
                    id="tambah-laporan" value="Buat LAPOR!">
        </form>
    </div>
</main>
<script src="/assets/js/validation.js"></script>
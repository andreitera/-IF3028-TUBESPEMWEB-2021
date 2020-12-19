<main>
    <div class="container">
        <h3 class="pt-2">Ubah Laporan/Komentar</h3>
        <form onsubmit="return validasi()" action="/laporan/save" method="POST" class="main-form" id="form" enctype="multipart/form-data">
            <input type="hidden" id="id" name='id'  value=<?= $item['id'] ?>>
            <textarea name="konten" id="konten" class="mb-1"><?= trim($item['isi']) ?></textarea>
            <select name="aspek" id="aspek" class="mb-1">
                <option disabled selected value="0">Pilih Aspek Pelaporan/Komentar</option>
                <?php 
                    $aspects = ['Dosen', 'Staff', 'Mahasiswa', 'Infrastruktur', 'Pengajaran'];

                    foreach($aspects as $aspect) {
                        if ($aspect == $item['aspek']) {
                            echo "<option value='$aspect' selected>$aspect</option>";
                        } else {
                            echo "<option value='$aspect'>$aspect</option>";
                        }
                    }
                ?>
            </select>
            <!-- Lampiran: <label id="text-lampiran"><?= $item['lampiran'] ?></label> -->

            <!-- <input type="checkbox" style="display: inline" id="input-check" onchange="fileDisplay()">Update Gambar -->
            <input type="file" name="lampiran" id="input-lampiran"> 
            <input type="submit" name="lapor" class="btn-secondary" 
                    id="tambah-laporan" value="Edit LAPOR!">
        </form>
    </div>
</main>
<script>
    const fileInput = document.getElementById('input-lampiran');
    const checkboxInput = document.getElementById('input-check');

    function fileDisplay() {
        if(checkboxInput.checked) {
            fileInput.style.visibility = 'visible';
        } else {
            fileInput.style.visibility = 'hidden';
        }
    }
</script>
<script src="/assets/js/validation.js"></script>
<main>
    <div class="container">
        <h3 class="pt-2">Buat Laporan/Komentar</h3>
        <form onsubmit="return validasi()"action="save" method="POST" class="main-form" id="form" enctype="multipart/form-data">
            <textarea name="konten" id="konten" class="mb-1" 
                        placeholder="Laporan/Komentar" no></textarea>
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
<script>
    function validasi(){
        let konten = document.getElementById('konten')
        let aspek = document.getElementById('aspek').value;
        let filename = document.getElementById('input-lampiran').value;
        if(konten.value.length < 20){
            alert("Laporan setidaknya terdiri dari 20 karakter!");
            return false;
        }
        else if(aspek == 0){
            alert("Pilih aspek terlebih dahulu!");
            return false;
        }
        else if(filename == ""){
            alert("Masukkan lampiran terlebih dahulu");
            return false;
        }
        else if(filename != ""){
            let splitname = filename.split(".");
            let fileExt = splitname[splitname.length-1]; 
            let extension = ['doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf', 'jpg', 'jpeg', 'png'];
            let same = 0
            for(i = 0 ; i < extension.length ;i++){
                if(splitname[1] == extension[i]){
                    same = 1;
                }
            }
            if(same == 0){
                alert("Ekstensi file tidak didukung!");
                return false;
            }
            else{
                return true;
            }
        }
    }
</script>
function validasi(){
    const konten = document.getElementById('konten');
    const aspek = document.getElementById('aspek').value;
    const filename = document.getElementById('input-lampiran').value;

    const splitedWord = konten.value.split(" ");
    if(splitedWord.length < 20){
        alert("Laporan setidaknya terdiri dari 20 kata!");
        return false;
    }
    
    if(aspek == 0){
        alert("Pilih aspek terlebih dahulu!");
        return false;
    }

    if(filename == ""){
        alert("Masukkan lampiran terlebih dahulu");
        return false;
    }
    
    if(filename != ""){
        const allowed_extension = [
            'doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf', 'jpg', 'jpeg', 'png'
        ];
        const dot = filename.lastIndexOf(".");
        const ext = filename.slice(dot+1);
        const ada = allowed_extension.some(item => item == ext);
        if (!ada) {
            alert("Ekstensi file tidak didukung!");
            return false;
        }
    }
}
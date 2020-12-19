function validasi(){
    const konten = document.getElementById('konten');
    const aspek = document.getElementById('aspek').value;
    const filename = document.getElementById('input-lampiran').value;

    const splitedWord = konten.value.split("");
    if(splitedWord.length < 20){
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
        let extension = ['doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf', 'jpg', 'jpeg', 'png'];
        let same = 0
        for(i = 0 ; i < extension.length ; i++){
            if(splitname[splitname.length-1] == extension[i]){
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
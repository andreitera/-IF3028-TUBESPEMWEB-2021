const form = document.getElementById('form');
const judul = document.getElementById('judul');
const teks = document.getElementById('teks');
const aspek= document.getElementById('faspek');

form.addEventListener('submit', (e) => {
    e.preventDefault();

    checkInputs();
});

function checkInputs(){
    const judulvalue = judul.value;
    const teksvalue = teks.value;
    const aspekvalue = aspek.value;

    if(judulvalue ===''){
        setErrorFor(judul, "judul tidak boleh kosong");
    }else{
        setSuccessFor(judul)
    }

    if(teksvalue ==''){
        setErrorFor(teks, "isi komentar tidak boleh kosong");
    }else{
        setSuccessFor(teks)
    }
    if(aspekvalue ==''){
        setErrorFor(aspek, "isi komentar tidak boleh kosong");
    }else{
        setSuccessFor(aspek)
    }


}
window.onload = function () {
	// menu bar
	document.getElementById("lapor-menu").addEventListener("click", function () {
		document.getElementById("lapor-menu").classList.toggle("change");
		document.getElementById("nav-show").classList.toggle("change");
	});
	// menu bar
}

const form = document.getElementById('form_laporan');
const laporan = document.getElementById('isi_laporan');
const aspek = document.getElementById('aspek');
const file = document.getElementById('real-file');
const errorMessageField = document.getElementById('error');

function count_words(element){
    str1 = element.value;
    str1 = str1.replace(/(^\s*)|(\s*$)/gi,"");
    str1 = str1.replace(/[ ]{2,}/gi," ");
    str1 = str1.replace(/\n /,"\n");
    return str1.split(' ').length;
}

form.addEventListener('submit', (e)=>{
    if (laporan.value === '' || aspek.value ==='') {
        alert('Tidak boleh ada kolom yang kosong');
        e.preventDefault();
    }

    if (count_words(laporan) < 20) {
        alert('Jumlah kata dalam laporan minimal 20');
        e.preventDefault();
    }

    if (file.value == '') {
        alert('Harap pilih file lampiran');
        e.preventDefault();
    }

});

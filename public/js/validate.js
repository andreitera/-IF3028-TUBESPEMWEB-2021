var komentar = document.getElementById('komentar');
var aspek = document.getElementById('aspek') ;
var errComm = document.getElementById('errComm') ;
var errAspek = document.getElementById('errAspek');

function validation(){
	if(komentar.value == ""){

		komentar.style.border = "2px solid red" ;
		errComm.style.color = "red" ;
		errComm.innerHTML = "Tidak boleh kosong" ;

		if(aspek.value == ""){

			aspek.style.border = "2px solid red" ;
			errAspek.style.color = "red" ;
			errAspek.innerHTML = "Harus pilih salah satu aspek" ;

		}

		return false ;
	}else if(komentar.value.length <= 20){

		komentar.style.border = "2px solid red" ;
		errComm.style.color = "red" ;
		errComm.innerHTML = "Komentar harus minimal 20 karakter" ;

		if(aspek.value == ""){

			aspek.style.border = "2px solid red" ;
			errAspek.style.color = "red" ;
			errAspek.innerHTML = "Harus pilih salah satu aspek" ;

		}

	return false ;

	}else{

		if(aspek.value == ""){

			aspek.style.border = "2px solid red" ;
			errAspek.style.color = "red" ;
			errAspek.innerHTML = "Harus pilih salah satu aspek" ;

		}else{
			return true ;
		}

		return false ;
	}

return true ;
}

function test(){
	console.log(komentar.value)
}

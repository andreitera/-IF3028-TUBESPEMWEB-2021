var komen = document.getElementById('komentar');
var aspek = document.getElementById('aspek') ;
var errComm = document.getElementById('errComm') ;
var errAspek = document.getElementById('errAspek');

function validation(){
	if(komen.value == ""){

		komentar.style.border = "2px solid red" ;
		errComm.style.color = "red" ;
		errComm.innerHTML = "This field is required" ;

		if(aspek.value == ""){
			
			aspek.style.border = "2px solid red" ;
			errAspek.style.color = "red" ;
			errAspek.innerHTML = "You must choose one aspect" ;
		
		}

		return false ;
	}else if(komen.value.length <= 20){

		komentar.style.border = "2px solid red" ;
		errComm.style.color = "red" ;
		errComm.innerHTML = "minimum character is 20 " ;

		if(aspek.value == ""){
			
			aspek.style.border = "2px solid red" ;
			errAspek.style.color = "red" ;
			errAspek.innerHTML = "You must choose one aspect" ;
		
		}
		
	return false ;

	}else{

		if(aspek.value == ""){
			
			aspek.style.border = "2px solid red" ;
			errAspek.style.color = "red" ;
			errAspek.innerHTML = "You must choose one aspect" ;
		
		}else{
			return true ;
		}

		return false ;
	}

return true ;
}

function test(){
	console.log(komen.value)
}
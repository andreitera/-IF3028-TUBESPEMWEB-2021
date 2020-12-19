function validasi() {
	var form = document.forms["form1"];

	if(form["nama"].value==""){
		alert('Anda harus mengisi data dengan lengkap !');
		return false;
	}
	else{
		return true;
	}
}
function validasiKeluhan(){
	var x= document.forms["formTambah"]["lapor"].value;
	var y= document.forms["formTambah"]["gambar"].value;

	var banyak_kata = document.getElementById('lapor').value;
    banyak_kata = banyak_kata.split(" ");
    document.getElementById('total').value = banyak_kata.length;

	if(banyak_kata.length<1){
		alert("Kolom lapor harus diisikan");
		return false;
	 } else if(banyak_kata.length<=20){
	 	alert("Kolom lapor harus berisikan minimal 20 kata");
	 	false;
}
	if(y==""){
		alert("Kolom gambar harus diisikan");
		return false;
	}
}
 
function validasiUbah(){
	var a= document.forms["formUbah"]["lapor"].value;
	var b= document.forms["formUbah"]["gambar"].value;

	if(a==""){
		alert("Kolom lapor harus diisikan");
		return false;
	// } else{
	// 	if (["lapor"].value<=20){
	// 	alert("Lapor/Komentar minimal terdiri dari 20 kata");
	// 	return false;
	// }
	}

	if(b==""){
		alert("Kolom gambar harus diisikan");
		return false;
	}
}

function validasiHapus(){
	var c=confirm("Ingin menghapus data?");
	if(c===false){
		false;
	}else{
		true;
	}
}

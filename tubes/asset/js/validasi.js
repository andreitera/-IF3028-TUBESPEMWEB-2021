function validasi() {
	var text=document.forms["data"]["laporan"].value
	var kategori = document.forms["data"]["aspek"].value
	var lampiran = document.forms["data"]["lampiran"].value
	//var salah = location.href = "http://localhost/IF3111-1920/home"
	//Hitung banyak kata
    var panjang=text.split(" ") 

	 if (text == "") {
	 	alert("Isi laporan tidak boleh kosong")
		
	 } else if (panjang.length < 20) {
	 	alert("Isi laporan Minimal 20 kata")

	 }
	 if (kategori == "NULL") {
	 	alert("Pilih aspek laporan anda")

	 }
	
}
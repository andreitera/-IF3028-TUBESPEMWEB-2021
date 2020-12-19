function validasi() {
	var form = document.forms["createForm"];
	//console.log(form["lampiran"].value)

	if (form["laporan"].value == "") {
		alert("Komentar tidak boleh kosong");
		return false;
	} else if (form["laporan"].value.split(" ").length < 20) {
		alert("komentar harus berisi minimal 20 kata");
		return false;
	} else if (form["lampiran"].value == "") {
		alert("Lampiran tidak boleh kosong");
		return false;
	} else if (form["aspek"].value == "kosong") {
		alert("Aspek tidak boleh kosong");
		return false;
	}
}

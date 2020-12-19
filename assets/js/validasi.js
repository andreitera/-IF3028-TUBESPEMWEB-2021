function validasi(form) {
    var inputFile = document.getElementById('myFile');
    var pathFile = inputFile.value;
    var ekstensiOk = /(.doc|.docx|.xls|.xlsx|.ppt|.pptx|.pdf|.jpg|.png|.jpeg)$/i;


    // validasi field laporan
    //Komentar harus diisi
    if (form.laporan.value == '') {
        alert("Laporan / komentar tidak boleh kosong!");
        form.laporan.focus();
        return (false);
    }

    //minimal 20 kata
    mincar = 20;
    if (form.laporan.value.length < mincar) {
        alert("Minimal jumlah kata adalah 20 kata !");
        form.laporan.focus();
        return (false);
    }

    // validasi field aspek pelaporan
    //aspek harus di isi
    if (form.aspek.value == "pilih") {
        alert("Aspek pelaporan harus dipilih!");
        return (false);
    }

    // validasi field file
    //File tidak boleh kosong
    if (form.myFile.value == '') {
        alert("File tidak boleh kosong!");
        form.myFile.focus();
        return (false);
    }
    //ekstensi harus sesuai
    if (!ekstensiOk.exec(pathFile)) {
        alert('Silakan upload file yang memiliki ekstensi .doc/.docx/.xls/.xlsx/.ppt/.pptx/.pdf atau Images');
        inputFile.value = '';
        return (false);
    }
    return (true);
}

function confirmDelete(delUrl) {
    if (confirm("Apakah yakin ingin Menghapus Laporan?")) {
        document.location = delUrl;
    }
}

function pencarian(form) {
    if (form.keyword.value == '') {
        alert("Kolom Pencarian Kosong!");
        form.laporan.focus();
        return (false);
    }

    return (true);
}

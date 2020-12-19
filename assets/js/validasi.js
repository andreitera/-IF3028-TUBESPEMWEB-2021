function validasi(form){
    var inputFile = document.getElementById('myFile');
    var pathFile = inputFile.value;
    var ekstensiOk = /(.doc|.docx|.xls|.xlsx|.ppt|.pptx|.pdf)$/i;

 
    // validasi field laporan/komentar

    if (form.laporan.value == ''){
        alert("Laporan / komentar harus diisi!");
        form.laporan.focus();
        return (false);
    }
    var mincar = 20;
    if (form.laporan.value.length < mincar){
        alert("Minimal jumlah kata dalam laporan / komentar adalah 20 kata.");
        form.laporan.focus();
        return (false);
    }
    
    // validasi field aspek pelaporan
    if (form.aspek.value =="pilih"){
        alert("Pilih Salah Satu Aspek Laporan!");
        return (false);
    }
    // validasi field file
    if (form.myFile.value == ''){    
        alert ("File tidak boleh kosong!");
        form.myFile.focus();
        return (false);
    }
    if(!ekstensiOk.exec(pathFile)){
        alert('Upload file yang memiliki ekstensi .doc/.docx/.xls/.xlsx/.ppt/.pptx/.pdf');
        inputFile.value = '';
        return (false);
    }

    return (true);
}

function confirmDelete(delUrl) {
    if (confirm("Anda Yakin?")) {
      document.location = delUrl;
    }
  }

function pencarian(form){
    if (form.keyword.value == ''){
        alert("Isi Kolom Pencarian!");
        form.laporan.focus();
        return (false);
    }
  

    return (true);
}

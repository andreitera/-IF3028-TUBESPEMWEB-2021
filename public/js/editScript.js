 function editReports() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function(){
               if (this.readyState == 4 && this.status == 200) {
                document.getElementById("container").innerHTML =
                this.responseText;
                }
            };
            xhttp.open('POST','/',true);
            xhttp.send();
        }
        function validasi(){
            var judul= document.forms["formtambah"]["judul"].value;
            var isi= document.forms["formtambah"]["isi"].value;
            var aspect= document.forms["formtambah"]["aspect"].value;
            var file = document.forms["formtambah"]["file"].value;
            var error_pesan = document.getElementById("error_pesan");
            var pesan;
            if (judul==null || judul==""){
                pesan = "Judul Tidak Boleh Kosong! ";
                error_pesan.innerHTML = pesan;
                return false;
            }
            if (judul.length >= 100){
                pesan = "Judul harus kurang dari 100 karakter";
                error_pesan.innerHTML = pesan;
                return false;
            }
            if (isi ==null || isi == ""){
                pesan = "Isi laporan tidak boleh kosong !";
                error_pesan.innerHTML = pesan;
                return false;
            }
            if (isi.length >= 255){
                 pesan = "Isi laporan harus kurang dari 255 karakter";
                error_pesan.innerHTML = pesan;
                return false;
            }
            if (aspect == "" || aspect == null){
                pesan = "Aspek Harus dipilih !";
                error_pesan.innerHTML = pesan;
                return false;
            }
    editReports();
    }
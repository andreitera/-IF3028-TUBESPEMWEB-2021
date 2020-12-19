<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lapor</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/createStyle.css') }}">
</head>

<body>
  <div class="atastextarea">SIMPLE LAPOR!</div>

  <div class="detail-list">
    <div class="atribut">
      <a class="tombol" href="">< Kembali</a>            
    </div>
  </div> 

  <div class="lapor">
    <form action="/create/add" method="POST" onsubmit="return validasi()" id="formtambah" enctype="multipart/form-data">
      @csrf
        <div class="style">
          <textarea name="report"  cols="83" rows="10" class="form-control textarea-flex autosize" placeholder="Ketik laporan Anda..." minlength="20"></textarea>
          <div class="hrtextarea" >
            <br>
          </div>
        </div>
        <div class="styled-select">
        <select placeholder="Pilih Kategori" value="" name="aspect">
          <option value=""> Pilih Aspek Pelaporan/Komentar </option>
          <option value="Mahasiswa">Mahasiswa</option>
          <option value="Dosen">Dosen</option>
          <option value="Staff">Staff</option>
          <option value="Pengajaran">Pengajaran</option>
          <option value="Infrastruktur">Infrastruktur</option>
        </select>
      </div>
      <br>
      <div class="upload-btn-bungkus">
        <button class="btn">Choose File</button>
        <input type="file" name="file" />
      </div>
      <br>
      
      <div class="style-submit">
        <input type="submit" id="submit"></button>        
      </div>


      <br><br>
    </form>

  </div>
<script>
function createAdd() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("javas").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET","/", true);
  xhttp.send();
}

function validasi(){
    var isi=document.forms["formtambah"]["report"].value;
    var aspek=document.forms["formtambah"]["aspect"].value;
    if (judul==null || judul==""){
      alert("Judul tidak boleh kosong !");
      return false;
    };
    if (judul.length >= 100){
      alert("Judul harus kurang dari 100 karakter");
      return false;
    };
    if ( isi==null || isi==""){
      alert("Isi laporan tidak boleh kosong !");
      return false;
    };
    if (isi.length >= 255){
      alert("Isi laporan harus kurang dari 255 karakter");
      return false;
    };
    if (aspek == "" || aspek == null){
      alert("Aspek Harus dipilih !");
      return false;
    };

    createAdd();
  }
</script>
</body>
</html>
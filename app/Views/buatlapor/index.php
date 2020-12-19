<?php
$session = session();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Laporan</title>
  </head>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?= base_url('css'); ?>/style.css">

  <body>
    <center>
      <h1>SIMPLE LAPOR!</h1>
      <table id="tabel">
        <tr>
          <td>
            <form class="" action="<?= base_url('buatlapor/buatlaporan')?> " method="post" enctype="multipart/form-data">
              <?= csrf_field() ?>
              <p style="width:60%;font-weight: bold;">Buat laporan</p>
              <hr style="background-color: black;">
              <br><br>

              <center>
                <textarea name="lapor" id="laporbaru" rows="20" cols="120" onkeyup="validlapor()" placeholder="Ketik laporan/komentar kamu di sini"></textarea>
              </center>
              <br><br>

              <p>Aspek:</p>
              <div>
                <select class="aspek" name="aspek">
                  <option value="Mahasiswa">Mahasiswa</option>
                  <option value="Dosen">Dosen</option>
                  <option value="Tendik">Tendik</option>
                  <option value="Umum">Umum</option>
                </select>
                <br><br>

                <p>Lampiran:</p>
                <input type="file" name="file_laporan">
                <button type="submit" id="btn">SUBMIT</button>
                <span id="peringatan" style="color:red; font-size:11px";></span>
              </div>
              <hr style="background-color: black;">
            </form>
          </td>
        </tr>
      </table>
    </center>

    <script type="text/javascript">
    var teks = document.getElementById('laporbaru').value;
    var mbol = document.getElementById('btn');

    if(teks.length == 0){
      mbol.disabled = true;
    }

    function validlapor(){
      var tekslapor = document.getElementById('laporbaru').value;
      var spasi=0;

      for(var i = 0 ; i < tekslapor.length ; i++){
        if(tekslapor[i] == " " && tekslapor[i+1] != " "){
          spasi++;
        }
      }
      var tombol = document.getElementById('btn');
      var syarat = document.getElementById('peringatan');

      if(spasi < 20){
        tombol.disabled = true;
        syarat.innerHTML = "jumlah kata harus lebih dari 20!";
      }else{
        tombol.disabled = false;
        syarat.innerHTML = "";
      }
    }
    </script>
  </body>
</html>

<?php
$laporan = [
    'name'  => 'laporan',
    'id'    => 'laporan',
    'value' => null,
    'class' => 'form-control',
];
$aspek = [
    'name'  => 'aspek',
    'id'    => 'aspek',
    'value' => null,
    'class' => 'form-control',
];
$gambar = [
    'name' => 'lampiran',
    'id' => 'lampiran',
    'value' => null,
    'class' => 'form-control',
];
$submit = [
    'name' => 'submit',
    'id' => 'submit',
    'value' => 'Save Changes',
    'class' => 'btn',
    'type' => 'submit',
];
$session = session();
$errors = $session->getFlashdata('errors');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMPLE LAPOR!</title>
  </head>

  <link rel="stylesheet" href="<?= base_url('css'); ?>/style.css">
  <body>
    <center>
      <h1>SIMPLE LAPOR!</h1>
      <input type="text" id="pencarian" onkeyup="carilapor()" placeholder="cari laporan/komentar">
      <br>
      <a href="<?= base_url('buatlapor');?>"><b>+</b> Buat Laporan</a>

      <table id="tabel">
        <tr class="header">
          <th style="width:60%;">Laporan/Komentar terakhir</th>
        </tr>

        <?php foreach ($all as $data) : ?>
          <tr>
            <td>
              <?= $data->laporan ;?>
              <div>
                <p>Lampiran : <?= $data->lampiran ;?></p>
                <a href="<?= base_url('home/detail/'. $data->id)  ;?>">Lihat Selengkapnya</a>
                <p><?= $data->created_date ;?></p>
                <hr style="background-color: black;">
              </div>
            </td>
          </tr>
          <?php endforeach; ?>
      </table>
    </center>

    <script>
        // filter table
        function carilapor() {
            var input, filter, table, tr, td, i, txtValue;

            input = document.getElementById("pencarian");
            filter = input.value.toUpperCase();
            table = document.getElementById("tabel");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }


        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var myObj = JSON.parse(this.responseText);
                let i;
                for (i = myObj.length; i <= 0; i--) {
                    document.getElementById("isi").innerHTML = myObj[0].laporan;
                }
            }
        };
        xmlhttp.open("GET", "http://localhost:8080/laporan/fetch", true);
        xmlhttp.send();
    </script>
  </body>
</html>

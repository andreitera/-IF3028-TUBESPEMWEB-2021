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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?= base_url('css'); ?>/style.css">
<body>
    <p>
        <?php if ($errors != null) : ?>
            <div class="alert">
                <h6 class=" alert-heading">Terjadi Kesalahan</h6>
                <hr>
                <p class="mb-0">
                    <?php
                    foreach ($errors as $err) {
                        echo $err . '<br>';
                    }
                    ?>
                </p>
            </div>
        <?php endif ?>
    </p>

    <center>
      <h1>SIMPLE LAPOR!</h1>
      <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
      <br>
      <button id="myBtn">Lapor</button>

      <table id="myTable">
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

    <!-- modal -->
    <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <?= form_open_multipart('laporan/insertData'); ?>
            <div class="form-group">
                <?= form_label("Judul laporan", "laporan") ?>
                <div class="input-group-append">
                    <?= form_input($laporan) ?>
                </div>
            </div>
            <div class="form-group">
                <?= form_label("aspek", "aspek") ?>
                <div class="input-group-append">
                    <?= form_input($aspek) ?>
                </div>
            </div>
            <label for="lampiran">Lampiran</label>
            <?= form_upload($gambar) ?>
            <!-- </div>
        <div class="modal-footer"> -->
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <?= form_submit($submit) ?>
        </div>
        <?= form_close() ?>
    </div>

    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }


        // filter table
        function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
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

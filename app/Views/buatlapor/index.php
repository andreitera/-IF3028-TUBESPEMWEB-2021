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
    <table id="myTable">
      <tr>
        <td>
          <form class="" action="<?= base_url('buatlapor/buatlaporan')?> " method="post" enctype="multipart/form-data">
            <?= csrf_field() ?>
            <p style="width:60%;font-weight: bold;">Buat laporan</p>
            <hr style="background-color: black;">
            <br><br>
            <center>
            <textarea name="lapor" id="laporbaru" rows="20" cols="120">Laporan/komentar</textarea>
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
            </div>
            <hr style="background-color: black;">
          </form>
        </td>
      </tr>
    </table>
  </center>
</body>
</html>

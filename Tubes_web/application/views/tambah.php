<!DOCTYPE html>
<html>
<head>
  <title>Buat | Lapor.Itera</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/style.css') ?>">
</head>

<body>
  <h1>Simple Laporan </h1>

  <legend>Buat Laporan/Komentar</legend>
  <hr>

  <form action="" method="POST" enctype="multipart/form-data">
    <div class="row">
      <textarea name="isi" placeholder="Laporan/komentar" required></textarea>
    </div>
    <div class="row">
      <select name="aspek" required>
        <option>aspek pelaporan/komentar</option>
        <option value="Infrastuktur">Infrastuktur</option>
        <option value="Administrasi">Administrasi</option>
      </select>
    </div>
    <div class="row">
      <input type="file" name="file" required>
    </div>
    <div class="row">
      <input type="submit" value="Buat Lapor!" name="submit">
    </div>
  </form>
  <br>
  <br>
  <hr>
</body>
</html>

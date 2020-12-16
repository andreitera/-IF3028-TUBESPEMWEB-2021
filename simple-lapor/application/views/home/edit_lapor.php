<?php //$aspek = array('Dosen', 'Staff', 'Mahasiswa', 'Infrastruktur', 'Pengajaran'); 
?>
<?php //var_dump($result) 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="<?= base_url('assets/css/edit_lapor.css') ?>">
  <title>Edit Lapor</title>
</head>

<body>
  <div class="container">
    <div class="content">

      <div class="heading-icon">
        <img src=<?= base_url('assets/img/logoitera.png') ?> alt="ini foto.png">
        <h1>LAPOR ITERA!</h1>
      </div>

      <div class="head">
        Buat Laporan/Komentar
      </div>

      <hr>

      <form method="post" action="#" enctype="multipart/form-data">


        <div class="main">
          <input type="text" placeholder="Judul Laporan/Komentar" name="comm_title" value="<?= $result['comm_title'] ?>">
          <br>
          <textarea name="comment" placeholder="Laporan/Komentar"><?= $result['comm'] ?></textarea>
        </div>

        <br>

        <div class=" aspect">
          <select name="aspect">
            <option default>Pilih Aspek Pelaporan/Komentar</option>
            <?php foreach ($aspek as $a) : ?>
              <?php if ($result['aspek'] == $a) : ?>
                <option value="<?= $a ?>" selected><?= $a ?></option>

              <?php else : ?>
                <option value="<?= $a ?>"><?= $a ?></option>
              <?php endif; ?>
            <?php endforeach; ?>
          </select>
        </div>

        <br>

        <div class="file">
          <input class="file_in" type="file" name="lampiran" value="C:/xampp/htdocs/PABW/IF3111-1920/lapor-app/assets/doc/ <?= $result['lampiran'] ?>">
        </div>

        <br>

        <div class="btn_submit">
          <button type="submit" name="edit">Edit LAPOR!</button>
        </div>
      </form>

      <br>

      <br>

      <hr>
    </div>
  </div>
</body>

</html>
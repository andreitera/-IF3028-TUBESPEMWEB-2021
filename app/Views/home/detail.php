<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Laporan</title>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?= base_url('css'); ?>/style.css">
<link rel="stylesheet" href="<?= base_url('css'); ?>/styledetail.css">

<body>
  <center>
    <h1>SIMPLE LAPOR!</h1>
    <table id="myTable">
      <tr>
        <td>
          <p style="width:60%;font-weight: bold;">Detail laporan</p>
          <hr style="background-color: black;">
          <br><br>
          <?= $all->laporan ;?>
          <br><br>
          <div>
            <p style="font-weight: bold;">Aspek:</p>
            <p> <?= $all->aspek_pelapor;?></p>
            <p style="font-weight: bold;">Lampiran: </p>
            <img src="<?= base_url('lampiran/'. $all->lampiran)?>" alt="">
            <p style="font-weight: bold;">Waktu :</p>
            <p><?= $all->created_date ;?></p>
            <a href="<?= base_url('laporan/deleteData/' . $all->id); ?>">Hapus laporan</a>
          </div>
          <hr style="background-color: black;">
        </td>
      </tr>
    </table>
  </center>
</body>
</html>

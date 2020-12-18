<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Laporan</title>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?= base_url('css'); ?>/style.css">
<body>
  <center>
    <h1>SIMPLE LAPOR!</h1>
    <table id="myTable2">
      <tr>
        <td>
          <p style="width:60%;font-weight: bold;">Detail laporan</p>
          <hr style="background-color: black;">
          <br><br>
          <?= $all->laporan ;?>
          <br><br>  
          <div>
            <p>Lampiran:</p>
            <img src="<?= base_url('lampiran/'. $all->lampiran)?>" alt="">
            <p>Waktu : <?= $all->created_date ;?></p>
            <a href="<?= base_url('laporan/deleteData/' . $all->id); ?>">hapus Laporan</a>
          </div>
        </td>
      </tr>
    </table>
  </center>
</body>
</html>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sistem Lapor!</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/tampilanHome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>
<body>
    
    <a href="<?php echo base_url('home')?>"></a>
    <h1>SIMPLE LAPOR!</h1>

    <form action="#" method="POST">
        <input type="text" name="cari">
        <button type="submit" name="submit"><i class="fa fa-search"> CARI</i></button>
      </form>
      <p align="center">
      <a href="<?php echo base_url('Home/lapor') ?>">Buat Laporan/Komentar
        <i class="fa fa-plus-square"></i></p></a>

      <label style="text-align: left !important;">Laporan/Komentar Terakhir</label>
  <hr>
      
          <?php foreach ($lapor as $l )  :?>
            <?php $id = $l['id']; ?>
          <p align="left"> <i class="fa fa-user-circle"></i> Nama: <?= $l['nama'] ?> &nbsp &nbsp
          <i class="fa fa-pencil"></i> Judul: <?= $l['judul'] ?></p>
            
          
          <p align="justify">
            <?php echo substr($l['laporan'], 0, 250); 
            echo " ..."?></p>
          
            <p align="left">
            <i class="fa fa-folder"></i>
              <?php
                echo 'Lampiran: '; 
                echo  $l['file']; 
                ?>


              
                <span>
                <i class="fa fa-calendar"></i>
                Waktu:
                <?= 
                $l['waktu'];
                ?>

                || 
                
                <?php
                echo "<tr>
                <a href='detail?detail_id=$id'>Selengkapnya&nbsp</a>
                </tr>";?>
                <i class="fa fa-arrow-right"></i></span>
              </p>

        
        <hr>
        
        <?php endforeach; ?>  
</body>
</html>
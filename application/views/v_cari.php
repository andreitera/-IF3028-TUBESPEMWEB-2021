<!doctype html> 
 <html lang="en">
    <head> 
        <meta charset="utf-8">
        <title><?php echo $judul; ?> </title>
        <link rel="stylesheet" type="text/css" href="<?= base_url('asset/css/pencari.css');?>">
        <script src="assets/js/validasi.js"></script>
    </head>
 <body> 
<h1>SIMPLE LAPOR!</h1>
<br>
 <div class="lapor">


    <form class="form_div" onSubmit="return pencarian(this)"  action="<?php echo base_url('cari')?>" method="post">

        <input class="search_bar" type="text" name="keyword" placeholder="search" autocomplete="off" autofocus>	
        <input class="search_btn" type="submit" name="submit"  placeholder="cari" value="Cari">	 
    </form>

    <a class="komentar" href="<?php base_url(); ?>buat">Buat Laporan / Komentar</a>
    <br>
    <p>Hasil Pencarian</p>
    <hr>
    <?php  
    if($cari != null){
    ?>
    <?php foreach ($cari as $u )  :?>
            <?php $id = $u['id']; ?>
            <?php $now = date("Y-m-d H:i"); ?>
            
          <div class="arsip"> 
          <p><?php echo substr($u['isi'], 0, 450); ?></p>
          </div><br>
              <?php
                echo "<tr>
                
                <a class='link' href='detail?detail_id=$id'>Lihat Selengkapnya </a>
              
                
                </tr>";
              
              ?>

              <div class="right">
                <?php 
                $date = new DateTime($u['waktu']);
                echo 'Waktu : ';
                echo $date->format('d-m-Y H:i'); // 21-01-2017 05:13:03
                ?>
              </div> 

              <div class="lampir">
                <?php
                echo 'Lampiran:'; 
                echo  $u['lampiran']; 
                ?>
              </div>

        <br>
        <hr>
        <br>
        <?php endforeach; 
        
 }else{ ?>

        <div class="data"> 
        <p> Data Tidak di temukan </p>
        </div><br>

 <?php } ?>


    <br>
        <img src="asset/icon/menu.png" class="more_pic" alt="TITIK3">
    <br>
        <img src="asset/icon/menu.png" class="more_pic" alt="TITIK3">
     
  </div>
  
</body>
</html>
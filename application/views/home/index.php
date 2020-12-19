<!DOCTYPE html>
 <html lang="en">
    <head> 
       <meta charset="utf-8">
       <title><?php echo $judul; ?> </title>
       
     <link rel="stylesheet" type="text/css" href="assets/css/style.css?v=1.1">
     <script src="assets/js/validasi.js"></script>
     
    </head>
 <body> 
<p class="judul">LAPORIN</p>
 <div class="lapor">


    <form class="pencarian" onSubmit="return pencarian(this)" action="<?php echo base_url('cari')?>" method="post">

        <input class="search" type="text" name="keyword" placeholder="Search" autocomplete="off" autofocus>	
        <input class="button cari" type="submit" name="submit" value="Cari">		 
       
    </form>

    <a class="buat" href="<?php base_url(); ?>add">Buat Laporan / Komentar &nbsp<img src="assets/icon/tambah.png" height="13px"></a>
    <p class="subjudul">Laporan/Komentar Terakhir</p>
    <hr>
    <br>
    <br>
    <?php foreach ($home as $key )  :?>
            <?php $id = $key['id']; ?>
            <?php $now = date("Y-m-d H:i"); ?>
            
          <div class="arsip"> 
          <p><?php echo substr($key['laporan'], 0, 450); ?></p>
          </div><br>
              <?php
                echo "<tr>
                
                <a class='more' href='detail?detail_id=$id'>Lihat Selengkapnya  &nbsp<img src='assets/icon/more.png' height=13px></a>		
              
                
                </tr>";
              
              ?>

              <div class="waktu">
                <?php 
                $date = new DateTime($key['waktu']);
                echo 'Waktu : ';
                echo $date->format('d-m-Y H:i'); // 12-12-2020 05:13:03
                ?>
              </div> 

              <div class="lampir">
                <?php
                echo 'Lampiran:'; 
                echo  $key['lampiran']; 
                ?>
              </div>

        <br>
        <hr>
        <br>
        <?php endforeach; ?>
        <img class="gambar" src="<?php echo base_url(); ?>assets/icon/menu.png">
        <img class="gambar" src="<?php echo base_url(); ?>assets/icon/menu.png">
        <br>
     
  </div>
  
</body>
</html>







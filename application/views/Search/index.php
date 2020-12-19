
<!doctype html> 
 
 <html lang="en">
    <head> 
       <meta charset="utf-8">
       <title><?php echo $judul; ?> </title>


       
     <link rel="stylesheet" type="text/css" href="assets/css/style.css?v=1.1">
     <script src="assets/js/validasi.js"></script>
     
    </head>
 <body> 
<p class="title">SIMPLE LAPOR!</p>
 <div class="laporarea">


    <form class="formsearch" onSubmit="return pencarian(this)"  action="<?php echo base_url('Search')?>" method="post">

        <input class="search" type="text" name="keyword" placeholder="search" autocomplete="off" autofocus>	
        <input class="button cari" type="submit" name="submit"  placeholder="cari" value="Cari">	 
    </form>

    <a class="linkcreate" href="<?php base_url(); ?>Create">Buat Laporan / Komentar &nbsp<img src="<?php echo base_url(); ?>assets/icon/add.png" height="15px"></a>
    <p class="subtitle">Hasil Pencarian</p>
    <hr>
    <br>
    <br>
    <?php  
    if($cari != null){
    ?>
    <?php foreach ($cari as $hm )  :?>
            <?php $id = $hm['id_lapor']; ?>
            <?php $now = date("Y-m-d H:i"); ?>
            
          <div class="arsip"> 
          <p><?php echo substr($hm['laporan'], 0, 450); ?></p>
          </div><br>
              <?php
                echo "<tr>
                
                <a class='more' href='detail?detail_id=$id'>Lihat Selengkapnya</a>		
              
                
                </tr>";
              
              ?>

              <div class="waktu">
                <?php 
                $date = new DateTime($hm['waktu']);
                echo 'Waktu : ';
                echo $date->format('d-m-Y H:i'); // 21-01-2017 05:13:03
                ?>
              </div> 

              <div class="lampir">
                <?php
                echo 'Lampiran:'; 
                echo  $hm['lampiran']; 
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


        <img class="gambar" src="<?php echo base_url(); ?>assets/icon/titik.png">
        <img class="gambar" src="<?php echo base_url(); ?>assets/icon/titik.png">
        <br>
     
  </div>
  
</body>
</html>







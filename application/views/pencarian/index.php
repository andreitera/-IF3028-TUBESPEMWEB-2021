
<!doctype html> 
 
 <html lang="en">
    <head> 
       <meta charset="utf-8">
       <title><?php echo $judul; ?> </title>
       
     <link rel="stylesheet" type="text/css" href="assets/css/style.css?v=1.1">
     <script src="assets/js/validasi.js"></script>
     
    </head>
 <body> 
<p class="judul">SIMPLE LAPOR!</p>
 <div class="lapor">


    <form class="pencarian" onSubmit="return pencarian(this)"  action="<?php echo base_url('cari')?>" method="post">

        <input class="search" type="text" name="keyword" placeholder="search" autocomplete="off" autofocus>	
        <input class="button cari" type="submit" name="submit"  placeholder="cari" value="Cari">	 
    </form>

    <a class="buat" href="<?php base_url(); ?>buat">Buat Laporan / Komentar &nbsp<img src="<?php echo base_url(); ?>assets/icon/tambah.png" height="15px"></a>
    <p class="subjudul">Hasil Pencarian</p>
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
                echo $date->format('d-m-Y H:i');
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


        <img class="gambar" src="<?php echo base_url(); ?>assets/icon/menu.png">
        <img class="gambar" src="<?php echo base_url(); ?>assets/icon/menu.png">
        <br>
     
  </div>
  
</body>
</html>







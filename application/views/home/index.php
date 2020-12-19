<!DOCTYPE html>
 <html lang="en">
    <head> 
       <meta charset="utf-8">
       <title><?php echo $judul; ?> </title>
       
     <link rel="stylesheet" type="text/css" href="assets/css/style.css?v=1.1">
     <script src="assets/js/validasi.js"></script>
     
    </head>
 <body background="<?php base_url(); ?>assets/images/awn.jpg"> 
<p class="judul">LAPORIN</p>
 <div class="lapor">


    <form class="pencarian" onSubmit="return pencarian(this)" action="<?php echo base_url('cari')?>" method="post">

        <input class="search" type="text" name="keyword" placeholder="search" autocomplete="off" autofocus>	
       
        <input class="button" type="submit" name="submit"  placeholder="cari" value="Cari">	 
       
    </form>

    <a class="buat" href="<?php base_url(); ?>add">Buat Laporan / Komentar &nbsp<img src="assets/icon/tambah.png" height="13px"></a>
    <p class="subjudul">Laporan/Komentar Terakhir</p>
    <hr>
    <br>
    <br>
      
        <br>
        <hr>
        <br>
        <img class="gambar" src="<?php echo base_url(); ?>assets/icon/menu.png">
        <img class="gambar" src="<?php echo base_url(); ?>assets/icon/menu.png">
        <br>
     
  </div>
  
</body>
</html>







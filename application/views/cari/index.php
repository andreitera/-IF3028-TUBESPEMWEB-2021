<!DOCTYPE html> 
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
  
        <img class="gambar" src="<?php echo base_url(); ?>assets/icon/menu.png">
        <img class="gambar" src="<?php echo base_url(); ?>assets/icon/menu.png">
        <br>
     
  </div>
  
</body>
</html>







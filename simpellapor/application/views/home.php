<center><h1>SIMPLE LAPOR!</h1></center>
<div class="login">
 <div class="lapor">
    <form class="pencarian" onSubmit="return pencarian(this)" action="<?php echo base_url('cari')?>" method="post">
        <input class="search" type="text" name="keyword" placeholder="search" autocomplete="off" autofocus>	
       
        <input class="buttoncari" type="submit" name="submit"  placeholder="cari" value="Cari">	 

    </form>

   
    <a class="buat" href="<?php echo site_url('lapor/buat_lapor'); ?>">Buat Laporan / Komentar &nbsp<img src="<?php echo base_url().'assets/img/tambah.png'?>" height="13px"></a>
        <br><hr>
        
            <p class="subjudul">Laporan/Komentar Terakhir</p>
    <hr>
    <br><br>     
         	<?php foreach ($lapor as $hm )  :?>
            <?php $id = $hm->id; ?>
            <?php $now = date("Y-m-d H:i"); ?>
          <div class="arsip"> 
          	<p><?php echo substr($hm->laporan, 0, 450); ?></p>
       </div><br>
      <tr>
          <a class='more' href='<?php echo base_url() ?>index.php/lapor/detail/<?php echo $id?>'>Lihat Selengkapnya  &nbsp<img src="<?php echo base_url() ?>assets/img/more.png" height=13px></a>
          </tr>
     <div class="waktu">
       <?php 
          $date = new DateTime($hm->waktu);
          	echo 'Waktu : ';
            echo $date->format('d-m-Y H:i'); // 21-01-2017 05:13:03
          	?>
        </div> 
  <div class="lampir">
      <?php
            echo 'Lampiran : '; 
            echo  $hm->lampiran; 
            ?>
 </div>
        <br><hr><br>
        <?php endforeach; ?>
        <br>
      
 </div>
 </div>
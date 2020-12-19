<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('tampilan/css/style.css'); ?>">
<link rel="shortcut icon" href="tampilan/gambar/download.jpg">   
    <title>Document</title>
</head>
<body>
<div class="header">
	<h1>LAPOR!</h1>
</div>
<div class="navbar">
	<ul>
		 <li><a class="active" href="<?php echo base_url().'';?>">Beranda</a></li>
		 <li><a href="<?php echo base_url().'create'; ?>">Buat Laporan/Komentar</a></li>
	</ul>
</div>	
<div id="box">
<h1 align="center">DETAIL</h1>


	

		<hr>
		<p><?php echo $laporan_item['komentar'];?></p>
		<!-- <script type="text/javascript"> -->
		<!-- function image(img) { -->
  		  <!-- var src = img.src; -->
   			 <!-- window.open(src); -->
			<!-- } -->

			
		<?php echo '<img src="data:image/;base64,'.base64_encode( $laporan_item['lampiran'] ).'"/>' ?><br>
			<span>Aspek : <?php echo $laporan_item['aspek_pelaporan']; ?> </span><br>	
			<span>Dibuat pada : <?php echo $laporan_item['tanggal']; ?> </span><br>
			
			<?php $id = $laporan_item['no']; ?>

			<a  href="<?php echo base_url().'hapus/'.$id;?>">Hapus/delete x</a>
			<a  href="<?php echo base_url().'update/'.$id;?>"></a>

			

</script>

</div>
					

</div>

</body>
</html>
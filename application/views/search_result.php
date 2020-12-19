<!DOCTYPE html>
<html>
<head>
	<title>LAPOR!</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('tampilan/css/style.css'); ?>">
	<link rel="shortcut icon" href="tampilan/gambar/download.jpg">
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
<h2 align="center">Hasil Pencarian</h2>
<hr>

<?php foreach ($result as $post) : ?>

    <?php if(strlen($post['komentar']) <= 400){ ?>
        <?php echo $post['komentar'] ; ?>

 <?php   }else{ ?>
        <?php echo substr ($post['komentar'], 0, 400). '..'; ?>
        <?php  }?><br>

    Waktu : <?php echo $post['tanggal'] ;?>
    <a href="<?php echo base_url().'detail/'.$post['no']; ?>"> Lihat Selengkapnya ></a>></p>

 <?php endforeach; ?>
 
</body>
</html>
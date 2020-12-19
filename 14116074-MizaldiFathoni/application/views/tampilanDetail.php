<!DOCTYPE html>
<html>
<head>
	<title>Detail Laporan</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/tampilanDetail.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

	<script type='text/javascript' src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>

</head>
<body>
	
	<h1>SIMPLE LAPOR!</h1>

	<label>Detail Laporan/Komentar</label>
	<hr>
 		<?php foreach ($detail as $d )  :?>
		<p align="left"> <i class="fa fa-user-circle"></i> Nama: <?= $d['nama'] ?> &nbsp &nbsp
      	  <i class="fa fa-pencil"></i> Judul: <?= $d['judul'] ?></p>
   	    	<?php $id = $d['id']; ?>
        		<p><?= $d['laporan']; ?> </p>
    				<?php endforeach; ?>
						<br>
		</p>
		
		<p align="left"> Lampiran: <?= $d['file']?><br><br>
		<img src="<?php echo base_url(); ?>assets/image/image.png" width="250" height="250">

		<br><br><br>
		Waktu: <?= $d['waktu']; ?> &nbsp &nbsp
		Aspek: <?= $d['aspek']; ?>

		<span><i class="fa fa-close"></i><?php
                echo "
                <a href= javascript:confirmDelete('delete?hapus_id=$id')> Hapus Laporan/Komentar &nbsp</a>
               	
               	<a href='ubah?ubah_id=$id'> || Ubah Laporan/Komentar
               	";

               	?><i class="fa fa-edit"></i></a>
                
		</span></p>
		<hr>
	
		
</body>
</html>
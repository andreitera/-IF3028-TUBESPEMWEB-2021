<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Live Data Search in Codeigniter using Ajax JQuery</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<style>
        </style>
        </head>
<body>
<h2 align="center">SIMPLE LAPORAN</h2><br />
<div style="margin-left: 50px; margin-right:50px;">
Detail Laporan/komentar
<hr />
<?php foreach($laporan as $data){ ?>
JUDUL : 
<?php echo $data->judul; ?>
<br>
LAPORAN :
<?php echo $data->laporan; ?>
<br>
LAMPIRAN : 
<?php echo $data->cover_img;  ?>
<br>
<embed src="<?php echo base_url('upload/') .$data->cover_img;?>" alt="" width="300px" height="200px"  >
<br>
<br>
ASPEK :
<?php echo $data->aspek; ?>
<?php echo "   "; ?>
WAKTU :
<?php echo $data->created_at ; ?>
<?php echo "   "; ?>
<div style="float: right; width: 400px;">
<?php echo anchor('Ajaxsearch/update/'.$data->id,'Update Laporan/komentar', ['class' => '']); ?>
<?php echo "   "; ?>
<?php echo anchor('Ajaxsearch/hapus/'.$data->id, 'Hapus Laporan/komentar', ['class' => 'redDelete']); ?>
</div>
<?php } ?>
<hr />
</div>
</body>
</html>

    
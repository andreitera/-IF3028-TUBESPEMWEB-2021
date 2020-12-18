<!DOCTYPE html>
<html>
<head>
	<title>Simple Lapor</title>
	<link rel="stylesheet" type="text/css" href="./assets/css/gaya.css">
	<link rel="stylesheet" href="<?= base_url('/assets/css/style.css');?>">
</head>
<body>

    <!--ini header-->
		<?php if ($this->session->userdata('username')=='admin' || $this->session->userdata('username')=='user'): ?>
			<div id="header">
				<img src="./assets/image/a.jpg">
				<div class="tengah">Simple Lapor</div>
				<h2 class="tombol">Selamat datang <?= $this->session->userdata('username');?> </h2>
			</div>
			<?php else: ?>
				<div id="header">
					<img src="./assets/image/a.jpg">
					<div class="tengah">Simple Lapor</div>
					<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="tombol" >Ada yang ingin dilaporkan?</button>
				</div>
		<?php endif; ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LAPOR!</title>
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <script src="<?php echo base_url(); ?>js/script.js"></script>
    <script defer src="<?php echo base_url()?>js/validation.js"></script>
</head>
<body>
<header id="home">
	<div class="container">
		<div id="lapor-menu">
				<div class="bar1"></div>
				<div class="bar2"></div>
				<div class="bar3"></div>
		</div>
		<nav id="nav-show" class="d-flex align-items-center justify-content-lg-between">
			<a class="navbar-brand" href="<?php echo base_url().'home'; ?>">
					<img class="img-fluid" src="images/logo3.png" alt="">
			</a>
			<ul class="nav-list text-center p-0">
					<li class="nav-item">
							<a class="nav-link" href="<?php echo base_url().'home#home'; ?>">Beranda</a>
					</li>
					<li class="nav-item">
							<a class="nav-link" href="<?php echo base_url().'home#about' ?>">Tentang</a>
					</li>
					<li class="nav-item">
							<a class="nav-link" href="<?php echo base_url().'home#laporan' ?>">Laporan</a>
					</li>
					<li class="nav-item">
							<a class="nav-link" href="<?php echo base_url().'home#footer' ?>">Our Team</a>
					</li>
			</ul>
		</nav>
		<div class="hero-text w-100 text-white px-2 px-sm-0">
			<h1 class="display-4">Layanan Aspirasi dan Pengaduan Mahasiswa</h1>
			<p class="lead mb-4">Sampaikan laporan Anda langsung kepada instansi di Institut Teknologi Sumatera</p>
			<a class="btn px-5 mr-2" href="<?php echo base_url().'add#buat-lapor'; ?>">Buat Laporan</a>
			<a class="btn px-5 ml-2" id="cari-lapor" href="<?php echo base_url().'home#laporan-akhir'; ?>">Cari Aduan</a>
		</div>
	</div>
</header>

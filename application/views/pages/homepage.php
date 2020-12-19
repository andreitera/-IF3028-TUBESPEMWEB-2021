<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url('assets/css/homepage.css') ?>" />

	<title>LAPOR! - Layanan Aspirasi dan Pengaduan Online Rakyat</title>
</head>

<body>

	<fieldset>
		<header>
			<div class="container">
				<center>
					<h1><a href="<?php echo base_url() ?>" style="color: white; text-decoration: none;">Layanan Aspirasi
							dan Pengaduan Online Mahasiswa ITERA <br>
							Sampaikan laporan Anda langsung kepada instansi Kampus ITERA</a></h1>
					<hr style="width: 80px;">
				</center>
			</div>
		</header>

		<section id="searchlaporan">
			<div class="container">
				<form action="search" method="POST">
					<input name="keyword" type="text" placeholder="Cari" />
					<button type="submit" class="button-1">Cari</button>
				</form>
			</div>
		</section>

		<section id="buatlaporan">
			<div class="container">
				<center>
					<a href="<?php echo base_url() . 'control/report' ?>">Buat Laporan/Komentar</a> <span style="font-style:bold; padding: 0px 2px;background-color: #006faa ; color:#fff;">+</span>
					<i class="fa fa-plus-circle" aria-hidden="true"></i>
				</center>
			</div>
		</section>

		<section id="laporan/komentarterakhir">
			<div class="container">
				<h3>Laporan/Komentar Terakhir</h3>
			</div>
		</section>

		<section id="boxes">
			<div class="container">
				<hr />
				<div class="box-v">

					<?php

					foreach ($laporan as $data) {
						$link = base_url('control/lihat/' . $data->id);

						echo "<p>" . $data->laporan . "</p>",
							"<div class='box-h'>",
							"<div class='lampiran'>",
							"<p>Lampiran : " . $data->lampiran . "</p>",
							"</div>",
							"</div>";

						echo "<div class='box-h'>",
							"<div class='waktu'>",
							"<p>Waktu :" . $data->waktu . "</p>",
							"</div>",
							"</div>";

						echo "<div class='box-h'>",
							"<div class='lihat'>",
							"<p><a href=" . $link . ">Lihat Selengkapnya></a></p>",
							"</div>",
							"</div>";

						echo "<br>",
							"<br>",
							"<br>",
							"<hr>";
					}
					?>

					<br>

				</div>
			</div>
		</section>
	</fieldset>
</body>

</html>
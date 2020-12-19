<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url('assets/css/view_detail.css') ?>" />

	<title>Tampilan Detail</title>
</head>

<body>
	<fieldset>
		<header>
			<div class="container">
				<center>
					<h1><a href="<?php echo base_url() ?>" style="color: white; text-decoration: none;">Layanan Aspirasi
							dan Pengaduan Online Rakyat <br>
							Sampaikan laporan Anda langsung kepada instansi pemerintah berwenang</a></h1>
					<hr style="width: 80px;">
				</center>
			</div>
		</header>

		<div class="container">
			<h3>Detail Laporan/Komentar</h3>
			<hr>
		</div>

		<div class="container">
			<?php

			echo form_open("control/lihat/" . $laporan->id);
			echo "<p>" . $laporan->laporan . "</p>";

			echo "<h4>Lampiran</h4>";
			if ($laporan->tipe_file == 'imege/jpg' || $laporan->tipe_file == 'image/png'  || $laporan->tipe_file == 'image/jpeg') {
				echo "<img src='" . base_url("lampiran/" . $laporan->lampiran) . "' width='500' height='500'>";
			} else {
				echo "<img src='" . base_url("lampiran/" . "icon-dokumen.PNG") . "' width='500' height='500'>";
			}
			?>
		</div>

		<section id="boxes">
			<div class="container">
				<?php

				echo form_open("control/lihat/" . $laporan->id);
				$link = base_url('control/hapus/' . $laporan->id);
				$link1 = base_url('control/lihat2/' . $laporan->id);

				echo "<div class='box-h'>",
					"<div class='waktu'>",
					"<p>Waktu :" . $laporan->waktu . "</p>",
					"</div>",
					"</div>";

				echo "<div class='box-h'>",
					"<div class='aspek'>",
					"<p>Aspek : " . $laporan->aspek . "</p>",
					"</div>",
					"</div>";

				echo "<div class='box-h'>",
					"<div class='lihat'>",
					"<p><a href=" . $link1 . ">Ubah</a></p>",
					"</div>",
					"</div>";

				echo "<div class='box-h'>",
					"<div class='lihat'>",
					"<p><a href=" . $link . ">Hapus</a></p>",
					"</div>",
					"</div>";
				?>
				<hr><br>
			</div>
		</section>
	</fieldset>
</body>

</html>
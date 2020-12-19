<main>
	<section class="about" id="about">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-6 text-center text-md-left">
					<div class="section-heading">
						<h3>Tentang</h3>
						<h1 class="display-4">Lapor!</h1>
					</div>
					<p> Pengelola pengaduan publik di setiap Program Studi di itera, laporkan kasus kasus seperti pengajar, sarana, pra-sarana yang terurus dan terintegrasi dengan adanya pengaduan oleh masyarakat ITERA akan terciptanya lingungkan kampus yang terkoordinir dengan baik.</p>
					<a class="btn mt-4 mb-5" href="#">Baca Selengkapya</a>
				</div>
				<div class="col-12 col-md-6">
					<img class="img-fluid" src="<?php echo base_url() . 'images/about-img2-01.png' ?>" alt="">
				</div>
			</div>
		</div>
	</section>
	<section class="laporan" id="laporan">
		<div class="container">
			<div class="row text-center text-white">
				<div class="laporan-info">
					<h1>JUMLAH LAPORAN SEKARANG</h1>
					<h1 class="big-text"><?php echo count($posts) ?></h1>
				</div>
			</div>
		</div>
	</section>

	<section class="about" id="laporan-akhir">
		<form class="searchbar" action="<?php echo base_url('laporan/search') ?>" method="GET">
			<input type="search" name="keyword" id="search" placeholder="Kata kunci atau tracking ID...">
			<input type="submit" class="hidden">
		</form>
		<h1 class="text-cari display-4">CARI ADUAN</h1>
		<div class="container">
			<div class="row">
				<div class="text-center text-md-left">
					<div class="section-heading">
						<h3>Laporan/Komentar terakhir</h3>
						<br>	
						<hr>
						<?php $sort = array_reverse((array) $posts) ?>
						<?php foreach ($sort as $post) : ?>
							<?php if (strlen($post['isi']) <= 400) { ?>
								<p class="isi"><?php echo $post['isi']; ?></p>
							<?php } else { ?>
								<p class="isi"><?php echo substr($post['isi'], 0, 400) . '...'; ?></p>
							<?php } ?>
							<p class="waktu">Waktu: <?php echo $post['waktu']; ?></p>
							<a class="btn mt-4 mb-5" href="<?php echo base_url() . 'laporan/view/' . $post['id']; ?>">Baca Selengkapya</a>
							<hr>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<script src="<?php echo base_url(); ?>js/script3.js"></script>

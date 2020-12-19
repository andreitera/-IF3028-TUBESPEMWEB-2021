<!-- Header -->
<br><br>
	<header>
		<h1 class="judul">SIMPLE LAPOR!</h1>
	</header>

	<!-- Pencarian -->
	<br>
	<div class="search">
	<input type="text" class="searchTerm">
	<button type="submitSearch" class="searchButton">
		<i class="fa fa-search">  Cari  </i>
	</button>
	</div>
	<!-- Akhir Pencarian -->

	<form>
		<a href="posts/create" class="next">Buat Laporan/Komentar <i class="fa fa-plus"></i></a>
	</form>
	<!-- Akhir Header -->
	
	<div class="wrap">
		<div class="konten">
			<h1>Laporan/Komentar Terakhir</h1> 
			<hr>
		</div>
	</div>

	<?php foreach($posts as $post) : ?>
	<!-- Isi -->
	<div class="wrap"> 
		<div class="konten">
			<h1> Laporan Tentang <?php echo $post['kategori']; ?></h1>
			<hr>
			<p>
				<?php echo word_limiter($post['deskripsi'], 60); ?>
			</p>
			<p>
				Lampiran : <?php echo $post['lampiran']; ?>
			</p>
			<form>
				<label>Waktu: <?php echo $post['waktu']; ?></label>		
				<a href="posts/<?php echo $post['id']; ?>" class="next">Selengkapnya →</a>
			</form>
		</div>
	</div>
	<!-- Akhir Isi -->
	<?php endforeach; ?>
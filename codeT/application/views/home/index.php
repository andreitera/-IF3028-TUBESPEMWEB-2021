<fieldset>
	<div class="judul">
		<br><br>
		<div class="wrapper">
			<h1> SIMPLE LAPOR </h1>
		</div>
	</div>
	<br>
	</div>

	<form name="formHome" action="" method="post">
		<div class="search">
			<br><br>
			<input type="text" name="keyword" id="keyword" placeholder="Telusuri Lapor/Aspek">
			<button type="submit" value="Cari" id="tombol-cari">Search</button>
	</form>
	</div>

	<?php if ($this->session->flashdata('flash')) : ?>
		<div>Data <strong>berhasil</strong> ditambahkan!<?= $this->session->flashdata('flash'); ?>
		</div>
	<?php endif; ?>

	<div class="buat" id="buat">
		<a href="<?= base_url('auth') ?>"> +Input Laporan/Komentar </a>
	</div>
	<br><br>
	<hr>
	<div class="tulisan">
		<p>Laporan/Komentar</p>
		<hr />
	</div>
	<div id="container">
		<div class="tulisan2">
			<div class="newshead">
				<ul class="detail">
					<hr><br>
					<?php foreach ($lapor as $dt) : ?>
						<?php $limitedKata = $this->Data_model->limitKata($dt['lapor'], 5);?>
						<?= $limitedKata . ' '; ?>
						<br>
						<?= $dt['aspek'] . ' '; ?> <br>
						<table>
							<tr>
								<td><?= $dt['gambar'] . ' '; ?></td>
								<td id="waktu">
									<p>
										<small style="margin-right: -40px;"><?= $dt['waktu'] . ' '; ?></small>
										<a href="<?= base_url() ?>data/detail/<?= $dt['id']; ?>" style="text-decoration:none"><small>| Lihat Selengkapnya > </small></a></p>
								</td>
							</tr>
						</table>
						<hr />
					<?php endforeach ?>
				</ul>
			</div>
		</div>
	</div>
</fieldset>
<script src="<?= base_url(); ?>asset/js/ajax.js"></script>

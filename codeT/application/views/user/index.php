<fieldset>
	<div class="judul">
		<br>
		<br>
		<div class="wrapper">
			<h1> SIMPLE LAPOR </h1>
		</div>
		<br>
	</div>

	<form name="formHome" action="" method="post">
		<div class="search">
			<br>
			<br>
			<input type="text" name="keyword" id="keyword" placeholder="Telusuri Lapor/Aspek">
			<button type="submit" value="Cari">Search</button>
			<a href="<?= base_url('home') ?>" id="log_login">Logout</a>
	</form>
	</div>

	<?php if ($this->session->flashdata('flash')) : ?>
		<div>Data <strong>berhasil</strong> ditambahkan!<?= $this->session->flashdata('flash'); ?>
		</div>
	<?php endif; ?>
	<div class="buat">
		<a href="<?= base_url('data/tambah') ?>"> Buat Laporan</a>
		<hr />
	</div>

	<div class="tulisan">
		<p>Laporan/Komentar dari <?= $user['username'] ?></p>
		<hr />
	</div>

	<div class="tulisan2">
		<div class="newshead">
			<ul class="detail">
				<?php foreach ($lapor as $dt) : ?>
					<?php
					if ($dt['username'] == $user['username']) :
					?>
						<?php
						$limitedKata = $this->Data_model->limitKata($dt['lapor'], 5);
						?>
						<?= $limitedKata . ' '; ?>
						<br>
						<?= $dt['aspek'] . ' '; ?> <br>
						<table>
							<tr>
								<td><?= $dt['gambar'] . ' '; ?></td>
								<td id="waktu">
									<p>
										<small style="margin-right: -40px;"><?= $dt['waktu'] . ' '; ?></small>
										<a href="<?= base_url() ?>data/detailDalam/<?= $dt['id']; ?>" style="text-decoration:none"><small>| Lihat Selengkapnya > </small></a></p>
								</td>
							</tr>
						</table>
						<hr />
					<?php endif ?>
				<?php endforeach ?>
			</ul>
		</div>
	</div>
</fieldset>

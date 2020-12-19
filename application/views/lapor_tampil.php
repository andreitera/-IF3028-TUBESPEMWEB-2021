<title><?=$header?></title>

<style type="text/css">
	.data{
		border-collapse: collapse;
	}

	.data th, td{
		padding: 5px;
	}

	.latu{
		display: flex;
		justify-content: space-between;
	}
</style>

<h1 style="text-align: center;">SIMPLE LAPOR!</h1>
<br>

<form style="text-align: center;" action="Utama.php" method="get">
	<input type="text" name="cari">
	<input type="submit" value="Cari">
</form>

<p style="text-align: center;">Buat Laporan/Komentar</p>

<p>Laporan/Komentar Terakhir</p>
<hr>

	<?php
		foreach ($utama as $u => $row) { ?>
			<tr>
				<div class="isi">
					<p>
						<?=$row->isi;?>
					</p>
					<br>
				</div>

				<div class="latu">
					<p>
						Lampiran :
						<?=$row->lampiran;?>
					</p>

					<div class="latu" style="width: 270px;">
						<p>
							Waktu :
							<?=$row->waktu;?>
						</p>

						<p>Lihat selengkapnya</p>
					</div>	

				</div>
				<hr>
			</tr>
		<?php
		}
		?>
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

<p style="text-align: center;"><a href="Buat">Buat Laporan/Komentar &#10010;</a></p>

<p>Laporan/Komentar Terakhir</p>
<hr>

	<?php
		foreach ($utama as $u => $row) { ?>
			<tr>
				<div class="isi">
					<p>
						<br>
						<?=$row->isi;?>
					</p>
					<br>
				</div>

				<div class="latu">
					<p>
						Lampiran :
						<?=$row->lampiran;?>
					</p>

					<div class="latu" style="width: 280px;">
						<p>
							Waktu :
							<?=$row->waktu;?>
						</p>

						<p><a href="#">Lihat Selengkapnya</a></p>
						<p>&#10097;</p>
					</div>	

				</div>
				<hr>
			</tr>
		<?php
		}
		?>
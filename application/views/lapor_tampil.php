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
				<hr>
			</tr>
		<?php
		}
		?>
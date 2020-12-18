<title><?=$header?></title>

<style type="text/css">
	.data{
		border-collapse: collapse;
	}

	.data th, td{
		padding: 5px;
	}
</style>


<table class="data" border="1">
	<tr>
		<th>No.</th>
		<th>Laporan</th>
		<th>Lampiran</th>
		<th>Waktu</th>
	</tr>
	<?php
	$no = 1; 
		foreach ($utama as $u => $row) { ?>
			<tr>
				<td><?=$no++;?></td>
				<td><?=$row->isi;?></td>
				<td><?=$row->lampiran;?></td>
				<td><?=$row->waktu;?></td>
			</tr>
		<?php
		}
		?> 
	
</table>

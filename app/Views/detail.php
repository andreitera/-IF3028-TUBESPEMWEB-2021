<!DOCTYPE html>
<html>

<head>
	<title><?= $title ?></title>
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/css/style.css">

<body id="badan">
	<center>
		<h1>SIMPLE LAPOR!</h1>
	</center>
	<br><br>
	Detail Laporan/Komentar
	<hr>
	<p><?= $datalapor->aspek ?>
		<br><br>
		<?= $datalapor->laporan ?><br><br><br>
		Lampiran:
		<br><br>
		<?php
		$lampiran = $datalapor->lampiran;
		$dot = strrpos($lampiran, '.');
		$extfile = substr($lampiran, $dot + 1);
		$picext = ['jpeg', 'jpg', 'png', 'svg'];
		$status = false;
		foreach ($picext as $ex) {
			if ($extfile == $picext) {
				$status = true;
			}
		}
		if ($status == true) {
			echo '<img id="imglampiran" src="<?= base_url() . "/" . $datalapor->lampiran ?>">';
		} else {
			$var = preg_split("#/#", $lampiran);
			echo $var[count($var) - 1];
		}
		?>
		<!-- <img src="<?= base_url(); ?>/img/example.png"> -->
		<br><br><br>
		<div id="waktu">Waktu :<?= $datalapor->created_at ?></div>&nbsp;&nbsp;&nbsp;
		<div id="aspek">Aspek : <?= $datalapor->aspek ?></div>
		<a class="tomboledithapus" href="<?php echo base_url('detail/hapus/' . $datalapor->id); ?>">Hapus Laporan/Komentar <b>X</b></a>
		<a class="tomboledithapus" id="marg" href="<?php echo base_url('detail/edit/' . $datalapor->id); ?>">Edit Laporan/Komentar</a>
		<br>
		<hr>
</body>

</html>
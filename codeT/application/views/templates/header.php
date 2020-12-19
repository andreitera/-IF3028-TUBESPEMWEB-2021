<!DOCTYPE html>
<html>
<head>
	<title>Halaman <?= $judul; ?></title>
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>asset/css/style.css">
	<script type="text/javascript" src="<?= base_url(); ?>asset/js/validasi.js"></script>
	<script type="text/javascript">
		function checkWordCount() {
			s = document.getElementById("lapor").value;
			s = s.replace(/(^\s*)|(\s*$)/gi, "");
			s = s.replace(/[ ]{2,}/gi, " ");
			s = s.replace(/\n /, "\n");
			if (s.split(' ').length <= 20) {
				alert("Laporan kurang dari 20 kata");
				return false;
			}
		}
	</script>
</head>

<body>
	<div class="navbar">
		<ul class="navbar" style="height:65px; width:100%;"></ul>
	</div>

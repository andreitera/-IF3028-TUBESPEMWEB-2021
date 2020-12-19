<!DOCTYPE html>
<html>
<head>
	<title>LAPOR!</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('tampilan/css/style.css'); ?>">
	<link rel="shortcut icon" href="tampilan/gambar/download.jpg">
	<script type="text/javascript">
	function validateForm(){
		var x=document.forms["users"]["nama"].value;
		if (x==null || x==""){
  			alert("Nama Wajib Diisi");
  				return false;
  		}
	}
	</script>
</head>
<body>
	<div class="header">
	  <h1>LAPOR!</h1>
	</div>
	<div class="navbar">
		<ul>
		  <li><a class="active" href="<?php echo base_url().'';?>">Beranda</a></li>
		  <li><a href="<?php echo base_url().'create'; ?>">Buat Laporan/Komentar</a></li>
		</ul>
	</div>	
	<div id="boxlapor">
		<h1 align="center">SIMPLE LAPOR!</h1>
		<div class="lapor">
		<p>Buat Laporan/Komentar</p><hr>
		</div>

			
			<form name="users" onsubmit="return validateForm()" method="POST" action="<?php echo base_url().'tambah' ?>">
				<input type="text" name="nama" placeholder="Nama" class="nama"><br><br>
				<input type="text" name="kontak" placeholder="Kontak" class="kontak"><br><br>
				<textarea onkeypress="activateSubmit()" id="#some-textarea" cols="110" rows="20" name ="komentar" placeholder="Laporan/Komentar"></textarea><br>
				<select name="aspek_pelaporan">
					<option selected="selected" disabled="disabled">Pilih Aspek Laporan/Komentar</option>
					<optgroup label="--"></optgroup>
					<option value="dosen">Dosen</option>
					<option value="staff">Staff</option>
					<option value="mahasiswa">Mahasiswa</option>
					<option value="infrastruktur">Infrastruktur</option>
					<option value="pengajaran">Pengajaran</option>
				</select><br><br>
				<input class="upload" type="file" name ="lampiran" value="Choose File"><br>
				<input class="buat" type="submit" value="Buat LAPOR!" id="#submit-button">
			</form>											
		</div>
			
</body>
</html>	
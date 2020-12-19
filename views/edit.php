<center><h1>SIMPLE LAPOR!</h1></center>
<div class="kotak_laporan">
    <nav id="komen">
    		<p>Buat Laporan/Komentar</p>
		<hr>
		<form name="form" onsubmit="return cek_form(this)" action="<?php echo site_url().'/lapor/input_lapor'; ?>" method="POST"
		enctype="multipart/form-data">
    <!–buat laporan–>
    <?php
    foreach($lapor as $key){
        echo "<input type='hidden' name='id' value='$key->id'>
        <textarea name='komen' cols='70' rows='10' >$key->laporan</textarea>
        <br><br>
        <div class='aspek'>
			<select name='aspek'>
				<option value='$key->aspek'>$key->aspek</option>";
				if($key->aspek == 'Dosen') {
					echo "<option value='Staff'>Staff</option>
					<option value='Mahasiswa'>Mahasiswa</option>
					<option value='Infrastruktur'>Infrastruktur</option>
					<option value='Pengajaran'>Pengajaran</option>";
				} else if($key->aspek == 'Staff') {
					echo "<option value='Dosen'>Dosen</option>
					<option value='Mahasiswa'>Mahasiswa</option>
					<option value='Infrastruktur'>Infrastruktur</option>
					<option value='Pengajaran'>Pengajaran</option>";
				} else if($key->aspek == 'Mahasiswa') {
					echo "<option value='Dosen'>Dosen</option>
					<option value='Staff'>Staff</option>
					<option value='Infrastruktur'>Infrastruktur</option>
					<option value='Pengajaran'>Pengajaran</option>";
				} else if($key->aspek == 'Infrastruktur') {
					echo "<option value='Dosen'>Dosen</option>
					<option value='Staff'>Staff</option>
					<option value='Mahasiswa'>Mahasiswa</option>
					<option value='Pengajaran'>Pengajaran</option>";
				} else {
					echo "<option value='Dosen'>Dosen</option>
					<option value='Staff'>Staff</option>
					<option value='Mahasiswa'>Mahasiswa</option>
					<option value='Infrastruktur'>Infrastruktur</option>";
				}
				
            echo "</select>
            </div><br><br>
            <input type='file' name='foto'>
		</div><br><br>";
    }
	?>
		<input type="submit" class="submit" value="EDIT LAPOR!" />
</form>
</div class="login">

<script>
	function cek_form(){
		var laporan = document.forms["form"]["komen"].value;
		var laporan1 = laporan.split(" ");
		var aspek = document.forms["form"]["aspek"].value;
		var lampiran = document.forms["form"]["lampiran"].value;
		if (laporan == "" || laporan == null){
			alert("Isi Laporan Tidak Boleh Kosong");
			return false;
		}
		if (laporan1.length < 20){
			alert(" Isi Laporan Tidak Boleh Kurang dari 20 Kata");
			return false;
		}

		if (aspek == "") {
			alert("Aspek Laporan Tidak Boleh Kosong");
			return false;
		}

		if (lampiran == "" || lampiran == null) {
			alert("Aspek Laporan Tidak Boleh Kosong");
			return false;
		}

		var ext = /(\.jpg|\.jpeg|\.png|\.doc|\.docx|\.xls|\.xlsx|\.ppt|\.pptx|\.pdf)$/i
		if (!lampiran.match(ext)){
			alert("Ekstensi Lampiran Tidak Sesuai");
			return false;
		}
	}
</script>
<div class="hangat-b">
	<h1 class="notop" style="text-align: left; padding-top: 0em">Detail Laporan</h1>
    <hr>
      <?php
	foreach ($lapor as $key) {
		echo "<center><table width='810px'>
				<tr>
					<td style='text-align:justify;'>$key->laporan</td>
				</tr>
			</table></center><br>
		";

        echo "<p>Lampiran : </p>"; ?>
   		
		<center><img src="<?php echo base_url() ?>assets/lampiran/<?php echo $key->lampiran ?>"  width="100" height="150"></center><br>
<?php
		echo "<br>";
		echo "<div class='aspek1'>Waktu : $key->waktu";
		echo "<div class='tambah'>Aspek : $key->aspek";
	}
?>
        <br> 
         <!-tomboledit->
         <div class="tombol">
		<a href="<?php echo base_url() ?>index.php/lapor/hapus/<?php echo $key->id; ?>" onClick="return confirm('Anda Yakin Akan Menghapus Laporan Ini?')">Hapus|</a>
		<a href="<?php echo base_url() ?>index.php/lapor/edit/<?php echo $key->id; ?>" >Edit</a></div>
		
	 </div></div>
	 
	  
  
</body>
</html>
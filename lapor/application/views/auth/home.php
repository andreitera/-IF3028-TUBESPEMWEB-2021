<!DOCTYPE html>
<html>

<head>
	<title>Simple Lapor</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css" />
</head>

<body>
	
	
	<div class="mid">
		<h1>SIMPLE LAPOR!</h1>
	</div>
	<div class="content">
		<div class="mid">
			<form action="<?php echo base_url(''); ?>auth/index" method="post">
				<input class="search" type="search" placeholder="Ketik di sini untuk mencari laporan" name="search">
				<input class="button" type="submit" name="submit" value="Cari">
			</form>

			<h4><a href="<?php echo base_url(''); ?>auth/Buat_Laporan">Buat Laporan/Komentar [+]</a></h4>
		</div>
		<br>
		<p class="left"> Laporan/Komentar Terakhir</p>
		<hr>
		
	<div class="containerlaporan">
		<?php
		foreach ($user as $data) {
			echo substr($data->isi, 0, 200);
			echo "<br>";
			?>
			<p class="left">Lampiran :
				<?php echo $data->file; ?>
				<span class="waktu"> waktu :
					<?php echo $data->tanggal; ?>
					<a class="detail" href="<?php echo base_url('auth/BacaSelengkapnya/') . $data->id ?>">Lihat Selengkapnya</a>
				</span>
				<hr>
			</p>

		<?php
		}
		?>
	</div>
	</div>

	<br>

</body>

      <!-- AJAX Search Laporan -->
      <script>
      
        const cari = document.querySelector('.button');
        const keyword = document.querySelector('.search');
        const container = document.querySelector('.containerlaporan');

        keyword.addEventListener('keyup', function () {

          const xhr = new XMLHttpRequest();

          xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
              container.innerHTML = xhr.responseText;
            }
          };

		  xhr.open('get', '../ajax/cari.php?keyword='+keyword.value);
          xhr.send();

        });
      
      </script>


</html>
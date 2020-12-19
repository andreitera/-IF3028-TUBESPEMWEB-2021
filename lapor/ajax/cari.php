<?php

$conn = mysqli_connect('localhost', 'root', '', 'lapor');

$keyword = $_GET['keyword'];

  $query = "
            SELECT * 
            FROM komentar
            WHERE isi LIKE '%$keyword%' OR type LIKE '%$keyword%' OR file LIKE '%$keyword%' OR tanggal LIKE '%$keyword%'  
          ";

  $result=mysqli_query($conn,$query);

?>

<?php
        while ($data = mysqli_fetch_array($result)) { 
			echo substr($data['isi'], 0, 200);
			echo "<br>";
			?>
			<p class="poskiri">Lampiran :
				<?php echo $data['file']; ?>
				<span class="poskanan"> waktu :
					<?php echo $data['tanggal']; ?>
					
				</span>
				<hr>
			</p>

		<?php
		}
		?>
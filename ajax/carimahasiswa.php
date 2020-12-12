<?php

$conn = mysqli_connect('localhost', 'root', '', 'lapor');

$keyword = $_GET['keyword'];

  $query = "
            SELECT * 
            FROM mahasiswa AS m 
            WHERE m.nama LIKE '%$keyword%' OR m.prodi LIKE '%$keyword%'  
          ";

  $result=mysqli_query($conn,$query);

?>

        <h2 style="text-align:center;">DAFTAR MAHASISWA</h2>
        <br>
        <table>
          <tr>
            <th>NIM</th>
            <th>Program Studi</th>
            <th>Nama</th>
            <th>Status</th>
          </tr>
          <?php $i=1; ?>
          <?php while ($daftar = mysqli_fetch_array($result)) { ?>
          <tr>
            <td><?php echo $daftar['nim']; ?></td>
            <td><?php echo $daftar['prodi']; ?></td>
            <td><?php echo $daftar['nama']; ?></td>
            <?php if ($daftar['verif'] == 1){
              $status = "Aktif";
            } else {
              $status = "Tidak Aktif";
            }?>
            <td><?php echo $status; ?></td>
          </tr>
          <?php $i++; ?>
          <?php } ?>
        </table>

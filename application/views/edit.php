<?php?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/master.css" type="text/css">
  </head>
<body>
<div>
  <form class="ketiklapor-content animate" action="<?php echo base_url().'index.php/laporan/update/'.$laporan['id_laporan'];?>" method="post">
      <div class="tampilan">
        <fieldset>
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Tutup">&times;</span>
            <input type="text" name="judul" placeholder="judul"><?php echo $laporan ['judul']?>
            <textarea name="komen" placeholder="Laporan"><?php echo $laporan ['kolom_komentar']?></textarea>
            <input type="file" name="image">
            <label>Pilih Aspek Pelaporan/Komentar:</label>
            <select name="pilihan"><?php echo $laporan ['aspek_pelaporan']?>
              <option value="Administrasi">Administrasi</option>
              <option value="Infrastruktur">Infrastruktur</option>
              <option value="Keluhan">Keluhan</option>
            </select>
        </fieldset>
      <input type="submit" value="Tambah" />
      </div>
  </form>
</div>
</body>

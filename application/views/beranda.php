<?php?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/master.css" type="text/css">
    <title>LAPOR!</title>
  </head>
  <body>
    <h1><center>SIMPLE LAPOR!</center></h1>
    <div class="cari">
      <form action= "<?php echo base_url('cari'); ?>" method="get">
        <center><input class="pencarian" type="text" name="keyword">
        <input class="button" type="submit" value="Cari"></center><br>
      </form>
    </div>

    <a onclick="document.getElementById('id01').style.display='block'" ><center><button>Laporan/Komentar <span>&#10010;</span></button></center></a>
      <div id="id01" class="ketiklapor">
        <form class="ketiklapor-content animate" action="<?php echo base_url('form/input_form') ?>" method="post" enctype="multipart/form-data">
            <div class="tampilan">
              <fieldset>
                  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Tutup">&times;</span>
                  <input type="text" name="judul" placeholder="judul">
                  <textarea name="komen" placeholder="Laporan"></textarea>
                  <input type="file" name="lampiran" >
                  <label>Pilih Aspek Pelaporan/Komentar:</label>
                  <select name="pilihan">
                    <option value="Administrasi">Administrasi</option>
                    <option value="Infrastruktur">Infrastruktur</option>
                    <option value="Keluhan">Keluhan</option>
                  </select>
              </fieldset>
            <input type="submit" value="Tambah" />
            </div>
        </form>
      </div>

    <script>
      var ketiklapor = document.getElementById('id01');
      window.onclick = function(event){
        if (event.target == ketiklapor) {
          ketiklapor.style.display = "none";
        }
      }
    </script>
    <div class="container">
    <div class="recentlaporan">
    <h3>Laporan/Komentar Terakhir</h3>
    <hr>
        <?php foreach ($laporan as $recent): ?>

          <?php if (strlen($recent['kolom_komentar'])<=200) { ?>
            <p><?php echo $recent['kolom_komentar']; ?></p>
          <?php } else { ?>
            <p><?php echo substr($recent['kolom_komentar'],0,200).'....'; ?></p>
          <?php } ?>

          <br>
          <div class="lampiran">Lampiran : <?php echo $recent['lampiran']; ?></div>
          <a class="detail" href= <?php echo base_url().'index.php/laporan/view/'.$recent['id_laporan'];?>>Lihat Detail ></a>
          <div class="waktu">Waktu : <?php echo $recent['waktu']; ?></div>
          <br>
          <hr>
        <?php endforeach; ?>
    </div>
    </div>
  </body>
</html>

<DOCTYPE html>
<html lang=en>
    <head>
        <title>Detail laporan</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('style/detailstyle.css'); ?>">
    </head>
    <body>
        <h1 onclick="location.href='<?php echo base_url()?>'">SIMPLE LAPOR</h1>
        <br><br>
        <div Id="pala" class="pala">
            <p>Detail Laporan/komentar</p>
        </div>
        <hr>
        <div Id="isi" class="isi">
            <p align="justify"><?php echo $laporan_item['isi']; ?></p>
        </div>
        
        <div id="lampiran">
            <p>Lampiran: <?php echo $laporan_item['lampiran'];?></p>
            <img src="<?php echo base_url().'upload/'.$laporan_item['lampiran']; ?>" 
            alt="Lampiran tidak ditemukan"
            onerror="this.onerror=null;this.src='<?php echo base_url().'upload/default.jpeg'; ?>'"/>
        </div>

        <table id="tabel1">
            <tr>
                <td>
                    <p> <?php echo $laporan_item['waktu'];?>
                    | <?php echo $laporan_item['aspek'];?>
                    </p>
                </td>
                <td id="crud">
                    <?php $id = $laporan_item['id'];?>
                    <a id="hapus_link" data-confirm="Apakah anda yakin?" href="<?php echo base_url('beranda/hapus/').$id; ?>">Hapus | </a>
                    <a href="<?php echo base_url('beranda/update/').$id; ?>">Edit </a>
                </td>
            </tr>
        </table>
        <hr>
        <script type="text/javascript">
            document.querySelector("#hapus_link").addEventListener('click', function(event){
                event.preventDefault();
                var choice = confirm(this.getAttribute('data-confirm'));
                if(choice){
                    window.location.href = this.getAttribute('href');
                }
            });
        </script>
    </body>
</html>
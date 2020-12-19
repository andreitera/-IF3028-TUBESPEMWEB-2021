<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">

        
        <title>Edit Laporan</title>
        <link rel="stylesheet" href="<?php echo base_url('style/style_tambah.css') ?>">
    </head>
    <body style="background-image: url('<?php echo base_url('img/bg1.jpg') ?>'); background-size: cover;">
        <div class="container" style="margin: 0 auto; margin-top: 100px; margin-bottom: 100px; width: 850px; height: auto;border: 1px solid gray; background-color: white; border-radius: 15px; box-shadow: 2px 5px 20px rgba(0,0,0,100%);">
            <div class="content">
                <h1>Layanan Aspirasi dan Pengajuan Online Mahasiswa IF ITERA</h1>
                <br>
                <form method="POST">
                    <p>Edit Laporan/Komentar</p>
                    <hr><br>
                    <div>
                        <input type="hidden" name="id" value="<?php echo $laporan->id ?>">
                    </div>
                    <div>
                        <textarea name="isi" placeholder="Laporan/Komentar" class="textarea"><?php echo $laporan->isi ?></textarea>
                    </div><br>
                    <div>
                        <select name="aspek" class="select">
                            <option>Pilih Aspek Pelaporan/Komentar</option>
                            <?php
                                $options = array( 'Dosen', 'Staff', 'Mahasiswa', 'Infrastruktur', 'Pengajaran' );
    
                                $output = '';
                                for( $i=0; $i<count($options); $i++ ) {
                                    if($laporan->aspek == $options[$i]){
                                        echo "<option value=".$options[$i]." selected>".$options[$i]."</option>";
                                    }
                                    else{
                                        echo "<option value=".$options[$i].">".$options[$i]."</option>";
                                    }
                                }
                            ?>
                        </select>
                    </div>
                    <div>
                        <br>
                        <input type="file" name="lampiran" class="file">
                    </div>
                    <br>
                    <button type="submit" class="btn_edit" style="color: white; background-color: green; border-radius: 5px; ">EDIT LAPOR!</button>
                    <hr><br><br>
                </form>
            </div>
        </div>
    </body>
</html>
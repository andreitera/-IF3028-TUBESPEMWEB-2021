<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">

        
        <title>Tampilan Buat Laporan</title>
        <link rel="stylesheet" href="<?php echo base_url('style/style_tambah.css') ?>">
    </head>
    <body>
        <div class="container">
            <div class="content">
                <h1>Layanan Aspirasi dan Pengajuan Online Mahasiswa IF ITERA</h1>
                <form method="POST">
                    <p>Buat Laporan/Komentar</p>
                    <hr><br>
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
                                    $output .= '<option ' 
                                        . ( $laporan->aspek == $options[$i] ? 'selected="selected"' : '' ) . '>' 
                                        . $options[$i] 
                                        . '</option>';
                                }
                            ?>
                        </select>
                    </div>
                    <div>
                        <br>
                        <input type="file" name="lampiran" class="file" value="<?php echo $laporan->lampiran ?>">
                    </div>
                    <br>
                    <button type="submit" class="btn_edit">Edit LAPOR!</button>
                    <hr><br><br>
                </form>
            </div>
        </div>
    </body>
</html>
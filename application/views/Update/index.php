

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $judul; ?></title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css?v=1.1">
    <script src="assets/js/validasi.js"></script>
</head>
<body>
<?php foreach ($ubah as $hm )  :?>
        <?php $id = $hm['id_lapor']; ?>
        <?php $laporan = $hm['laporan']; ?>
        <?php $aspek = $hm['aspek']; ?>
        <?php $file = $hm['lampiran']; ?>
<?php endforeach; ?>  

<p class="title">SIMPLE LAPOR!</p>
<div class="laporarea">
    <p class="subtitle">Ubah Laporan / Komentar</p>
    <hr>
        <div class="arsip">
        <form action="" method="post" onSubmit="return validasi(this)" enctype="multipart/form-data">
        <input type="hidden" name="id_lapor" value="<?php $hm['id_lapor']; ?>" >
            <br>
                <textarea name="laporan" ><?php echo $laporan ?></textarea><br>
            <br>
                <select id="aspek" name="aspek" value="">
                    <option value="pilih">Silahkan Pilih</option>

                    <?php if($aspek=='Dosen'):?>
                        <option value="Dosen" selected>Dosen</option>
                        <option value="Staff">Staff</option>
                        <option value="Mahasiswa">Mahasiswa</option>
                        <option value="Infrastruktur">Infrastruktur</option>
                        <option value="Pengajaran">Pengajaran</option>

                    <?php elseif($aspek=='Staff'):?>
                        <option value="Dosen" >Dosen</option>
                        <option value="Staff" selected>Staff</option>
                        <option value="Mahasiswa">Mahasiswa</option>
                        <option value="Infrastruktur">Infrastruktur</option>
                        <option value="Pengajaran">Pengajaran</option>

                    <?php elseif($aspek=='Mahasiswa'):?>
                        <option value="Dosen" >Dosen</option>
                        <option value="Staff" >Staff</option>
                        <option value="Mahasiswa" selected>Mahasiswa</option>
                        <option value="Infrastruktur">Infrastruktur</option>
                        <option value="Pengajaran">Pengajaran</option> 

                    <?php elseif($aspek=='Infrastruktur'):?>
                        <option value="Dosen" >Dosen</option>
                        <option value="Staff" >Staff</option>
                        <option value="Mahasiswa" >Mahasiswa</option>
                        <option value="Infrastruktur" selecteds>Infrastruktur</option>
                        <option value="Pengajaran">Pengajaran</option>

                    <?php else:?>
                        <option value="Dosen" >Dosen</option>
                        <option value="Staff" >Staff</option>
                        <option value="Mahasiswa" >Mahasiswa</option>
                        <option value="Infrastruktur" >Infrastruktur</option>
                        <option value="Pengajaran" selected>Pengajaran</option>

                        <?php endif;?>
                </select><br>
            
            <br>
                <input class="file" id="myFile" type="file" name="myFile" value="<?php echo $file ?>"><br>
            <br>
                <input class="submit submit1"  name="uploadFile" type="submit" value="Buat LAPOR!">
                <div id="valid_msg">
                    </div>
            <br>
            <hr >
            
        </form>

         </div>
    </div>  
</body>
</html>

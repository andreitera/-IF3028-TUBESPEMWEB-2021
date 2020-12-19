<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?= base_url('asset/css/tambah.css');?>">
    <title>Edit</title>
    <script src="assets/js/validasi.js"></script>
</head>
<body>

        <h1>SIMPLE LAPOR!</h1>
        <p>Buat Laporan/Komentar</p>
    <hr>
    <?php foreach($lapor as $u) { ?>
        <?php $id = $u->id ?>
        <?php $isi = $u->isi; ?>
        <?php $aspek = $u->aspek; ?>
        <?php $file = $u->lampiran; ?>

        <form action="<?php echo base_url(). 'crud/update';?>" ecntype="multipart/form-data" method="post" onSubmit="return validasi(this)" >
            <textarea name="isi" id="" ><?php echo $u->isi ?></textarea>
            <br>
            <select name="aspek" id="aspek">
                <option value="pilih">Pilih Pelapor</option>
                <?php if($aspek=='Dosen'):?>
                        <option value="Dosen" selected>Dosen</option>
                        <option value="Staff">Staff</option>
                        <option value="Mahasiswa">Mahasiswa</option>
                        <option value="Infra">Infrastruktur</option>

                    <?php elseif($aspek=='Staff'):?>
                        <option value="Dosen" >Dosen</option>
                        <option value="Staff" selected>Staff</option>
                        <option value="Mahasiswa">Mahasiswa</option>
                        <option value="Infra">Infrastruktur</option>

                    <?php elseif($aspek=='Mahasiswa'):?>
                        <option value="Dosen" >Dosen</option>
                        <option value="Staff" >Staff</option>
                        <option value="Mahasiswa" selected>Mahasiswa</option>
                        <option value="Infra">Infrastruktur</option> 

                    <?php elseif($aspek=='Infrastruktur'):?>
                        <option value="Dosen" >Dosen</option>
                        <option value="Staff" >Staff</option>
                        <option value="Mahasiswa" >Mahasiswa</option>
                        <option value="Infras" selecteds>Infrastruktur</option>

                    <?php else:?>
                        <option value="Dosen" >Dosen</option>
                        <option value="Staff" >Staff</option>
                        <option value="Mahasiswa" >Mahasiswa</option>
                        <option value="Infra" >Infrastruktur</option>

                        <?php endif;?>
            </select>
        <br>
            <input type="file" name="myfile">
        <br>
            <input type="submit" value="simpan">
    </form>
    <br>
    <br>
    <hr>
    <?php } ?>
</body>
</html>
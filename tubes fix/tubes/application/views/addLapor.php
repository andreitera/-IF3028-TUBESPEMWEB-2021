<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Article</title>
</head>
<body>    
    <div class="text-center-title banner">
        <h2 align="center">SIMPLE LAPORAN</h2>
    </div>

    <?php validation_errors(); ?>
    <?php echo $error;?>

    <div class="container mt-5" style="margin-left: 50px; margin-right:50px;" >
        <?php echo form_open_multipart('Ajaxsearch/tambahLaporan'); ?>
                Buat Laporan/komentar
                <hr/>
                <br>
            <div class="form-group">
                <label>Judul Laporan</label>
                <input type="text" class="form-control" name="judul" placeholder="Masukkan Judul Laporan" style="width: 400px; height:25px;">
                <p><?php echo  form_error('judul'); ?></p>
            </div>
            <div class="form-group">
                <label>Laporan </label>
                <br>
                <textarea class="form-control" name="laporan" rows="4" style="width: 400px; height:300px;"></textarea>
                <p><?php echo  form_error('laporan'); ?></p>
            </div>
            <div class="form-group">
                <label>aspek</label>
                <select name="aspek" class="form-control">
                    <option value="Infrastruktur">Infrastruktur</option>
                    <option value="Dosen">Dosen</option>
                    <option value="Staff">Staff</option>
                    <option value="Mahasiswa">Mahasiswa</option>
                    <option value="Pengajaran">Pengajaran</option>
                </select>
                <p><?php echo  form_error('aspek'); ?></p>
            </div>
            <div class="form-group">
                <label>Masukkan Lampiran</label><br>
                <input type="file" name="cover_img">
            </div>
            <?php echo  form_error('cover_img'); ?>
         
            <br>
            <input type="submit" value="Buat Laporan" class="btn btn-primary w-100" style="background-color:white ;float: right; width: 100px; height:50px; ">
        </form>
        <br>
        <br>
        <br>
        <hr />
    </div>

</body>
</html> 
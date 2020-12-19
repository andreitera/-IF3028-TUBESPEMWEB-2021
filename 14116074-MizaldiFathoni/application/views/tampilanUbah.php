<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Buat Laporan!</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/tampilanBuat.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

</head>

<body>
    <h1>SIMPLE LAPOR!</h1></a>
    <label>Ubah Laporan</label>
    <hr><br>

        <form action="" method="post" name="myForm" onsubmit="return validateForm()">
        <input type="hidden" name="id_lapor" value="id" >
        <input type="text" class="nama" name="nama" placeholder=" Nama"><br><br>
		<input type="text" class="judul" name="judul" placeholder=" Judul Laporan"><br><br>
        <textarea class="area" id="card" name="laporan" placeholder=" Laporan/Komentar"></textarea>
        <br><br><br>
                <select style="height: 40px;" id="aspek" name="aspek" value="aspek">
                    <option>Pilih Aspek Pelaporan/Komentar:</option>
                        <option value="Dosen">Dosen</option>
                        <option value="Staff">Staff</option>
                        <option value="Mahasiswa">Mahasiswa</option>
                        <option value="Infrastruktur">Infrastruktur</option>
                        <option value="Pengajaran">Pengajaran</option>

                </select><br>
            
            <br>
            Pilih File : <input type="file" name="file" value="Browse.."  onclick="return alert('Jika sebelumnya menyertakan file, mohon diinputkan lagi di halaman ini.')" name="kirim" accept=".img, .png, .jpeg, .jpg, .doc, .docx, .xls, .xlsx, .ppt, .pptx, .pdf">
            
            <p align="right">
                <input type="submit" class="but" value="Ubah LAPOR!" onclick="return confirm('Apakah anda yakin datanya sudah benar?')"></p>
                <div id="valid_msg">
            
            <hr>
        </form>
    </div>
    
</body>
</html>

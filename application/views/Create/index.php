<script>
    function tambahdata(){
        var laporan=$("[name='laporan']").val();
        var aspek=$("[name='aspek']").val();
        var file=$("[name='myFile']").val();

        $.ajax({
            type:'POST',
            data:'laporan='+laporan+'&aspek='+aspek+'&myFile='+file,
            url:'<?php echo base_url().'index.php/create/tambahdata' ?>',
            dataType :'json',
            success: function(hasil){
                console.log(hasil);
            }
        });
    }
</script>

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
        <p class="title">SIMPLE LAPOR!</p>

        <div class="laporarea">
            <p class="subtitle">Buat Laporan / Komentar</p>
            <hr>
            <div class="arsip">
                <form action="" method="post" onSubmit="return validasi(this)" enctype="multipart/form-data">
                    <br><textarea name="laporan" placeholder="Laporan/Komentar"></textarea><br>
                    <br><select id="aspek" name="aspek">
                            <option value="pilih" selected>Pilih Aspek Pelaporan/Komentar</option>
                            <option value="Dosen">Dosen</option>
                            <option value="Staff">Staff</option>
                            <option value="Mahasiswa">Mahasiswa</option>
                            <option value="Infrastruktur">Infrastruktur</option>
                            <option value="Pengajaran">Pengajaran</option>
                        </select><br>
                    <br><input class="file" id="myFile" type="file" name="myFile"><br>
                    <br><input class="submit submit1" name="uploadFile" type="submit" value="Buat LAPOR!"><br>
                    <br><hr>
                </form>
                <br>
                <br>
                </div>
            </div>
        </div>
    </body>
</html>

<!-- <script>
function tambahdata(){
    var laporan=$("[name='laporan']").val();
    var aspek=$("[name='aspek']").val();
    var file=$("[name='myFile']").val();

    $.ajax({
        type:'POST',
        data:'laporan='+laporan+'&aspek='+aspek+'&myFile='+file,
        url:'<?php echo base_url().'buat/tambahdata' ?>',
        dataType :'json',
        success: function(hasil){
            console.log(hasil);
        }
    });
}
</script> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?= base_url('asset/css/tambah.css');?>">
    <title>Document</title>
</head>
<body>
        <?php 
        if(isset($error))
        {
            echo "ERROR UPLOAD : <br/>";
            print_r($error);
            echo "<hr/>";
        }
        ?>

        <h1>SIMPLE LAPOR!</h1>
        <p>Buat Laporan/Komentar</p>
    <hr>
        <form action="<?php echo base_url(). 'crud/tambah_aksi';?>" ecntype="multipart/form-data" method="post">
            <textarea name="isi" id="" placeholder="Laporan/Komentar"></textarea>
            <br>
            <select name="aspek" id="">
                <option value="">Pilih Pelapor</option>
                <option value="Mahasiswa">Mahasiswa</option>
                <option value="Dosen">Dosen</option>
                <option value="Staff">Staff</option>
                <option value="Infra">Infrastruktur</option>
            </select>
        <br>
            <input type="file" name="myfile">
        <br>
        <button type="submit" class="buat_btn">BuatLapor!</button>
    </form>
    <br>
    <br>
    <hr>
</body>
</html>
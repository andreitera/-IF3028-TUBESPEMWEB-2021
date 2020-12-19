<!DOCTYPE html>
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

<p class="judul">SIMPLE LAPOR!</p>
    <div class="lapor">
    <p class="subjudul">Ubah Laporan / Komentar</p>
    <hr>

        <form action="" method="post" onSubmit="return validasi(this)" enctype="multipart/form-data">
        <input type="hidden" name="id_lapor" value="/*isidatabase*/" >
            <br>
                <textarea name="laporan" >/*isidatabase*/</textarea><br>
            <br>
                <select id="aspek" name="aspek" value="">
                    <option value="pilih">Silahkan Pilih</option>
                </select><br>
            
            <br>
                <input class="file" id="myFile" type="file" name="myFile" value="/*isidatabase*/"><br>
            <br>
                <input class="submit submit1"  name="uploadFile" type="submit" value="Buat LAPOR!">
                <div id="valid_msg">
            <br>
            <hr >
        </form>
    </div>
    
</body>
</html>

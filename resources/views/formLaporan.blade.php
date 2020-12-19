<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <title>Buat Form</title>
</head>
<body>
    <h2>SIMPLE LAPOR!</h2>
    <span>Buat Laporan/Komentar</span>
    <hr>
    <textarea name="contents" id="contents" cols="30" rows="10" style="margin: 0px; width: 1338px; height: 213px;">Laporan/Komentar</textarea><br>
    <select name="aspect" id="aspect">
        <option value="" selected hidden>Pilih Aspek Pelaporan/Komentar</option>
        <option value="Dosen">Dosen</option>
        <option value="Staff">Staff</option>
        <option value="Mahasiswa">Mahasiswa</option>
        <option value="Infrastruktur">Infrastruktur</option>
        <option value="Pengajaran">Pengajaran</option>
    </select><br>
    <input type="file" name="file" id="file"><br>
    <div style="width: 100%">
        <input type="submit" value="Buat LAPOR!" style="margin: 5px 10px 5px auto;" onclick="up()">
    </div>
    <hr>
</body>
<script>
    function up() {
        var contents = document.getElementById("contents").value;
        var aspect = document.getElementById("aspect").value;
        var file = document.getElementById("file").files[0];
        var dat = new FormData();
        dat.append("contents", contents);
        dat.append("aspect", aspect);
        dat.append("file", file);
        console.log(dat);
        // var data = {
        //     contents: contents,
        //     aspect: aspect,
        // };
        axios.post('create', dat).then(function(response){
            console.log(response.data);
        });
    }
</script>
</html>

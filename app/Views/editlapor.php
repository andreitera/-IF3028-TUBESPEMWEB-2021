<!DOCTYPE html>
<html>
<div id='halaman'>

    <head>
        <title><?= $title ?></title>
        <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/css/style.css">
    </head>

    <body>
        <center>
            <h1>SIMPLE LAPOR!</h1>
        </center>
        <br><br>
        Buat Laporan/Komentar
        <hr>
        <form method="POST">
            <textarea id=laporan placeholder="Laporan/Komentar"><?= $dataupdate['laporan'] ?></textarea>
            <br>
            <select id=aspek>
                <option value="<?= $dataupdate['aspek'] ?>" selected hidden><?= $dataupdate['aspek'] ?></option>
                <option value="Dosen"> Dosen</option>
                <option value="Mahasiswa"> Mahasiswa</option>
                <option value="Infrasturktur"> Infrastruktur</option>
                <option value="Pengajaran"> Pengajaran</option>

            </select><br>
            <input type="file" name="lampiran" id=lampiran>
            <br>
            <p id=status style="float: right;color:red"></p><br><br><br>
            <button class="buatlapor" type="submit" id="tambah" onclick="check()">
                buat LAPOR!
            </button>
        </form>
        <br><br><br><br>
        <hr>
    </body>
</div>

</html>
<script>
    function check() {
        event.preventDefault();
        var laporan = document.getElementById("laporan").value.split(' ');
        var aspek = document.getElementById("aspek").value;
        var lampiran = document.getElementById("lampiran").value;
        if (laporan.length < 20) {
            alert("Field Laporan tidak boleh kurang dari 20 kata");
        } else if (aspek.length == 0) {
            alert("Silahkan pilih aspek")
        } else if (lampiran.length == 0) {
            alert("Lampiran harus ada")
        } else {
            let splitname = filename.split(".");
            let fileExt = splitname[splitname.length - 1];
            let extension = ['doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf', 'jpg', 'jpeg', 'png'];
            let same = 0
            for (i = 0; i < extension.length; i++) {
                if (splitname[1] == extension[i]) {
                    if (splitname[extension.length - 1] == extension[i]) {
                        same = 1;
                    }
                }
            }
            if (same == 1) {
                sendData();
            } else if (same == 0) {
                alert("File Extension yang boleh 'doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf', 'jpg', 'jpeg', 'png'")
            }
        }
    }

    function sendData() {
        event.preventDefault();
        var file = document.getElementById("lampiran").files[0];
        var xhr = new XMLHttpRequest();
        // xhr.file = file;
        var base_url = " <?php echo base_url(); ?>";
        var url = "<?= base_url(); ?>/lapor/updateSimpan";
        // var data = JSON.stringify({
        // 	laporan: document.getElementById("laporan").value,
        // 	aspek: document.getElementById("aspek").value,
        // 	lampiran: document.getElementById("lampiran").value,

        var formData = new FormData();
        // });
        xhr.open("POST", url, true);
        formData.append("laporan", document.getElementById("laporan").value);
        formData.append("aspek", document.getElementById("aspek").value);
        formData.append("lampiran", file);
        formData.append("id", <?= $dataupdate['id'] ?>);
        console.log(formData.get("laporan"));
        // xhr.setRequestHeader("Content-Type", "multipart/form-data");
        xhr.onload = function() {
            console.log(this.responseText);
        };

        xhr.send(formData);
        //console.log("data=" + JSON.stringify(data));
        //xhr.send(data);
        xhr.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

                alert("Berhasil Edit Lapor");
                window.location.href = "<?= base_url(); ?>";
            }
        };
        return false;
    }
</script>
<!-- <script type="text/javascript" src="jquery-3.5.1.min.js"></script>
<script> -->
<!-- $(document).on('click', '#tambah', function() {
var laporan = $('#laporan').val();
var aspek = $('#aspek').val();
var lampiran = $('#lampiran').val();
$.ajax({
type: "POST",
url: "lapor/simpanData",
dataType: "JSON",
data: {
laporan: laporan,

aspek: aspek,
lampiran: lampiran
},
success: function(data) {
document.getElementById("status").innerHTML = "Laporan Berhasil Ditambahkan";
}
});
return false;
});
</script> -->
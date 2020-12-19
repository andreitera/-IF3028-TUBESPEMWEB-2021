<!DOCTYPE html>
<html lang=en>
<head>
    <title>Simple lapor</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('style/styleBuatLapor.css'); ?>">
    <script type="text/javascript">
    function checkWordCount(){
        var s = document.forms["Form"]["komentar"].value;
        s = s.replace(/(^\s*)|(\s*$)/gi,"");
        s = s.replace(/[ ]{2,}/gi," ");
        s = s.replace(/\n /,"\n");
        if (s.split(' ').length < 20) {
            alert("jumlah kata dalam komentar tidak cukup (<20 kata)");
            return false;
        }
    }
    function checkField(){
        var comment = document.forms["Form"]["komentar"].value;
        var aspect = document.forms["Form"]["aspek"].value;
        var attachment = document.forms["Form"]["lampiran"].value;
        if (
            comment == null || comment == "", 
            aspect == null || aspect == "",
            attachment == null || attachment == ""
            ) 
        {
            alert("Setiap field tidak boleh kosong");
            return false;
        }
    }
    function validateForm(){
        checkWordCount();
        checkField();
    }
</script>
</head>
<body>
    <h1 onclick="location.href='<?php echo base_url()?>'">SIMPLE LAPOR</h1>
    <div id="badan" class="badan">
        <p>Buat Laporan/komentar</p>
    </div>
    <form id="Form" name="Form" onsubmit="return validateForm()"
    action="<?php echo base_url().'beranda/update/'?>" method="POST"
    enctype="multipart/form-data">            
        <input type="text" name="id" value="<?php echo $item['id'];?>" hidden>
        <hr width="70%">
        <div id="pala2" class="pala2">
            <textarea name="komentar" placeholder="Laporan/komentar"><?php echo $item['isi']; ?></textarea><br><br>
            <select name="aspek" value="<?php echo $item['aspek']; ?>">
                <option value="" hidden>Pilih Aspek Pelaporan/komentar</option>
                <option value="dosen">Dosen</option>
                <option value="staff">Staff</option>
                <option value="mahasiswa">Mahasiswa</option>
                <option value="infrastruktur">Infrastruktur</option>
                <option value="pengajaran">Pengajaran</option>
            </select><br><br>
            <input type="file" name="lampiran" value="<?php echo $item['lampiran']; ?>"
            accept="application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint,
            application/pdf, image/*">
            <br><br>
            <input id="tombol_tambah" type="submit" value="Buat LAPOR!"><br>
        </div>
        <p></p>
        <hr width="70%">
    </form>  
</body>
</html>
<?php
/*
<script type="text/javascript"/>
        document.querySelector(document).ready(function){
            document.querySelector("#tombol_tambah").click(function(){
                var data = document.querySelector("#Form").serialize();
                var url = "<?php echo base_url().'beranda'?>";
                var request = new XMLHttpRequest();
                request.open('POST', url, true);
                request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                request.onload = function(){
                    if(this.status >= 200 && this.status < 400){
                        var resp = this.response;
                    }
                };
                request.onerror = function(){
                    
                };
                request.send(data);
            })
        }
    </script>
*/
?>
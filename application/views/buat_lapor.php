<!DOCTYPE html>
<html lang=en>
<head>
    <title>Simple lapor</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('style/styleBuatLapor.css'); ?>">
    <script type="text/javascript">
    function hitungKata(){
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
        hitungKata();
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
    action="<?php echo base_url().'tambah'?>" method="POST"
    enctype="multipart/form-data">            
        <hr>
        <div id="pala2" class="kepala2">
            <textarea name="komentar" placeholder="Laporan/komentar"></textarea><br><br>
            <select name="aspek">
                <option value="" hidden>Pilih Aspek Pelaporan/komentar</option>
                <option value="dosen">Dosen</option>
                <option value="staff">Staff</option>
                <option value="mahasiswa">Mahasiswa</option>
                <option value="infrastruktur">Infrastruktur</option>
                <option value="pengajaran">Pengajaran</option>
            </select><br><br>
            <input type="file" name="lampiran"
            accept="application/msword, application/vnd.ms-excel,
            application/pdf, image/*">
            <br><br>
            <input id="tombol_tambah" type="submit" value="Buat LAPOR!"><br>
        </div>
        <hr>
    </form>  
</body>
</html>
<?php

?>
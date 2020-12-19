<style>
    #root{
        background-color: white;
        box-shadow: 0 0 5px grey;
        padding: 50px 40px;
        box-sizing: border-box;
        font-family: 'Poppins';
        margin-bottom: 100px;
    }
    #form_title{
        font-size: 33px;
        font-weight: bold;
    }
    #contents{
        width: 98%;
        resize: none;
        height: 40vh;
        margin-bottom: 10px;
        font-size: 18px;
        padding-left: 16px;
        padding-top: 4px;
    }
    #aspect{
        font-size: 20px;
        margin-bottom: 14px;
    }
    #file{
        font-size: 20px;
    }
    #submit{
        margin: 0px 0px 0px auto;
        display: block;
        font-size: 20px;
        background-color: rgb(90,11,37);
        color: white;
        padding: 5px 10px;
        border: none;
    }
</style>
<span id="form_title">Buat Laporan/Komentar</span>
<hr>
<textarea name="contents" id="contents" sy>Laporan/Komentar</textarea><br>
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
    <input type="submit" value="LAPOR!" id="submit" onclick="up()">
</div>
<br>

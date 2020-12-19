<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> 
    *{
        box-sizing: border-box;
    }
    body{
    background: #F08080;
    }
    .container{
        max-width: 100%;
        margin-left: auto;
        margin-right: auto;
        padding-left: 30px;
        padding-right: 30px;
        position: relative;
    }
    .header{
        text-align : center;
        font-size : 24px;
    }
    
    
    .submitarea{
        text-align : right ;
        margin-right : 370px;
    }

    .laporarea textarea{
        width  : 100%;
    }

    .textlaporan{
        width : 85%;
        display : inline-block;
    }
    .submitarea{
        /* margin-right: 80%;
        margin-left : 20%; */
        margin : 15px;
        display : inline-block;
        float: right;
    }
    .filearea{
        display: inline;
        float: left;
    }
    </style>
    
</head>
<body>
<div class="container">
    <div class="header">
        <h1>SIMPLE LAPOR!!</h1>
    </div>

    <div class="conten">
        <p class="textlaporan"> Buat Laporan/Komentar</p>
        <hr><br>
        <form action="{{ route('lapor') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="pengirimarea">
            <!-- <label for="">
            Pengirim: -->
            <input type="text" name="pengirim" placeholder="Pengirim" required>
            </label>
        </div>

        <br>
    
        <div class="judularea">
            
        <input type="text" name="judul" placeholder="Judul" required>
        </label>
        </div>

        <br>

        <div class="laporarea">
            <label for="">
            <textarea  name="isilaporan" rows="10" column="640" placeholder="Laporan/Komentar" required></textarea>
            </label>
        </div>

        <div class="optionarea">
            <label for=""><br>
            Aspek:
            <select name="aspect" id="">
                <option value="Mahasiswa">Mahasiswa</option>
                <option value="Dosen">Dosen</option>
                <option value="Pengajaran">Pengajaran</option>
                <option value="Infrastruktur">Infrastruktur</option>
            </select>
            </label>
        </div>

        <div class="footer">
        <div class="filearea">
            <label for=""><br>
            File:
            <input type="file" name="file">
            </label><br></div>
        <div class="submitarea">
        <button type="submit">Lapor</button>
        </div>
        </form>
    </div>

</div> 
<br><br><br><hr>   
</body>
</html>
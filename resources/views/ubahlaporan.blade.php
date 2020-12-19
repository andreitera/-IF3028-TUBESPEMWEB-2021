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

    .laporarea textarea{
        width : 100%;
        height : 200px;
        display : inline-block;
    }
    
    .optionarea{
        margin-top   :  20px;
        margin-bottom:  20px;
    }
    .submitarea{
        text-align : right ;
        margin-right : 370px;
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
    <form action="{{ route('editlaporan', $edit->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="pengirimarea">
            <label for="">
            <p>Pengirim  :</p>
            <input type="text" name="pengirim" value="{{ $edit->pengirim }}" required>
            </label>    
            <br>        
        </div>

        <div class="judularea">
               <label for="">
             <p>Judul     :</p>
            <input type="text" name="judul" value="{{ $edit->judul }}" required>
              </label>
            <br>
         </div>

        <div class="laporarea">
             <label for="">
        <p>Laporan   :</p>
        <textarea name="isilaporan" rows="4" column="50" required></textarea>
            </label>
             <br>

        </div>


        <div class="optionarea">
            <label for="">
                Aspek     :
            <select name="aspect" id="">
                <option value="Mahasiswa">Mahasiswa</option>
                <option value="Dosen">Dosen</option>
                <option value="Pengajaran">Pengajaran</option>
                <option value="Infrastruktur">Infrastruktur</option>
            </select>
            </label>
            <br>
        </div>

        <div class="footer">
            <div class="filearea">
                <label for="">
                    File      :
                <input type="file" name="file">
                </label>
            </div>

            <div class="submitarea">    
                <button type="submit">Edit Lapor</button>    
            </div>
        </form>
    </div>
</div>
</body>
</html>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            background: white;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .content {
            width: 1000px;
            margin: auto;
            background: white;
            padding: 10px;
            height: 825px;
        }

        .topnav input[type=text] {
            float: right;
            padding: 6px;
            margin-top: 8px;
            margin-right: 16px;
            border: none;
            font-size: 17px;
        }


        @media screen and (max-width: 600px) {

            .topnav a,
            .topnav input[type=text] {
                float: none;
                display: block;
                text-align: left;
                width: 100%;
                margin: 0;
                padding: 14px;
            }

            .topnav input[type=text] {
                border: 1px solid #ccc;
            }
        }


        /* Darker background on mouse-over */
        button:hover {
            opacity: 1;
        }

        input[id=judul],
        select[id=tipe],
        input[id=tanggal],
        input[id=file],
        input[id=anonim] {
            width: 100%;
            padding: 8px 15px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            height: 50px;
            font-size: 14px;
            font-family: Arial, Helvetica, sans-serif;
        }

        input[id=anonim] {
            width: 15px;
            height: 15px;
            border: 1px solid #ccc;
            font-size: 14px;
            font-family: Arial, Helvetica, sans-serif;
        }

        textarea[id=isi] {
            width: 100%;
            padding: 12px 15px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            height: 130px;
            font-size: 14px;
            font-family: Arial, Helvetica, sans-serif;

        }

        option[value=dosen,
        value=mahasiswa,
        value=mahasiswa,
        value=infrastruktur,
        value=pengajar] {
            width: 100%;
            padding: 8px 15px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            height: 50px;
            font-size: 14px;
            font-family: Arial, Helvetica, sans-serif;

        }

        button {
            background: #ae0b1a;
            color: white;
            padding: 14px 20px;
            margin: 5px 10px;
            margin-left: 10%;
            margin-right: 10%;
            border: none;
            cursor: pointer;
            width: 30%;
            float: right;
            height: 50px;
            font-size: 20px;
            font-family: Arial, Helvetica, sans-serif;
            margin-top: 25px;
        }
        a {
          text-decoration: none;
          color: white;
          font-family: Arial, Helvetica, sans-serif;
          font-size: 20px;
          margin-top: 25px;
        }

    </style>
</head>

<body>

    <div class="content">
        <div class="judul">
            <center>
                <h1>SIMPLE LAPOR!</h1>
            </center>
        </div>
        <div class="container">
            <form action="/simpanlaporan" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="judul">Judul Laporan</label><br>
                <input type="text" id="judul" name="judul" placeholder="Masukkan Judul Laporan"><br>

                <label for="isi">Isi Laporan</label><br>
                <textarea type="text" id="isi" name="isi" placeholder="Masukkan Isi Laporan"></textarea><br>

                <label for="tipe">Tipe Laporan</label>
                <select name="tipe" id="tipe">
                    <option value="dosen">Dosen</option>
                    <option value="staff">Staff</option>
                    <option value="mahasiswa">Mahasiswa</option>
                    <option value="infrastruktur">Infrastruktur</option>
                    <option value="pengajaran">Pengajaran</option>
                </select>

                <label for="tanggal">Tanggal Kejadian</label>
                <input type="date" id="tanggal" name="tanggal" placeholder="dd/mm/yy"><br>
                
                <input type="file" name="lampiran" id="lampiran">

                <input type="checkbox" id="anonim" name="anonim" value="1">
                <label for="anonim">Anonim</label><br><br>

                <button type="submit">LAPOR!</button>
            </form>
            <button ><a href="/tampilkanlaporan">CANCEL</a></button>
            <script>
                function goBack() {
                    history.back();
                }

            </script>
        </div>
    </div>

</body>

</html>

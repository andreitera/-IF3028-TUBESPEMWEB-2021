<!DOCTYPE html>
    <html>
        <head>
            <title>Buat Laporan/Komentar</title>
            <link rel="stylesheet" href="{{ asset('css/style.css') }}"type="text/css">
        </head>
<body>
<div class="container">  
    <div class="content">
		<div class="header">
            <header style="text-align: center;margin: 50px;">
                <h1>IF SIAGA LAPOR!</h1>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSP1NcsHf_auML9glkHz5cIuBjXgz4m_0Mw7Q&usqp=CAU.jpg"alt="Informatika" width="400px" height="150px"> 
            </header>
        </div>
    	<div class="head">
        	Buat Laporan/Komentar
		</div>
		<hr>
	<form method="post" action="#" enctype="multipart/form-data">
    <div class="main">
		<textarea rows="10" cols="100" name="comment" placeholder="Laporan/Komentar" required></textarea>
	</div><br>
    <div class="aspek">
        <select name="aspek" required>
            <option value="">Pilih Aspek Pelaporan/Komentar</option>
				<option value="Dosen">Dosen</option>
				<option value="Asprak">Asisten Praktikum</option>
                <option value="Mahasiswa">Mahasiswa</option>
                <option value="Infrasktruktur">Infrasktruktur</option>
				<option value="Matkul">Matakuliah</option>			
        </select>
	</div><br>
    <div class="file">
        <input type="file" name="lampiran" required style="display: block; padding-top: 5px;">
	</div><br>
    <div class="btn_submit">
        <button name="buat" style="display: block; padding-top: 5px;">Buat LAPOR!</button>
    </div>
	</form><br>
    <hr>
    </div>
</div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Lihat Laporan</title>
</head>
<body>
<div class="header">
            <header style="text-align: center;margin: 50px;">
                <h1>IF SIAGA LAPOR!</h1>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSP1NcsHf_auML9glkHz5cIuBjXgz4m_0Mw7Q&usqp=CAU.jpg"alt="Informatika" width="400px" height="150px"> 
            </header>
        </div>
    	<div class="head">
            Detail Laporan/Komentar
		</div>
		<hr>

    <p>{{$report->laporan}}</p>
    <p>{{$report->lampiran}}</p>
    <p>{{$data->created_at}}</p>
    <p>{{$report->aspek}}</p>

    <form action="{{ route('edit', $data->id) }}" method="POST">
        @csrf
        <button type="submit">Edit Laporan/Komentar</button>
    </form>

    <form action="{{ route('delete', $data->id) }}" method="POST">
        @csrf
        <button type="submit">Hapus Laporan/Komentar</button>
    </form>
    <hr> 
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="/css/detail.css">

	<title>Detail Page</title>
</head>
<body>
	<div class="container">
		<h2>SIMPLE LAPOR!</h2>

		
		<div class="list">

			<div class="header">
				<p>Detail Laporan/Komentar </p>
				<hr>
			</div>
            @foreach($data as $DATA)
			<div class="list-item">
				<p>{{$DATA->komentar}}</p>

				<div class="list-lampiran">
					<p>Lampiran : </p>

                    <img src="/file_data/{{$DATA->file}}" width="300px" height="300px">
				</div>

				<div class="list-nav">
					<span class="aspek">Waktu: {{$DATA->waktu}}   </span>
                    <span>Aspek: {{$DATA->aspek}}</span>
					<span class="nav1">
                        <a  href="/update/{{$DATA->id}}">Update | </a>
                        <a  href="/delete/{{$DATA->id}}" onclick="return confirm('Ingin menghapus data ?')">Hapus Laporan/Komentar &#10008;</a>
                    </span>
				</div>

				<hr>
			</div>
                @endforeach
		</div>
	</div>
</body>
</html>

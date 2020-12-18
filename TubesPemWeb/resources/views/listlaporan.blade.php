<!DOCTYPE html>
<html>
<head>
	<title>SIMPLE LAPOR!</title>
	<style>
		body{
			background-image: url({!!asset('assets/img/web_1.jpg')!!});
			background-size: cover;
			background-attachment: fixed;
		}
		p{
			color: black;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="{!!asset('assets/css/listlaporan.css')!!}">
</head>
<body>

	<br>
	
		<center><h1>SIMPLE LAPOR!</h1></center>
			<form class="pencarian" onSubmit="" action="" method="post">
				<input class ="search" type="text" name="keyword" placeholder="search" autocomplete="off" autofocus>
				<input class="button" type="submit" name="submit" placeholder="cari" value="Cari">
			</form>
			<br>

		<center><a href="/buatlaporan">Buat Laporan/Komentar <img class="tambah" src="{!!asset('assets/img/websatu.jpg')!!}"></a></p> </center>

        </br>

	<div class="body1">
		<p>Laporan/Komentar Terakhir</p>
	</div>
	@foreach ($laporan as $lprn)
	@php($selengkapnya = substr($lprn->isi_laporan,0,300))
	<div class="body2">
		<hr color="black" size="2" width="93%">
		<h3>{{$lprn->judul_laporan}}</h3>
		<p>{{$selengkapnya}} ......</p>
		<p>Lampiran: {{$lprn->lampiran}} <span>Waktu : {{$lprn->tgl_kejadian}} <a href="/laporan/{{$lprn->id_laporan}}">Lihat Selengkapnya ></a></span></p>
	</div>
	@endforeach 
	<div class="space1"></div><br>
	<div class="space1"></div><br>
	<div class="space1"></div>
</body>
</html>
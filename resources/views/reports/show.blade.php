@extends('layout.main')

@section('title','Detail Laporan')
@section('style')
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('/css/detailStyle.css') }}" type="text/css">
 <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
@section('container')
    <div id="badan">
         <div class="head">Layanan Aspirasi dan Pengaduan Mahasiswa ITERA</div>
        <div class="box">
            <div class="keterangan">
                <p>Detail Laporan/Komentar</p>
            </div>
            <hr width="100%">
            <div class="judul-laporan">
                {{$posts->judul}}
            </div>
            <div class="isi">
                <p>{{$posts->isi}}</p>
                <img src="{{url('/attachment/'.$posts->file)}} " style="width: 35%; height: 35%;" >
            </div>
            <div class="atribut">
                <div class="left">
                    <a>Waktu : {{$posts->created_at}}</a>
                </div>
                <div class="left">
                    <a>aspek : {{$posts->aspect}}</a>
                </div>
                <div class="right">
                    <form action="/reports/{{$posts->id}}" method="post" style="float: right">
                        @method('delete')
                        @csrf
                        <button class="button" type="submit">Delete</button>
                    </form>
                    <a class="button edit" href="{{$posts->id}}/edit" style="float: right">Edit</a>
                </div>
            </div>
            <a class="button" href="/">Kembali</a><br><br>
            <hr>
            </div>
        </div>
</div>
@endsection
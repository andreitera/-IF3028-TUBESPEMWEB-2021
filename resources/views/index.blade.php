@extends('layout.main')

@section('title','Halaman Utama Lapor ITERA')
@section('style')
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('/css/indexStyle.css') }}" type="text/css">
<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <script src="indexScript.js"></script>
@section('container')
    @php
        function limit_words($string, $word_limit){
            $words = explode(" ",$string);
            return implode(" ",array_splice($words,0,$word_limit));
        }
    @endphp

<div id="badan">
        <div class="header">Layanan Aspirasi dan Pengaduan Mahasiswa ITERA</div>

            <form action="/search" class="search" id="myForm">
                <input type="search" placeholder="Cari disini..." name="search">
                <input type="submit" value="CARI">
            </form>

        <div class="buat-laporan">
            <a href="/reports/create">Buat Laporan/Komentar</a>
        </div>
        @if (count($reports))
        <div id="konten">
            Laporan/Komentar Terakhir
            @foreach ($reports as $posts)
            <hr width="auto">
            <div class="judul-laporan">
                {{$posts->judul}}
            </div>
            <div class="isi-laporan">
                @php
                    $isilaporan = limit_words($posts->isi,20);
                @endphp
                <p>{{$isilaporan}}</p>
            </div>
            <div class="atribut">
                <div class="left">
                <a>Lampiran : {{$posts->file}}</a>
                </div>
                <div class="right">
                    <a class="readmore" href="/reports/{{$posts->id}}">Lihat Selengkapanya &gt</a>
                </div>
                <div class="right">
                    <a> Wakkt :{{$posts->created_at}} </a>
                </div>
            </div>


            @endforeach
        </div>
</div>
@else
<h1>Page not found</h1>
@endif
@endsection
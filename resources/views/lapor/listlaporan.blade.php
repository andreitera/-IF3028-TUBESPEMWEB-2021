@extends('master.master')

@section('css')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('judul')
List Laporan
@endsection

@section('isi')
<div class="form-buat">

    @if(url()->current() != "http://127.0.0.1:8000/lapor/search")
    <p class="head-list">Banyak Laporan/Komentar saat ini <span class="badge">{{$jumlah['all']}}</span></p>
    <ul>
        @if(url()->current() == "http://127.0.0.1:8000/lapor")
        <a href="{{ route('lapor') }}" class="aktif">
            <li>
                All<span class="badge-nav">{{$jumlah['all']}}</span>
            </li>
        </a>
        @else
        <a href="{{ route('lapor') }}">
            <li>
                All<span class="badge-nav">{{$jumlah['all']}}</span>
            </li>
        </a>
        @endif

        @if(url()->current() == "http://127.0.0.1:8000/lapor/dosen")
        <a href="{{route('lapordosen')}}" class="aktif">
            <li>
                Dosen<span class="badge-nav">{{$jumlah['dosen']}}</span>
            </li>
        </a>
        @else
        <a href="{{route('lapordosen')}}">
            <li>
                Dosen<span class="badge-nav">{{$jumlah['dosen']}}</span>
            </li>
        </a>
        @endif

        @if(url()->current() == "http://127.0.0.1:8000/lapor/matkul")
        <a href="{{route('lapormatkul')}}" class="aktif">
            <li>
                Mata Kuliah<span class="badge-nav">{{$jumlah['matkul']}}</span>
            </li>
        </a>
        @else
        <a href="{{route('lapormatkul')}}">
            <li>
                Mata Kuliah<span class="badge-nav">{{$jumlah['matkul']}}</span>
            </li>
        </a>
        @endif

        @if(url()->current() == "http://127.0.0.1:8000/lapor/prodi")
        <a href="{{route('laporprodi')}}" class="aktif">
            <li>
                Prodi<span class="badge-nav">{{$jumlah['prodi']}}</span>
            </li>
        </a>
        @else
        <a href="{{route('laporprodi')}}">
            <li>
                Prodi<span class="badge-nav">{{$jumlah['prodi']}}</span>
            </li>
        </a>
        @endif

        @if(url()->current() == "http://127.0.0.1:8000/lapor/mahasiswa")
        <a href="{{route('lapormahasiswa')}}" class="aktif">
            <li>
                Mahasiswa<span class="badge-nav">{{$jumlah['mahasiswa']}}</span>
            </li>
        </a>
        @else
        <a href="{{route('lapormahasiswa')}}">
            <li>
                Mahasiswa<span class="badge-nav">{{$jumlah['mahasiswa']}}</span>
            </li>
        </a>
        @endif
    </ul>
    @else
    <span class="head-list">Hasil pencarian dengan kata kunci {{$jumlah['hasil']}} <span class="badge"> {{$jumlah['cari']}}</span></span>
    @endif


    <div class="bar"></div>
    {{-- satu laporan --}}
    @if($lapor == NULL)
    Tidak ada laporan terbaru
    @else
    @foreach($lapor as $lapor)
    <div style="margin-top:10px;">
        <table>
            <tr>
                <td>Judul</td>
                <td>: {{$lapor->from}}</td>
            </tr>
            <tr>
                <td>Pengirim</td>
                <td>: {{$lapor->title}}</td>
            </tr>
        </table>
    </div>
    <div class="tampil">{!! nl2br(e($lapor->content)) !!}</div>
    <div class="form-container">
        @if($lapor->file != "Tidak ada lampiran")
        <a href="{{ $lapor->file }}" style="text-decoration: none; flex:1;">Unduh Lampiran</a>
        @else
        <span style="color:#D0021B; flex:1;">Tidak ada lampiran</span>
        @endif
        <span style="margin-right: 20px !important">Waktu: {{$lapor->created_at}}</span>
        <span class="f-center"><a href="{{ route('laporShow', $lapor->id)}}">Lihat Selengkapnya</a><img src="{{ asset('image/right-arrow.svg') }}" alt="panah kanan" class="btn-icon" style="margin-left:2px"></span>
    </div>
    <div class="bar"></div>
    @endforeach
    @endif
    {{-- end satu laporan --}}
</div>
@endsection
@extends('master.master')

@section('css')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('judul')
List Laporan
@endsection

@section('isi')
<div class="form-buat">
    <p class="head-list">Banyak Laporan/Komentar saat ini <span class="badge">{{$jumlah['all']}}</span></p>
    <ul>
        <li>
            <a href="{{ route('lapor') }}">All</a><span class="badge-nav">{{$jumlah['all']}}</span>
        </li>
        <li>
            <a href="{{route('lapordosen')}}">Dosen</a><span class="badge-nav">{{$jumlah['dosen']}}</span>
        </li>
        <li>
            <a href="{{route('lapormatkul')}}">Mata Kuliah</a><span class="badge-nav">{{$jumlah['matkul']}}</span>
        </li>
        <li>
            <a href="{{route('laporprodi')}}">Prodi</a><span class="badge-nav">{{$jumlah['prodi']}}</span>
        </li>
        <li>
            <a href="{{route('lapormahasiswa')}}">Mahasiswa</a><span class="badge-nav">{{$jumlah['mahasiswa']}}</span>
        </li>
    </ul>
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
                <td>: {{$lapor->from}}</td>
            </tr>
        </table>
    </div>
    <div class="tampil">{{$lapor->content}}</div>
    <div class="form-container">
        @if($lapor->file != "Tidak ada lampiran")
        <a href="{{ $lapor->file }}" style="text-decoration: none; flex:1;">Unduh Lampiran</a>
        @else
        <span style="color:#D0021B; flex:1;">Tidak ada lampiran</span>
        @endif
        <span style="margin-right: 20px !important">Waktu: {{$lapor->created_at}}</span>
        <span class="f-center"><a href="{{ route('laporShow', $lapor->id)}}">Lihat Selengkapnya</a><img src="{{ asset('image/right-arrow.svg') }}" alt="panah kanan" class="icon-bawah" style="margin-left:2px"></span>
    </div>
    <div class="bar"></div>
    @endforeach
    @endif
    {{-- end satu laporan --}}
    <div class="f-center" style="margin-top: 30px">
        <img src="{{ asset('image/titik3.svg') }}" alt="icon titik3" style="height: 25px">
    </div>
</div>
@endsection
@extends('template')

@section('content')
    <div id="header">
        <h1> Layanan Pengaduan Prodi Teknik Informatika</h1>
    </div>
    <div id="wrapper">
    <div class="judulKecil">Rincian Aspirasi dan Laporan</div>
        <br>
        {{$laporanDetail->isi}}
        <br>
        File :
        <br>
        <img src="{{ './../uploads/'.$laporanDetail->file }}" class="gambar" alt="Gambar">
        <div class="flex-container">
        <div class="sebaris">
            Time : {{$laporanDetail->tanggal}}
            </div>
            <div class="sebaris">
            Posisi : {{$laporanDetail->nama_aspek}}
            </div>
        <div class="sebaris">
            <form method="post" action="/laporan/{{$laporan->id_laporan}}">
            @csrf
            @method('DELETE')
            <button type="submit">
                Hapus Riwayat
            </button>
            </form>
        </div>
        </div>
    </div>

@endsection

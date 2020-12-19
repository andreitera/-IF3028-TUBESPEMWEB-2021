@extends('template')

@section('content')
    <div id="header">
        <h1>SIMPEL LAPOR!</h1>
    </div>
    <div id="wrapper">
    <div class="judulKecil">Detail Laporan/Komentar</div>
        <br>
        {{$laporanDetail->isi}}
        <br>
        Lampiran:
        <br>
        <img src="{{ './../uploads/'.$laporanDetail->file }}" class="gambar" alt="Gambar">
        <div class="flex-container">
        <div class="sebaris">
            Waktu: {{$laporanDetail->tanggal}}
            </div>
            <div class="sebaris">
            Aspek: {{$laporanDetail->nama_aspek}}
            </div>
        <div class="sebaris">
            <form method="post" action="/laporan/{{$laporan->id_laporan}}">
            @csrf
            @method('DELETE')
            <button type="submit">
                Hapus Laporan/Komentar
            </button>
            </form>
        </div>
        </div>
    </div>

@endsection

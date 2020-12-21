@extends('master.master')

@section('css')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('judul')
Edit Laporan
@endsection

@section('isi')
<div class="form-buat">
    <form method="POST" action="{{ route('laporupdate', $lapor->unique_id) }}" enctype="multipart/form-data" class="form">
        @csrf
        Buat Laporan/Komentar
        <div class="bar"></div>
        <input type="text" name="from" class="inpt" value="{{ $lapor->from }}" placeholder="Nama Pengirim" style="margin-top: 20px !important">
        <br>
        <input type="text" name="title" class="inpt" value="{{ $lapor->title }}" placeholder="Judul Laporan/Komentar">
        <textarea id="laporan" name="content" placeholder="Laporan/Komentar">{{ $lapor->content }}</textarea>
        <select name="aspect" id="aspek">
            <option value="1" disabled selected>Pilih Aspek Pelaporan/Komentar</option>
            <option value="Dosen">Dosen</option>
            <option value="Mata Kuliah">Mata Kuliah</option>
            <option value="Prodi">Prodi</option>
            <option value="Mahasiswa">Mahasisa</option>
        </select>
        <br>
        <input type="button" value="Choose File" onclick="document.getElementById('pic').click()" class="btn-file">
        <input type="text" id="filename" name="oldfile" value="{{ $lapor->file }}">
        <input type="file" id="pic" name="filelapor" style="display:none" onchange="document.getElementById('filename').value=this.value">
        <div class="container">
            <button type="submit" id="submit" class="btn">Ubah LAPOR!</button>
        </div>
        <div class="bar"></div>
    </form>
</div>
@endsection

@section('jsbawah')

@endsection
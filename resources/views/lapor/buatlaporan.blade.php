@extends('master.master')

@section('css')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('isi')
<div class="form-buat">
    <form method="POST" action="{{ route('laporbuat') }}" enctype="multipart/form-data" class="form">
        @csrf
        Buat Laporan/Komentar
        <div class="bar"></div>
        <input type="text" name="from" class="inpt" placeholder="Nama Pengirim" style="margin-top: 20px !important">
        <br>
        <input type="text" name="title" class="inpt" placeholder="Judul Laporan/Komentar">
        <textarea id="laporan" name="content" placeholder="Laporan/Komentar"></textarea>
        <select name="aspect" id="aspek">
            <option value="1" disabled selected>Pilih Aspek Pelaporan/Komentar</option>
            <option value="Dosen">Dosen</option>
            <option value="Mata Kuliah">Mata Kuliah</option>
            <option value="Prodi">Prodi</option>
        </select>
        <br>
        <input type="button" value="Choose File" onclick="document.getElementById('pic').click()" class="btn">
        <input type="text" id="filename" value="No File Choosen">
        <input type="file" id="pic" name="filelapor" style="display:none" onchange="document.getElementById('filename').value=this.value">
        <div class="container">
            <button type="submit" id="submit" class="btn">Buat LAPOR!</button>
        </div>
        <div class="bar"></div>
    </form>
</div>
@endsection
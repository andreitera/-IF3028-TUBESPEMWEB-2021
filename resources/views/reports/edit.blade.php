@extends('layout.main')

@section('title','Form Ubah Data Pelapor')
@section('style')
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('/css/createStyle.css') }}" type="text/css">
<script src="editScript.js"></script>
@section('container')
    <div class="container">
         Layanan Aspirasi dan Pengaduan Mahasiswa ITERA
        </div>
        <div class="container-2">
        <form action="/reports/{{$posts->id}}" method="post" id="formtambah" onsubmit="return validasi()" enctype="multipart/form-data">
            @method('patch')
            @csrf
            <p>Edit Laporan/Komentar</p>
            <hr>
            <div class="text-bar">
                    <div id="error_pesan"></div>
                <input class="judul" name="judul" type="text" placeholder="Judul.." value="{{$posts->judul}}">
                <textarea class="textinput" name="isi" cols="117" rows="10" placeholder="Ketikan laporan Anda..." value="{{$posts->isi}}">{{$posts->isi}}</textarea>
                <select class="select" name="aspect" placeholder="Pilih Kategori">
                    <option value="{{$posts->aspect}}">{{$posts->aspect}}</option>
                    <option value="Dosen">Dosen</option>
                    <option value="Infrasturktur">Infrasturktur</option>
                    <option value="Mahasiswa">Mahasiswa</option>
                    <option value="Pengajaran">Pengajaran</option>
                    <option value="Staff">Staff</option>
                </select>
                <div id="input">
                    <input type="file" name="file" value="{{url('/attachment/'.$posts->file)}}">
                </div>
                    <input class="button" type="submit" value="Sumbit">
            </div>
        </form>
    </div>
    <script>

    </script>
@endsection
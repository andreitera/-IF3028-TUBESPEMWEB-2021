@extends('Master.master')
{{-- @section('css')

<link rel="stylesheet" href="{{ asset('css/styleEditcss') }}"> --}}

@section('css')
<link rel="stylesheet" href="{{ asset('css/styleHalamanEdit.css') }}">
@endsection

@section('content')
<body>
    <div class="card">
        <p class="card">Edit Laporan/Komentar</p>
        <hr>
        <form class="card" action="{{ route('storeedit', $data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                Pengirim:
                <input type="text" name="pengirim" value="{{$data->pengirim}}"><br>
            </div>
            <br>
            <div>
                Judul:
                <input type="text" name="judul" value="{{$data->judul}}"><br>
            </div>
            <br>
            <div class="main">
                <textarea rows="10" cols="100" name="laporan" value="{{$data->laporan}}"placeholder="Laporan/Komentar" required></textarea>
            </div><br>
            <select name="aspek" value="{{$data->aspek}}" style="display: block; padding-top: 5px;">
                    <option value="1">Pilih Aspek Pelaporan/Komentar</option>
                        <option value="Dosen">Dosen</option>
                        <option value="Mahasiswa">Mahasiswa</option>
                        <option value="Infrastruktur">Infrastruktur</option>
                        <option value="Pengajaran">Pengajaran</option> 
                </select><br>
                <div class="file">
                    <input type="file" name="lampiran" value="{{$data->lampiran}}" required style="display: block; padding-top: 5px">
                </div>
                <br>
                <button type="submit" style="display: block; padding-top: 5px;">Ganti LAPOR!</button>
            <br>
    </div>
</body>
@endsection
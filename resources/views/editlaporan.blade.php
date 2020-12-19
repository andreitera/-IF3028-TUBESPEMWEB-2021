@extends('Master.master')

@section('content')
<body>
    <h1>SIMPLE LAPOR!</h1>
    <p>Buat Laporan/Komentar</p>
    <hr>
    <form action="{{ route('storeedit', $data->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            Pengirim:
            <input type="text" name="pengirim" value="{{$data->pengirim}}"><br>
        </div>
        <div>
            Judul:
            <input type="text" name="judul" value="{{$data->judul}}"><br>
        </div>
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
        </div><br>
            <button type="submit" style="display: block; padding-top: 5px;">Ganti LAPOR!</button>
        <br>
    
</body>
@endsection
@extends('template')

@section('content')
    <div id="header">
        <h1>SIMPEL LAPOR!</h1>
    </div>
    <div class="judulKecil">Buat Laporan/Komentar</div>
    <div id="wrapper">
        <form action="{{ route('laporan.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <textarea name="isi" id="isi_konten" cols="30" rows="10"></textarea>
            <br>
            <div class="flex-container">
            <Select id="dropdown" name="id_aspek">
                @foreach ($aspek as $data)
                <option value="{{$data->id_aspek}}">{{$data->nama_aspek}}</option>
                @endforeach
            </Select>
            </div>
            <br>
            <div class="flex-container">
            <input type="file" name="file" id="formUpload"  accept="image/x-png,image/gif,image/jpeg">
            </div>
            <br>
            <div class="flex-container-end">
            <button id="laporBtn" type="submit">Buat LAPOR!</button>
            </div>
        </form>
    </div>

@endsection

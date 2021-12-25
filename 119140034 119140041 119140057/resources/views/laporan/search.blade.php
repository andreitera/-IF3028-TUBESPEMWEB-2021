@extends('template')
 
@section('content')
    <div id="header">
        <h1>Layanan Pengaduan Prodi Teknik Informatika</h1>
    </div>
    <div>
        <form id="search" action="/search" method="get">
            <input type="text" name="query" class="textbox" placeholder="Masukan Keyword">
            <button type="submit" class="button">search</button>
        </form>
    </div>
    <div id="create">
        <a id="buatBtn" href="{{ route('laporan.create') }}">
            Silahkan klik disini untuk input Aspirasi atau Pengaduan 
        </a>
    </div>
    <div id="list">
        <div class="judulKecil">Rekam Jejak Laporan</div>
        <br>
        @foreach ($laporan as $data)
            {{$data->isi}}
            <br>
            <div class="card-bottom">
                <div class="cb-left">
                File 
                <br>
                <img src="{{ './../uploads/'.$data->file }}" class="gambar" alt="Gambar">
                </div>
            {{$data->created_at}}
            <a class="detailBtn" href="{{ route('laporan.show',$data) }}">More Info</a>
            </div>
            @endforeach
    </div>

    {!! $laporan->links() !!}
@endsection
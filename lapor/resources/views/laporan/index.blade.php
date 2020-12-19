@extends('template')
 
@section('content')
    <div id="header">
        <h1>SIMPEL LAPOR!</h1>
    </div>
    <div>
        <form id="search" action="/search" method="get">
            <input type="text" name="query" class="textbox" placeholder="Masukan Keyword">
            <button type="submit" class="button">Cari</button>
        </form>
    </div>
    <div id="create">
        <a id="buatBtn" href="{{ route('laporan.create') }}">
            Buat Laporan/Komentar
        </a>
    </div>
    <div id="list">
        <div class="judulKecil">Laporan/Komentar Terakhir</div>
        <br>
        @foreach ($laporan as $data)
            {{$data->isi}}
            <br>
            <div class="card-bottom">
                <div class="cb-left">
                Lampiran 
                <br>
                <img src="{{ './uploads/'.$data->file }}" class="gambar" alt="Gambar">
                </div>
            {{$data->created_at}}
            <a class="detailBtn" href="{{ route('laporan.show',$data) }}">Lihat Selengkapnya</a>
            </div>
            @endforeach
    </div>

    {!! $laporan->links() !!}
@endsection
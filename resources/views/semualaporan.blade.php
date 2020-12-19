@extends('Master.master')

@section('css')
<link rel="stylesheet" href="{{ asset('css/styleSemuaLaporan.css') }}">
@endsection

@section('content')
<header style="text-align: center;margin: 50px;">
    <h1 clas="card">Tampilkan Laporan</h1>
</header>

    <ul>
        @foreach ($data as $data)
        <li class="card">
            {{ $data->laporan }}
            <a href="{{ route('show', $data->id) }}">Lihat Selengkapnya</a>
        </li>
        @endforeach
    </ul>
</body>

@endsection
@extends('Master.master')

@section('css')
<link rel="stylesheet" href="{{ asset('css/styleHalamanUtama.css') }}">
@endsection

@section('content')
<body>
    <div class="jumbotron">
        <h1>SIMPLE LAPOR!</h1>

        <form action="{{ route('cari') }}" method="POST">
            @csrf
            <label for="">
                <input type="text" name="cari" autocomplete="off">
            </label>
            <button type="submit">Cari</button>
        </form>

        <a href="{{ url('/formlapor') }}">Buat laporan/komentar</a><br>
        <a href="{{ url('/listlaporan') }}">Lihat Semua Laporan/Komentar</a>
    </div>
    <main>
        <div>
            <ul>
                @foreach ($data as $report)
                <li class="card">
                    {{ $report->laporan }}
                    <a href="/reports/{{ $report->id }}">Lihat Selengkapnya</a>
                </li>
                @endforeach
            </ul>
        </div>
    </main>
    @endsection

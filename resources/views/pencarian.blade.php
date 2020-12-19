@extends('Master.master')
@section('css')
<link rel="stylesheet" href="{{ asset('css/styleCari.css') }}">

@endsection

@section('content')

<div class="jumbotron">
<h1>Berikut hasil pencarian</h1>
</div>

<div class="card"
@foreach ($data as $report)
    <li>
        {{ $report->laporan }}
        <a href="/reports/{{ $report->id }}">Lihat Selengkapnya</a>
    </li>

</div>
@endforeach
@endsection
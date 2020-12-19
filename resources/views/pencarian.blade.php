@extends('Master.master')

@section('content')
<h1>Berikut hasil pencarian</h1>

@foreach ($data as $report)
    <li>
        {{ $report->laporan }}
        <a href="/reports/{{ $report->id }}">Lihat Selengkapnya</a>
    </li>
@endforeach
@endsection
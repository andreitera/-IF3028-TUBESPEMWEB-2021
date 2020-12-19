@extends('Master.master')

@section('content')
<h1>Tampilkan Laporan</h1>

    <ul>
        @foreach ($data as $data)
        <li>
            {{ $data->laporan }}
            <a href="{{ route('show', $data->id) }}">Lihat Selengkapnya</a>
        </li>
        @endforeach
    </ul>
</body>

@endsection
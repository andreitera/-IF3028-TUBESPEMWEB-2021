@extends('master.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('isi')
<div class="home">
    <img src="{{ asset('image/home-cover.jpg') }}" alt="home-cover" class="home-cover">
    <img src="{{ asset('image/bawahheader.svg') }}" alt="home-white" class="home-white">
</div>
@endsection
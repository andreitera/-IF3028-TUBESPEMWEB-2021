@extends('master.master')

@section('css')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('isi')
<div class="form-buat">
    <div class="info">
        <img src='{{ asset("image/bell.svg") }}' alt='icon hapus' class='bell'>
        <p>Silahkan masukkan alamat email untuk menyimpan UniqID</p>
        <p>UniqID digunakan untuk edit/hapus Laporan/Komentar</p>
    </div>
    <div class="uniq">
        <span>UniqID anda</span>
        <form method="GET" action="{{ route('sendemail') }}">
            @csrf
            <input type="hidden" name="uniqid" value="{{$uniqid}}">
            <p>{{$uniqid}}</p>
            <input type="text" name="email" class="info-send">
            <button type="submit" class="btn-uniqid">Kirim</button>
        </form>
    </div>
</div>
@endsection
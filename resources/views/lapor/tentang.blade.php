@extends('master.master')

@section('css')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap');
</style>
@endsection

@section('judul')
    Tentang Lapor!
@endsection

@section('isi')
<div class="form-buat">
    <div class="tentang">
        <p>
            Lapor! dibangun atas dasar memenuhi kebutuhan tugas besar matakuliah Pemrograman Web tahun 2020. Lapor! menyediakan layanan bagi civitas akademika Teknik Informatika ITERA untuk menyampaikan keresahan atau mengadukan persimpangan alur birokrasi yang terdapat pada lingkup prodi Teknik Informatika ITERA.
        </p> 
        <img src="{{ asset('image/tentang.jpg') }}" alt="">
    </div>
    {{-- <div class="container container-crew">Alur Pembuatan Laporan</div> --}}
    <div class="container container-crew">Our Crew</div>
    <div class="container">
        <div class="container-social" style="background-image: url('{{ asset('image/fikri.jpeg') }}');margin-top:100px;">
            <a href="https://www.instagram.com/fikrihalimch/" class="soc"><img src="{{ asset('image/instagram.svg') }}" alt=""></a>
            <a href="https://api.whatsapp.com/send?phone=6282184981440" class="soc"><img src="{{ asset('image/whatsapp.svg') }}" alt=""></a>
            <a href="https://github.com/ryznocaHub" class="soc"><img src="{{ asset('image/github.svg') }}" alt=""></a>
        </div>
        <div class="container-social" style="background-image: url('{{ asset('image/fikri.jpeg') }}');margin-top:100px;">
            <a href="https://www.instagram.com/fikrihalimch/" class="soc"><img src="{{ asset('image/instagram.svg') }}" alt=""></a>
            <a href="https://api.whatsapp.com/send?phone=6282184981440" class="soc"><img src="{{ asset('image/whatsapp.svg') }}" alt=""></a>
            <a href="https://github.com/ryznocaHub" class="soc"><img src="{{ asset('image/github.svg') }}" alt=""></a>
        </div>
        <div class="container-social" style="background-image: url('{{ asset('image/fikri.jpeg') }}');margin-top:100px;">
            <a href="https://www.instagram.com/fikrihalimch/" class="soc"><img src="{{ asset('image/instagram.svg') }}" alt=""></a>
            <a href="https://api.whatsapp.com/send?phone=6282184981440" class="soc"><img src="{{ asset('image/whatsapp.svg') }}" alt=""></a>
            <a href="https://github.com/ryznocaHub" class="soc"><img src="{{ asset('image/github.svg') }}" alt=""></a>
        </div>
        {{-- <div>
            Fikri Halim Ch
            118140055
        </div> --}}
    </div>
</div>
@endsection

@section('jsbawah')
<script src="https://kit.fontawesome.com/d808726940.js" crossorigin="anonymous"></script>
@endsection
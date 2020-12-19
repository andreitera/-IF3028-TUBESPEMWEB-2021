@extends('master.master')

@section('css')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('isi')
<div class="form-buat">
    <div style="display: flex; justify-content:center">
        <input type="text" name="judul" id="judulsearch">
        <button class="btn-search"><img src="{{ asset('image/search-black.svg') }}" alt="icon search" class="search">Cari</button>
    </div>
    <form method="POST" action=" route('searchlapor') " enctype="multipart/form-data" class="form">
    <div class="text-detail" style="margin-bottom: 40px">Buat Laporan/Komentar <img src="{{ asset('image/plus.svg') }}" alt="icon plus"></div>
    Laporan/Komentar Terakhir
    <div class="bar"></div>
    {{-- satu laporan --}}
    <div class="detail">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat deserunt natus ipsum rerum ad corporis, a adipisci? Debitis iure dignissimos quae a culpa nemo commodi? Eum cumque aliquam doloremque facere, adipisci veniam sed dignissimos maxime obcaecati tempora, iure consectetur. Sed, repellendus aperiam? Odit architecto autem recusandae officiis! Laudantium obcaecati tempora magnam at quia cumque illum quidem totam, amet sint sit quas nobis pariatur corporis veniam eligendi dolores vitae ea et deleniti nam eaque modi dolorum. Dolores doloremque, saepe eius mollitia sapiente, odit optio quibusdam possimus repudiandae sit modi reprehenderit quas at voluptatum sunt dolor! Pariatur modi assumenda vitae odit commodi?</div>
    <div class="form-container">
        <span class="form-container-aspek">Lampiran: Gambar.Jpg</span>
        <span style="margin-right: 20px !important">Waktu: 20-11-2019 20:00</span>
        <span class="f-center">Lihat Selengkapnya<img src="{{ asset('image/right-arrow.svg') }}" alt="panah kanan" class="icon-bawah" style="margin-left:2px"></span>
    </div>
    <div class="bar"></div>
    {{-- end satu laporan --}}
    <div class="f-center" style="margin-top: 30px">
        <img src="{{ asset('image/titik3.svg') }}" alt="icon titik3" style="height: 25px">
    </div>
</div>
@endsection
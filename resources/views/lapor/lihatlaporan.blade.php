@extends('master.master')

@section('css')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('isi')
<div class="judul">
    <div class="judul-kata1">Layanan Aspirasi dan Pengaduan Online Teknik Informatika ITERA</div>
    <div class="judul-kata2">Sampaikan Laporan Anda Langsung Kepada Pihak Terkait</div>
    <div class="judul-bar"></div>
</div>
<div class="form-buat">
    <div class="cont-detail">
        <div style="flex: 1">
            <table>
                <tr>
                    <td>Pengirim</td>
                    <td>: {{$lapor->title}}</td>
                </tr>
                <tr>
                    <td>Judul</td>
                    <td>: {{$lapor->title}}</td>
                </tr>
            </table>
        </div>
        <img src="{{ asset('image/tutup.svg') }}" alt="icon close" width="30px" height="30px">
    </div>
    
    <div class="bar"></div>
    <input type="hidden" name="name" value="$lapor->unique_id">
    <div class="detail">{{$lapor->content}}</div>
    <div style="margin-top: 20px">Lampiran:</div>
    {{-- <div class="lampiran"></div> --}}
    <div class="lampiran" style="background-image: url('http://www.dumetschool.com/images/fck/Capturebilly25518nov2.JPG')">
    </div>
    
    <div class="form-container">
        <span style="margin-right: 25px !important">Waktu: 20-11-2019 20:00</span>
        <span class="form-container-aspek">Aspek: {{$lapor->aspect}}</span>
        <div class="kode"></div>
        <span>Edit <img src="{{ asset('image/edit.svg') }}" alt="icon edit" class="icon-bawah"></span>
        <span> | </span>
        <span style="margin-right: 0px !important"> Hapus <img src="{{ asset('image/close.svg') }}" alt="icon hapus" class="icon-bawah"></span>
    </div>
    {{-- <iframe src="http://www.dumetschool.com/images/fck/Capturebilly25518nov2.JPG&embedded=true" frameborder="0"></iframe> --}}
    <div class="bar"></div>
</div>
@endsection
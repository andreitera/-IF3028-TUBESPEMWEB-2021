@extends('master.master')

@section('css')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('isi')
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
        {{-- <img src="{{ asset('image/tutup.svg') }}" alt="icon close" width="30px" height="30px"> --}}
    </div>

    <div class="bar"></div>
    <input type="hidden" name="name" value="$lapor->unique_id">
    <div class="detail">{{$lapor->content}}</div>
    <div style="margin-top: 20px">Lampiran:</div>
    @if($lapor->file != "Tidak ada lampiran")
    <a href="{{ $lapor->file }}" style="text-decoration: none;">Unduh Lampiran</a>
    @else
    <span style="color:#D0021B">Tidak ada lampiran</span>
    @endif
    {{-- <div class="lampiran" style="background-image: url('http://www.dumetschool.com/images/fck/Capturebilly25518nov2.JPG')">
    </div> --}}

    <div class="form-container detil">
        <span style="margin-right: 25px !important">Waktu: {{$lapor->created_at}}</span>
        <span class="form-container-aspek">Aspek: {{$lapor->aspect}}</span>
        <form action="{{ route('laporcek') }}" method="POST">
            @csrf
            <span style="color:#b4b4b4" id="txt">Masukkan UniqID untuk edit/hapus</span>
            <input type='text' name='uniqid' id='uniqueid' class='input-uniq' style="width:100px">
            <input type="hidden" name="id" value="{{$lapor->id}}" id="">
            <span id="btn-eh">
                <button onclick="uniq()" class="btn-detail">OK</a>
            </span>
        </form>
    </div>
    <div class="bar"></div>
</div>
@endsection

@section('jsbawah')
<script>
    function uniq() {
        document.getElementById("txt").remove();
        document.getElementById("uniqueid").setAttribute("hidden", "True");
        document.getElementById("btn-eh").outerHTML =
            "<button type='submit' name='action' value='edit' class='btn-edit' style='margin-right: 10px'>Edit<img src='{{ asset('image/edit.svg') }}' alt='icon edit' class='btn-icon'></button>" +
            "<span> | </span>" +
            "<button type='submit' name='action' value='hapus' class='btn-hapus'>Hapus<img src='{{ asset('image/close.svg') }}' alt='icon hapus' class='btn-icon'></button>";
    }
</script>
@endsection
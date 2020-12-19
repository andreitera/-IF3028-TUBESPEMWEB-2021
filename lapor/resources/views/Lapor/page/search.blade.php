@extends('Lapor.layout.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('asset/css/Searchstyle.css') }}">
@endsection

@section('content')
    <div class="background">
        <div class="search">Hasil Pencarian: "<div class="d-in-block search-for">{{$queue}}</div>"</div>
        @foreach ($listSearch as $search)
            <div class="center">
                <div>
                    <img src="{{ asset('asset/images/user-icon.png') }}" class="profile-pict"/> 
                </div>
                <div class="d-in-block width-91">
                    <div class="date">{{$search->tgl_kejadian}}</div>
                    <div class="padding-bottom status">
                        <div class="d-in-block padding-right phone-number">+62621187168</div> 
                        <div class="d-in-block padding-right"><img src="{{ asset('asset/images/icons/call.png') }}" class="icon">SMS </div> 
                        <div class="d-in-block padding-right state">Ditutup oleh admin</div>
                    </div>
                    <div class="padding-bottom status">Terdisporsi ke <div class="d-in-block bold">Pengelola Lingkungan Hidup Daerah</div></div>
                </div><br>

                <div class="p-left-50">
                    <div>
                        <h2 class="header">{{$search->title}}</h2>
                        <div>
                            {{$search->laporan}}
                        </div><br>
                    </div>

                    <div class="foto-lapor" style="border: 1px solid;">
                        GAMBAR
                    </div>
                    <br>
                </div>

                <div>
                    <div class="d-in-block">{{'#' . $search->id}}</div>
                    <div class="d-in-block padding-right"><img src="{{ asset('asset/images/icons/feedback.png') }}" class="icon">Tindak Lanjut</div>
                    <div class="d-in-block padding-right"><img src="{{ asset('asset/images/icons/comment.png') }}" class="icon">Komentar </div>
                    <div class="d-in-block padding-right"><img src="{{ asset('asset/images/icons/like.png') }}" class="icon">Dukung</div>
                    <div class="d-in-block padding-right"><img src="{{ asset('asset/images/icons/share.png') }}" class="icon">Bagikan</div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
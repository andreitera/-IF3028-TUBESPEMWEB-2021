@extends('Lapor.layout.master')
@section('css')
    <link rel="stylesheet" href="{{ asset('asset/css/LaporCommentStyle.css') }}">
@endsection

@section('content')
    <div class="center">
        <div>
            <img src="{{ asset('asset/images/user-icon.png') }}" class="profile-pict"/> 
        </div>
        <div class="d-in-block width-91">
            <div class="date">30 Februari 2077, 23:59</div>
            <div class="padding-bottom status">
                <div class="d-in-block padding-right phone-number">+62621187168</div> 
                <div class="d-in-block padding-right"><img src="{{ asset('asset/images/icons/call.png') }}" class="icon">SMS </div> 
                <div class="d-in-block padding-right state">Ditutup oleh admin</div>
            </div>
            <div class="padding-bottom status">Terdisporsi ke <div class="d-in-block bold">Pengelola Lingkungan Hidup Daerah</div></div>
            <div class="padding-bottom status">TRACKING ID: <div class="d-in-block bold">#1234556565</div></div>
        </div><br>

        <div class="p-left-50">
            <div>
                <h2 class="header">Mohon pemindahan tempat pembuangan sampah</h2>
                <div>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div><br>
                <div class="d-in-block padding-right status"><img src="{{ asset('asset/images/icons/bookmark.png') }}" class="icon">LAIN-LAIN</div>
                <div class="d-in-block">|</div>
                <div class="d-in-block padding-right status"><img src="{{ asset('asset/images/icons/view.png') }}" class="icon">LAPORAN <div class="d-in-block bold">x</div> Kali dilihat</div>
            </div><br>

            <div style="padding-left: 10px;" class="bottom-border p-left-10">
                <div class="d-in-block padding-right"><img src="{{ asset('asset/images/icons/feedback.png') }}" class="icon">Tindak Lanjut</div>
                <div class="d-in-block padding-right"><img src="{{ asset('asset/images/icons/comment.png') }}" class="icon">Komentar </div>
                <div class="d-in-block padding-right"><img src="{{ asset('asset/images/icons/like.png') }}" class="icon">Dukung</div>
                <div class="d-in-block padding-right"><img src="{{ asset('asset/images/icons/share.png') }}" class="icon">Bagikan</div>
            </div>
        </div>
    </div>
@endsection
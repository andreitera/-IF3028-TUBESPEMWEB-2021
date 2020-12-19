@extends('Lapor.layout.master')
@section('css')
    <link rel="stylesheet" href="{{ asset('asset/css/LaporCommentStyle.css') }}">
@endsection

@section('content')
    <div class="center">
        <div class="d-flex">
            <div class="user-icon">
                <img src="{{ asset('asset/images/user-icon.png') }}" class="profile-pict"/>
            </div>
            <div class="informations-lapor">
                <div class="padding-bottom status d-flex space-bettwen w-100">
                    <div class="left d-flex">
                        <div class="padding-right phone-number">Nestiawan Ferdiyanto</div> 
                        <div class="padding-right d-flex"><img class="icons top-tb" src="{{ asset('asset/images/icons/call.png') }}" class="icon"><p class="info-stat">SMS</p></div> 
                        <div class="padding-right state"><p class="info-stat">Ditutup oleh admin</p></div>
                    </div>
                    <div class="date">Rabu 2020/12/01, 23:59</div>
                </div>
                <div class="padding-bottom status">Terdisporsi ke <div class="d-in-block bold">Pengelola Lingkungan Hidup Daerah</div></div>
                <div class="padding-bottom status">TRACKING ID: <div class="d-in-block bold">#1234556565</div></div>

                <br>

                <div class="data-lapor">
                    <h2 class="header">Mohon pemindahan tempat pembuangan sampah</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <br>
                    
                    <div class="d-flex tag">
                        <div class="status"><img src="{{ asset('asset/images/icons/bookmark.png') }}" class="icons">LINGKUNGAN</div>
                        <div class="status">|</div>
                        <div class="status"><img src="{{ asset('asset/images/icons/view.png') }}" class="icons">Laporan <div class="d-in-block bold">2</div> Kali dilihat</div>
                    </div>
                        
                        <br>
        
                    <div class="d-flex action pb-4">
                        <div class="padding-right"><img src="{{ asset('asset/images/icons/feedback.png') }}" class="icon">Tindak Lanjut</div>
                        <div class="active-comment padding-right"><img src="{{ asset('asset/images/icons/comment.png') }}" class="icon">Komentar </div>
                        <div class="padding-right"><img src="{{ asset('asset/images/icons/like.png') }}" class="icon">Dukung</div>
                        <div class="padding-right"><img src="{{ asset('asset/images/icons/share.png') }}" class="icon">Bagikan</div>
                    </div>
                    <div class="bottom-border"></div>

                    <div class="comment-section">
                        <div class="comment-alert">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
                        </div>
                        <div class="comment d-flex">
                            <div class="user-icons">
                                <img src="{{ asset('asset/images/user-icon.png') }}" class="profile-pict"/>
                            </div>
                            <div style="width: 52vw !important;">
                                <div class="date">
                                    30 Februari 2077, 23:59
                                </div>
                                <div class="names-comment">
                                    Samwan
                                </div>
                                <div class="comments">
                                    Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="d-in-block">
                                <form action=#>
                                    <div class="d-flex">
                                        <div class="icons-user">
                                            <img src="{{ asset('asset/images/user-icon.png') }}" class="profile-pict"/>
                                        </div>
                                        <div class="comment-input">
                                            <textarea name="add-comment" rows="4" class="add-comment" cols="98%" placeholder="Komentar Anda"></textarea>
                                            <br>
                                            <input type="submit" value="Kirim" class="send-button">
                                            {{-- <a href="#" class="close-button">Tutup</a> --}}
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><br>
    </div>
@endsection
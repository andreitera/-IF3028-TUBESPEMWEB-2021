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
                        <div class="padding-right phone-number"> {{ $listLapor->users->name }} </div> 
                        <div class="padding-right d-flex"><img class="icons top-tb" src="{{ asset('asset/images/icons/call.png') }}" class="icon"><p class="info-stat"> {{ $listLapor->users->no_tlp }} </p></div> 
                        <div class="padding-right state"><p class="info-stat">{{ $listLapor->libraries_status_id->name }}</p></div>
                    </div>
                    <div class="date">{{ date('d M Y H:i', strtotime($listLapor->created_at)) }}</div>
                </div>
                <div class="padding-bottom status">Terdisporsi ke <div class="d-in-block bold"> {{ $listLapor->provinces->name }} </div></div>
                <div class="padding-bottom status">TRACKING ID: <div class="d-in-block bold">#{{$listLapor->id}}</div></div>

                <br>

                <div class="data-lapor">
                    <h2 class="header">{{$listLapor->title}}</h2>
                    <p>
                        {{ $listLapor->laporan }}
                    </p>
                    <br>
                    
                    <div class="d-flex tag">
                        <div class="status"><img src="{{ asset('asset/images/icons/bookmark.png') }}" class="icons"> {{$listLapor->libraries_category_id->name}} </div>
                        {{-- <div class="status">|</div> --}}
                        {{-- <div class="status"><img src="{{ asset('asset/images/icons/view.png') }}" class="icons">Laporan <div class="d-in-block bold">2</div> Kali dilihat</div> --}}
                    </div>
                        
                        <br>
        
                    <div class="d-flex action pb-4">
                        {{-- <div class="padding-right"><img src="{{ asset('asset/images/icons/feedback.png') }}" class="icon">Tindak Lanjut</div> --}}
                        <div class="active-comment padding-right"><img src="{{ asset('asset/images/icons/comment.png') }}" class="icon">Komentar </div>
                        {{-- <div class="padding-right"><img src="{{ asset('asset/images/icons/like.png') }}" class="icon">Dukung</div> --}}
                        {{-- <div class="padding-right"><img src="{{ asset('asset/images/icons/share.png') }}" class="icon">Bagikan</div> --}}
                    </div>
                    <div class="bottom-border"></div>

                    <div class="comment-section">
                        <div class="comment-alert">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
                        </div>
                        
                        @forelse ($listComment as $comment)
                            <div class="comment d-flex">
                                <div class="user-icons">
                                    <img src="{{ asset('asset/images/user-icon.png') }}" class="profile-pict"/>
                                </div>
                                <div style="width: 52vw !important;">
                                    <div class="date">
                                        {{ date('d M Y H:i', strtotime($comment->created_at)) }}
                                    </div>
                                    <div class="names-comment">
                                        {{ $comment->users->name }}
                                    </div>
                                    <div class="comments">
                                        {{ $comment->komentar }}
                                    </div>
                                </div>
                            </div>
                        @empty
                            <p class="text-center" style="margin: 20px 0;">
                                Tidak Ada Komentar
                            </p>
                        @endforelse

                        <div>
                            <div class="d-in-block">
                                
                                @if (Auth::check())
                                    <form action="{{ route('koment.post') }}" method="post">
                                        @csrf
                                        <div class="d-flex">
                                            <div class="icons-user">
                                                <img src="{{ asset('asset/images/user-icon.png') }}" class="profile-pict"/>
                                            </div>
                                            <div class="comment-input">
                                                <input type="text" name="lapor_id" value="{{ $listLapor->id }}" style="display: none;" id="">
                                                <textarea name="add_comment" rows="4" class="add-comment" cols="98%" placeholder="Komentar Anda"></textarea>
                                                <br>
                                                <input type="submit" value="Kirim" class="send-button">
                                                {{-- <a href="#" class="close-button">Tutup</a> --}}
                                            </div>
                                        </div>
                                    </form>
                                @else
                                    <p class="text-center" style="margin: 20px 0;">
                                        Silakan <a href="{{ route('login.user') }}">Login</a> terlebih dahulu jika ingin berkomentar
                                    </p>
                                @endif
                                @include('component.alert')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><br>
    </div>
@endsection
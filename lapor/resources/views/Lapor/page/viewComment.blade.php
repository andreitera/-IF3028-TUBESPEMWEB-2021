<!DOCTYPE html>
<html>
    <head>
        <title>View Komentar</title>
        <link rel="stylesheet" href="{{ asset('asset/css/LaporCommentStyle.css') }}">
    </head>
    <body>
        <header class="d-flex">INI HEADER</header>
        <div class="background">
            <div class="center">
                <div>
                    <img src="{{ asset('asset/images/icons/profile.png') }}" class="profile-pict"/> 
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
                        <div class="active-comment d-in-block padding-right"><img src="{{ asset('asset/images/icons/comment.png') }}" class="icon">Komentar </div>
                        <div class="d-in-block padding-right"><img src="{{ asset('asset/images/icons/like.png') }}" class="icon">Dukung</div>
                        <div class="d-in-block padding-right"><img src="{{ asset('asset/images/icons/share.png') }}" class="icon">Bagikan</div>
                    </div>
                    <div class="comment-section">
                        <div class="comment-alert">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. 
                        </div>
                        <div class="comment">
                            <div>
                                <img src="{{ asset('asset/images/icons/profile.png') }}" class="profile-pict"/>
                            </div>
                            <div class="d-in-block width-91">
                                <div class="date">
                                    30 Februari 2077, 23:59
                                </div>
                                <div class="header">
                                    Samwan
                                </div>
                                <div>
                                    Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <img src="{{ asset('asset/images/icons/profile.png') }}" class="profile-pict"/>
                            </div>
                            <div class="d-in-block">
                                <form action=#>
                                    <textarea name="add-comment" rows="4" cols="63" class="add-comment">
Komentar Anda...
                                    </textarea>
                                    <br>
                                    <input type="submit" value="Kirim" class="send-button">
                                    <input type="submit" value="Tutup" class="close-button">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="d-flex">INI FOOTER</footer>
    </body>

</html>
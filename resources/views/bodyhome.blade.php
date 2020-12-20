<div class="kotak">
    <center>
        <input type="text" class="input" id="cari" /><button class="src" onclick="cari()"><img class="kaca" src="{{asset('image/icon-search.png')}}" alt="" /><span class="desc">Cari</span></button>
    </center>
</div>

<div class="buat">
    <center><a class="buatlap" href="#laporan" onclick="buat()">Buat Laporan/Komentar</a></center>
    <img src="{{asset('image/icon-plus.png')}}" alt="" class="icon-plus"/>
</div>
<br />
<br />
<br />
<br />
<div class='fontlaporanmasuk'>
        <p class='font1'><b>Laporan/Komentar Terakhir</b></p>
        <hr />
        <div id="search">
            @foreach ($data as $item)
                <div>
                    <p>
                        {{ $item->contents }}
                    </p>
                    <?php $a = explode("/", $item->file); ?>
                    <div class="lampiran">
                        <p>Lampiran: {{ count($a) >= 2 ? $a[1] : ""}}</p>
                    </div>

                    <div class="waktu">
                        <p>Waktu: {{ $item->created_at }}</p>
                    </div>
                    <div class="lihat" onclick="detail({{$item->id}})">
                        <p>Lihat Selengkapnya ></p>
                    </div>

                    <div class="clearfix"></div>
                    <hr />
                </div>
            @endforeach
        </div>
    </div>
</div>

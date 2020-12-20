<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan</title>
    <link rel="stylesheet" href="home.css">
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Poppins' rel='stylesheet' type='text/css'>
    <script>
        function cari() {
            var word = document.getElementById("cari").value;
            var data = new FormData();
            data.append("keyword", word);
            console.log(data.get('keyword'));
            axios.post('cari', data).then(function(response){
                console.log(response.data);
                if(response.data == ""){
                    alert("data tidak ditemukan!");
                }
                else{
                    document.getElementById("search").innerHTML = response.data;
                }
            });
        }
        function buat() {
            axios.get('form').then(response => {
                document.getElementById("root").innerHTML = response.data;
            })
        }
        function home() {
            axios.get('home').then(response => {
                document.getElementById("root").innerHTML = response.data;
            })
        }
        function up() {
            var contents = document.getElementById("contents").value;
            var aspect = document.getElementById("aspect").value;
            var file = document.getElementById("file");
            if(file.files.length > 0){
                file = file.files[0];
            }
            var data = new FormData();
            data.append("contents", contents);
            data.append("aspect", aspect);
            data.append("file", file);
            axios.post('create', data).then(response => {
                alert("Data berhasil dibuat!");
                home();
            });
        }
        function detail(id) {
            axios.get('detail/'+id).then(response => {
                document.getElementById("root").innerHTML = response.data;
            })
        }
        function hapus(id) {
            var conf = confirm("Anda yakin ingin menghapus data?");
            if(conf){
                var data = new FormData();
                data.append("id", id);
                axios.post("delete", data).then(response => {
                    alert("data sukses dihapus");
                    home();
                });
            }
        }
        function edit(id) {
            var data = new FormData();
            data.append("id", id);
            axios.post("edit", data).then(response => {
                document.getElementById("root").innerHTML = response.data;
            });
        }
        function update(id) {
            var contents = document.getElementById("contents").value;
            var aspect = document.getElementById("aspect").value;
            var file = document.getElementById("file");
            // if(file.files.length > 0){
            //     file = file.files[0];
            // }
            var data = new FormData();
            data.append("id", id);
            data.append("contents", contents);
            data.append("aspect", aspect);
            if(file.files.length > 0){
                data.append("file", file.files[0]);
            }
            axios.post('update', data).then(response => {
                alert("Update Sukses!");
                home();
            });
        }
    </script>
</head>
<style>
    body{
        margin: 0;
        overflow-x: hidden;
    }
    #link_home{
        cursor: pointer;
    }
    #link_home:hover{
        text-shadow: 0 0 22px white;
    }
    .margin {
        margin: auto 100px auto 100px;
    }

    .font{
        font-family: 'Poppins';
        color: white;
    }

    .font1{
        font-family: 'Poppins';
        margin-top: -15px;
        font-size: 24px
    }

    ._font1{
        font-family: 'Poppins';
        margin-top: -15px;
        font-size: 24px;
        color: white;
    }

    .font2{
        font-family: 'Poppins';
        font-size: 28px;
        color: white;
    }

    .fontlaporanmasuk{
        font-family: 'Poppins';
        font-size: 16px;
        margin-top: 120px;
    }

    .kotak {
        width: 100%;
    }

    .kaca{
        width: 30px;
        height: 30px;
        margin: auto 0 auto 0;
        padding-right:10px;
    }

    .desc{
        margin: auto 0 auto 0;
    }

    .input {
        padding-left: 20px;
        font-size:18px;
        width: 800px;
        height: 40px;
        border-top-left-radius: 45px;
        border-top-right-radius: 0px;
        border-bottom-right-radius: 0px;
        border-bottom-left-radius: 45px;
        vertical-align: bottom;
        border: none;
    }

    .src {
        font-size: 18px;
        width: 100px;
        height: 42px;
        padding-right: 40px;
        padding-left: 10px;
        background: transparent;
        border-top-left-radius: 0px;
        border-top-right-radius: 45px;
        border-bottom-right-radius: 45px;
        border-bottom-left-radius: 0px;
        display: inline-flex;
        vertical-align: bottom;
        background-color: #e5e5e5;
        outline: none;
        border: none;
    }
    .buat{
        display: flex;
        height: 30px;
        text-align: center;
        width: fit-content;
        margin: 20px auto 0px auto;
    }
    .buatlap{
        font-family: 'Poppins';
        text-decoration: none;
        font-size: 20px;
        display: inline-flex;
        margin: auto 10px auto 0;
        padding: 0;
        color: white;
        font-weight: 300;
    }
    .buatlap:hover{
        text-shadow: 0 0 20px white;
    }
    .icon-plus{
        width: 30px;
    }
    .lampiran {
        float: left;
        width: 60%;
    }
    input:focus{
        outline: none;
    }
    .waktu {
        float: left;
        width: 20%;
        text-align: right;
    }

    .lihat {
        float: left;
        width: 20%;
        text-align: right;
        cursor: pointer;
    }

    .clearfix {
        clear: both;
    }
    .test{
        width: 100vw;
        height: 793px;
        position: absolute;
        left: 0px;
        top: -50px;
        background-repeat: no-repeat;
        background-size: contain;
        z-index: -1;
        overflow: hidden;
    }
    #root{
        margin-bottom: 100px;
    }
</style>
<body>
    <br />
    <br />
    <div class="margin" >
        <div style="background-image: url('{{asset("image/bg-atas.png")}}');" class="test"></div>
        <center><p class='font2'><b onclick="home()" id="link_home">Simple LAPOR!</b></p></center>
        <center><h1 class='font'>Layanan Aspirasi dan Pengaduan Online Informatika ITERA</h1></center>
        <center><p class='_font1'>Sampaikan laporan Anda langsung dibawah ini</p></center>
        <br/>
        </br>
        </br>
        <div id="root">
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
        </div>

</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan</title>
    <link rel="stylesheet" href="home.css">
    <link href='http://fonts.googleapis.com/css?family=Poppins' rel='stylesheet' type='text/css'>
</head>
<style>
    body{
        margin: 0;
        overflow-x: hidden;
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
        background-color: #c4c4c4;
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
</style>
<body>
    <br />
    <br />
    <div class="margin" >
        <div style="background-image: url('https://www.bing.com/images/blob?bcid=S6E-xh3BgywCLQ');" class="test"></div>
        <center><p class='font2'><b>Simple LAPOR!</b></p></center>
        <center><h1 class='font'>Layanan Aspirasi dan Pengaduan Online Informatika ITERA</h1></center>
        <center><p class='_font1'>Sampaikan laporan Anda langsung dibawah ini</p></center>
        <br/>
        </br>
        </br>
        <div id="root">
            <div class="kotak">
                <center>
                    <input type="text" class="input" /><button class="src"><img class="kaca" src="{{asset('image/icon-search.png')}}" alt="" /><span class="desc">Cari</span></button>
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
                    <div>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Obcaecati dolore, velit ullam dignissimos, inventore saepe dolores minus quibusdam voluptatum doloremque sunt alias, eos iste aut. Quisquam deleniti cupiditate doloribus
                            officiis. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur iusto provident, tenetur et inventore similique laboriosam mollitia at minima magni explicabo ab totam cumque molestiae, iure soluta eveniet saepe
                            assumenda?
                        </p>

                        <div class="lampiran">
                            <p>Lampiran: Gambar.jpg</p>
                        </div>

                        <div class="waktu">
                            <p>Waktu: 20-11-2019 20:00</p>
                        </div>
                        <div class="lihat">
                            <p>Lihat Selengkapnya ></p>
                        </div>

                        <div class="clearfix"></div>
                        <hr />
                    </div>
                    <div>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Obcaecati dolore, velit ullam dignissimos, inventore saepe dolores minus quibusdam voluptatum doloremque sunt alias, eos iste aut. Quisquam deleniti cupiditate doloribus
                            officiis. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur iusto provident, tenetur et inventore similique laboriosam mollitia at minima magni explicabo ab totam cumque molestiae, iure soluta eveniet saepe
                            assumenda?
                        </p>

                        <div class="lampiran">
                            <p>Lampiran: Gambar.jpg</p>
                        </div>

                        <div class="waktu">
                            <p>Waktu: 20-11-2019 20:00</p>
                        </div>
                        <div class="lihat">
                            <p>Lihat Selengkapnya ></p>
                        </div>

                        <div class="clearfix"></div>
                        <hr />
                    </div>
                    <div>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Obcaecati dolore, velit ullam dignissimos, inventore saepe dolores minus quibusdam voluptatum doloremque sunt alias, eos iste aut. Quisquam deleniti cupiditate doloribus
                            officiis. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur iusto provident, tenetur et inventore similique laboriosam mollitia at minima magni explicabo ab totam cumque molestiae, iure soluta eveniet saepe
                            assumenda?
                        </p>

                        <div class="lampiran">
                            <p>Lampiran: Gambar.jpg</p>
                        </div>

                        <div class="waktu">
                            <p>Waktu: 20-11-2019 20:00</p>
                        </div>
                        <div class="lihat">
                            <p>Lihat Selengkapnya ></p>
                        </div>

                        <div class="clearfix"></div>
                        <hr />
                    </div>
                </div>
            </div>
        </div>

</body>

</html>

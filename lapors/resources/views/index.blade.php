<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    function limit_words($string, $word_limit){
        $words = explode(" ",$string);
        return implode(" ",array_splice($words,0,$word_limit));
    }

    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lapor</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/indexStyle.css') }}">
</head>

<body>
    <div id = "javas">
    <div class="banner">SIMPLE LAPOR!</div>
    <div class="container-1">
        <input type="search" id="search" name= "search" placeholder="Search..." />    
    </div>

    <div class="isi-list">
        <div class="atribut">
            <a class ="cari" href="#" onclick="searchData()" >Cari</a>
        </div>
    </div>


    <div class="atastextarea" text-align="center">   
        <a href="#" onclick="create()">Buat Laporan/Komentar</a>
    </div>
    <br><br>
    
    @foreach($data as $d)  
    <hr width="70%">
    <div class="isi-list">
        
        <div class="isi-laporan">
        <?php 
            $limited_string = limit_words($d->report, 50);
        ?>
            <p>{{$limited_string}}</p>
        </div> 

        <div class="atribut ">
            <a style="float: left">Lampiran : {{$d->file}}</p>
            
            <a href="#" onclick="showDetail({{ $d->id }})"> Lihat Selengkapnya ></a>
            <a href="#" onclick="edit({{ $d->id }})"> Edit&ensp;</a>
            
            <a>  Waktu : {{$d->updated_at}} &ensp; </a>
        </div>
    </div>
    @endforeach
    </div>

    <script>
        function create() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                document.getElementById("javas").innerHTML =
                this.responseText;
                }
            };
            xhttp.open("GET", "/create", true);
            xhttp.send();
        }

        function showDetail(i) {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                document.getElementById("javas").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "/detail/"+i, true);
            xhttp.send();
        }
        
        function deleteData(i) {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                document.getElementById("javas").innerHTML =
                this.responseText;
                }
            };
            xhttp.open("GET", "/delete/"+i, true);
            xhttp.send();
        }

        function edit(i) {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                document.getElementById("javas").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "/edit/"+i, true);
            xhttp.send();
        }

        function searchData() {
            var xhttp = new XMLHttpRequest();
            var s = document.getElementById("search").value;
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                document.getElementById("search").innerHTML =
                this.responseText;
                }
            };
            xhttp.open("GET", "/search/"+s, true);
            xhttp.send();
        }
    </script>
</body>
</html>
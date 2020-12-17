<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lapor</title>
    <!-- <link rel="stylesheet" href="assets/beranda.css">  -->
<style>
    body {
        margin: 0;
        padding: 0;
    }

    h1, h6{
        text-align: center;
    }
    h6{
        margin-top: 0;
    }

    .search-container {
        /* max-width: 800px; */
        /* box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        padding: 16px;
        border-radius: 5px;
        display: flex;
        position: sticky; */
        /* top: 10px;
        background-color: white; */
        margin-left: 25%;
        margin-right: 25%;
    }
        
    .search-container > input {
        width: 75%;
        padding: 16px;
        border: 1px solid;
        /* border-bottom: 1px solid cornflowerblue; */
        font-weight: bold;
    }
        
    .search-container > input:focus::placeholder {
        font-weight: bold;
    }
        
    .search-container >  input::placeholder {
        color: cornflowerblue;
        font-weight: normal;
    }
        
    .search-container > button {
        width: 23%;
        cursor: pointer;
        padding: 15px;
        /* background-color: cornflowerblue; */
        /* color: white; */
        border: 1;
        /* text-transform: uppercase; */
    }

    .nav{
        text-align: right;
        background-color: #2E8B57;
        padding: 5px;
        position: sticky;
        top: 0;
    }

    .nav a{
        font-size: 18px;
        font-weight: 400;
        text-decoration: none;
        color: white;
    }

    .nav a:hover{
        font-weight: bold;
    }

    .nav li{
        display: inline;
        list-style-type: none;
        margin-right: 20px;
    }
    a{
        text-decoration: none;
        color: black;
    }
</style>
</head>
<body>
    <div class="nav">
        <ul>
            <li><a href="<?php echo base_url('home'); ?>">Home</a></li>
            <li><a href="<?php echo base_url('lapor'); ?>">Buat Laporan</a></li>
            <li><a href="<?php echo base_url(''); ?>">Masuk</a></li>
            <li><a href="<?php echo base_url(''); ?>">Daftar</a></li>
        </ul>
    </div>
  
    <h1>SIMPLE LAPOR!</h1>
    <br><br>
    <div id="search-container" class="search-container">
            <input  id="searchElement" type="search">
            <button id="searchButtonElement" type="submit">Cari</button>
    </div>
    <a href="<?php echo base_url('lapor'); ?>"><h6>Buat Laporan/Komentar</h6></a>
  
</body>
</html>
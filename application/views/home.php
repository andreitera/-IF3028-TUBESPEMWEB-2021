<!DOCTYPE html>
<html>
<head>
	<style>
.header {
  padding: 5px;
  text-align: center;
  background: red;
  color: white;
  font-size: 15px;
  position: static;
}
.header h1{
    text-align: left;
    font-family: monospace;
}
.header img{
    margin-left: 0px;
    float: left;
}
.navbar ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

.navbar li {
  float: left;
}

.navbar li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.navbar li a:hover {
  background-color: #111;   
}
.footer {
  padding: 15px;
  text-align: center;
  background: red;
  color: white;
  font-size: 15px;
  position: sticky;
}
form {
    width:100%;
    margin:50px auto;
/*    padding-top: 20px;
    padding-bottom: 0px;*/
    position: relative;
}
.cari {
    padding:20px 15px;
    background-color: white;
    border:1px solid black;
    margin-left: 120px;
    width: 700px;
}
.submit {
    position:relative;
    padding:20px 15px;
    left:-8px;
    border:1px solid black;
    color:black
}
.submit:hover  {
    background-color:grey;
    color:black;
}
p{
    text-align: center;
}   

hr{
    width: 100%;
}
#box{
    width:80%;          
    height:100%; 
    margin-top: 40px;
    margin-left: 150px;
    position: relative;
    border: solid 1px black;
}

.konten1 p{
    font-size: 13px;
    text-align: justify;
    margin-left: 50px;
    margin-right: 50px;
}

.konten1 h4{
    margin-left: 50px;
    margin-right: 50px;
    margin-bottom: 0px;
}
.konten2 h4{
    margin-left: 50px;
    margin-right: 50px;
    margin-bottom: 0px;
}
.konten2 p{
     font-size: 13px;
    text-align: justify;
    margin-left: 50px;
    margin-right: 50px;   
}
.konten2 span{
    float: right;
}

.konten3 h4{
    margin-left: 50px;
    margin-right: 50px;
    margin-bottom: 0px;
}
.konten3 p{
     font-size: 13px;
    text-align: justify;
    margin-left: 50px;
    margin-right: 50px;   
}
.konten3 span{
    float: right;
}
.konten4 h4{
    margin-left: 50px;
    margin-right: 50px;
    margin-bottom: 0px;
}
.konten4 span{
    float: right;
}
.space1{
    width: 25px;
    height: 25px;
    background: black;
    border-radius: 100%;
    margin-left: 450px;
}


.lampiran1 h4{
    margin-left: 50px;
    margin-right: 50px;
    margin-bottom: 0px;
}

.lampiran1 pre {
    margin-left: 50px;
    margin-right: 50px;
    margin-bottom: 0px;
}
#boxlapor{
    width:80%;          
    height:100%; 
    margin-top: 100px;
    margin-left: 150px;
    position: relative;
    border: solid 1px black;
}
.nama{
    padding:10px 15px;
    background-color: white;
    border:1px solid black;
    margin-left: 150px;
    width: 30%;
}
.kontak{
    padding:10px 15px;
    background-color: white;
    border:1px solid black;
    margin-left: 150px;
    width: 30%;
}
.lapor p{
    text-align: left;
    margin-left: 140px;
    margin-right: 50px;
    margin-bottom: 0px;
}
.lapor hr{
    width: 75%;
    margin-bottom: 0px;
}

textarea{
    margin-left: 150px;
    margin-top: 0px;
    height: 70%;
}
.buat{
    float: right;
    margin-right: 100px;
    position:relative;
    padding:12px 20px;
    left:-8px;
    border:1px solid black;
    color:black
}
select{
    border:solid 1px black;
    width: 250px;
    height: 40px;
    margin-left: 150px;
}
.upload{
    border:none;
    width: 250px;
    height: 20px;
    margin-left: 150px;
    font-size: 13px;
}
.output{
    margin-left: 0px;
}
.tgl{
    float: right;
}</style>
</head>
<body>
	<div class="header">
	  <h1>LAPOR!</h1>
	</div>
	<div class="navbar">
		<ul>
		  <li><a class="active" href="<?php echo base_url().''; ?>">Beranda</a></li>
		  <li><a href="<?php echo base_url().'create'; ?>">Buat Laporan/Komentar</a></li>
		</ul>
	</div>
	<div id="box">	
		<form action="<?php echo base_url().'search' ?>"   method="GET" >
			<input type="text" name ="keyword" placeholder="cari..." class="cari">	
			<input type="submit" value="Cari" class="submit"><br>
		</form>				
		<div class="konten1">
		<h4>Laporan/Komentar Terakhir</h4>
		<hr>
		<div class="output">
		<?php foreach($laporan as $laporan_item){?>
		<?php if(strlen($laporan_item['komentar']) <= 400){?>
			<p> <?php echo $laporan_item['komentar'];?></p>
	<?php	}else { ?>
		<p> <?php echo substr ($laporan_item['komentar'] ,0, 400).'...';?></p>
		<?php		}  ?>
		 <?php echo '<img src="data:image/;base64,'.base64_encode( $laporan_item['lampiran'] ).'"/>' ?>
		 <div class="tgl">
		<p> <?php echo $laporan_item['tanggal'];?>
		 <!-- <h4>Lampiran: Gambar.jpg <span>(WAKTU)  </span></h4>  -->
		<a href="<?php echo base_url().'detail/'.$laporan_item['no']; ?>"> Lihat Selengkapnya ></a>></p>
	</div>
	<hr>
		<?php } ?>
	</div>

		</div>
		
			<div class="footer">
	  		<p>Adelia Yasmin</p>
	  		<p>118140040</p>
		</div>		
</body>
</html>	

<?php
defined('BASEPATH') OR exit('No direct script access allowed');


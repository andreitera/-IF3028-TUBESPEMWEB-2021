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
}
	</style>
</head>
<body>
	<div class="header">
	  <h1>LAPOR!</h1>
	</div>
	<div class="navbar">
		<ul>
		  <li><a class="active" href="<?php echo base_url().'';?>">Beranda</a></li>
		  <li><a href="<?php echo base_url().'create'; ?>">Buat Laporan/Komentar</a></li>
		</ul>
	</div>	
	<div id="boxlapor">
		<h1 align="center">SIMPLE LAPOR!</h1>
		<div class="lapor">
		<p>Buat Laporan/Komentar</p><hr>
		</div>

			
			<form name="users" onsubmit="return validateForm()" method="POST" action="<?php echo base_url().'tambah' ?>">
				<input type="text" name="nama" placeholder="Nama" class="nama"><br><br>
				<input type="text" name="kontak" placeholder="Kontak" class="kontak"><br><br>
				<textarea onkeypress="activateSubmit()" id="#some-textarea" cols="110" rows="20" name ="komentar" placeholder="Laporan/Komentar"></textarea><br>
				<select name="aspek_pelaporan">
					<option selected="selected" disabled="disabled">Pilih Aspek Laporan/Komentar</option>
					<optgroup label="--"></optgroup>
					<option value="dosen">Dosen</option>
					<option value="staff">Staff</option>
					<option value="mahasiswa">Mahasiswa</option>
					<option value="infrastruktur">Infrastruktur</option>
					<option value="pengajaran">Pengajaran</option>
				</select><br><br>
				<input class="upload" type="file" name ="lampiran" value="Choose File"><br>
				<input class="buat" type="submit" value="Buat LAPOR!" id="#submit-button">
			</form>											
		</div>
		<div class="footer">
	  		<p>Adelia Yasmin</p>
	  		<p>118140040</p>
		</div>		
</body>
</html>	
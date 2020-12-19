<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/login.css'?>">
</head>
<body>
<header>
<div class="container">
    <div id="bagiankiri">
      </div>
          <nav>
			<ul>
            <li class="active"><a href="#" > Tentang Lapor! </a></li>
             <li> <a href="#"> Laporan </a></li>
             <li> <a href="#"> Cari Aduan </a></li>
             <div class="box">
  		<div class="container-1">
      		<span class="icon"><i class="fa fa-search"></i></span>
      			<input type="search" id="search" placeholder="Search..." />
  			</div>
		</div>
          </ul>
      </nav>
     <div id="bagiankanan">
	      <nav>
            <ul>
             <li>
	        <li> <a href="#"> Masuk </a></li> 
		       <li> <a href="#"> Daftar </a></li>
              </li>
             </ul>
         </nav>
        </div>
     </div>
  </header>
 
<div class="login">
    <nav id="komen">
		<h1>Silahkan Login</h1>
        <form class="form-login" method="POST">
		<input class="inputLogin" type="email" placeholder="Email"> </input>

		<input class="inputLogin" type="password" placeholder="Password"> </input>

		<input type="submit" class="submitButton" value="LOGIN"><br/><br/>
		<a href=""> Tidak Punya Akun? <b>Register</b> </a><br>
		</form>
	</div class="login">

<footer>
            <section id="spons">
                <div class="container">
                    <div class="box">
                        <p>Download Aplikasi Mobile LAPOR!</p>
                        <img src="<?php echo base_url().'assets/img/google.png'?>" width="150">

                    </div>
                    <div class="box">
                            <p>Dikembangkan Oleh : </p>
                            <img src="<?php echo base_url().'assets/img/logo itera oke.png'?>" width="90" >


                     </div>
                    <div class="box">
                            <p>Lebih Dekat dengan Kami!</p>
                            <img src="<?php echo base_url().'assets/img/Instagram_icon.png'?>" width="49" >
                            <img src="<?php echo base_url().'assets/img/facebook.png'?>" width="52">

                        </div>

                </div>
            </section>
            <p id="copyright" > Copyright  @2019</p>

        </footer> 
      </body>
</html>

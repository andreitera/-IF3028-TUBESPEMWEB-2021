<!DOCTYPE html>
<html>
<head>

    <style>
        body {font-family: Arial, Helvetica, sans-serif;}
        
        /* Full-width input fields */
        input[type=text], input[type=password] {
          width: 80%;
          padding: 20px 20px 20px 20px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #ccc;
          box-sizing: border-box;
        }
        
        /* Set a style for all buttons */
        .btn-navbar {
          background: #ae0b1a;
          font-size: 18px;
          color: white;
          padding: 18px 22px;
          width: 10px;
          height: 60px;
          margin-right: 22px;
          border: none;
          cursor: pointer;
          /* width: 100%; */
        }

        .btn-login {
            background: #ae0b1a;
          font-size: 18px;
          color: white;
          padding: 18px 22px;
          /* height: 60px; */
          margin-right: 22px;
          border: none;
          cursor: pointer;
          /* width: 100%; */
        }
        
        button:hover {
          /* opacity: 0.8; */
          background-color: #111;
        }
        
        /* Extra styles for the cancel button */
        .cancelbtn {
          width: auto;
          padding: 10px 18px;
          background-color: #f44336;
        }
        
        /* Center the image and position the close button */
        .imgcontainer {
          text-align: center;
          margin: 24px 0 12px 0;
          position: relative;
        }
        
        img.avatar {
          width: 40%;
          border-radius: 50%;
        }
        
        .container {
          padding: 16px;
        }
        
        span.psw {
          float: right;
          padding-top: 16px;
        }
        
        /* The Modal (background) */
        .modal {
          display: none; /* Hidden by default */
          position: fixed; /* Stay in place */
          z-index: 1; /* Sit on top */
          /* left: 0;
          right: 0;
          top: 0; */
          width: 100%; /* Full width */
          height: 100%; /* Full height */
          overflow: auto; /* Enable scroll if needed */
          background-color: rgb(0,0,0); /* Fallback color */
          background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
          padding-top: 30px;
        }
        
        /* Modal Content/Box */
        .modal-content {
          background-color: #fefefe;
          margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
          border: 1px solid #888;
          width: 30%; /*Could be more or less, depending on screen size */
          height: 50%;
          padding-left: 20px;
          padding-right: 20px;
        }
        
        /* The Close Button (x) */
        .close {
          position: absolute;
          right: 25px;
          top: 0;
          color: #000;
          font-size: 35px;
          font-weight: bold;
        }
        
        .close:hover,
        .close:focus {
          color: red;
          cursor: pointer;
        }
        
        /* Add Zoom Animation */
        .animate {
          -webkit-animation: animatezoom 0.6s;
          animation: animatezoom 0.6s
        }
        
        @-webkit-keyframes animatezoom {
          from {-webkit-transform: scale(0)} 
          to {-webkit-transform: scale(1)}
        }
          
        @keyframes animatezoom {
          from {transform: scale(0)} 
          to {transform: scale(1)}
        }
        
        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
          span.psw {
             display: block;
             float: none;
          }
          .cancelbtn {
             width: 100%;
          }
        }
        </style>

<style>
body{
    margin: 0;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background: -webkit-linear-gradient(-148deg, #ae0b1a, #d20d48);
}

li {
  float: right;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 18px 22px;
  text-decoration: none;
  font-size: 18px;
}

li a:hover {
  background-color: #111;
}
.header {
  padding: 80px;
  text-align: center;
  background: -webkit-linear-gradient(-148deg, #ae0b1a, #d20d48);
  color: white;
  font-size: 30px;
}

/* Page Content */
.content {padding:20px;}

.hero-image {
  /* background-image: -webkit-linear-gradient(-148deg, #ae0b1a, #d20d48), url("photographer.jpg"); */
  /* height: 50%; */
  /* background-position: center;
  background-repeat: no-repeat;
  background-size: cover; */
  position: relative;
  margin: 0;
  /* padding: 10px 16px; */
  padding-left: 150px;
  padding-top: 10px;
  /* overflow: hidden; */
  
}

</style>
</head>
<body>

<ul>
    <img src="https://www.lapor.go.id/themes/lapor/assets/images/logo.png" alt="" class="hero-image">
  <li><button class="btn-navbar" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">LOGIN</button></li>
  <li><a class="active" href="/register">DAFTAR</a></li>
  <li><a class="active" href="/">HOME</a></li>
</ul>



<div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <h2>LOGIN ACCOUNT</h2>
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>
        <br>
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        <br>
      <button class="btn-login" type="submit">Login</button>
     
    </div>

    
  </form>
</div>


<div class="header">
    <h1>Layanan Aspirasi dan Pengaduan Online Rakyat</h1>
    <p>Sampaikan laporan Anda langsung kepada instansi pemerintah berwenang</p>
  </div>


  <script>
    // Get the modal
    var modal = document.getElementById('id01');
    
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    </script>

</body>
</html>

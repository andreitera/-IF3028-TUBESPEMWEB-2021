<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  width: 800px;
  margin: auto;
  background: white;
  padding: 10px;
  height: 850px;
  padding: 25px;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
  font-family: Arial, Helvetica, sans-serif;
}
label {
  margin-left: 20px;
}
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
  font-family: Arial, Helvetica, sans-serif;
}

/* Overwrite default styles of hr */
hr {
  border: 1px currentColor #f1f1f1;
  margin-bottom: 25px;
}
h1 {
  margin-left: 15px;
  font-family: Arial, Helvetica, sans-serif;
}
p {
  margin-left: 20px;
  font-family: Arial, Helvetica, sans-serif;
}

/* Set a style for the submit button */
.registerbtn {
  background: #ae0b1a;
  color: white;
  padding: 16px 20px;
  margin: 0px 0;
  border: none;
  cursor: pointer;
  width: 40%;
  margin-bottom: 25px;
  opacity: 0.9;
  font-size: 20px;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
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
.topnav input[type=text] {
  float: right;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  border: none;
  font-size: 17px;
}


@media screen and (max-width: 600px) {
  .topnav a, .topnav input[type=text] {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}

</style>
</head>
<body>

<form action="/registerUser" method="post">
@csrf

  <div class="container">
    <h1>REGISTER ACCOUNT</h1>
    
    <p>Please fill in this form to create an account.</p>
    <hr>

    <tr>
      <td><label for="nama"><b>Nama</b></td>
      <td><input type="text" placeholder="Masukkan Nama" name="nama" id="nama" required></td>
    </tr>
    <br>
    <tr>
      <td><label for="usernama"><b>Username</b></label></td>
      <td><input type="text" placeholder="Masukkan Username" name="username" id="username" required></td>
    </tr>
    <br>
    <tr>
      <td><label for="email"><b>Email</b></label></td>
      <td><input type="text" placeholder="Masukkan Email" name="email" id="email" required></td>
    </tr>
    <br>
    <tr>
      <td><label for="nohp"><b>No.hp</b></label></td>
      <td><input type="text" placeholder="Masukkan No.Hp" name="nohp" id="nohp" required></td>
    </tr>
    <br>
    <tr>
      <td><label for="psw"><b>Password</b></label></tr></td>
      <td><input type="password" placeholder="Masukkan Password" name="psw" id="psw" required></label></tr></td>
    </tr>
    <br>
    <tr>
      <td><label for="psw-repeat"><b>Repeat Password</b></label></td>
      <td><input type="password" placeholder="Masukkan Ulang Password" name="psw_repeat" id="psw-repeat" required></td>
    </tr>
    <br>
    <hr>
    <center><button type="submit" class="registerbtn">DAFTAR!</button></center>
  </div>
</form>

</body>
</html>

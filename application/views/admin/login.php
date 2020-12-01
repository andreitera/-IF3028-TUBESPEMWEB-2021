<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
  background-image: url("assets/backlogin.png");
  background-size: cover;
}
* {
  box-sizing: border-box;
}
.bg-img {
  position: relative;
}
/* Add styles to the form container */
.container {
  position: absolute;
  right: 0;
  margin: 20px;
  max-width: 300px;
  padding: 16px;
  background-color: white;
}
/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
/* Set a style for the submit button */
.btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}
.btn:hover {
  opacity: 1;
}
.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 20px;
  line-height: 10px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>
<title>Masuk Admin</title>
</head>
<body>

<div class="bg-img">
  <form action="<?php echo base_url('auth/login'); ?>" class="container" method="post">
    <h1>Masuk</h1>
    <?php if($this->session->flashdata('login')): ?>
    <div class="alert">
      <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
      <?php echo $this->session->flashdata('login'); ?>
    </div>
  <?php endif; ?>
  <br>
    <label for="email"><b>Nama Pengguna</b></label>
    <input type="text" placeholder="Masukkan Nama Pengguna" name="username" required autocomplete="off">
    <label for="psw"><b>Kata Sandi</b></label>
    <input type="password" placeholder="Masukkan Kata Sandi" name="password" required>
    <button type="submit" class="btn">Masuk</button>
  </form>
</div>

</body>
</html>

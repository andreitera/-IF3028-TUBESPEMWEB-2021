<html>
<head>
  <title>Form Login</title>
</head>
<body>
  <h1>Silahkan login terlebih dahulu...</h1>
  <div style="color: red;margin-bottom: 15px;">
    <?php
    // Cek apakah terdapat session nama message
    if($this->session->flashdata('message')){ // Jika ada
      echo $this->session->flashdata('message'); // Tampilkan pesannya
    }
    ?>
  </div>
  <form method="post" action="<?php echo base_url('login') ?>">
    <label>Username</label><br>
    <input type="text" name="username" placeholder="Username"><br><br>
    <label>Password</label><br>
    <input type="password" name="password" placeholder="Password"><br><br>
    <button type="submit">Login</button>
  </form>
</body>
</html>
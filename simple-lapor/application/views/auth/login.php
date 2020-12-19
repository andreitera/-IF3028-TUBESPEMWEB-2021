
<div class="container">
  <nav>
      <a href="<?= base_url()?>">HOME</a>
  </nav>
    <form action="<?= base_url(); ?>auth" method="post">
      <h2> LOGIN AKUN </h2>
      <br><br>
      <input type="email" name="email" id="email" placeholder="Email" required>
      <br>

      <br>
      <input type="password" name="password" id="password" placeholder="Password" required>
      <br>
      <br>
      <br>
      <button type="submit" name="login">Login</button>
      <br>
    <br>
    <a href="<?= base_url('auth/register');  ?>" class="buat">Belum punya akun?Buat!</a>
    
    </form>

 </div>
<div class="container">
    <form action="<?= base_url('auth/register') ?>" method="post">
      <h2> REGISTRASI AKUN </h2>
      <input minlength="3" maxlength="20" type="text" name="fullname" id="fullname" placeholder="Full Name" required>
      <br>
      <br>
      <input type="email" name="email" id="email" placeholder="Email" required>
      <br>
      <br>
      <input minlength="3" maxlength="20" type="password" name="password" id="password" placeholder="Password" required>
      <br>
      <br>
      <input minlength="3" maxlength="20" type="password" name="password2" id="password2" placeholder="Repeat password" required>
      <br>
      <br>
      <button type="submit" name="register">Register</button>
    </form>
    <br>
    <a class="small" href="<?= base_url('auth') ?>">Sudah punya akun? Login!</a>
   
  </div>
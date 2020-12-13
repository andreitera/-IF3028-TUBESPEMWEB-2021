<div class="container">
    <form action="<?= base_url(); ?>auth" method="post">
      <h2> LOGIN AKUN </h2>
      <input type="email" name="email" id="email" placeholder="Email" required>
      <br>

      <br>
      <input type="password" name="password" id="password" placeholder="Password" required>
      <br>
      <br>

      <button type="submit" name="login">Login</button>
    </form>

    <br>
    <a href="<?= base_url('auth/register');  ?>">Create an Account!</a>
    <br>
    <br>

    <i class="fa fa-leaf" aria-hidden="true"></i>
  </div>
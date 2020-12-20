<fieldset>
  <div class="wrapper">
    <h1>Register</h1>
  </div>
  <br><br>
  <div id="container_regis">

    <form class="register" method="post" action="<?= base_url('auth/register'); ?>">
      <div class="username">
        <label for="username" id="label-user">Username</label>
        <input type="text" id="username" name="username" placeholder="Username">
        <small>
          <?= form_error('username'); ?>
        </small>
      </div>
      <br>
      <div class="password">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="password">
        <small>
          <?= form_error('password'); ?>
        </small>
      </div>
      <br>
      <button type="submit"> Register Akun</button>
    </form>
  </div>
</fieldset>
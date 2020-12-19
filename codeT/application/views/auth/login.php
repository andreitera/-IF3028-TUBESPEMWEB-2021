<fieldset>
	<div class="wrapper">
		<h1>Login</h1>
	</div>
	<br><br>
	<div id="container_login">
		<div class="tambah" id="div_tambah">
			<?= validation_errors(); ?>
			<form method="post" action="<?= base_url('auth') ?>">
				<label for="username" id="label-user">Username</label>
				<input type="text" name="username" id="username" placeholder="username">
				<!-- <?= form_error('username'); ?> -->
				<br><br>
				<label for="password">Password</label>
				<input type="password" name="password" id="password" placeholder="password">
				<!-- <?= form_error('password'); ?> -->
				<br><br>
				<button type="submit" id="tombol-login" value="Login">Login</button>
			</form>
		</div>
		<div class="register">
			<a href="<?= base_url('auth/register') ?>">
				<br>
				<button type="register" id="tombol-regis" value="Register">Register</button></a>
		</div>
	</div>
	<hr />

</fieldset>
<!-- login -->
<div id="id01" class="penampung animate">
<div class="modal">
<!--<div class="container">-->
<img onclick="document.getElementById('id01').style.display='none'" src="./assets/image/close.png" action="#">
<div class="text"> login</div>
<form action="<?= base_url('login/ceklogin'); ?>" method="post">
  <div class="data">
    <input type="text" placeholder="Username" name="username">
  </div>
  <div class="data">
    <input type="password" placeholder="Password" name="password">
  </div>
  <div class="btn">
    <div class="inner"></div>
    <button type="submit">Login</button>
  </div>
</form>
</div>
</div>
<!--batas login-->
	<script type="text/javascript">
		const bg = document.getElementById('header');
		window.addEventListener('scroll',function()
			{
				bg.style.backgroundSize = 140 - +window.pageYOffset/12+'%';
				bg.style.opacity = 1 - +window.pageYOffset/700+'';
			})
		var modal = document.getElementById('id01');
// ketika klik diluar form login akan close
    window.onclick = function(event)
    {
      if (event.target == modal) {
          modal.style.display = "none";
        }
    }
	</script>
  <input id="alamat" value="<?php echo base_url() ?>Home/cari/" hidden>
  <script src="<?php echo base_url() ?>/assets/ajax/ajax.js"></script>
</body>
</html>

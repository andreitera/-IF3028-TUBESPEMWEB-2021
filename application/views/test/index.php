<!DOCTYPE html>
<html>
<head>
	<title>Simple Lapor</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/gaya.css">


</head>
<body>

<!--ini header-->
		<div id="header">
			<img src="./assets/image/a.jpg">
			<div class="tengah">Simple Lapor</div>
			<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="tombol" >Ada yang ingin dilaporkan?</button>
		</div>
<!--ini header-->

			<div class="card">
				 <H2> Ahmad Auzan Varian syahputra asdasdsd asdasd </H2>
				 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				 <img src="./assets/image/dummy.png">
			</div>
			<div class="card">
				 <H2> nama </H2>
				 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				 <img src="./assets/image/dummy.png">
			</div>

<!-- login -->
<div id="id01" class="penampung animate">
<div class="modal">
<!--<div class="container">-->
		<img onclick="document.getElementById('id01').style.display='none'" src="./assets/image/close.png" action="#">
			<div class="text"> login</div>
			<form action="#">
				<div class="data">
					<input type="text" placeholder="Username">
				</div>
				<div class="data">
					<input type="password" placeholder="Password">
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
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
	</script>
</body>
</html>

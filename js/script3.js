window.onload = function () {
	var i = true;
	document.addEventListener("click", function () {
		if (i == false) {
			i = true;
		} else {
			document.getElementById("search").classList.remove("focus");

		}
	});

	document.getElementById("cari-lapor").addEventListener("click", function () {
		document.getElementById("search").classList.add("focus");
		i = false;
	});

	// menu bar
	document.getElementById("lapor-menu").addEventListener("click", function () {
		document.getElementById("lapor-menu").classList.toggle("change");
		document.getElementById("nav-show").classList.toggle("change");
	});
	// menu bar
}

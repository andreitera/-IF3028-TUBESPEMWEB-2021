window.onload = function () {
	/* start button */
	var x, i, j, selElmnt, a, b, c;
	/*look for any elements with the class "custom-select":*/
	x = document.getElementsByClassName("custom-select");
	for (i = 0; i < x.length; i++) {
		selElmnt = x[i].getElementsByTagName("select")[0];
		/*for each element, create a new DIV that will act as the selected item:*/
		a = document.createElement("DIV");
		a.setAttribute("class", "select-selected");
		a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
		x[i].appendChild(a);
		/*for each element, create a new DIV that will contain the option list:*/
		b = document.createElement("DIV");
		b.setAttribute("class", "select-items select-hide");
		for (j = 1; j < selElmnt.length; j++) {
			/*for each option in the original select element,
			create a new DIV that will act as an option item:*/
			c = document.createElement("DIV");
			c.innerHTML = selElmnt.options[j].innerHTML;
			c.addEventListener("click", function (e) {
				/*when an item is clicked, update the original select box,
				and the selected item:*/
				var y, i, k, s, h;
				s = this.parentNode.parentNode.getElementsByTagName("select")[0];
				h = this.parentNode.previousSibling;
				for (i = 0; i < s.length; i++) {
					if (s.options[i].innerHTML == this.innerHTML) {
						s.selectedIndex = i;
						h.innerHTML = this.innerHTML;
						y = this.parentNode.getElementsByClassName("same-as-selected");
						for (k = 0; k < y.length; k++) {
							y[k].removeAttribute("class");
						}
						this.setAttribute("class", "same-as-selected");
						break;
					}
				}
				h.click();
			});
			b.appendChild(c);
		}
		x[i].appendChild(b);
		a.addEventListener("click", function (e) {
			/*when the select box is clicked, close any other select boxes,
			and open/close the current select box:*/
			e.stopPropagation();
			closeAllSelect(this);
			this.nextSibling.classList.toggle("select-hide");
			this.classList.toggle("select-arrow-active");
		});
	}

	function closeAllSelect(elmnt) {
		/*a function that will close all select boxes in the document,
		except the current select box:*/
		var x, y, i, arrNo = [];
		x = document.getElementsByClassName("select-items");
		y = document.getElementsByClassName("select-selected");
		for (i = 0; i < y.length; i++) {
			if (elmnt == y[i]) {
				arrNo.push(i)
			} else {
				y[i].classList.remove("select-arrow-active");
			}
		}
		for (i = 0; i < x.length; i++) {
			if (arrNo.indexOf(i)) {
				x[i].classList.add("select-hide");
			}
		}
	}
	/*if the user clicks anywhere outside the select box,
	then close all select boxes:*/
	document.addEventListener("click", closeAllSelect);
	/*end button*/

	/*start textarea*/
	// var tx = document.getElementsByTagName('textarea');
	// for (var i = 0; i < tx.length; i++) {
	// 	tx[i].setAttribute('style', 'height:' + (tx[i].scrollHeight) + 'px;overflow-y:hidden;');
	// 	tx[i].addEventListener("input", OnInput, false);
	// }

	// function OnInput() {
	// 	this.style.height = 'auto';
	// 	this.style.height = (this.scrollHeight) + 'px';
	// }
	/*end textarea*/

	/*start file upload*/
	const realFileBtn = document.getElementById("real-file");
	const customBtn = document.getElementById("custom-button");
	const customTxt = document.getElementById("custom-text");

	document.getElementById("custom-button").addEventListener("click", function () {
		realFileBtn.click();
	});

	realFileBtn.addEventListener("change", function () {
		if (realFileBtn.value) {
			customTxt.innerHTML = realFileBtn.value.match(
				/[\/\\]([\w\d\s\.\-\(\)]+)$/
			)[1];
		} else {
			customTxt.innerHTML = "No file chosen, yet.";
		}
	});
	/*end file upload*/

	// menu bar
	document.getElementById("lapor-menu").addEventListener("click", function () {
		document.getElementById("lapor-menu").classList.toggle("change");
		document.getElementById("nav-show").classList.toggle("change");
	});
	// menu bar
}
const form = document.getElementById('form_laporan');
const laporan = document.getElementById('isi_laporan');
const aspek = document.getElementById('aspek');
const file = document.getElementById('real-file');
const errorMessageField = document.getElementById('error');

function count_words(element){
    str1 = element.value;
    str1 = str1.replace(/(^\s*)|(\s*$)/gi,"");
    str1 = str1.replace(/[ ]{2,}/gi," ");
    str1 = str1.replace(/\n /,"\n");
    return str1.split(' ').length;
}

form.addEventListener('submit', (e)=>{
    if (laporan.value === '' || aspek.value ==='') {
        alert('Tidak boleh ada kolom yang kosong');
        e.preventDefault();
    }

    if (count_words(laporan) < 20) {
        alert('Jumlah kata dalam laporan minimal 20');
        e.preventDefault();
    }

    if (file.value == '') {
        alert('Harap pilih file lampiran');
        e.preventDefault();
    }

});

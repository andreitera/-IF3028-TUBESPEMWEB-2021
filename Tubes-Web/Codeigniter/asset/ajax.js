console.log('ok');

var cari = document.getElementyByID('cari');
var konten = document.getEllementById('konten');
var alamat = document.getElementById('alamat');

cari.addEventListener('keyup', function(){
    var ajaxCari = new XMLHttpRequest();

    ajaxCari.onreadystatechange = function(){
        if(ajaxCari.readyState == 4 && ajaxCari.status == 200){
            konten.innerHTML = ajaxCari.responseTexxt;
        }
    }

    ajaxCari.open('GET', alamat.value+cari.value, true);
    ajaxCari.send();
});

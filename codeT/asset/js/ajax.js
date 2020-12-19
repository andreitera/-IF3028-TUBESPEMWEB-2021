console.log('mantap');
var keyword = document.getElementById('keyword');
var tombolCari = document.getElementById('tomcol-cari');
var container = document.getElementById('container');


keyword.addEventListener('keyup', function(){
  var xhr = new  XMLHttpRequest();
  xhr.onreadystatechange = function(){
    if(xhr.readyState == 4 && xhr.status == 200){
      container.innerHTML = xhr.responseText;
    }
  }
  xhr.open('GET',container.dt, true);
  xhr.send();
});
//console.log('Hallo gais');

var keyword = document.getElementById('keyword'); 
var tombolCari = document.getElementById('tombol-cari');
var container = document.getElementById('container');

//event ketika keyword di ketik
keyword.addEventListener('keyup', function(){
  //console.log(keyword.value);
var xhr = new XMLHttpRequest();//bikin objek
//cek ready
xhr.onreadystatechange = function(){
  if(xhr.readyState == 4 && xhr.status == 200){
    container.innerHTML=xhr.responseText;
  }
}
//ekseskusi
xhr.open('GET','home/coba', true);
xhr.send();
});
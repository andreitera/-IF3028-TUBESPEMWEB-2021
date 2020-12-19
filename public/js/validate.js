function validasi() {
    var laporan = document.getElementById('isi').value;
    var totalSoFar = 0;
    for (var i = 0; i < laporan.length; i++)
      if (str(i) === " ") { 
        totalSoFar = +1; 
    }
    if(totalSoFar < 20){
        alert('laporan minimal memiliki 20 kata');
    }else{
        true;
    }
  }
var data = document.getElementById('search') ;
var DATA = document.getElementById('data');
var html = "" ;
function getData() {
    var xhr = new XMLHttpRequest();
        DATA.innerHTML = "";


        xhr.onreadystatechange = function () {

            if (xhr.status == 200 && xhr.readyState == 4) {

                let Data = JSON.parse(xhr.responseText);

                Data.forEach((Data, index) => {
                    html += `<div class="list-item">
                                <p>` + Data.komentar + `</p>
                                <div class="list-nav">
                                <span>` + Data.file + `</span>
                                <span class="nav1">Waktu `+ Data.waktu + ` <a href="/detail/`+ Data.id +`">Lihat Selengkapnya ></a></span>
                                </div>
                                <hr>
                                </div>`
                });

                DATA.innerHTML = html ;

                html = "" ;
            }
        }

        xhr.open("GET", "/data/" + data.value, true);
        xhr.send();

}

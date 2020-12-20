<main>
    <div class="container">
        <section class="main__func mb-3">
            <div class="d-flex main__search-bar">
                <!-- <form class="" id="form"> -->
                <input type="text" name="search" id="search" class="search-box d-block" placeholder="Kata Kunci">
                <!-- <input type="text" name="search_box"
                        placeholder="Kata Kunci" class="search-box d-block" id="search" oninput="return fetchLaporan()"> -->
                <button type="submit" class="btn-search btn-secondary" id="btnSubmit" onclick="return fetchLaporan()">
                    <!-- <div>Icons made by <a href="https://www.flaticon.com/authors/google" title="Google">Google</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>-->
                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDQ0Ni4yNSA0NDYuMjUiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTIiIHhtbDpzcGFjZT0icHJlc2VydmUiIGNsYXNzPSIiPjxnPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgoJPGcgaWQ9InNlYXJjaCI+CgkJPHBhdGggZD0iTTMxOC43NSwyODAuNWgtMjAuNGwtNy42NDktNy42NWMyNS41LTI4LjA1LDQwLjgtNjYuMyw0MC44LTEwNy4xQzMzMS41LDczLjk1LDI1Ny41NSwwLDE2NS43NSwwUzAsNzMuOTUsMCwxNjUuNzUgICAgUzczLjk1LDMzMS41LDE2NS43NSwzMzEuNWM0MC44LDAsNzkuMDUtMTUuMywxMDcuMS00MC44bDcuNjUsNy42NDl2MjAuNEw0MDgsNDQ2LjI1TDQ0Ni4yNSw0MDhMMzE4Ljc1LDI4MC41eiBNMTY1Ljc1LDI4MC41ICAgIEMxMDIsMjgwLjUsNTEsMjI5LjUsNTEsMTY1Ljc1UzEwMiw1MSwxNjUuNzUsNTFTMjgwLjUsMTAyLDI4MC41LDE2NS43NVMyMjkuNSwyODAuNSwxNjUuNzUsMjgwLjV6IiBmaWxsPSIjZmZmZmZmIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIiBjbGFzcz0iIj48L3BhdGg+Cgk8L2c+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPC9nPjwvc3ZnPg==" 
                            width="16" height="16" />
                    Cari
                </button>
            </div>
            <div class="text-center">
                <a href="home/create" class="red-text buat-laporan">
                    Buat Laporan/Komentar 
                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDQ3Ny44NjcgNDc3Ljg2NyIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgY2xhc3M9IiI+PGc+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+Cgk8Zz4KCQk8cGF0aCBkPSJNMzkyLjUzMywwaC0zMDcuMkMzOC4yMjgsMC4wNTYsMC4wNTYsMzguMjI4LDAsODUuMzMzdjMwNy4yYzAuMDU2LDQ3LjEwNSwzOC4yMjgsODUuMjc3LDg1LjMzMyw4NS4zMzNoMzA3LjIgICAgYzQ3LjEwNS0wLjA1Niw4NS4yNzctMzguMjI4LDg1LjMzMy04NS4zMzN2LTMwNy4yQzQ3Ny44MSwzOC4yMjgsNDM5LjYzOCwwLjA1NiwzOTIuNTMzLDB6IE0zMjQuMjY3LDI1NkgyNTZ2NjguMjY3ICAgIGMwLDkuNDI2LTcuNjQxLDE3LjA2Ny0xNy4wNjcsMTcuMDY3cy0xNy4wNjctNy42NDEtMTcuMDY3LTE3LjA2N1YyNTZIMTUzLjZjLTkuNDI2LDAtMTcuMDY3LTcuNjQxLTE3LjA2Ny0xNy4wNjcgICAgczcuNjQxLTE3LjA2NywxNy4wNjctMTcuMDY3aDY4LjI2N1YxNTMuNmMwLTkuNDI2LDcuNjQxLTE3LjA2NywxNy4wNjctMTcuMDY3UzI1NiwxNDQuMTc0LDI1NiwxNTMuNnY2OC4yNjdoNjguMjY3ICAgIGM5LjQyNiwwLDE3LjA2Nyw3LjY0MSwxNy4wNjcsMTcuMDY3UzMzMy42OTIsMjU2LDMyNC4yNjcsMjU2eiIgZmlsbD0iIzkzMzIzMCIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPgoJPC9nPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjwvZz48L3N2Zz4=" 
                            width="18" height="18"/>
                </a>
            </div>
        </section>
        
        <h3 class="mt-2">Laporan/komentar terakhir</h3>
        <section class="main__lapor-list">
        <?php foreach($laporan as $item){?>
            <article class="laporan">
                <p><?= strlen($item['isi']) > 255 ? substr($item['isi'], 0, 255) . "......" : $item['isi']; ?></p>
                <div class="d-flex detil-laporan">
                    <span class="lampiran">
                        Lampiran : <?= $item['lampiran'];?>
                    </span>
                    <div class="waktu text-right">
                        <img src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjUxMnB0IiB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgd2lkdGg9IjUxMnB0IiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Im0yMDMgMzc2YzAgNS41MjM0MzgtNC40NzY1NjIgMTAtMTAgMTBzLTEwLTQuNDc2NTYyLTEwLTEwIDQuNDc2NTYyLTEwIDEwLTEwIDEwIDQuNDc2NTYyIDEwIDEwem0wIDAiLz48cGF0aCBkPSJtNDUyIDM4MmgtNTB2LTUwYzAtNS41MjM0MzgtNC40NzY1NjItMTAtMTAtMTBzLTEwIDQuNDc2NTYyLTEwIDEwdjYwYzAgNS41MjM0MzggNC40NzY1NjIgMTAgMTAgMTBoNjBjNS41MjM0MzggMCAxMC00LjQ3NjU2MiAxMC0xMHMtNC40NzY1NjItMTAtMTAtMTB6bTAgMCIvPjxwYXRoIGQ9Im03MCAyMDZoNjNjNS41MjM0MzggMCAxMC00LjQ3NjU2MiAxMC0xMHMtNC40NzY1NjItMTAtMTAtMTBoLTYzYy01LjUyMzQzOCAwLTEwIDQuNDc2NTYyLTEwIDEwczQuNDc2NTYyIDEwIDEwIDEwem0wIDAiLz48cGF0aCBkPSJtMjU2IDE4NmgtNjNjLTUuNTIzNDM4IDAtMTAgNC40NzY1NjItMTAgMTBzNC40NzY1NjIgMTAgMTAgMTBoNjNjNS41MjM0MzggMCAxMC00LjQ3NjU2MiAxMC0xMHMtNC40NzY1NjItMTAtMTAtMTB6bTAgMCIvPjxwYXRoIGQ9Im03MCAyNjZoNjNjNS41MjM0MzggMCAxMC00LjQ3NjU2MiAxMC0xMHMtNC40NzY1NjItMTAtMTAtMTBoLTYzYy01LjUyMzQzOCAwLTEwIDQuNDc2NTYyLTEwIDEwczQuNDc2NTYyIDEwIDEwIDEwem0wIDAiLz48cGF0aCBkPSJtMTUzIDM2NmgtODNjLTUuNTIzNDM4IDAtMTAgNC40NzY1NjItMTAgMTBzNC40NzY1NjIgMTAgMTAgMTBoODNjNS41MjM0MzggMCAxMC00LjQ3NjU2MiAxMC0xMHMtNC40NzY1NjItMTAtMTAtMTB6bTAgMCIvPjxwYXRoIGQ9Im0yNTYgMjQ2aC02M2MtNS41MjM0MzggMC0xMCA0LjQ3NjU2Mi0xMCAxMHM0LjQ3NjU2MiAxMCAxMCAxMGg2M2M1LjUyMzQzOCAwIDEwLTQuNDc2NTYyIDEwLTEwcy00LjQ3NjU2Mi0xMC0xMC0xMHptMCAwIi8+PHBhdGggZD0ibTcwIDMyNmg2M2M1LjUyMzQzOCAwIDEwLTQuNDc2NTYyIDEwLTEwcy00LjQ3NjU2Mi0xMC0xMC0xMGgtNjNjLTUuNTIzNDM4IDAtMTAgNC40NzY1NjItMTAgMTBzNC40NzY1NjIgMTAgMTAgMTB6bTAgMCIvPjxwYXRoIGQ9Im0yNTYgMzA2aC02M2MtNS41MjM0MzggMC0xMCA0LjQ3NjU2Mi0xMCAxMHM0LjQ3NjU2MiAxMCAxMCAxMGg2M2M1LjUyMzQzOCAwIDEwLTQuNDc2NTYyIDEwLTEwcy00LjQ3NjU2Mi0xMC0xMC0xMHptMCAwIi8+PHBhdGggZD0ibTMxNiAyMDZoNjBjNS41MjM0MzggMCAxMC00LjQ3NjU2MiAxMC0xMHMtNC40NzY1NjItMTAtMTAtMTBoLTYwYy01LjUyMzQzOCAwLTEwIDQuNDc2NTYyLTEwIDEwczQuNDc2NTYyIDEwIDEwIDEwem0wIDAiLz48cGF0aCBkPSJtNDQ2IDI4NC44MzU5Mzh2LTIxNC44MzU5MzhjMC0xNi41NDI5NjktMTMuNDU3MDMxLTMwLTMwLTMwaC0zMHYtMTBjMC0xNi41NzQyMTktMTMuNDI1NzgxLTMwLTMwLTMwLTE2LjU0Mjk2OSAwLTMwIDEzLjQ1NzAzMS0zMCAzMHYxMGgtODN2LTEwYzAtMTYuNTc0MjE5LTEzLjQyNTc4MS0zMC0zMC0zMC0xNi41NDI5NjkgMC0zMCAxMy40NTcwMzEtMzAgMzB2MTBoLTgzdi0xMGMwLTE2LjU3NDIxOS0xMy40MjU3ODEtMzAtMzAtMzAtMTYuNTQyOTY5IDAtMzAgMTMuNDU3MDMxLTMwIDMwdjEwaC0xMGMtMTYuNTQyOTY5IDAtMzAgMTMuNDU3MDMxLTMwIDMwdjMyNmMwIDE2LjU0Mjk2OSAxMy40NTcwMzEgMzAgMzAgMzBoMjQ2LjkyMTg3NWMxNS4wODk4NDQgNTAuOTg4MjgxIDYxLjkwNjI1IDg2IDExNS4wNzgxMjUgODYgNjYuMTY3OTY5IDAgMTIwLTUzLjgzMjAzMSAxMjAtMTIwIDAtNDUuNS0yNS43MDMxMjUtODYuODUxNTYyLTY2LTEwNy4xNjQwNjJ6bS0xMDAtMjU0LjgzNTkzOGMwLTUuNTE1NjI1IDQuNDg0Mzc1LTEwIDEwLTEwIDUuNTE5NTMxIDAgMTAgNC40NzY1NjIgMTAgMTB2NDBjMCA1LjUxNTYyNS00LjQ4NDM3NSAxMC0xMCAxMHMtMTAtNC40ODQzNzUtMTAtMTB6bS0xNDMgMGMwLTUuNTE1NjI1IDQuNDg0Mzc1LTEwIDEwLTEwIDUuNTE5NTMxIDAgMTAgNC40NzY1NjIgMTAgMTB2NDBjMCA1LjUxNTYyNS00LjQ4NDM3NSAxMC0xMCAxMHMtMTAtNC40ODQzNzUtMTAtMTB6bS0xNDMgMGMwLTUuNTE1NjI1IDQuNDg0Mzc1LTEwIDEwLTEwIDUuNTE5NTMxIDAgMTAgNC40NzY1NjIgMTAgMTB2NDBjMCA1LjUxNTYyNS00LjQ4NDM3NSAxMC0xMCAxMHMtMTAtNC40ODQzNzUtMTAtMTB6bS0zMCAzMGgxMHYxMGMwIDE2LjU0Mjk2OSAxMy40NTcwMzEgMzAgMzAgMzBzMzAtMTMuNDU3MDMxIDMwLTMwdi0xMGg4M3YxMGMwIDE2LjU0Mjk2OSAxMy40NTcwMzEgMzAgMzAgMzBzMzAtMTMuNDU3MDMxIDMwLTMwdi0xMGg4M3YxMGMwIDE2LjU0Mjk2OSAxMy40NTcwMzEgMzAgMzAgMzBzMzAtMTMuNDU3MDMxIDMwLTMwdi0xMGgzMGM1LjUxNTYyNSAwIDEwIDQuNDg0Mzc1IDEwIDEwdjUzaC00MDZ2LTUzYzAtNS41MTU2MjUgNC40ODQzNzUtMTAgMTAtMTB6bS0xMCAzMzZ2LTI1M2g0MDZ2MTMzLjg5MDYyNWMtMTAuOTcyNjU2LTMuMjQ2MDk0LTIyLjM1NTQ2OS00Ljg5MDYyNS0zNC00Ljg5MDYyNS02Ni4xNjc5NjkgMC0xMjAgNTMuODMyMDMxLTEyMCAxMjAgMCA0LjY3OTY4OC4yODEyNSA5LjM1OTM3NS44MjAzMTIgMTRoLTI0Mi44MjAzMTJjLTUuNTE1NjI1IDAtMTAtNC40ODQzNzUtMTAtMTB6bTM3MiA5NmMtNTMuNjAxNTYyIDAtMTAwLTQzLjY3NTc4MS0xMDAtMTAwIDAtNTUuMTQwNjI1IDQ0Ljg1OTM3NS0xMDAgMTAwLTEwMCA1NS4zMzk4NDQgMCAxMDAgNDQuODk4NDM4IDEwMCAxMDAgMCA1NS4xNDA2MjUtNDQuODU5Mzc1IDEwMC0xMDAgMTAwem0wIDAiLz48L3N2Zz4=" 
                            width="14" height="14" alt="Waktu: "/>  <?= $item['created_at'];?>
                    </div>
                    <div class="detail-laporan text-right">
                        <a href="/laporan/<?= $item['id'];?>" class="btn-selengkapnya">Lihat Selengkapnya &#10145;</a>
                    </div>
                </div>
            </article>
        <?php }?>
        </section>
    </div>
</main>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
    // const btnSubmit = document.getElementById('btnSubmit');
    const searchText = document.getElementById('search');
    const laporanSection = document.getElementsByClassName('main__lapor-list')[0];

    function fetchLaporan() {
        const request = new XMLHttpRequest();
        request.onreadystatechange = function() {
            laporanSection.innerHTML = '';
            if(this.readyState == 4 && this.status == 200 ) {
                console.log(this.responseText);
                laporanSection.innerHTML = this.responseText;
            }
        }

        request.open("GET", "home/search?keyword=" + searchText.value, true);
        // // request.setRequestHeader("Content-type", "text/html");
        request.send();
    }
</script>

<!DOCTYPE html>
<html>

<head>
    <title>
        Halaman Utama
    </title>
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/css/style.css">
</head>

<body>
    <center>
        <h1 class="title">SIMPLE LAPOR!</h1>
        <input type="text" id="searchbar" class="searchBar" placeholder="Apa yang ingin anda cari ?">
        <button class="btnSearch" onclick="cari()">Cari</button>
        <br>
        <a href="<?= base_url('lapor'); ?>">Buat Laporan/Komentar</a>
    </center>
    <br>

    <div class="laporanTerakhir">
        <label>Laporan/Komentar Terakhir</label>
        <br>
        <hr class="pembatas">
        <p>
            <? //DATA LAPORAN TERAKHIR ?>
        </p>
    </div>

    <br>

    <div id="listLaporan">
        <?php foreach ($datalapor as $data) : //perulangan buat nampilin semua laporan 
        ?>
            <label class="judulLampiran"><?php $var = preg_split("#/#", $data['lampiran']);
                                            echo $var[count($var) - 1] ?></label>
            <label class="waktuLampiran">
                Waktu :
                <?= $data['created_at'] ?>
                <a href="<?php echo base_url('detail/' . $data['id']); ?>" class="lihatSelengkapnya">Lihat Selengkapnya ></a>
            </label>
            <br>
            <hr class="pembatas">
            <p class="textLaporan"><?= $data['laporan'] ?></p>
        <?php endforeach; ?>
    </div>

</body>
<script>
    function cari() {

        var xhr = new XMLHttpRequest();
        var base_url = " <?php echo base_url(); ?>";
        var url = base_url + "/lapor/cari";
        var value = document.getElementById('searchbar').value;
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                document.getElementById('listLaporan').innerHTML = this.responseText;
                // console.log(this.responseText)
            }
        }
        xhr.open('GET', url + '?value=' + value, true);
        xhr.send();
    }
</script>

</html>
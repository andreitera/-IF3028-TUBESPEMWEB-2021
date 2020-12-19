<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lapor</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/asset/css/Homecss.css">
</head>

<body>
    <div class="nav">
        <ul>
            <li><a href="<?php echo base_url('home'); ?>">Home</a></li>
            <li><a href="<?php echo base_url('Home/Tampillapor'); ?>">Buat Laporan</a></li>
        </ul>
    </div>

    <body>
        <div class="landing-page">
            <h1>SIMPLE LAPOR!</h1>
            <br><br>
            <div id="search-container" class="search-container">
                <input id="searchElement" type="search">
                <button id="searchButtonElement" type="submit">Cari</button>
            </div>
            <div class="awal">
                <a href="<?php echo base_url() ?>Home/Tampillapor">
                    <h4>Buat Laporan/Komentar<button class="button"> + </button>
                    </h4>
                </a>
            </div>
            <br>
            <div class="comment">
                <p> Laporan/Komentar Terakhir </p>
                <hr width="auto" />
                <div class="card">
                    <?php foreach ($lapor as $lap) : ?>
                        <?php if (strlen($lap["laporan"]) <= 300) { ?>
                            <p class="isi"><?php echo $lap["laporan"]; ?></p>
                        <?php } else { ?>
                            <p class="isi"><?php echo substr($lap["laporan"], 0, 300); ?>..........</p>
                        <?php } ?>

                        <div class="next">
                            <p class="tanggal"><?php echo $lap["tanggal"]; ?>
                                <a href="<?php echo base_url() . 'Home/view/' . $lap['id']; ?>">Lihat selengkapnya<button class="button"> ></button></a>
                            </p>
                        </div>
                        <hr width="auto" />
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

    </body>
    <div class="footer">
        &copyCopyright 2019 - itera.ac.id
    </div>

</html>
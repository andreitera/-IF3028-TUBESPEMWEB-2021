<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat selengkapnya</title>
    <style>
.padding{
    padding: 10px;
}
.kanan{
    padding-left: 50%;
	font-family: sans-serif;
	text-align: right;
}
.kiri{
    padding-left:10%;
    text-align: left;
}
    
    </style>
</head>
<body>
    <h1 style="text-align: center;">SIMPLE LAPOR!</h1>
    <p>Detail laporan/komentar </p>
    <hr>
    <?= $data->isi; ?>
    <h4>Lampiran: <?= $data->lampiran; ?> </h4>
    <embed src="<?= base_url('/uploads/') ?><?= $data->lampiran; ?>">

    <div class="padding">
    <span> Waktu: <?= $data->waktu; ?></span>
    <span class="kiri">Aspek: <?= $data->aspek; ?></span>
    <!-- onclick="window.location='<?php echo base_url();?>detail/hapus'" -->
    <div class="kanan">
    <button  id="<?= $data->id_lapor ?>" onclick="apaaja()">Hapus Laporan/Komentar <strong>x</strong></button>
    </div>
    </div>
    <hr>

    <script>
        function apaaja() {
            var res = confirm("Press a button!");
            if(res) {
                window.location.href = '<?php echo base_url("detail/hapus/".$data->id_lapor);?>';
            }
        }
    </script>
</body>
</html>
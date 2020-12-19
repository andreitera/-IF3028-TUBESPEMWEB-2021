<div class="listLaporan">

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
<main>
    <div class="container">
        <h3 class="pt-2">Detail Laporan/Komentar</h3>
        <article id="detail">
            <p class="pt-2"><?= $item['isi']; ?></p>
            <!-- <?php
                // $lampiran_url = base_url("/assets/uploaed_file/" + $item['lampiran']);

            ?> -->
            <form class="pt-2" method="POST">
                Lampiran: <a href="<?= base_url('assets/uploaded_file/' . $item['lampiran']) ?>" 
                target="_blank" rel="noopener noreferrer"><?= $item['lampiran']; ?></a>
                <!-- Mau download, perlu send request. -->
            </form>
            <?php
                $lampiran = $item['lampiran'];
                $dot = strrpos($lampiran, '.');
                $file_ext = substr($lampiran, $dot+1);

                $allowed_extension = ['jpeg', 'jpg', 'png', 'svg'];
                $is_pict = false;
                foreach($allowed_extension as $ext) {
                    if($ext === $file_ext) {
                        $is_pict = true;
                        break;
                    }
                }

                if($is_pict) {
            ?>

                    <img src="/assets/uploaded_file/<?= $lampiran ?>" width="300" height="300" alt="...">
            <?php
                }
            ?>
            <!-- <img src="bg_bggenerator_com.png" width="100" height="100" alt=""> -->
            <div class="d-flex mt-2">
                <p class="flex-grow-1">Waktu: <?= $item['created_at']; ?></p>
                <p class="flex-grow-1">Aspek : <?= $item['aspek']; ?></p>
                <p class="text-right flex-grow-2">
                    <a href="/laporan/edit/<?= $item['id']; ?>">Ubah Laporan</a> | 
                    <a href="/laporan/delete/<?= $item['id']; ?>" id="hapus" class="red-text"
                        onclick="return confirm('Apakah anda yakin ingin menghapus laporan ini?')">Hapus</a>
                </p>
            </div>
        </article>
    </div>
</main>
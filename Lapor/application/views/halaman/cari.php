<section class="about" id="laporan-akhir">
    <form class="searchbar" action="<?php echo base_url('tampil/search') ?>" method="GET">
        <input type="search" name="keyword" id="search" placeholder="Kata kunci atau tracking ID...">
        <input type="submit" class="hidden">
    </form>
    <div class="container">
        <div class="row">
            <div class="text-center text-md-left">
                <div class="section-heading">
                    <h3 class="display-4">Hasil Pencarian</h3>
                    <hr>
                    <?php $search_result = array_reverse((array)$result) ?>
                    <?php foreach ($search_result as $post) : ?>
                        <?php if (strlen($post['isi']) <= 400) { ?>
                            <p class="isi"><?php echo $post['isi']; ?></p>
                        <?php } else { ?>
                            <p class="isi"><?php echo substr($post['isi'], 0, 400) . '...'; ?></p>
                        <?php } ?>
                        <p class="waktu">Waktu: <?php echo $post['waktu']; ?></p>
                        <a class="btn mt-4 mb-5" href="<?php echo base_url() . 'tampil/view/' . $post['id']; ?>">Selengkapya</a>
                        <hr>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
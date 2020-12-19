<main>
    <section class="about" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 text-center text-md-left">
                    <div class="section-heading">
                        <h3>Kenapa harus lapor?</h3>
                        <h1 class="display-4"> Simple Lapor!</h1>
                    </div>
                    <p>Pengelolaan pengaduan pelayanan publik di setiap organisasi penyelenggara di ITERA belum
                        terkelola secara efektif dan terintegrasi. Akibatnya terjadi duplikasi
                        penanganan pengaduan, atau bahkan bisa terjadi suatu pengaduan tidak ditangani oleh satupun
                        organisasi penyelenggara, dengan alasan pengaduan bukan kewenangannya. Oleh karena itu,
                        untuk mencapai visi maka perlu untuk mengintegrasikan sistem
                        pengelolaan pengaduan pelayanan publik dalam satu pintu. Tujuannya, masyarakat memiliki satu
                        saluran pengaduan secara menyeluruh di ITERA. Oleh Karena itu, pengembang menciptakan Simple Lapor guna menampung aspirasi publik yang
                        kemudian akan menjadi bahan evaluasi dalam menciptakan lingkungan yang kolaboratif.
                        <br>
                        “Berani LAPOR! Untuk Pelayanan Publik yang Lebih Baik”
                    </p>
                    <a class="btn mt-4 mb-5" href="#">Selengkapya</a>
                </div>
                <div class="col-12 col-md-6">
                    <img class="img-fluid" src="<?php echo base_url() . 'images/about-img2-01.png' ?>" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="laporan" id="laporan">
        <div class="container">
            <div class="row text-center text-white">
                <div class="laporan-info">
                    <h1>JUMLAH LAPORAN SEKARANG</h1>
                    <h1 class="big-text"><?php echo count($lapor) ?></h1>
                </div>
            </div>
        </div>
    </section>
    <section class="about" id="laporan-akhir">
        <form class="searchbar" action="<?php echo base_url('tampil/search') ?>" method="GET">
            <input type="search" name="keyword" id="search" placeholder="Kata kunci atau tracking ID...">
            <input type="submit" class="hidden">
        </form>
        <h1 class="text-cari display-4">CARI ADUAN</h1>
        <div class="container">
            <div class="row">
                <div class="text-center text-md-left">
                    <div class="section-heading">
                        <h3>Laporan</h3>
                        <h1 class="display-4">Pengaduan</h1>
                        <hr>
                        <?php $sort = array_reverse((array) $lapor) ?>
                        <?php foreach ($sort as $post) : ?>
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
</main>

<script src="<?php echo base_url(); ?>js/script2.js"></script>
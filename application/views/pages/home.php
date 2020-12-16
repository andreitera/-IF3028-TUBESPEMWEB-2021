    <main>
        <section class="about" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 text-center text-md-left">
                        <div class="section-heading">
                            <h3>Tentang</h3>
                            <h1 class="display-4">Lapor!</h1>
                        </div>
                        <p align="justify">Aplikasi web Lapor! ini dibuat untuk menerima laporan yang dibuat oleh rakyat yang ada di ITERA dan juga untuk memenuhi Tugas Besar Pemrograman berbasis Web.</p>
                        <a class="btn mt-4 mb-5" href="#">Lihat Selengkapnya...</a>
                    </div>
                    <div class="col-12 col-md-6">
                        <img class="img-fluid" src="<?php echo base_url().'images/tentang.png' ?>" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="laporan" id="laporan">
            <div class="container">
                <div class="row text-center text-white">
                    <div class="laporan-info">
                    </div>
                </div>
            </div>
        </section>
        <section class="about" id="laporan-akhir">
            <form class="searchbar" action="<?php echo base_url('laporan/search') ?>" method="GET">
                <input type="search" name="keyword" id="search" placeholder="Kata kunci atau tracking ID...">
                <input type="submit" class="hidden">
            </form>
            <h1 class="text-cari display-4">CARI LAPORAN</h1>
            <div class="container">
                <div class="row">
                    <div class="text-center text-md-left">
                        <div class="section-heading">
                            <h3>Laporan</h3>
                            <h1 class="display-4">Terakhir</h1>
                            <hr>
                            <?php $sort = array_reverse((array) $posts) ?>
                            <?php foreach ($sort as $post) : ?>
                                <?php if(strlen($post['isi']) <= 400){?>
                                    <p class="isi"><?php echo $post['isi']; ?></p>
                                <?php } else {?>
                                    <p class="isi"><?php echo substr($post['isi'], 0, 400).'...'; ?></p>
                                <?php }?>
                                <p class="waktu">Waktu: <?php echo $post['waktu']; ?></p>
                                <a class="btn mt-4 mb-5" href="<?php echo base_url().'laporan/view/'.$post['id'];?>">Lihat Selengkapnya...</a>
                                <hr>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script src="<?php echo base_url(); ?>js/script3.js"></script>

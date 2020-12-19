<section class="about" id="buat-lapor">
    <div class="container">
        <div class="alas">
            <div class="buat-laporan">
                <!-- <p>Buat Laporan/Komentar</p>
				<hr> -->
                <?php echo form_open_multipart('tampil/input', array('id' => 'form_laporan')); ?>
                <textarea placeholder="Ketik Laporan Anda..." name="isi-laporan" class="form_field" id="isi_laporan"></textarea>

                <div class="custom-select">
                    <select name="aspek" class="form_field" id="aspek">
                        <option value"" hidden d>Pilih Kategori Pelaporan</option>
                        <option value="Dosen">Dosen</option>
                        <option value="Staff">Staff</option>
                        <option value="Mahasiswa">Mahasiswa</option>
                        <option value="Infrastruktur">Infrastruktur</option>
                        <option value="Pengajaran">Pengajaran</option>
                    </select>
                </div>
                <input type="file" name="file_lapor" class="form_field" id="real-file" hidden="hidden" />
                <button type="button" id="custom-button">pilih File</button>
                <span id="custom-text">Belum Pilih File.</span>
                <br>

                <input class="btn px-5" type="submit" name="send" id="send-button" value="LAPOR!">
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</section>

<script src="<?php echo base_url(); ?>js/script1.js"></script>
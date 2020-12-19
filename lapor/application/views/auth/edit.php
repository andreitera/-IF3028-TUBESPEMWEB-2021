<html>

<head>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/kode.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css" />
    <title>Edit Laporan</title>
</head>

<body>
    <div class="content">
        <center>
            <h1> EDIT LAPORAN <br> </h1>
        </center>

        <div>Edit Laporan atau Komentar<br> </div>
        <hr>
        <center>
            <?php foreach ($komentar as $komen) { ?>
                <form method="POST" action="<?php echo base_url('auth/update/') . $komen->id ?>" onSubmit="return valid(this)">
                    <textarea type="text" name="komentar" minlength="20" ><?php echo $komen->isi; ?></textarea>
        </center>
        <br>
        <div class="left">
            <select name="kategori" required>
                <option value="none">Pilih Aspek Laporan/Komentar</option>
                <option value="Akademik">Akademik</option>
                <option value="Non-Akademik">Non-Akademik</option>
                <option value="Fasilitas Umum">Fasilitas Umum</option>
                <option value="Lain-Lain">Lain-Lain</option>
            </select>

            <br><br>

            <input type="file" name="file" accept=".img, .png, .jpeg, .jpg, .doc, .docx, .xls, .xlsx, .ppt, .pptx, .pdf" required>

        </div>
        <br>

        <div id="tombol">
            <button class="button" type="submit" name="submit">Update LAPOR!</button>
        </div>
        </form>

    <?php
    }
    ?>
</body>

</html>
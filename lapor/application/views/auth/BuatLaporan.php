<html>

<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css" />
    <title>Buat Laporan</title>
</head>

<body>
    <div class="content">
        <center>
            <h1> BUAT LAPORAN <br> </h1>
        </center>

        <h4>Buat Laporan atau Komentar</h4>
        <hr>
        <center>

            <form method="POST" action="<?php echo base_url(''); ?>auth/insertLaporan" onSubmit="return valid(this)">
                <textarea type="text" name="komentar" minlength="20" autofocus autocomplete="off" placeholder="Laporan/Komentar" required></textarea>
        </center>
        <br>
        <div class="left">
            <select name="kategori" required>
                <option value="">Pilih Aspek Pelaporan/Komentar</option>
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
            <button class="button" type="submit" name="submit">Buat LAPOR!</button>
        </div>
        </form>

</body>

</html>
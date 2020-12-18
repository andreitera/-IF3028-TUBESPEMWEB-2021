<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Laporan</title>
</head>
<body>
    <h1 style="text-align: center">SIMPLE LAPOR!</h1>
    <div>Buat Laporan/Komentar</div>
    <hr>
    <form action="<?= base_url('buat/tambah'); ?>" method="POST" enctype="multipart/form-data">
        <textarea name="isi" id="input_isi" cols="160" rows="10"></textarea>
        <select name="id_aspek" id="input_aspek">
            <option value="" disabled selected>Pilih Aspek Pelaporan/Komentar</option>
            <?php foreach($aspek as $row){ ?>
            <option value="<?= $row->id_aspek; ?>"><?= $row->aspek; ?></option>
            <?php } ?>
        </select>
        <input type="file" id="input_lampiran" name="lampiran" accept="image/*,audio/*,video/*,.doc,.docx,.xls,.xlsx,.ppt,.pptx,.pdf,.txt">
        <button type="submit">Buat LAPOR!</button>
    </form>
</body>
</html>
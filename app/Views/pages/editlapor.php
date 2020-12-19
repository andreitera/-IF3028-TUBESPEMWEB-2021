<!DOCTYPE html <html>

<head>
    <title>lapor.go.id</title>
    <link rel="stylesheet" type="text/css" href="laporan.css">
</head>
<style>
    * {
        box-sizing: border-box;
    }

    body {
        background-color: #eaeaea;
        color: #333333;
    }

    .container {
        max-width: 100%;
        margin-left: auto;
        margin-right: auto;
        padding-left: 30px;
        padding-right: 30px;
        background-color: white;
        position: relative;
        background-image: url(../gambar/h5.jpg);
    }

    .h1 {
        text-align: center;
        font-size: 40px;
        padding: 20px;
    }

    .h3 {
        text-align: center;
        font-size: 20px;
    }

    .header {
        background-image: url(../gambar/h1.jpg);
        color: gold;
        padding: 25px 25px 25px 0px;
    }

    .conten {
        max-width: 100%;
        margin-left: auto;
        margin-right: auto;
    }

    .tampilan {
        max-width: 500px;
        padding: 10px 20px;
        background: #f4f7f8;
        margin: 10px auto;
        padding: 20px;
        background: #f4f7f8;
        border-radius: 8px;
        font-family: "Gill Sans", sans-serif;
    }

    .textarea {
        padding: 5px 10px 5px 10px;
        height: 200px;
        width: 300px;
        font-family: "Courier New", Courier, monospace;
        background: rgba(255, 255, 255, 0.1);
        border: none;
        border-radius: 4px;
        font-size: 15px;
        margin: 0;
        outline: 0;
        padding: 10px;
        width: 100%;
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        background-color: #e8eeef;
        color: #8a97a0;
        -webkit-box-shadow: 0 1px 0 rgba(238, 28, 28, 1) inset;
        box-shadow: 5px 2.5px 2.5px #f2fa07;
        margin-bottom: 30px;
    }



    .tampilan select {
        font-family: "Courier New", Courier, monospace;
        background: rgba(255, 255, 255, 0.1);
        border: none;
        border-radius: 4px;
        font-size: 15px;
        margin: 0;
        outline: 0;
        padding: 10px;
        width: 75%;
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        background-color: #e8eeef;
        color: #8a97a0;
        -webkit-box-shadow: 0 1px 0 rgba(238, 28, 28, 1) inset;
        box-shadow: 5px 2.5px 2.5px #f2fa07;
        margin-bottom: 30px;
        -webkit-appearance: menulist-button;
        height: 35px;
    }

    .tampilan input {
        font-family: "Courier New", Courier, monospace;
        background: rgba(255, 255, 255, 0.1);
        border: none;
        border-radius: 4px;
        font-size: 15px;
        margin: 0;
        outline: 0;
        padding: 10px;
        width: 75%;
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        background-color: #e8eeef;
        color: #8a97a0;
        -webkit-box-shadow: 0 1px 0 rgba(238, 28, 28, 1) inset;
        box-shadow: 5px 2.5px 2.5px #f2fa07;
        margin-bottom: 30px;
        -webkit-appearance: menulist-button;
        height: 35px;
    }

    .submit button {
        position: relative;
        display: block;
        padding: 19px 39px 18px 39px;
        color: #fff;
        margin: 0 auto;
        background: #f2fa07;
        font-size: 18px;
        text-align: center;
        font-style: normal;
        width: 100%;
        border: 1px solid #f2fa07;
        border-width: 1px 1px 3px;
        margin-bottom: 10px;
    }
</style>

<body>
    <div class="container">
        <div class="header">
            <h1>SIMPLE LAPOR</h1>
            <h3>Edit Laporan Komentar</h3>
        </div>
        <hr>
        <div class="conten">
            <form id="form" class="lapor" enctype="multipart/form-data" action="<?= base_url('Lapor/update/' . $lapor['id']); ?>" method="POST">
                <div class="tampilan">
                    <fieldset>
                        <textarea id="isi" name="isi" cols="100" rows="10" class="textarea" placeholder="Laporan"><?= $lapor['isi'] ?></textarea>
                        <br>
                        <br>
                        <select id="aspek" class="pilihan" name="aspek">
                            <option>Pilih Aspek Pengaduan/Komentar</option>
                            <option <?php if ($lapor['aspek'] === 'pengaduan') {
                                        echo 'selected=""';
                                    }; ?> value="pengaduan">PENGADUAN</option>
                            <option <?php if ($lapor['aspek'] === 'aspirasi') {
                                        echo 'selected=""';
                                    }; ?> value="aspirasi">ASPIRASI</option>
                            <option <?php if ($lapor['aspek'] === 'permintaan') {
                                        echo 'selected=""';
                                    }; ?> value="permintaan">PERMINTAAN INFORMASI</option>
                        </select>
                        <br>
                        <br>
                        <input type="hiden" name="old" value="<?= $lapor['lampiran']; ?>">
                        <input id="lampiran" value="<?= $lapor['lampiran']; ?>" type="file" name="lampiran">
                        <br>
                        <br>
                        <div class="submit">
                            <button type="submit">LAPOR!</button>
                        </div>
                    </fieldset>
                </div>
            </form>

        </div>
<script src="<?= base_url() ?>/js/validate.js"></script>
</body>

</html>
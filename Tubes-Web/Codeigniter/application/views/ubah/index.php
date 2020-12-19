<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Ubah</title>
</head>

<body>
    <div class="container">
        
        <h1>SIMPLE LAPOR!</h1>
        <h4>Buat Laporan / Komentar</h4>
        <hr>
        <?php
            if(validation_errors()):
                echo validation_errors();
            endif;
        ?>

        <?php echo form_open_multipart('Home/ubah/'.$lapor["id"]); ?>
        <textarea rows="16" cols="136" style="widt: 800px" name="isi" ><?php echo $lapor["isi"]; ?>></textarea>
        <br>

        <select name="aspek">
            <?php foreach ($aspek as $i) { ?>
                <?php if($i==$lapor["aspek"]){ ?>
                    <option value="<?= $i; ?>" selected><?= $i; ?></option>
            <?php } else{?>
                    <option value="<?= $i; ?>"><?=$i; ?></option>
            <?php } ?>
            <?php } ?>
        </select>
        <br>

        <label>File Menggunakan Ekstensi pdf, xls, xlsx, doc, docx, ppt, pptx</label>
        <br>
        
        <input id="file" type="file" name="file">
        <br>
        
        <input id="submit" value="Ubah" type="submit" name="submit">
        
        <div style="clear: both;"></div>
        
        <?php echo form_close(); ?>
        <br> 

    </div>    
</body>
</html>
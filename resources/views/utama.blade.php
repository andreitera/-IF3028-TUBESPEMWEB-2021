<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utama</title>
</head>
<body>
    <h1>SIMPLE LAPOR!</h1>
    <form action="">
    <label for="">
        <input type="text" name="cari" autocomplete="off" >
    </label>
    <button name="caridata">Cari</button>
    </form>
    <a href="{{ url('/buatlaporan') }}">Buat laporan/komentar</a>
    
    <?php if(!empty($data)) : ?>
    <table cellpadding="10" cellpadding="0" border="1">
        <?php $a = 1;
        foreach ($data as $dt) : ?>
            <tr>
                <td><?php echo $dt['laporan']; ?></td>
            </tr>
        <?php endforeach ?>
    </table>
    <?php endif ?>
    </form>
</body>
</html>
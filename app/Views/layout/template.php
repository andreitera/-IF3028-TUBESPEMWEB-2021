<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/style.css">

    <title><?= $judul; ?></title>
</head>

<body>

    <?= $this->include('layout/navbar'); ?>


    <?= $this->renderSection('content'); ?>


</body>

<script>
    function countWords(str) {
        str = str.replace(/(^\s*)|(\s*$)/gi, "");
        str = str.replace(/[ ]{2,}/gi, " ");
        str = str.replace(/\n /, "\n");
        return str.split(' ').length;
    }

    function validasi() {
        if (document.countWords(forms['createLapor']['isi'].value) < 20) {
            alert('Isi Laporan Minimal Memiliki 20 Kata');
            document.forms['createLapor']['isi'].focus();
            return false;
        }
    }
</script>

</html>
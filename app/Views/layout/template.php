<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url('css/style.css'); ?>">
    <title><?= $title; ?></title>
</head>

<body>
    <div class="main-wrapper">
        <header>
            <h1>SIMPLE LAPOR!</h1>
        </header>

        <?= $this->renderSection('content'); ?>

    </div>
</body>

</html>
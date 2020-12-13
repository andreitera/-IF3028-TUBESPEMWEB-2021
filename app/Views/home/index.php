<?php
$laporan = [
    'name'  => 'laporan',
    'id'    => 'laporan',
    'value' => null,
    'class' => 'form-control',
];
$aspek = [
    'name'  => 'aspek',
    'id'    => 'aspek',
    'value' => null,
    'class' => 'form-control',
];
$gambar = [
    'name' => 'lampiran',
    'id' => 'lampiran',
    'value' => null,
    'class' => 'form-control',
];
$submit = [
    'name' => 'submit',
    'id' => 'submit',
    'value' => 'Save Changes',
    'class' => 'btn',
    'type' => 'submit',
];
$session = session();
$errors = $session->getFlashdata('errors');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lapor</title>
</head>

<body>
    <p>
        <?php if ($errors != null) : ?>
            <div class="alert">
                <h6 class=" alert-heading">Terjadi Kesalahan</h6>
                <hr>
                <p class="mb-0">
                    <?php
                    foreach ($errors as $err) {
                        echo $err . '<br>';
                    }
                    ?>
                </p>
            </div>
        <?php endif ?>
    </p>
    <?= form_open_multipart('laporan/insertData'); ?>
    <div class="form-group">
        <?= form_label("Judul laporan", "laporan") ?>
        <div class="input-group-append">
            <?= form_input($laporan) ?>
        </div>
    </div>
    <div class="form-group">
        <?= form_label("aspek", "aspek") ?>
        <div class="input-group-append">
            <?= form_input($aspek) ?>
        </div>
    </div>
    <label for="lampiran">Lampiran</label>
    <?= form_upload($gambar) ?>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <?= form_submit($submit) ?>
    </div>
    <?= form_close() ?>
</body>

</html>

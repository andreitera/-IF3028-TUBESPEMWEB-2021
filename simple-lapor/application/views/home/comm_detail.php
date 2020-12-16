<?php //var_dump($this->session->userdata()) 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="<?= base_url('assets/css/comm_detail_style.css') ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <title>Comment details</title>
</head>

<body>
  <?php //var_dump($result); 
  ?>
  <div class="container">
    <form action="" method="post" enctype="multipart/form-data">
      <div class="laporan">

        <div class="container1">
          <h1>Detail Komentar</h1>
        </div>

        <div class="container2">
          <div class="laporan">
            <h4><?= $result['comm_title'] ?></h4>

            <small>Pelapor : <?= $result['fullname'] ?></small>

            <p><?= $result['comm'] ?></p>

            <?php $tmp = explode('.', $result['lampiran']);
            $ext = end($tmp);

            ?>
            <?php if ($ext == "jpg" || $ext == "jpeg" || $ext == "png") : ?>
              <img src="<?= base_url('assets/doc/') . $result['lampiran'] ?>" alt="">
            <?php elseif ($ext == "pdf") : ?>
              <a href="<?= base_url('assets/doc/') . $result['lampiran'] ?>" target="_blank"><?= $result['lampiran'] ?></a>
            <?php elseif ($ext == "docx" || $ext == "doc" || $ext == "pptx" || $ext == "txt") : ?>
              <a href="<?= base_url('assets/doc/') . $result['lampiran'] ?>"><?= $result['lampiran'] ?></a>
            <?php else : ?>
              <p>No Attachment</p>
            <?php endif; ?>
            <div class="details">
              <span>
                <span id="lampiran"><?= $result['lampiran'] ?> </span>
                <span id="timestamp"><?= $result['timestamp'] ?> WIB</span>
              </span>
              <?php
              if ($result['user_id'] == $this->session->userdata['id']) : ?>
                <div class="action">
                  <a class="edit" href="<?= base_url('home/updateComm/') . $result['comm_id'] ?>">
                    <i class="fa fa-edit"></i>
                    <small>Edit</small>
                  </a>
                  <a class="delete" onclick="return confirm('are you sure for deleting this lapor message?')" href="<?= base_url('home/deleteComm/') . $result['comm_id'] ?>">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                    <small>Delete</small>
                  </a>
                </div>
              <?php endif; ?>
            </div>
          </div>
    </form>
  </div>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="<?= base_url('assets/css/comm_detail_style.css') ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <title><?= $title; ?></title>
</head>

<body>
  <div class="container">
    <form action="" method="post" enctype="multipart/form-data">
      
       
          <h1>SIMPLE LAPOR!</h1>
          <div class="nav-bar">
            <a href="<?= base_url()?>">HOME</a>
          </div>
            <br>

          <div class="container1">
            <p>Detail Laporan/komentar</p>
          <hr>
          <div class="laporan">
            <h4><?= $result['comm_title'] ?></h4>

            <small>Pelapor : <?= $result['fullname'] ?></small>

            <p><?= $result['comm'] ?></p>

            <p>Lampiran :</p>
            <?php $tmp = explode('.', $result['lampiran']);
            $ext = end($tmp);?>
           
            <?php if ($ext == "jpg" || $ext == "jpeg" || $ext == "png") : ?>
              <img src="<?= base_url('assets/img/') . $result['lampiran'] ?>" alt="">
            <?php elseif ($ext == "pdf") : ?>
              <a href="<?= base_url('assets/img/') . $result['lampiran'] ?>" target="_blank"><?= $result['lampiran'] ?></a>
            <?php elseif ($ext == "docx" || $ext == "doc" || $ext == "pptx" || $ext == "txt") : ?>
              <a href="<?= base_url('assets/img/') . $result['lampiran'] ?>"><?= $result['lampiran'] ?></a>
            <?php else : ?>
              <p>No Attachment</p>
            <?php endif; ?>
            <div class="details">
              <span>
                <span id="lampiran"><?= $result['lampiran'] ?> </span>
                <span id="timestamp">waktu :<?= $result['timestamp'] ?> WIB</span>
                <span id="aspek">aspek :<?= $result['aspek'] ?></span>
                
              </span>
              <?php
              if ($result['user_id'] == $this->session->userdata['id']) : ?>
                <div class="action">
                  <a class="edit" href="<?= base_url('home/updateComm/') . $result['comm_id'] ?>">
                    <i class="fa fa-edit"></i>
                    <small>Edit</small>
                  </a>
                  <a class="delete" onclick="return confirm('yakin laporan dihapus?')" href="<?= base_url('home/deleteComm/') . $result['comm_id'] ?>">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                    <small>Delete</small>
                  </a>
                </div>
              <?php endif; ?>
            </div>
          </div>
          <hr>
          </div>
    </form>
  </div>
</body>

</html>
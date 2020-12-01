<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <style>
    .sidebar {
      margin: 0;
      padding: 0;
      width: 200px;
      background-color: #f1f1f1;
      position: fixed;
      height: 100%;
      overflow: auto;
    }
    .sidebar a {
      display: block;
      color: black;
      padding: 16px;
      text-decoration: none;
    }
    .sidebar a:hover:not(.active) {
      background-color: #555;
      color: white;
    }
    div.content {
      margin-left: 200px;
      padding: 1px 16px;
      height: 1000px;
    }
    .alert {
      padding: 20px;
      background-color:green;
      color: white;
    }

    .closebtn {
      margin-left: 15px;
      color: white;
      font-weight: bold;
      float: right;
      font-size: 20px;
      line-height: 10px;
      cursor: pointer;
      transition: 0.3s;
    }

    .closebtn:hover {
      color: black;
    }
    table {
      border-collapse: collapse;
      border-spacing: 0;
      width: 100%;
      border: 1px solid #ddd;
    }

    th, td {
      text-align: left;
      padding: 16px;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }
    .btn {
      border: 2px solid black;
      background-color: white;
      color: black;
      padding: 5px 10px;
      font-size: 16px;
      cursor: pointer;
    }
    /* Orange */
    .warning {
      border-color: #ff9800;
      color: orange;
    }
    .warning:hover {
      background: #ff9800;
      color: white;
    }
    /* Red */
    .danger {
      border-color: #f44336;
      color: red
    }
    .danger:hover {
      background: #f44336;
      color: white;
    }
    /* Green */
    .success {
      border-color: #4CAF50;
      color: green;
    }
    .success:hover {
      background-color: #4CAF50;
      color: white;
    }}
    </style>
    <title>ADMINISTRATOR</title>
  </head>
  <body>
    <div class="sidebar">
      <img src="<?php echo base_url('assets/avatar.png'); ?>" style="height:8%; weight:8%; display:block; margin-left:auto; margin-right:auto; margin-top:15%;"alt="">
      <h4 style="text-align:center;">Administrator</h4>
      <br>
      <a href="<?php echo base_url('admin/beranda'); ?>">Laporan</a>
      <a href="<?php echo base_url('admin/mahasiswa'); ?>">Mahasiswa</a>
      <a href="<?php echo base_url('admin/pengaturan'); ?>">Pengaturan</a>
      <a href="<?php echo base_url('auth/logout') ?>">Keluar</a>
    </div>

    <div class="content">
      <img src="<?php echo base_url('assets/logo2.png'); ?>" style="height:10%; width:7%; display:block; margin-left:auto; margin-right:auto;"alt="">
      <h2 style="text-align:center;">LAPOR ITERA</h2>
      <hr>
      <div class="searchbar" style="">
        <form class="" action="" method="post">
          <input type="text" name="keyword" id="keyword" placeholder="Cari Mahasiswa" autocomplete="off">
          <button type="submit" name="carimahasiswa">Cari</button>
        </form>
      </div>
      <hr>
      <div class="laporan">
        <h2 style="text-align:center;">DAFTAR MAHASISWA</h2>
        <?php if($this->session->flashdata('pesan')): ?>
        <div class="alert">
          <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
          <?php echo $this->session->flashdata('pesan'); ?>
        </div>
        <?php endif; ?>
        <br>
        <table>
          <tr>
            <th>NIM</th>
            <th>Program Studi</th>
            <th>Nama</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
          <?php $i=1; ?>
          <?php foreach ($mhs as $daftar) : ?>
          <tr>
            <td><?php echo $daftar['nim']; ?></td>
            <td><?php echo $daftar['prodi']; ?></td>
            <td><?php echo $daftar['nama']; ?></td>
            <?php if ($daftar['verif'] == 1){
              $status = "Aktif";
            } else {
              $status = "Tidak Aktif";
            }?>
            <td><?php echo $status; ?></td>
            <td>
              <?php if ($daftar['verif'] == 0) : ?>
              <a class="btn success"href="<?php echo base_url('admin/verif/'); ?><?php echo $daftar['nim']; ?>"> Verifikasi</a>
              <?php elseif ($daftar['verif'] == 1) : ?>
              <a class="btn warning"href="<?php echo base_url('admin/unverif/'); ?><?php echo $daftar['nim']; ?>"> Unverifikasi</a>
              <?php endif; ?> <a class="btn danger"href="<?php echo base_url('admin/hapus/'); ?><?php echo $daftar['nim']; ?>"> Hapus</a>
            </td>
          </tr>
          <?php $i++; ?>
          <?php endforeach ?>
        </table>

      </div>
    </div>
    </div>


  </body>
</html>

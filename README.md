KELAS  : PABW RD 2020
ANGGOTA: TIO FAZRI FAHMI SAPUTRA (14116123)
         M ICHSAN AL-FATIH (14116126)
         LIGA SEPTIAN (14117039)
======================PENJELASAN TEKNIS=========================

1. Instalasi framework
   Penginstalan framework codeigniter dilakukan dengan cara :
   -download codeigniter versi 3 pada link https://codeigniter.com/userguide3/installation/downloads.html
   -ekstrak folder
   -copy seluruh folder hasil ekstraksi ke dalam projek
   -buka folder application di projek
   -buka sub-folder config lalu lakukan konfigurasi pada database.php file autoload.php config.php dan routes.php

2. Database
   Pembuatan data base dilakukan dengan memberi perintah pada mysql :
   CREATE TABLE lapor (
    id int(10) not null AUTO_INCREMENT PRIMARY KEY,
    isi longtext not null,
    aspek varchar(25) not null,
    waktu datetime not null,
    lampiran varchar(50)
    )

    instalasi database pada projek dilakukan dengan cara :
    -Masuk ke folder application -> config
    -Buka file database.php lalu lakukan konfigurasi sesuai dengan pengaturan database

3. Validasi di Client Side

4. Ajax

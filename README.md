Nama Anggota Kelompok: Yosua Rori H (14116096)

Kelas: RA (2020)

=============================== PENJELASAN TEKNIS ===============================

1. Instalasi framework Penginstalan framework codeigniter dilakukan dengan cara : -download codeigniter versi 3 pada link https://codeigniter.com/userguide3/installation/downloads.html -ekstrak folder -copy seluruh folder hasil ekstraksi ke dalam projek -buka folder application di projek -buka sub-folder config lalu lakukan konfigurasi pada database.php file autoload.php config.php dan routes.php
2. Pembuatan Database dilakukan dengan memberi perintah pada mysql : CREATE TABLE komentar ( id int(11) not null AUTO_INCREMENT PRIMARY KEY, isi varchar(2000) default null, type varchar(30) default null, file text not null, tanggal varchar(20) )
3. Source Code Ajax diimplementasikan pada file home.php untuk mencari data laporan/komentar berdasarkan field isi.
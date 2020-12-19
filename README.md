## Cara Install Framework Codeigniter :
1. Mendownload Codeigniter V3 di https://codeigniter.com/download,
2. Ekstrak .zip Codeigniter V3 tersebut,
3. Pindahkan kedalam folder xampp/htdocs,
4. Melakukan konfigurasi terhadap config, antara lain autoload, database, routes,dsb.
5. Ubah nama BASE_URL pada config.php menjadi nama "http://localhost/nama_project".

## Adapun cara Export basis data yang telah ada yaitu:
1. Hidupkan server Apache dan MySql pada XAMPP,
2. Buka localhost/phpmyadmin,
3. Pada bagian kolom atas, cari fitur Export,
4. Tunggu hingga proses selesai.
5. Kemudian cari file .sql tersebut

## Koneksi Basis Data
1. Basis data dalam codeigniter otomatis terkoneksi apabila server Apache dan MySql dihidupkan pada aplikasi XAMPP, Jika sudah:
2. Ubah nama database yang terletak pada config/database.php menjadi nama database milik kita,
3. Ubah nama username menjadi 'root',
4. dan Password biarkan kosong.

## Melakukan Validasi pada Client:
Validasi pada client dalam project ini dibuat menggunakan Javascript, adapun cara dan penjelasannya adalah sebagai berikut,
1. Tentukan form mana yang akan divalidasi, yang mana disini akan memvalidasi agar setiap field form tidak boleh kosong dan kata dalam field Laporan/Komentar harus lebih dari 20 karakter.
2. Membuat file .js, yang mana pada project ini disertakan dalam folder assets.
3. Isi dari file tersebut adalah memvalidasi agar field tidak boleh kosong, apabila kosong maka muncul peringatan atau alert dan user tidak bisa submit form tersebut.
4. Lakukan pemanggilan 'onsubmit' dalam tag form.

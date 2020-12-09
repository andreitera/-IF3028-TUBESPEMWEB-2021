### Cara Install Codeigniter
Seperti awal pembahasan bahwa codeigniter ini adalah sebuah framework yang sangat sederhana, sehingga cara install codeigniter sendiri tidak terlalu sulit bahkan sangat mudah, dimana kita hanya memerlukan sebuah web server pada komputer kita
1. Step 1: Download file Codeigniter

Silahkan klik link https://codeigniter.com/ lalu download framework codeigniter terbaru, saat ini yang terbaru adalah versi 4.0.4, dan akan terus berlanjut ke versi berikutnya.

2. Step 2: Ekstrak dan Install Codeigniter Framework

Setelah anda download maka anda akan mendapatkan sebuah file bernama CodeIgniter-4.0.4.zip, silahkan ekstrak file tersebut setelah itu akan muncul folder bernama CodeIgniter-4.0.4, silahkan anda rename menjadi codeigniter lalu salin folder tersebut ke folder root anda, yaitu di htdocs, sedangkan linux di folder www/html.

3. Step 3: Konfigurasi Base URL Codeigniter

Setelah anda selesai melakukan instalasi codeigniter maka selanjutkan melakukan konfigurasi base url yang terdapat di folder application/config/config.php silahkan anda buka dengan teks editor yang anda sukai. Lalu pada bagian kode dibawah ini:

   $config['base_url'] = '';
Ubahlah menjadi dibawah ini:

   $config['base_url'] = 'http://localhost/codeigniter';
Nilai tersebut harus sesuai dengan alamat/nama folder yang anda tentukan ketika anda menyalin file codeigniter ke dalam folder root web server anda.

### Cara Install Xampp di Windows
1. Jika sebelumnya telah download xampp silahkan untuk mengikuti instruksi cara install xampp berikut ini, apabila belum memilikinya silahkan download versi Bitnami for xampp.

Klik dua kali pada aplikasi xampp yang telah di download, akan mucul alert notifikasi biasanya ini akan muncul hanya untuk memastikan apakah anda benar ingin meng-install xampp, klik yes saja.

2. Lalu selanjutnya akan muncul splash screen bitnami, setelah itu akan ada peringatan error, ini terjadi terkait masalah permission atau hak akses, klik OK  karena nantinya akan di konfigurasi ke hard drive lain.

3. Setelah itu akan muncul bagian awal instalasi Setup Wizard xamp, klik Next untuk memulai instalasi.

4. Setelah itu akan muncul halaman pemilihan komponen apa saja yang ingin di install di dalam web server xampp ini, silahkan untuk di sesuaikan, anda dapat meminimalisir modul-modul instalasi sesuai kebutuhan, tetapi di dalam tutorial ini saya membiarkan semuanya terinstall. jika sudah klik Next.

5. Selanjutnya anda akan di arahkan untuk penempatan folder instalasi xampp, jika secara bawaan akan di arahkan ke drive C, karena masalah hak akses yang terjadi di awal tadi sehingga perlu di arahkan ke hard drive lain, sebagai contoh saya mengarahkan ke drive G, silahkan di sesuaikan dengan part hard drive yang tersedia pada komputer anda. setelah itu klik Next.

6. Langkah berikutnya adalah tampilan promosi bitnami menawarkan cara menginstall cms seperti WordPress dan lain-lain. Pada langkah ini ada sebuah checkbox pada bagian Learn more about Bitname for Xampp silahkan di hilangkan ceklis yang secara bawaan telah ada jika tidak ingin mengikuti petunjuk instalasi CMS. jika sudah klik Next.

7. Pada langkah berikutnya Ready to Install ini sebenarnya hanya untuk memastikan apakah anda sudah yakin pada tahap-tahap sebelumnya, jika di rasa anda kurang yakin bisa menekan tombol back, tetapi dalam tutorial ini telah di uji coba langkah-langkah instalasi xampp sebagai web server lokal di tutorial ini. Jika sudah klik Next.

8. Selanjutnya adalah proses extract file-file xampp ke dalam hard drive folder yang telah di tetapkan sebelumnya, tunggu sampai proses instalasi selesai dimana proses ini tidak memakan waktu lama. Jika sudah klik Next.

9. Langkah berikutnya anda akan di bawa ke bagian Completing the Xampp Setup Wizard ini adalah langkah terakhir dalam rangkaian proses instalasi.  Terdapat checkbox Do you want to start the Control Panel now? biarkan saja ceklis tersebut, atau jika tidak ada ceklis maka silahkan berikan ceklis agar setelah ini Xampp control panel secara otomatis berjalan. Jika sudah klik finish.

10. Sampai disini proses intalasi telah selesai, anda bisa mengecek langsung ke folder yang sebelumnya telah di arahkan. Karena pada tahap terakhir kita memberikan ceklis agar xampp control panel secara otomatis tampil maka tunggu sampai control panel tersebut muncul.

Jika Control Panel Xampp sudah muncul silahkan klik start pada Apache dan Mysql hingga tulisan Apache dan Mysql di block warna hijau, dibawah ini adalah contoh gambar Control Panel Xampp yang pada bagian apache dan mysql sudah berjalan.

Coba perhatian pemberitahuan berwarna merah di pada gambar Control Panel Xampp, hal itu di sebabkan karena pada port 80 sudah di jalankan di aplikasi lain sehingga menyebabkan modul Apache tidak dapat berjalan, untuk error tersebut saya telah merubahnya ke port 8080 agar tidak terjadi bentrok pada port 80.

Untuk menguji jika semua sudah berjalan dengan baik silahakan buka browser anda dan arahkan ke alamat http://localhost/ atau http://127.0.0.1/ ini adalah alamat umum komputer lokal. Jika berhasil seharusnya di arahkan ke halaman Xampp, seperti gambar dibawah.

### Melakukan Client side Validation

Validasi client side adalah validasi yang dilakukan di dalam browser. Sebelum data dikirimkan ke server, data diperiksa kebenarannya terlebih dahulu oleh browser web. Setelah data yang dimasukkan benar (valid), browser baru mengirimkan ke server untuk kemudian diproses atau disimpan ke dalam database.

Proses validasi client side dilakukan dengan menggunakan JavaScript atau VBScript, disesuaikan dengan browser yang modul yang dikembangkan oleh pengembangnya.
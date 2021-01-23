## Simple `LAPOR` :heavy_exclamation_mark:

Anda mengetahui aplikasi `lapor` yang dibuat oleh pemerintah republik indonesia? jika tidak silahkan kunjungi
http://lapor.go.id, maka anda akan mendapatkan laman seperti gambar di bawah

![](tampilan/lapor.png)

Kali ini kita akan membuat aplikasi web seperti `lapor` untuk mengumpulkan laporan/komentar terkait layanan
di program studi teknik informatika ITERA.
**Luangkan waktu untuk membaca spesifikasi ini sampai selesai.** :kissing_heart:

### Anggota Tim :cyclone:

Project dikerjakan secara **berkelompok** dengan maksimal jumlah anggota adalah 2-3 orang mahasiswa.

### Petunjuk Pengerjaan :umbrella:

1. Fork pada repository ini dengan akun github anda.
2. Silakan commit pada repository anda (hasil fork). Lakukan berberapa commit dengan pesan yang bermakna,
   contoh: fix css, membuat post done, jangan seperti final, benerin dikit, oke deh, update deh dll.
   Disarankan untuk tidak melakukan commit dengan perubahan yang besar karena akan mempengaruhi
   penilaian (contoh: hanya melakukan satu commit kemudian dikumpulkan).
3. Minimal commit sebanyak personil anggota tim dengan masing-masing personil tim melakukan commit sesuai dengan kesepakatan tim, penilaian individu akan dilihat.
4. Ubah **Penjelasan Teknis** pada bagian bawah readme.md ini dengan menjelaskan bagaimana cara anda:
   - Instalasi Framework, Koneksi basis data
   - Melakukan validasi pada client-side
   - Melakukan AJAX (mulai dari pengguna melakukan klik pada tombol LAPOR! sampai laporan/komentar terkirim).
5. Pull request dari repository anda ke repository ini dengan
   format **NIM** - **Nama Lengkap**. **Waktu terkahir proses pull request adalah 4 hari setelah
   ujian akhir semester (UAS)**
6. Data yang dikumpulkan adalah:
   - Source code aplikasi
   - Basis data, dan
   - Cara instalasi aplikasi anda
7. Penilaian:
   - Kerjasama tim
   - Kesesuaian dengan spesifikasi
   - Pemahaman dalam penggunaan framework, penilaian efisiensi query
   - Antarmuka aplikasi
   - Bug free :beetle:

### Tools :hammer:

1. Untuk backend, wajib menggunakan PHP framework apapun (Contoh: Codeigniter, Laravel, Slim, Yii dll).
2. Gunakan MySQL atau basis data relasional lain untuk menyimpan data.
3. Untuk frontend, gunakan Javascript, HTML dan CSS. **Tidak boleh menggunakan library atau framework CSS atau JS seperti
   JQuery atau Bootstrap.** CSS sebisa mungkin ada di file yang berbeda (tidak inline styling/embeding styling).

### Spesifikasi Simple LAPOR!

#### Tampilan :soccer:

Anda diminta untuk membuat tampilan sedemikian hingga mirip dengan tampilan berikut. Website yang diminta tidak harus
responsive. Desain tampilan tidak perlu dibuat indah. Icon dan jenis font tidak harus sama dengan contoh. Warna font,
garis pemisah, dan perbedaan ukuran font harus terlihat sesuai contoh. Perhatikan juga tata letak elemen-elemen.

![](tampilan/utama.png)

- Search bar diletakkan di bagian paling atas dibawah judul.
- Tombol "cari" berada di sebelah kanan search bar.
- **Buat LAPOR!** digunakan untuk mengirimkan laporan/komentar baru.
- Tampilan search bar ini harus tetap ada walaupun anda tidak mengimplementasikan fitur search.
- Tampilan pertanyaan tidak harus urut berdasarkan "Laporan/Komentar terakhir",
  namun tulisan "Laporan/komentar Terakhir" ini harus ada.

![](tampilan/buat.png)

- Tampilan di atas digunakan untuk mengajukan atau mengubah laporan/komentar.
- Perhatikan label dari field pada form berada di dalam field (tidak di luar)
- Apek yang dilaporkan ditampilkan dalam bentuk `select`

![](tampilan/detail.png)

- Bagian ini menampilkan laporan/komentar. Bagian `datetime` harus ada. Tanda `kuote` tidak harus ada
- Perhatikan label dari field pada form berada di dalam field (tidak di luar)

### List laporan/komentar

Halaman utama berisi daftar judul pertanyaan, siapa yang bertanya, dan isi pertanyaan. Isi pertanyaan yang terlalu
panjang harus dipotong. Silakan definisikan sendiri seberapa panjang agar tetap baik terlihat di layout yang Anda buat.

Pada masing-masing elemen list, terdapat menu untuk mengubah dan menghapus pertanyaan.

View Laporan ditampilkan secara terurut dimulai dari laporan terakhir yang diberikan highlight

### Kirim laporan/komentar `LAPOR!`

Pengguna dapat mengajukan laporan/komentar. Form yang digunakan memiliki komentar (textarea),
data lapiran berupa gambar
dan file berekstention `doc, docx, xls, xlsx, ppt, pptx, pdf``. Gunakan HTTP POST.

### Ubah Laporan/komentar

Pengguna dapat mengubah laporan/komentar yang sudah dibuat. Form yang digunakan memiliki tampilan yang sama dengan
form untuk bertanya, namun field-field yang ada sudah terisi. Gunakan HTTP POST untuk menyimpan perubahan.

### Hapus Laporan/komentar

Pengguna dapat menghapus laporan/komentar yang sudah dibuat. Lakukan konfirmasi penghapusan dengan `javascript`.

### Lihat Laporan/komentar

Pengguna dapat melihat laporan/komentar. Pada halaman ini terdapat informasi aspek yang dilaporkan.
(Dosen, Staff, Mahasiswa, Infrastruktur dan Pengajaran ), isi laporan/komentar, waktu pengiriman komentar `datetime`
dan file lapiran.

### Validasi

Validasi **wajib** dilakukan pada _client-side_, dengan menggunakan **javascript** bukan HTML 5 input type, yaitu:

- Setiap field pada form tidak boleh kosong.
- minimal jumlah kata dalam laporan/komentar adalah 20 kata.

### Bonus

Pengguna dapat mencari laporan/komentar dengan melakukan search ke `isi laporan/komentar`.

### Penjelasan Teknis

- Instalasi Framework, Koneksi basis data

  1. intalasi framework menggunakan codeigniter 4 , sebelum menginsatal codeigniter 4 kami menginstal Xammp, git dan Composer terlebih dahulu, selanjutnya kami melakukan instalasi menggunakan composer dengan command "composer create-project codeigniter4/appstarter project-root" dan untuk clone dari github menggunakan command "git clone" untuk menjalankan project terlebih dahulu masuk kedalam folder projek dan menggunakan command "php spark serve" untuk menjalankan projek dan membuka hhtps:loaclhost:8080 pada browser, untuk menghubungkan git local dengan github menggunakan commad "git remote add origin https://github.com/alifahmaaad/-IF3028-TUBESPEMWEB-2021.git"
  2. untuk koneksi database mengaktifkan xammp pada bagian apache dan mysql serta membuka http://localhost/phpmyadmin/ pada browser serta mengubah file .env dari codeigniter4 untuk mengatur atau menghubungkan database, kami membuat tabel dan database secara manual pada phpmyadmin dengan nama database tubespemweb dan tabel laporan.pada file .env kami juga mengganti CI_ENVIRONTMENT = development pada saat pengerjaan supaya dapat melihat error kode.

- Melakukan validasi pada client-side
  untuk validasi ada pada saat ingin memasuki file dengan ketentuan format yang sudah ditentukan ada pada bagian sript di lapor.php(view), dan pada form buat laporan ada validasi untuk laporan tidak boleh kurang dari 20 kata, dan semua field harus terisi dan akan memunculkan alert ketika tidak memenuhi hal tersebut.selanjutnya ada pada bagian detail laporan pada saat laporan berextension image maka akan menampilkan foto pada lampiran dan hanya menampilkan nama file jika lampiran berupa dokumen text.
- Melakukan AJAX
  ajax digunakan pada saat search laporan dan buat laporan.
  pada saat search laporan maka akan menganti bagian data pada list tanpa harus load page.
  dan pada saat membuat laporn menggunakan formdata() untuk menyimpan datanya dan pada saat laporan terkirim maka akan menampikan alert. proses penambahan laporan tidak akan load page.namun ketika berhasil akan diarahkan ke home kembali setelah alert di klik ok.

### Knowledge

Untuk meringankan beban tugas ini, ada berberapa keyword yang bisa anda cari untuk menyelesaikan tugas ini.

- CSS: margin, padding, header tag, font-size, text-align, float, clear, border, color, div, span, placeholder,
  anchor tag.
- Javascript : XMLHTTPRequest.
- PHP Framework : [Codeigniter](https://codeigniter.com/en/docs), [Laravel](https://laravel.com/docs/6.x) dll.
- SQL query: SELECT, INSERT, UPDATE, DELETE, WHERE, operator LIKE.

:telephone: Jika ada pertanyaan silakan tanyakan lewat `Asisten`.

### About :honeybee:

Dosen : Dicky Prima Satya, M.T., Andre Febrianto, S.Kom., M.Eng., Amirul Iqbal, S.Kom., M.Eng.

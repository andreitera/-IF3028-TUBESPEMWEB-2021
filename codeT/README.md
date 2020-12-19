Tugas besar pemrograman Web
Nama kelompok:
1. M. GALIH PRATAMA (118140102)
2. Putri Ayuni (118140118)
3. Manarul Hidayat (118140132)

################################################################
1.	Instalasi Framework
-	Menggunakan codeigniter 3
-	Dengan mendonwload frameworknya dari link berikut https://codeigniter.com/download
-	Mengekstrak ke htdocs
-	Disini nama folder diberi nama “codeT”
-	Pergi ke application > config > config.php
Lalu seting code dengan $config['base_url'] = 'http://localhost/codeT/';
Koneksi basis data
-	Pergi ke application > config > autoload.php
Lalu berikan database pada $autoload[‘libraries’]
-	Database yang telah dibuat dengan nama database “tubes”
Pergi ke application > config > database 
Dan setting konfigurasinya menjadi seperti ini

$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => 'root',
	'password' => '',
	'database' => 'tubes',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);

2.	Validasi pada client-side
Mengunakan bebarapa kode javascript dalam melakukan validasi pada client-side. Salah satunya validasi kalau textarea saat menginputkan laporan harus 20 kata.
Dengan menggunakan fungsi js berikut:
	<script type="text/javascript">
		function checkWordCount() {
			s = document.getElementById("lapor").value;
			s = s.replace(/(^\s*)|(\s*$)/gi, "");
			s = s.replace(/[ ]{2,}/gi, " ");
			s = s.replace(/\n /, "\n");
			if (s.split(' ').length <= 20) {
				alert("Laporan kurang dari 20 kata");
				return false;
			}
		}
	</script>
Maka jika kurang dari 20 kata akan keluar alert pada browser dengan pesan “Laporan kurang dari 20 kata”

3.	Melakukan ajax native pada aplikasi
Dapat dilihat pada folder asset>js>ajax
-	Pencarian 
Ketikan mengetikan keyword pada form input text, maka data secara asynchronous mencari seusai dengan keyword tanpa reset page
-	Tambah data 
Harus dilakukan dengan orang yang telah melakukan registrasi username dan password , lalu melakukan login.
-	Untuk hapus data, dan update data harus dilkaukan oleh user yang telah mengisikan sebelumnya


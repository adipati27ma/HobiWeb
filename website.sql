-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2019 at 06:26 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '7815696ecbf1c96e6894b779456d330e');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul_artikel` varchar(100) NOT NULL,
  `subjudul_artikel` varchar(255) NOT NULL,
  `isi_artikel` text,
  `photo_artikel` varchar(255) DEFAULT NULL,
  `photobait_artikel` varchar(255) NOT NULL,
  `penulis_artikel` varchar(32) DEFAULT NULL,
  `tgl_artikel` varchar(32) DEFAULT NULL,
  `id_kategori` int(11) NOT NULL,
  `kategori_artikel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul_artikel`, `subjudul_artikel`, `isi_artikel`, `photo_artikel`, `photobait_artikel`, `penulis_artikel`, `tgl_artikel`, `id_kategori`, `kategori_artikel`) VALUES
(1, 'LINE for PC', 'Chatting dengan teman sambil bekerja/belajar menjadi lebih mudah', '<p>Assalamualaikum wr. wb. teman-teman semua, disini saya akan berbagi informasi kepada teman-teman semua bahwa ada aplikasi yang sangat nge-trend nih! Aplikasi ini sudah ada dari tahun 2011 dan di rilis pertama kali pada bulan <b>Juni 2011</b>. Tetapi sampai sekarang masih saja ada dan makin populer, yuk langsung saja disimak penjelasannya.</p>\r\n\r\n<p align=\"center\"><img class=\"img-fluid\" src=\"img/KontenPost1/LogoLine.png\" alt=\"Line Logo\" title=\"Logo Line\">\r\n			<span class=\"caption text-muted\">Logo Line</span></p>\r\n\r\n<p><b>LINE</b> - adalah suatu aplikasi yang mungkin sekarang ini sedang populer di kalangan remaja hingga dewasa. LINE merupakan salah-satu sosial media yang sudah menyebar luas dan menjadi aplikasi sosial chat yang sangat populer khususnya di Indonesia. Dengan tampilan hijau khas-nya ini, LINE ini ternyata memiliki <strong>171 juta pengguna aktif bulanan</strong> pada tahun <strong>2017</strong> (dikutip dari <a href=\"https://www.liputan6.com/tekno/read/2997411/line-kantongi-171-juta-pengguna-aktif-bulanan\">liputan6.com</a>) dan mengalami banyak sekali peningkatan pengguna di sepanjang tahun 2016 hingga 2017. Dan hingga tahun <strong>2018</strong>, pengguna LINE di Indonesia mencapai <strong>90 juta pengguna</strong> dan itu bukanlah angka yang sedikit.</p>\r\n			\r\n            <p>Sosial media untuk chatting di saat sekarang ini sudah dapat dikatakan menjadi kebutuhan primer setiap orang dan hampir semua dari kita memiliki sosial media walaupun hanya satu atau dua saja. Semakin berkembangnya teknologi dan semakin mudahnya aplikasi sosial media untuk digunakan, maka penggunanya pun akan semakin mudah untuk mengakses dan menggunakannya. Terlebih kita merupakan makhluk sosial yang akan selalu berinteraksi dengan yang lainnya, dan dalam kasus ini seberapa jauh pun jaraknya tidak akan menjadi masalah untuk kita dapat berkomunikasi dengan kerabat kita baik kerabat jauh maupun kerabat dekat.</p>\r\n\r\n            <p>Aplikasi LINE ini biasa kita temui di smartphone Android, memiliki banyak fitur yang mempermudah kita untuk berinteraksi, bahkan sekarang banyak fitur-fitur baru yang dapat memanjakan penggunanya. Ada pula games-games dari pihak LINE yang dapat  kita mainkan bersama teman LINE kita, tentu itu akan lebih asyik jika bisa dimainkan bersama. Jika orang tua memiliki aplikasi LINE pun sudah tidak aneh, karena di LINE juga ada fitur berita <a class=\"text-info\">\"LINE Today\"</a> yang selalu update setiap saat, lengkap, serta tertata dengan rapi sehingga nyaman untuk dilihat oleh mata.</p>\r\n\r\n            <p>Nah, tapi sekarang kita akan bahas betapa fleksibelnya LINE ini karena telah menyediakan <em><b>PC version</b></em> yang bisa kita gunakan Komputer atau Laptop kita. Jadi untuk mengakses LINE di PC/Laptop, anda tidak harus mengunduh simulator terlebih dahulu untuk dapat menginstallnya. Anda cukup mengunduh aplikasi <em>LINE for PC</em> dan menginstallnya, lalu menghubungkannya ke internet dengan cara <mark><a class=\"text-danger\">login manual</a></mark> atau <mark><a class=\"text-danger\">login dengan barcode</a></mark>. Anda tidak perlu cemas saat login di PC/Laptop, karena akun LINE yg aktif pada smartphone anda tidak akan logout/hilang. Jadi anda bisa menggunakan akun LINE yang sama di dua device yang berbeda, yakni di smartphone anda dan di PC/Laptop anda.</p>\r\n			\r\n			<p align=\"center\"><img src=\"img/KontenPost1/kontenline2.jpg\" alt=\"Tampilan LINE PC\" title=\"Tampilan LINE versi PC\" width=\"650\" height=\"400\"></p>\r\n			<span class=\"caption text-muted\">Tampilan jendela LINE pada Laptop/PC</span></p>\r\n			\r\n\r\n            <h2 class=\"section-heading\">Line for PC Download</h2>\r\n\r\n            <p>Untuk mengunduh LINE versi PC/Komputer anda bisa langsung mengunjungi situs web resminya di <i><u>line.me</u></i> atau dapat meng-<a href=\"https://line.me/id/download\" target=\"_blank\">klik disini</a> untuk segera mengunduh aplikasinya.</p>\r\n			\r\n			<p align=\"center\"><img src=\"img/KontenPost1/kontenline1.jpg\"  width=\"650\" height=\"400\" title=\"Jendela Download\" alt=\"Jendela Download LINE\">\r\n			<span class=\"caption text-muted\">Jendela website saat akan mengunduh, pilih yang sebelah kanan</span></p>\r\n            \r\n			<p>Setelah anda meng-klik link tadi, maka akan muncul tampilan <em>Official Website</em> dari LINE. Akan ada dua pilihan yang tertera seperti gambar di atas, pilihlah yang sebelah kanan dan klik tombol dibawah nya (jika sistem operasi anda Windows maka pilihlah ikon Windows, jika Mac maka klik ikon Mac OS) lalu tunggu hingga unduhan selesai.</p>\r\n\r\n<p>Sekian artikel ini saya buat, semoga bermanfaat dan bisa menjadi referensi yang baik untuk teman-teman semua.</p><br><br>\r\n			\r\n			<p align=\"left\" style=\"font-size:19px\"><br><br>Featured Image Source : on My Laptop<br><br>\r\n		  Reference : <br> <a href=\"google.com\" target=\"_blank\">google.com</a><br>\r\n		  <a href=\"https://www.indotelko.com\" target=\"_blank\">indotelko.com</a><br>\r\n		  <a href=\"www.liputan6.com\" target=\"_blank\">liputan6.com</a><br>\r\n</p>', 'line-bg.jpg', 'kontenline2.jpg', 'Adipati', 'January 3, 2019', 5, 'Application (Windows)'),
(2, 'WhatsApp for PC', 'Jalankan aplikasi WhatsApp di Windows 7, Windows 8, dan Windows 10', '<p>Assalamualaikum wr. wb. teman-teman semua, kali ini saya akan memberi informasi tentang aplikasi lagi nih. Kita akan membahas salah satu aplikasi sosial media yang paling banyak digunakan oleh para pembisnis. Biasanya aplikasi ini dijalankan di smartphone android, tetapi kali ini aplikasi tersebut akan kita install dan dijalankan di PC/Laptop. Yuk langsung simak saja artikelnya!</p>\r\n\r\n<p align=\"center\"><img class=\"img-fluid\" src=\"img/KontenPost2/logowhatsapp.png\" alt=\"Logowhatsapp\" title=\"Logo WhatsApp\" width=\"20%\">\r\n			<span class=\"caption text-muted\">Logo WhatsApp</span></p>\r\n\r\n<p><b>WhatsApp -</b> atau yang biasa disebut dengan <b>WA</b> merupakan aplikasi yang sedang sangat nge-trend saat ini dan sekarang berada di bawah naungan perusahaan Facebook oleh <mark>Mark Zuckerberg</mark>. Hampir sama dengan LINE, aplikasi WhatsApp pun sangat banyak yang menggunakannya baik di dunia maupun di Indonesia. Menurut kompas.com, layanan chatting WhatsApp ini mampu menghimpun <b>1,5 miliar</b> pengguna aktif bulanan atau <i>monthly active users</i> (MAU) \r\n(dikutip dari <a href=\"https://tekno.kompas.com/read/2018/02/01/09270377/pengguna-aktif-bulanan-whatsapp-tembus-15-miliar\" target=\"_blank\">Kompas.com</a>). Biasanya WhatsApp ini digunakan oleh mereka yang sibuk dan sering berkomunikasi dengan banyak orang (semisal pekerja kantoran, para pembisnis) dan biasanya pun grup-grup keluarga besar di masyarakat akan dibuat menggunakan WhatsApp ini sehingga mereka tidak kehilangan waktu untuk mempererat tali silaturahmi.</p>\r\n\r\n<p>Cara untuk menginstall WhatsApp dan informasi yang dijelaskan di bawah akan bisa diterapkan oleh kalian yang menggunakan sistem operasi <b>Windows 7</b>, <b>Windows 8</b>, dan <b>Windows 10</b>. Sehingga jika anda bertanya-tanya di bagian mana cara untuk menginstall aplikasi ini di Windows 10 atau Windows 7, jangan bingung karena caranya sama walaupun berbeda versi Windowsnya.</p>\r\n\r\n\r\n<h2 class=\"section-heading\">Install WhatsApp di PC/Laptop</h2>\r\n\r\n<p align=\"center\"><a href=\"img/KontenPost2/kontenpost8.jpg\" target=\"_blank\"><img class=\"img-fluid\" src=\"img/KontenPost2/kontenpost8.jpg\" alt=\"Chat WhatsApp di PC\" title=\"Chat WhatsApp di PC\" width=\"80%\"></a>\r\n			<span class=\"caption text-muted\">Contoh tampilan chatting WhatsApp di PC</span></p>\r\n\r\n<p>Untuk menjalankan aplikasi WhatsApp di PC/Laptop ini dapat dilakukan dengan 2 cara, yaitu dengan mengaksesnya dari website dan menginstallnya sebagai aplikasi dekstop dengan mendownload file aplikasinya terlebih dahulu.</p>\r\n\r\n<blockquote>Catatan : Agar WhatsApp anda dapat tetap berjalan di komputer, maka smartphone anda pun harus tetap tersambung dengan internet dan pastikan WhatsApp-nya juga tersambung koneksi internet.</blockquote><br><br>\r\n\r\n<h3>Cara menjalankan WhatsApp dari website</h3>\r\n\r\n\r\n<p>Untuk menjalankan WhatsApp di PC menggunakan website/browser ada beberapa cara, yaitu :<br></p>\r\n<ol>\r\n<li> Ketikkan url berikut di dalam address bar :\r\n<a href=\"https://web.whatsapp.com\" target=\"_blank\">www.web.whatsapp.com</a>. Maka akan terbuka tab whatsapp web yang muncul di layar monitor.<br><br></li>\r\n<li> Setelah muncul tampilan, akan ada bardcode yang harus di scan menggunakan smartphone.<br><br></li>\r\n<li> Ikuti instruksi yang disebutkan di tampilan tersebut, tampilan mirip seperti gambar sebelumnya.<br><br></li>\r\n<li> Intruksi tersebut akan menyuruh anda membuka aplikasi WhatsApp di smartphone anda, dan meminta anda untuk menscan barcode-nya. Maka bukalah aplikasi WhatsApp yang terinstall di smartphone.<br><br></li>\r\n<li> Lalu tekan titik tiga di pojok atas kiri, akan ada menu \"WhatsApp Web\", klik dan setelahnya akan muncul tampilan seperti pada gambar :</li><br>\r\n\r\n<p align=\"center\"><img class=\"img-fluid\" src=\"img/KontenPost2/kontenpost5.jpg\" alt=\"tampilan pada smartphone\" title=\"Tampilan pada smartphone\" width=\"30%\">\r\n			  <img class=\"img-fluid\" src=\"img/KontenPost2/kontenpost6.jpg\" alt=\"tampilan setelah mengklik menu\" title=\"Tampilan setelah mengklik menu\" width=\"30%\"> <img class=\"img-fluid\" src=\"img/KontenPost2/kontenpost7.jpg\" alt=\"tampilan scan barcode\" title=\"Tampilan scan barcode\" width=\"30%\">\r\n\r\n</p>\r\n			<span class=\"caption text-muted\">Tampilan pada layar smartphone</span><br>\r\n\r\n<li> Lalu tekan tanda tambah \"+\" untuk menambah device yg login dengan akun WhatsApp dan scan barcode-nya.</li>\r\n</ol>\r\n<a>Setelah semua dilakukan, selamat anda akan bisa melakukan kirim-terima pesan WA dengan isi chat dan akun yang sama seperti di smartphone/HP.</a>\r\n\r\n<h3>Menjalankan WhatsApp dengan Install Aplikasinya</h3>\r\n<ol>\r\n<li> Untuk menginstall aplikasinya tentu anda harus memiliki mentahannya terlebih dahulu, download <a href=\"https://whatsapp.com/download\" target=\"_blank\">disini</a> untuk mendapatkan software-nya. Anda akan langsung disambungkan ke website WhatsApp dan akan muncul tampilan :</li><br>\r\n\r\n<p align=\"center\"><a href=\"img/KontenPost2/kontenpost2.jpg\" target=\"_blank\">\r\n<img class=\"img-fluid\" src=\"img/KontenPost2/kontenpost2.jpg\" alt=\"Tampilan di web whatsapp\" title=\"Tampilan Awal Whatsapp Web\" width=\"80%\"></a>\r\n			<span class=\"caption text-muted\">Tampilan awal WhatsApp Web</span></p>\r\n\r\n<li> Pilih yang sebelah kanan dan download sesuai sistem operasi anda, entah itu 32-bit atau 64-bit. Disitu akan tertulis hanya untuk <mark><a class=\"text-danger\"> Windows 8 </a></mark> tetapi sebenarnya itu masih bisa digunakan untuk <b>Windows 7</b> sampai saat ini. Hanya saja tetap sesuaikan dengan device anda apakah itu 32-bit atau 64-bit.</li>\r\n\r\n<p align=\"center\"><a href=\"img/KontenPost2/kontenpost3.jpg\" target=\"_blank\">\r\n<img class=\"img-fluid\" src=\"img/KontenPost2/kontenpost3.jpg\" alt=\"Softfile WA\" title=\"Softfile\" width=\"80%\"></a>\r\n			<span class=\"caption text-muted\">Penampakkan softfile WhatsApp</span></p>\r\n\r\n<li> Setelah download file selesai, maka langsung install saja aplikasinya seperti menginstall aplikasi biasa. Lalu tunggu beberapa menit, instalasi file akan dilakukan di belakang layar jadi kita tidak akan bisa melihat prosesnya. Tetapi tidak lama kemudian, file akan berhasil di install lalu akan muncul tampilan utamanya seperti ada loading yang sedang di muat.</li>\r\n\r\n<p align=\"center\"><a href=\"img/KontenPost2/kontenpost4.jpg\" target=\"_blank\">\r\n<img class=\"img-fluid\" src=\"img/KontenPost2/kontenpost4.jpg\" alt=\"Tampilan login barcode\" title=\"Tampilan login barcode\" width=\"80%\"></a>\r\n			<span class=\"caption text-muted\">Tampilan login barcode setelah di install</span></p>\r\n\r\n<li> Langkah terakhir, login  akun dan scan barcode tersebut dengan cara yang sama seperti scan barcode di browser. Tampilan login tidak terlalu jauh dengan tampilan login jika kita menggunakan browser. Dan yang terpenting adalah WhatsApp di smartphone harus terus terkoneksi internet agar Laptop/PC anda dapat menjalankan WhatsApp dengan akun yang sama seperti di smartphone.</li>\r\n</ol>\r\n\r\n\r\n<p>Jadi tanpa menggunakan emulator android Whatsapp sudah bisa kita gunakan di PC. Kelebihannya adalah kita dapat mengakses WhatsApp melalui PC/Laptop kita sehingga tampilan layar lebih lebar dan mengetik pun menjadi mudah karena menggunakan keyboard. Tetapi kekurangannya, hingga saat ini WhatsApp versi PC belum bisa digunakan untuk <a class=\"text-info\"> voice call</a> dan <a class=\"text-info\">video call</a>. Semoga saja kedepannya tidak ada perubahan sehingga user Windows 7 akan tetap bisa menggunakan aplikasi Whatsapp tersebut. Tapi jika saatnya nanti perusahaan pemilik WhatsApp ini melakukan perubahan, maka kita semua masih dapat mengakses Whatsapp lewat browser/website secara langsung.</p>\r\n\r\n<p>Untuk para pengguna Mac OS anda bisa melakukan cara install yang sama seperti di atas, tetapi saat melakukan download file WhatsApp di situs resminya pilihlah sebelah kanan dan di bagian paling bawah ada tulisan \"<a class=\"text-info\">Unduh untuk Mac OS X 10.9 dan yang lebih baru</a>\" maka klik tulisan tersebut. Anda akan disambungkan langsung ke link downloadnya dan tinggal menunggu beberapa saat lalu install seperti biasa, tetapi aplikasi ini hanya dapat digunakan oleh pengguna Mac OS X 10.9 atau yang lebih baru. Walaupun begitu anda bisa mencobanya terlebih dahulu, siapa sangka ternyata bisa digunakan untuk versi dibawahnya karena saya sendiri menggunakan Windows 10 sehingga saya belum mencobanya pada Mac OS. Tetapi tidak disarankan untuk mencoba hal tersebut karena berpotensi memiliki resiko yg anda harus tanggung sendiri.</p>\r\n\r\n<p>Itulah sedikit informasi mengenai WhatsApp, selamat mencoba dan semoga bermanfaat untuk teman-teman semua.</p><br><br>\r\n			\r\n			<p align=\"left\" style=\"font-size:19px\"><br><br>Featured Image Source : on My Laptop<br><br>\r\n		  Reference : <br> <a href=\"https://google.com\" target=\"_blank\">google.com</a><br>\r\n		  <a href=\"https://www.kompas.com\" target=\"_blank\">kompas.com</a><br>\r\n</p>', 'whatsapp-bg.jpg', 'kontenpost8.jpg', 'Adipati', 'January 15, 2019', 5, 'Application (Windows)'),
(3, 'Cara Install Driver USB Wi-Fi', 'Install/update driver USB Wireless saat tidak terdeteksi oleh komputer di Windows 7 dan 8', '<p>Assalamualaikum wr. wb. teman-teman semua, disini saya akan menjelaskan dan memberikan informasi tentang bagaimana <b>cara untuk menginstall driver WiFi yang tidak terdeteksi oleh komputer</b>. Mungkin penjelasan kali ini akan cukup singkat, mengingat caranya yang tidak sulit untuk menginstallnya. Agar tidak bingung, mari kita simak pengantarnya terlebih dahulu.</p>\r\n\r\n<p>Internet pada masa sekarang ini merupakan kebutuhan utama dan mungkin di jaman yang serba canggih sudah menjadi kebutuhan primer bagi setiap keluarga, golongan masyarakat, atau sebuah kantor perusahaan. Bahkan saat ini hampir setiap bangunan dan tempat bisnis pasti memiliki internet didalamnya, entah itu mereka memakai Indi-Home, atau MNC Play, First Media, CBN, dan berbagai provider internet lain yang sedang bersaing mendapatkan posisi bisnis tertinggi. Internet menjadi alat bantu komunikasi yang paling baik karena menggunakannya pun sangat mudah, telah tersedia pula aplikasi dan website-website di internet yang mewakili identitas dari masing-masing perusahaan atau komunitas mereka.</p>\r\n\r\n<p align=\"center\"><img class=\"img-fluid\" src=\"img/KontenPost3/fiberoptik.jpg\" alt=\"FiberOptic\" title=\"Ilustrasi Fiber Optic\" width=\"60%\">\r\n			<span class=\"caption text-muted\">Fiber Optik</span></p>\r\n\r\n<p>Untuk mengakses internet, mungkin sudah tidak jamannya lagi kita menggunakan telepon kabel dengan biayanya yang sangat mahal. Sekarang kita sudah menggunakan kabel tersendiri yang disediakan oleh provider internet di seluruh Indonesia dan biaya yang ditawarkan pun cukup terjangkau. Bahkan sudah ada yang memakai teknologi Fiber Optik dan mampu memberikan kecepatan transfer hingga 1000 MBps atau setara dengan <b>1 GBps</b>, wah sungguh sangat cepat jika dibandingkan dengan download aplikasi sebesar 6 GB maka hanya perlu 6 detik saja untuk mengunduhnya dari internet. (baca di : <a href=\"https://www.mncplay.id/high-speed-internet/\" target=\"_blank\">High-Speed-Internet MNC Play</a>)</p>\r\n\r\n<p>Tetapi sekarang ini terkadang sulit untuk menggunakan kabel sebagai media untuk terhubung ke internet, dikarenakan mungkin jaraknya jauh atau jalur kabel yang digunakan agak sulit dan banyak rintangan sehingga kabel dapat terganggu dan mengganggu kinerjanya juga. Maka dari itu, saat ini tidak hanya laptop yang bisa menggunakan Wi-Fi tetapi PC/Komputer pun bisa menggunakan Wi-Fi yg  tersedia di lingkungan sekitar dengan menggunakan USB Wi-Fi.</p>\r\n\r\n<p><b>USB Wi-Fi</b> dapat digunakan dengan hanya mencolokkannya ke port usb yang tersedia, lalu install dan akan dapat digunakan. Sebagian besar perangkat ini pun biasanya sudah terinstall dengan sendirinya. Namun, biasanya ada saja perangkat USB Wi-Fi yang tidak terdeteksi di device tertentu seperti di komputer yang baru. Anda perlu menginstall <b>driver</b>-nya terlebih dahulu agar dapat terbaca oleh sistem. Itulah fungsinya driver, untuk mengenalkan perangkat baru(USB Wi-Fi) kepada device milik kita(PC/Laptop).</p>\r\n\r\n\r\n<h2 class=\"section-heading\">Masalah yang biasa di dapat saat driver USB Wi-Fi belum terinstall di PC</h2>\r\n\r\n<p align=\"center\"><a href=\"img/KontenPost3/bait.jpg\" target=\"_blank\"><img class=\"img-fluid\" src=\"img/KontenPost3/bait.jpg\" alt=\"Tanda Error\" title=\"Simbol error kuning\" width=\"80%\"></a>\r\n			<span class=\"caption text-muted\">Simbol tanda seru kuning yang menandakan driver error</span></p>\r\n\r\n\r\n<p>Jika driver dari USB Wi-Fi belum terinstall di PC, saat perangkat dicolokkan ke port usb tidak akan terdeteksi dan kita tidak bisa melakukan koneksi ke wifi yang sudah tersedia. Dan saat anda melihat di <i>device manager</i> pun, akan muncul error atau tanda seru kuning yang menandakan driver belum terinstall. Maka dari itu sangat penting untuk menginstall driver suatu perangkat terlebih dahulu sebelum anda ingin memakainya di PC anda.</p>\r\n\r\n<p>Untuk menginstall driver Wi-Fi USB yang tidak terdeteksi, ada satu bahan yang kita butuhkan. Sebelum itu, disini saya menggunakan USB Wireless dengan merk TP-Link yang memiliki type \"<a class=\"text-info\">TL-WN422G</a>\" dan gambarnya dapat dilihat di atas pada judul artikel. Bentuknya seperti USB biasa tetapi lebih besar serta memiliki antena yang terpasang dibelakangnya. Antena ini berfungsi untuk menerima sinyal agar perangkat lebih peka terhadap sinyal Wi-Fi yang ada.</p>\r\n\r\n<h2 class=\"section-heading\">Install Driver USB Wi-Fi yang Sudah Terhubung</h2>\r\n\r\n<p align=\"center\"><a href=\"img/KontenPost3/error.jpg\" target=\"_blank\"><img class=\"img-fluid\" src=\"img/KontenPost3/error.jpg\" alt=\"Gambar jaringan error\" title=\"Jaringan error\" width=\"80%\"></a>\r\n			<span class=\"caption text-muted\">Contoh saat komputer tidak bisa terhubung ke jaringan apapun</span></p>\r\n\r\n<ol>\r\n<li> Pertama-tama anda bisa download driver-nya di google dan mencari referensi anda sendiri atau di situs resmi perangkat anda. Atau bisa menggunakan referensi saya dengan perangkat TL-WN422G dengan mendownload di bawah ini:<br>\r\n<ul>\r\n<li> <a href=\"https://static.tp-link.com/resources/software/20102103300915.zip\">Klik untuk TL-WN422G Windows 7 (64-bit dan 32-bit)</a><br>\r\n<li> <a href=\"https://static.tp-link.com/resources/software/TL-WN422G_V2_win8-beta.zip\">Klik untuk TL-WN422G Windows 8</a><br>\r\nAtau kalian bisa mencoba mengecek drivernya di situs resmi TP-Link :<br>\r\n<li><a href=\"https://www.tp-link.com/us/download/TL-WN422G_V2.html#Driver\" target=\"_blank\">www.tp-link.com</a><br><br>\r\n</ul><br>\r\n\r\n<li> Simpanlah file yang sudah didownload ke folder yang mudah di cari. Bentuk file ini berupa .zip atau .rar jadi anda harus mengekstraknya terlebih dahulu menjadi folder biasa. Caranya klik kanan pada file.zip atau .rar lalu pilih dan klik \"<a class=\"text-info\">Extract Here</a>\", maka file akan otomatis di ekstrak dan muncul folder baru bernama TL- . . . yang dimana titik-titik tersebut adalah nama perangkat yang anda pilih. Masuk ke dalam foldernya</li>\r\n\r\n<p align=\"center\"><a href=\"img/KontenPost3/00.jpg\" target=\"_blank\"><img class=\"img-fluid\" src=\"img/KontenPost3/00.jpg\" alt=\"Folderekstrak\" title=\"folder setelah di ekstrak\" width=\"80%\"></a>\r\n			<span class=\"caption text-muted\">Gambar folder yang telah di ekstrak, teradapat 32-bit dan 64-bit (pilih sesuai spesifikasi komputer)</span></p>\r\n\r\n<li> Setelah masuk ke folder, maka ada file-file yang nantinya akan kita masukkan dan kita jadikan update driver perangkat tersebut</li>\r\n<p align=\"center\"><a href=\"img/KontenPost3/01.jpg\" target=\"_blank\"><img class=\"img-fluid\" src=\"img/KontenPost3/01.jpg\" alt=\"File-file driver\" title=\"file-file bahan\" width=\"80%\"></a>\r\n			<span class=\"caption text-muted\">Gambar file yang akan dipakai untuk mengupdate/memperbaharui driver perangkat</span></p>\r\n\r\n<blockquote> Catatan : File driver ini berupa folder yang berisi file-file berekstensi information dan .sys jadi anda tidak usah khawatir akan virus, karena file ini aman.</blockquote>\r\n\r\n<li> Jika bahan sudah tersedia, maka kita tinggal mendaftarkannya ke sistem. Bukalah <i><b>Device Manager</b></i> dengan cara masuk ke Windows Eksplorer, lalu klik kanan pada PC anda (tertulis \"This PC\" atau \"My Computer\") dan klik <i>properties</i>, maka akan muncul tampilan baru. Klik lah <i>Device Manager</i></li>\r\n\r\n<p align=\"center\"><a href=\"img/KontenPost3/devicemanager.png\" target=\"_blank\"><img class=\"img-fluid\" src=\"img/KontenPost3/devicemanager.png\" alt=\"tampilan properties\" title=\"tampilan properties\" width=\"60%\"></a>\r\n			<span class=\"caption text-muted\">Gambar tampilan properties, klik <i>device manager</i></span></p>\r\n\r\n<li> Tampilan <i>Device Manager</i> akan muncul dan pilih lah device yang memiliki tanda seru kuning yang memiliki nama \"<a class=\"text-info\">USB WLAN</a>\" di daftar yang ada. Lalu klik dua kali</li>\r\n\r\n<p align=\"center\"><a href=\"img/KontenPost3/1.jpg\" target=\"_blank\"><img class=\"img-fluid\" src=\"img/KontenPost3/1.jpg\" alt=\"tampilan device manager\" title=\"tampilan device manager\" width=\"60%\"></a>\r\n			<span class=\"caption text-muted\">Tampilan <i>device manager</i> pada layar</span></p>\r\n\r\n<li> Akan muncul tampilan <i>properties</i> dari perangkat tersebut, pilih lah tab <a class=\"text-info\">Driver</a>. Lalu klik \"Update Driver\"<br>\r\nKetika jendela baru muncul dan anda diberi 2 pilihan, pilih yang kedua yaitu \"<i>Browse my computer for driver software.</i>\" seperti gambar dibawah.</li>\r\n\r\n<p align=\"center\"><a href=\"img/KontenPost3/2.jpg\" target=\"_blank\"><img class=\"img-fluid\" src=\"img/KontenPost3/2.jpg\" alt=\"tampilan properties\" title=\"tampilan properties perangkat\" width=\"60%\"></a>\r\n			<span class=\"caption text-muted\">Tampilan <i>properties</i> dari perangkat wireless</span></p>\r\n\r\n<p align=\"center\"><a href=\"img/KontenPost3/3.jpg\" target=\"_blank\"><img class=\"img-fluid\" src=\"img/KontenPost3/3.jpg\" alt=\"jendela baru\" title=\"tampilan pilihan update driver\" width=\"60%\"></a>\r\n			<span class=\"caption text-muted\">Gambar jendela baru yang muncul dan pilihlah yang kedua</span></p>\r\n\r\n<li> Setelah itu, anda akan di suruh mencari file driver tersebut. Klik \"browse\" dan carilah folder dari file driver yang sudah anda download tadi, nama folder sistem operasi (Windows 7, Windows 8) disertai jenis sistemnya (32-bit atau 64-bit). Lalu klik OK dan Next.</li>\r\n\r\n<p align=\"center\"><a href=\"img/KontenPost3/5.jpg\" target=\"_blank\"><img class=\"img-fluid\" src=\"img/KontenPost3/5.jpg\" alt=\"browse file/folder\" title=\"browse file/folder\" width=\"60%\"></a>\r\n			<span class=\"caption text-muted\">Carilah folder tempat anda menyimpan file driver perangkat, berupa 32bit/64bit</span></p>\r\n\r\n<li> Sesudah anda meng-klik next, komputer akan memprosesnya dan menampilkan loading yang tidak lama. Setelah driver anda sukses, klik <i>close</i> untuk menutup jendela. Dan selamat anda sudah bisa menggunakan Wi-Fi dengan USB Wi-Fi!</li>\r\n\r\n<p align=\"center\"><a href=\"img/KontenPost3/6.jpg\" target=\"_blank\"><img class=\"img-fluid\" src=\"img/KontenPost3/6.jpg\" alt=\"wifi sukses di install\" title=\"wifi sudah bisa digunakan\" width=\"60%\"></a>\r\n			<span class=\"caption text-muted\">Tampilan WiFi setelah proses update driver selesai</span></p>\r\n</ol>\r\n\r\n<p>Anda dapat melakukan cara ini untuk <b>memasang driver apa saja</b> pada komputer anda. Asalkan anda memiliki file/folder driver dari perangkat tersebut. Dan cara ini bisa dilakukan oleh para pengguna Windows 7, Windows 8, dan Windows 10.</p>\r\n\r\n<p>Sebenarnya banyak jenis-jenis tp-link, tidak hanya TL-WN422G saja. Yang lebih canggih lagi, ada USB Wi-Fi dengan type berbeda, <a class=\"text-info\">bentuk lebih kecil tetapi kecepatan transfer dan kepekaannya lebih baik</a> dibandingkan TL-WN422G ini. Bentuknya hanya seperti flashdisk biasa, tetapi jika dibandingkan kinerjanya akan lebih baik dari TL-WN422G ini. Type ini adalah <mark>TL-WN821N</mark>. Jika kecepatan transfer maksimal dari TL-WN422G adalah 54 Mbps (terlihat pada gambar), maka kecepatan type <mark>TL-WN821N</mark> ini mencapai 100 Mbps (Megabit/sec). Kecepatanya sudah jelas jauh lebih kencang dan efektif untuk kebutuhan tertentu.\r\n</p>\r\n\r\n<p>Mungkin cukup sekian saja informasi dari saya mengenai seputar internet, wifi, dan perangkat serta <b>cara update driver</b> memperbaharuinya. Selamat mencoba dan semoga informasi ini dapat membantu para pembaca sekalian.<br> Wassalamualaikum wr. wb.</p>\r\n\r\n<p align=\"left\" style=\"font-size:19px\"><br><br>Featured Image Source : on My Laptop<br><br>\r\n		  Reference : <br> <a href=\"https://google.com\" target=\"_blank\">google.com</a><br>\r\n		  <a href=\"https://www.kompas.com\" target=\"_blank\">kompas.com</a><br>\r\n</p>', 'tplink-bg.jpg', 'bait.jpg', 'Adipati', 'January 16, 2019', 1, 'PC/Laptop (Windows System)'),
(4, 'Artikel Testing 223', 'artikel paling MANTAP', 'ini adalah Merupakan Artikel yang kedua ini adalah Merupakan Artikel yang kedua ini adalah Merupakan Artikel yang kedua ini adalah Merupakan Artikel yang kedua ini adalah Merupakan Artikel yang kedua ini adalah Merupakan Artikel yang kedua ini adalah Merupakan Artikel yang kedua ini adalah Merupakan Artikel yang kedua ini adalah Merupakan Artikel yang kedua ini adalah Merupakan Artikel yang kedua ini adalah Merupakan Artikel yang kedua \r\n\r\n\r\n\r\nadan ini adalah sudah magadan ini adalah sudah magadan ini adalah sudah magadan ini adalah sudah magadan ini adalah sudah magadan ini adalah sudah magadan ini adalah sudah magadan ini adalah sudah magadan ini adalah sudah magadan ini adalah sudah magadan ini adalah sudah magadan ini adalah sudah magadan ini adalah sudah mag', 'application-bg.jpg', '', 'Adipati', 'January 10, 2019', 0, ''),
(5, 'Teknik Komputer dan Jaringan (TKJ)', 'Jurusan teknik yang berada di tingkat menengan atas', '<p>Karne ainiTKJ2 itu lebih banyakTKJ2 itu lebih banyakKarne ainiTKJ2 itu lebKarne ainiTKJ2 itu lebKarne ainiTKJ2 itu lebKarne ainiTKJ2 itu lebKarne ainiTKJ2 itu lebKarne ainiTKJ2 itu lebKarne ainiTKJ2 itu lebKarne ainiTKJ2 itu lebKarne ainiTKJ2 itu lebKarne ainiTKJ2 itu lebKarne ainiTKJ2 itu leb.</p>\r\n\r\n<p>Karne ainiTKJ2 itu lebKarne ainiTKJ2 itu lebKarne ainiTKJ2 itu lebKarne ainiTKJ2 itu lebKarne ainiTKJ2 itu lebKarne ainiTKJ2 itu lebKarne ainiTKJ2 itu lebKarne ainiTKJ2 itu lebKarne ainiTKJ2 itu leb.</p>', 'monitor404.png', '', 'Adipati', 'January 14, 2019', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `kategori_artikel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `kategori_artikel`) VALUES
(1, 'PC/Laptop (Windows System)'),
(2, 'PC/Laptop (Hardware)'),
(3, 'Application (Android)'),
(4, 'Application (Linux)'),
(5, 'Application (Windows)'),
(6, 'Application (Other)'),
(7, 'Elektro'),
(8, 'Web Developer'),
(9, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `lastupdate`
--

CREATE TABLE `lastupdate` (
  `id` int(11) NOT NULL,
  `terakhir_update` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lastupdate`
--

INSERT INTO `lastupdate` (`id`, `terakhir_update`) VALUES
(1, 'January 16, 2019');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lastupdate`
--
ALTER TABLE `lastupdate`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `lastupdate`
--
ALTER TABLE `lastupdate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Nov 2023 pada 12.02
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_hp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id` int(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `tentang` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `tanggal`, `isi`, `jenis`, `tentang`, `gambar`) VALUES
(3, 'Samsung S23 kini hadir pda Toko Handphone, buruan beli sekarang!!!', '12 Januari 2023', 'Toko Handphone kini memperkenalkan Samsung S23, smartphone terbaru yang siap menggebrak pasar dengan teknologi canggih dan desain yang memukau. Jangan lewatkan kesempatan untuk memiliki gadget terbaru ini. Mari kita simak beberapa fitur unggulan yang membuat Samsung S23 begitu istimewa.  Desain Mewah yang Memukau Samsung S23 hadir dengan desain yang memikat, menggabungkan elegansi dan kenyamanan dalam genggaman Anda. Dengan bodi yang ramping dan material berkualitas tinggi, smartphone ini memberikan kesan mewah yang tidak dapat diabaikan.  Teknologi Terkini untuk Performa Optimal Ditenagai oleh prosesor canggih, Samsung S23 menawarkan performa yang luar biasa. Apakah Anda seorang gamer berat atau pengguna multitasking, smartphone ini mampu menjalankan berbagai aplikasi dengan lancar dan responsif.  Layar Luas dengan Kualitas Gambar Superb Nikmati pengalaman visual yang luar biasa dengan layar lebar Samsung S23. Resolusi tinggi dan teknologi tampilan terkini memberikan detail gambar yang tajam dan warna yang hidup, menjadikan setiap momen lebih memukau.  Kamera Canggih untuk Hasil Foto dan Video Terbaik Samsung S23 dilengkapi dengan sistem kamera yang canggih, memungkinkan Anda mengabadikan momen-momen berharga dalam detail yang sempurna. Fitur-fitur kamera inovatif memberikan hasil foto dan video yang memukau, bahkan dalam kondisi pencahayaan yang challenging.  Keamanan Data yang Handal Keamanan data Anda adalah prioritas utama. Dengan fitur keamanan terkini, Samsung S23 memastikan bahwa data pribadi Anda tetap aman dan terlindungi dari ancaman keamanan digital.  Baterai Tahan Lama untuk Penggunaan Sehari-hari Nikmati penggunaan sehari-hari tanpa khawatir kehabisan baterai. Samsung S23 dilengkapi dengan baterai tahan lama, memastikan Anda tetap terhubung dengan dunia digital tanpa hambatan.  Beli Sekarang di Toko Handphone Tunggu apa lagi? Segera kunjungi Toko Handphone dan dapatkan Samsung S23 sekarang juga. Promo dan penawaran menarik menanti Anda. Buruan beli dan rasakan pengalaman menggunakan smartphone terbaru dengan teknologi terkini dari Samsung!', 'Samsung', 'Toko', '2023-11-16.Samsung S23 kini hadir pda Toko Handphone, buruan beli sekarang!!!.2023-11-15.samsung s23.samsungs23.png'),
(5, 'tes', 'tes', 'tes', 'tes', 'Global', '2023-11-16.tes.2023-11-12.vivo v29.vivo v29.jpg'),
(6, 'Samsung S23 Raksasa Terbaru Teknologi', '13 Januari 2023', 'Tidak ada habisnya untuk kecanggihan teknologi, dan Samsung, sebagai salah satu pemimpin utama dalam industri teknologi, terus menghadirkan inovasi yang luar biasa. Kali ini, mereka memperkenalkan produk terbarunya yang dinanti-nanti, Samsung S23.\r\n\r\nDesain Futuristik\r\nSamsung S23 tampil dengan desain yang futuristik dan elegan. Dengan bingkai yang tipis dan layar yang memukau, perangkat ini memberikan pengalaman visual yang luar biasa. Bagian belakang perangkat dilengkapi dengan material yang berkualitas tinggi, memberikan sentuhan premium yang membedakannya dari produk sejenis.\r\n\r\nLayar Super AMOLED\r\nSalah satu daya tarik utama dari Samsung S23 adalah layar Super AMOLED yang canggih. Dengan resolusi tinggi dan kontrast yang mendalam, pengguna dapat menikmati gambar yang jernih dan warna yang hidup. Layar tersebut juga mendukung refresh rate tinggi, memberikan pengalaman pengguna yang mulus dan responsif.\r\n\r\nPerforma Unggulan\r\nSamsung S23 ditenagai oleh prosesor terkini dan didukung oleh RAM yang besar, menghasilkan performa yang luar biasa. Pengguna dapat menjalankan berbagai aplikasi dengan lancar, bermain game grafis berat, dan melakukan multitasking tanpa hambatan. Kapasitas penyimpanan yang besar juga memberikan ruang yang cukup untuk menyimpan foto, video, dan berkas penting lainnya.\r\n\r\nKemampuan Fotografi yang Luar Biasa\r\nDilengkapi dengan sistem kamera canggih, Samsung S23 memungkinkan pengguna untuk menangkap momen-momen berharga dengan kualitas yang mengagumkan. Lensa berkualitas tinggi dan fitur pengolah gambar cerdas menghasilkan foto dan video yang tajam dan penuh warna, bahkan dalam kondisi cahaya yang challenging.\r\n\r\nKeamanan dan Privasi Terjamin\r\nSamsung S23 memiliki fitur keamanan yang canggih, termasuk pemindai sidik jari dan teknologi pengenalan wajah. Ini tidak hanya memberikan keamanan yang lebih baik untuk perangkat, tetapi juga memastikan privasi pengguna tetap terjaga.\r\n\r\nKoneksi 5G\r\nDengan dukungan jaringan 5G, Samsung S23 memastikan pengguna dapat menikmati kecepatan internet yang luar biasa. Pengunduhan konten, streaming, dan aktivitas online lainnya dapat dilakukan dengan cepat dan tanpa gangguan.\r\n\r\nBaterai Tahan Lama\r\nSamsung S23 dilengkapi dengan baterai yang tahan lama, memastikan perangkat tetap menyala sepanjang hari. Fitur pengelolaan daya yang cerdas juga membantu memaksimalkan masa pakai baterai, sehingga pengguna tidak perlu khawatir kehabisan daya di tengah hari.\r\n\r\nKesimpulan\r\nSamsung S23 adalah perwujudan dari inovasi dan keunggulan teknologi. Dengan kombinasi desain premium, performa unggulan, dan berbagai fitur canggih, perangkat ini menjadi pilihan yang menarik bagi mereka yang menginginkan pengalaman teknologi terbaik.\r\n\r\nJangan lewatkan kesempatan untuk memiliki Samsung S23 dan rasakan revolusi dalam dunia teknologi mobile!', 'Samsung', 'Global', '2023-11-16.Samsung S23 Raksasa Terbaru Teknologi.samsungs23.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hp_form`
--

CREATE TABLE `hp_form` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `merk` varchar(255) NOT NULL,
  `stok` int(255) NOT NULL,
  `harga` int(255) NOT NULL,
  `harga_diskon` int(255) DEFAULT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `diskon` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `hp_form`
--

INSERT INTO `hp_form` (`id`, `nama`, `merk`, `stok`, `harga`, `harga_diskon`, `deskripsi`, `gambar`, `diskon`) VALUES
(7, 'Vivo V29', 'Vivo', 5, 200000, 0, 'Selamat datang di Super Hp Store! Produk kami original 100% segel utuh dari pabrik. Jika ada palsu, akan kami bayar 5 kali lipat.Harganya lebih terjangkau dibandingkan toko lain, pengirimannya juga cepat dan mendapatkan garansi 2 tahun. Jika ada produk yang disukai, jangan ragu dipesan langsung ya!!!😘😘😘\r\n\r\nJika Anda memiliki pertanyaan, silakan mengobrol dengan layanan pelanggan dan kami akan segera menjawab Anda\r\n\r\n---- Detil Produk Sesuai Dengan Situs Website Resmi -----\r\nspesifikasi dasar\r\nprosesor\r\nQualcomm Snapdragon 778G\r\nram&rom\r\n8 gb + 256 gb\r\n12 gb + 512 gb\r\n\r\nBaterai\r\n4600 mAh\r\nFast charging\r\n80w\r\n\r\nWarna\r\nVelvet Red, Peak Blue, Noble Black\r\nSistem Operasi\r\nFuntouch os 13\r\ntampilan\r\nLayar\r\n6,78-inch\r\nResolusi\r\n2800 × 1260\r\nTipe\r\nAmoled\r\nLayar sentuh\r\nMulti-sentuh Kapasitif\r\n\r\nKamera\r\nDepan: 50 mp af / Belakang: 50 mp OIS + 8 mp wide-angle + 2 mp monochrome & bokeh\r\n\r\nAperture\r\nDepan: Utama f/2.0\r\nBelakang: Utama f/1.88, wide-Angle f/2.2, Macro f/2.4\r\n\r\nKoneksi\r\nWi-Fi\r\n2,4 GHz, 5 GHz\r\nBluetooth\r\nBluetooth 5.2\r\nUSB\r\nType-C\r\nGPS\r\nDidukung\r\notg\r\nDidukung\r\nNFC\r\nDidukung\r\n\r\nDi Dalam Kotak\r\nV29\r\nDokumentasi\r\nKabel USB Tipe-C\r\nPengisi Daya\r\nSIM Ejector\r\nCase Pelindung\r\nFilm Pelindung (Sudah Diaplikasikan)', '2023-11-13.Vivo V29.vivo v29.jpg', 0),
(8, 'Vivo V27', 'Vivo', 120, 1200000, 900000, 'Dibeli', '2023-11-12.Vivo V27.vivo v27.jpg', 1),
(9, 'Poco X5 Pro', 'Poco', 20, 2000000, 1500000, 'Official POCO X5 Pro 5G\r\nWarna : Black, Blue, Yellow\r\n\r\nProcessor:\r\n- Snapdragon 778G\r\n- CPU: Octa-core CPU, up to 2.4GHz\r\n- GPU: Qualcomm Adreno 642L\r\nRAM/Storage:\r\n- 6GB+5GB*/128GB, 8GB+5GB*/256GB\r\n- Dynamic RAM expansion 3.0\r\n*Dynamic expansion RAM perlu dibuka di pengaturan, dan penyimpanan tambahan harus dipilih sesuai dengan kapasitas kosong smartphone saat ini\r\n\r\nLayar : 6.67” FHD+ Flow AMOLED Dot Display\r\n- Resolution: 2400 x 1080\r\n- Refresh rate : Up to 120Hz\r\n- Reading Mode\r\n- Sunlight Display\r\n\r\nKamera belakang:\r\n108MP wide camera\r\n8MP ultra-wide camera\r\n2MP macro camera\r\n2MP depth camera\r\nKualitas Video:\r\n- 4K 3840 x 2160 | 30fps\r\n- 1080p 1920 x 1080 | 60fps\r\n- 1080p 1920 x 1080 | 30fps\r\n- 720p 1280 x 720 | 30fps\r\nFitur video kamera belakang\r\nVLOG\r\nGerakan lambat\r\nTime-lapse\r\nKamera Depan : 16MP (f/2.4)\r\nKualitas Video:\r\n- 1080p 1920 x 1080 | 60fps\r\n- 1080p 1920 x 1080 | 30fps\r\n- 720p 1280 x 720 | 30fps\r\n\r\nBaterei & pengisian daya\r\n- 5000mAh (typ)\r\n- 67W turbo charging\r\n\r\nIP53 splash-proof protection\r\n\r\nKeamanan:\r\nSensor sidik jari di bagian samping\r\nAI Face Unlock\r\nNFC\r\n\r\nMendukung Google Pay\r\n*Fungsi mungkin berbeda di beberapa pasar.\r\n\r\nDimensi:\r\nPanjang: 162.91mm\r\nLebar: 76.03mm\r\nKetebalan: 7.9mm\r\nBerat: 181g\r\n*Data disediakan oleh laboratorium internal. Metode pengukuran industri mungkin berbeda, sehingga hasil sebenarnya dapat berbeda.\r\n\r\nKonektivitas:\r\n- Dual SIM, dual standby: 5G+5\r\nFrekuensi jaringan:\r\nMendukung 5G/4G/3G/2G\r\n*Konektivitas 5G mungkin berbeda tergantung ketersediaan di wilayah dan dukungan operator setempat.\r\n\r\nJaringan Nirkabel :\r\nBluetooth 5.2\r\n\r\nAudio: Dual Speakers\r\n3.5mm headphone jack\r\n\r\nVideo :\r\nMP4丨M4V丨MKV丨AVI丨WMV丨WEBM丨3GP丨3G2丨ASF\r\n\r\nSensor :\r\nSensor jarak | Sensor cahaya ambien | Akselerometer | Kompas elektronik | IR Blaster ｜Giroskop\r\nSistem Operasi : MIUI 14 for POCO\r\nPOCO Official Store Garansi Resmi, IMEI Resmi Terdaftar di IMEI KEMENPERIN\r\n\r\nIsi Kemasan :\r\nPOCO X5 Pro 5G\r\nAdaptor\r\nKabel USB type C\r\nAlat pembuka SIM\r\nKartu garansi\r\nPanduan pengguna\r\n#POCONYABERAKSI bookmark\r\nPOCO Stiker', '2023-11-15.Poco X5 Pro.x5pro.png', 0),
(10, 'Poco F5 ', 'Poco', 24, 3000000, 0, 'Xiaomi Official POCO F5 adalah smartphone terbaru dengan desain yang elegan dan fitur canggih. Tersedia dalam tiga pilihan warna yaitu Putih, Hitam, dan Biru.\r\n\r\nProsesor:\r\n\r\nSnapdragon 7+ Gen 2 Mobile Platform\r\nCPU: 1 x Cortex-X2, hingga 2.91GHz; 3x A710\r\nGPU: Qualcomm Adreno GPU\r\nRAM/Storage:\r\n\r\n8GB+5GB/256GB, 12GB+7GB/256GB\r\nDynamic RAM expansion 3.0\r\nLayar: Layar Dot Flow AMOLED 6.67\" FHD+\r\n\r\nResolusi: 2400 x 1080\r\nRefresh rate: Hingga 120Hz\r\nCorning Gorilla Glass 5\r\nSunlight Display\r\nDolby Vision\r\nKamera Belakang:\r\n\r\nKamera Utama 64MP\r\nKamera Ultra-wide 8MP\r\nKamera Macro 2MP\r\nKualitas Video ->\r\n4K 3840 x 2160 | 30fps\r\n1080p 1920 x 1080 | 60fps\r\n1080p 1920 x 1080 | 30fps\r\n720p 1280 x 720 | 30fps\r\nKamera Depan: 16MP (f/2.45)\r\nKualitas Video ->\r\n\r\n1080p 1920 x 1080 | 60fps\r\n1080p 1920 x 1080 | 30fps\r\n720p 1280 x 720 | 30fps\r\nXiaomi Official POCO F5 adalah smartphone yang sangat cocok untuk pengguna yang menginginkan performa tinggi dan fitur kamera yang kuat. Dengan layar Dot Flow AMOLED yang indah dan refresh rate hingga 120Hz, Anda dapat menikmati tampilan yang halus dan jernih. Prosesor Snapdragon 7+ Gen 2 Mobile Platform memberikan kecepatan tinggi dan performa yang andal, sementara RAM dan penyimpanan yang luas memungkinkan Anda untuk menyimpan banyak aplikasi, foto, dan video.\r\n\r\nDengan kamera belakang 64MP, Anda dapat mengambil foto berkualitas tinggi dengan detail yang tajam. Kamera ultra-wide 8MP memungkinkan Anda mengambil foto panorama yang luas, sementara kamera macro 2MP memungkinkan Anda untuk menangkap detail halus dari objek dekat. Kamera depan 16MP juga memberikan kualitas foto yang baik untuk selfie dan panggilan video.\r\n\r\nPOCO F5 juga mendukung perekaman video hingga resolusi 4K, memungkinkan Anda untuk merekam momen berharga dalam kualitas yang luar biasa. Dengan baterai yang kuat dan fitur pengisian cepat, Anda dapat menggunakan POCO F5 sepanjang hari tanpa khawatir kehabisan daya.', '2023-11-13.Poco F5 .poco f5.png', 0),
(11, 'Samsumg Galaxy A05', 'Samsung', 13, 2500000, 0, 'Spesifikasi :\r\n\r\n- Processor : Helio G85\r\n- Size : 6.7\"\r\n- Technology : PLS LCD, 60 Hz\r\n- Resolution : HD+\r\n- Rear Camera Resolution : 50.0 MP + 2.0 MP\r\n- Main Camera Auto Focus : Yes\r\n- Rear Camera - OIS : No\r\n- Rear Camera - Zoom : Digital Zoom up to 10x\r\n- Front Camera Resolution : 8.0 MP\r\n- Front Camera Auto Focus : No\r\n- Video Resolution : FHD (1920 x 1080)@60fps\r\n- RAM : 4GB\r\n- ROM : 64GB\r\n- SIM Tray : Dual-SIM\r\n- Network Type :4G\r\n- USB Interface : Data cable C to C\r\n- USB Version : USB 2.0\r\n- Earjack : No\r\n- Bluetooth Version : Bluetooth v5.3\r\n- NFC : No\r\n- Battery Capacity : 5000MaH 25W Fast Charging Support\r\n- Face Recognition : Yes', '2023-11-13.Samsumg Galaxy A05.galaxy a05.jpg', 0),
(12, 'Oppo A17', 'Oppo', 30, 1500000, 1000000, 'OPPO A17 4GB/64GB\r\n\r\nUkuran dan Bobot\r\nTinggi 164.2mm\r\nLebar 75.6mm\r\nKetebalan 8.3mm\r\nBobot 189g\r\n\r\nPenyimpanan\r\nKapasitas RAM dan ROM: 4GB + 64GB\r\nJenis RAM: LPDDR4X @ 1600MHz, dual 16-bit channels\r\nSpesifikasi ROM: eMMC 5.1\r\nKartu Penyimpanan Perangkat: Didukung\r\nUSB OTG: Didukung\r\n\r\nLayar\r\nUkuran: 6,56 inci\r\nRasio Layar: 89,8%\r\nResolusi: HD+ (1612×720)\r\nRefresh Rate: Maksimum: 60Hz\r\nTouch Sampling Rate:\r\nTouch sampling rate: Maks (default) 60Hz\r\nTouch reporting rate: Maks (default) 120Hz\r\nGamut Warna:\r\nMode vivid: 96% NTSC/100% DCI-P3\r\nMode gentle: 72% NTSC/100% sRGB\r\nKedalaman Warna: 16,7 juta warna (8-bit)\r\nKerapatan Piksel: 269PPI\r\nKecerahan maksimum standar: 480nits\r\nKecerahan maksimum di bawah sinar matahari: 600nits\r\nPanel: LCD (A-Si)\r\nKaca Pelindung: Panda\r\n\r\nKamera\r\nBelakang\r\nKamera utama: 50 MP, f/1.8, FOV 77°, lensa 5P, AF, motor fokus loop terbuka\r\nKamera belakang sekunder: f/2.8, FOV 60°; Lensa 2P + IR, AF tidak didukung\r\n\r\nDepan\r\n5MP (f/2.2); FOV 76,8°; lensa 3P; AF tidak didukung; OIS tidak didukung\r\n\r\nChipset\r\nCPU: MediaTek Helio G35\r\nCore Kecepatan CPU: 8 core, hingga 2.3GHz\r\nGPU: IMG GE8320 @ 680 MHz\r\n\r\nBaterai\r\n4890 mAh/18.92Wh (Min)\r\n5000mAh/19.35Wh (Typ)\r\n\r\nBiometrik\r\nSidik Jari: Didukung\r\nPengenalan Wajah: Didukung\r\n\r\nJaringan Seluler\r\nSIM 2: Didukung\r\nTipe Kartu SIM: Kartu Nano-SIM\r\nRentang Frekuensi:\r\nGSM: 850/900/1800/1900 MHz (pengambilan sampel non-fraksional)\r\nWCDMA: Pita 1/5/8\r\nLTE FDD: Band 1/3/5/8\r\nLTE TDD: Band 38/40/41 (2535-2655MHz)\r\n\r\nKonektivitas\r\nWLAN:\r\nMendukung Wi-Fi 5 (802.11ac), 802.11a/b/g/n;\r\nWLAN 2.4G/WLAN 5.1G/WLAN 5.8G;\r\nMendukung Tampilan WLAN; berbagi jaringan WLAN\r\nVersi Bluetooth: Bluetooth v5.3, Bluetooth Hemat Energi (BLE)\r\nBluetooth Audio Codec: SBC, AAC, aptX, aptX HD, dan LDAC\r\nAntarmuka USB: USB mikro\r\nJack Earphone: 3.5mm\r\n\r\nSistem Operasi\r\nColorOS 12.1.1\r\n\r\nDi Dalam Kotak\r\nPerangkat x 1\r\nPengisi Daya x 1\r\nKabel Data USB Mikro x 1\r\nAlat Pelepas SIM x 1\r\nPanduan Keamanan x 1\r\nPanduan Singkat x 1\r\nCase Pelindung x 1', '2023-11-13.Oppo A17.oppo a17.jpg', 1),
(13, 'Galaxy M14', 'Samsung', 48, 3000000, 0, 'Processor\r\nCPU Speed\r\n2.4GHz, 2GHz\r\n \r\nCPU Type\r\nOcta-Core\r\nDisplay\r\nSize (Main_Display)\r\n167.2mm (6.6\" full rectangle) / 163.0mm (6.4\" rounded corners)\r\n \r\nResolution (Main Display)\r\n1080 x 2408 (FHD+)\r\n \r\nTechnology (Main Display)\r\nPLS LCD\r\n \r\nColor Depth (Main Display)\r\n16M\r\n \r\nMax Refresh Rate (Main Display)\r\n90 Hz\r\nCamera\r\nRear Camera - Resolution (Multiple)\r\n50.0 MP + 2.0 MP + 2.0 MP\r\n \r\nRear Camera - F Number (Multiple)\r\nF1.8 , F2.4 , F2.4\r\n \r\nMain Camera - Auto Focus\r\nYes\r\n \r\nRear Camera - OIS\r\nNo\r\n \r\nRear Camera Zoom\r\nDigital Zoom up to 10x\r\n \r\nFront Camera - Resolution\r\n13.0 MP\r\n \r\nFront Camera - F Number\r\nF2.0\r\n \r\nFront Camera - Auto Focus\r\nNo\r\n \r\nFront Camera - OIS\r\nNo\r\n \r\nMain Camera - Flash\r\nYes\r\n \r\nFront Camera - Flash\r\nNo\r\n \r\nVideo Recording Resolution\r\nFHD (1920 x 1080) @30fps\r\nPenyimpanan/Memori\r\nMemori_(GB)\r\n6\r\n \r\nPenyimpanan (GB)\r\n128\r\n \r\nPenyimpanan Tersedia (GB)\r\n105.7\r\n \r\nDukungan Penyimpanan Eksternal\r\nMicroSD (Up to 1TB)\r\nNetwork/Bearer\r\nNumber of SIM\r\nDual-SIM\r\n \r\nSIM size\r\nNano-SIM (4FF)\r\n \r\n \r\nLocation Technology\r\nGPS, Glonass, Beidou, Galileo, NavIC, QZSS\r\n \r\nEarjack\r\n3.5mm Stereo\r\n \r\nMHL\r\nNo\r\n \r\nWi-Fi\r\n802.11 a/b/g/n/ac 2.4G+5GHz, VHT80\r\n \r\nWi-Fi Direct\r\nYes\r\n \r\nBluetooth Version\r\nBluetooth v5.2\r\n \r\nNFC\r\nYes\r\n \r\nPC Sync.\r\nSmart Switch (PC version)\r\nOS\r\nAndroid\r\nGeneral Information\r\n\r\nBattery Capacity (mAh, Typical)\r\n6000\r\n\r\nStereo Support\r\nNo\r\n', '2023-11-13.Galaxy M14.galaxy m14.jpg', 0),
(14, 'Redmi 12', 'Xiaomi', 20, 2000000, 1800000, 'Processor:\r\n- MediaTek Helio G88\r\n- GPU: Arm Mali-G52\r\n\r\nRAM/Storage:\r\n- 8GB/128GB\r\n- 8GB/256GB\r\n\r\nLayar: 6.79” FHD+ DotDisplay\r\n- Resolution: 2460 x 1080\r\n- Refresh rate : Up to 90Hz\r\n- Reading Mode\r\n\r\nKamera Belakang:\r\n50MP main camera\r\n8MP ultra-wide camera\r\n2MP macro camera\r\nKamera Film\r\nKualitas Video ->\r\n- 1080p 1920 x 1080 | 30fps\r\n- 720p 1280 x 720 | 30fps\r\n\r\nKamera Depan : 8MP (f/2.1)\r\nKualitas Video ->\r\n- 1080p 1920 x 1080 | 30fps\r\n- 720p 1280 x 720 | 30fps\r\n\r\nBaterai & pengisian daya\r\n- 5000mAh (typ)\r\n- 18W turbo charging\r\n\r\nIP53 splash and dust proof protection\r\n\r\nKeamanan :\r\nSensor sidik jari di bagian samping\r\nAI Face Unlock\r\n\r\n\r\nDimensi:\r\nPanjang: 168.60mm\r\nLebar: 76.28mm\r\nKetebalan: 8.17mm\r\nBerat: 198.5g\r\n\r\n*Data disediakan oleh laboratorium internal. Metode pengukuran industri mungkin berbeda, sehingga hasil sebenarnya dapat berbeda.\r\n\r\nKonektivitas:\r\n- SIM1 + Hybrid (SIM or MicroSD)\r\n\r\nJaringan Nirkabel :\r\nBluetooth 5.3\r\n\r\nAudio:\r\n3.5mm headphone jack\r\n\r\nSensor :\r\nAkselerometer | Kompas elektronik\r\n\r\nSistem Operasi : MIUI 14 based on Android 13\r\n\r\nXiaomi Official Store Garansi Resmi, IMEI Resmi Terdaftar di IMEI KEMENPERIN\r\n\r\nIsi Kemasan :\r\nRedmi 12\r\nAdaptor\r\nKabel USB type-C\r\nAlat pembuka SIM\r\nKartu garansi\r\nPanduan pengguna', '2023-11-13.Redmi 12.redmi 12.png', 1),
(15, 'Realme C53', 'Realme', 50, 1770000, 0, 'Spesifikasi :\r\n\r\nBODY Dimensions 167.3 x 76.7 x 7.5 mm (6.59 x 3.02 x 0.30 in)\r\nWeight 182 g (6.42 oz)\r\nBuild Glass front, plastic frame, plastic back\r\nSIM Dual SIM (Nano-SIM, dual stand-by)\r\nDISPLAY Type IPS LCD, 90Hz, 560 nits (peak)\r\nSize 6.74 inches, 109.7 cm2 (~85.5% screen-to-body ratio)\r\nResolution 1080 x 2400 pixels, 20:9 ratio (~390 ppi density)\r\nPLATFORM OS Android 13, Realme UI T\r\nChipset Unisoc Tiger T612 (12 nm)\r\nCPU Octa-core (2x1.8 GHz Cortex-A75 & 6x1.8 GHz Cortex-A55)\r\nGPU Mali-G57\r\nMEMORY Card slot microSDXC (dedicated slot)\r\nInternal 128GB 6GB RAM\r\nMAIN CAMERA Dual 50 MP, f/1.8, (wide), PDAF\r\nSecondary unspecified camera\r\nFeatures LED flash, HDR, panorama\r\nVideo 1080p@30fps\r\nSELFIE CAMERA Single 8 MP, f/2.0, (wide)\r\nFeatures HDR\r\nVideo 720p@30fps\r\nSOUND Loudspeaker Yes\r\n3.5mm jack Yes\r\nCOMMS WLAN Wi-Fi 802.11 a/b/g/n/ac, dual-band\r\nBluetooth 5.0, A2DP, LE\r\nPositioning GPS, GLONASS, GALILEO\r\nNFC yes\r\nRadio Unspecified\r\nUSB USB Type-C 2.0\r\nFEATURES Sensors Fingerprint (side-mounted), accelerometer, gyro, proximity, compass\r\nBATTERY Type Li-Po 5000 mAh, non-removable\r\nCharging 33W wired, 50% in 31 min', '2023-11-13.Realme C53.realme c53.jpg', 0),
(16, 'Redmi 10A', 'Xiaomi', 35, 1000000, 900000, 'Network Technology\r\nGSM / HSPA / CDMA2000 / LTE\r\nLaunch Announced 2022, March 29\r\nStatus Available. Released 2022, March 31\r\nBody Dimensions 164.9 x 77.1 x 9 mm (6.49 x 3.04 x 0.35 in)\r\nWeight 194 g (6.84 oz)\r\nSIM Dual SIM (Nano-SIM, dual stand-by)\r\nDisplay Type IPS LCD, 400 nits (typ)\r\nSize 6.53 inches, 102.9 cm2 (~81.0% screen-to-body ratio)\r\nResolution 720 x 1600 pixels, 20:9 ratio (~269 ppi density)\r\nPlatform OS Android 11, MIUI 12.5\r\nChipset MediaTek MT6762G Helio G25 (12 nm)\r\nCPU Octa-core (4x2.0 GHz Cortex-A53 & 4x1.5 GHz Cortex-A53)\r\nGPU PowerVR GE8320\r\n\r\nRAM 4 GB\r\nInternal Mmc 64 GB\r\nMemory Card slot microSDXC\r\n\r\nMain Camera Single 13 MP, f/2.2, (wide), 1.0µm, AF\r\nFeatures LED flash\r\nVideo 1080p@30fps\r\nSelfie camera Single 5 MP\r\nFeatures HDR\r\nVideo 1080p@30fps\r\nSound Loudspeaker Yes\r\n3.5mm jack Yes\r\nComms WLAN Wi-Fi 802.11 a/b/g/n, Wi-Fi Direct, hotspot\r\nBluetooth 5.0, A2DP, LE\r\nGPS Yes, with A-GPS, GLONASS, BDS\r\nNFC No\r\nRadio No\r\nUSB microUSB 2.0\r\nFeatures Sensors Fingerprint (rear-mounted), accelerometer, proximity\r\nBattery Type Li-Ion 5000 mAh, non-removable', '2023-11-13.Redmi 10A.redmi 10a.jpg', 1),
(17, 'Oppo A78', 'Oppo', 30, 3600000, 2800000, 'Spesifikasi\r\n\r\nOPPO A78 5G\r\n\r\nLayar : 6.56\" NTSC 90Hz Waterdrop Screen\r\nRAM : 8+8GB (expansi )\r\nROM : 128Gb Up to 1TB\r\nProsesor : Dimensity 700 5G\r\nIPX4 Tahan Cipratan Air\r\njaringan sudah mendukung 5G\r\nKamera Utama : 50MP Dual Camera\r\nKamera depan : 8MP\r\nAndroid 12 ColorOS 13\r\nDual Speaker Stereo Ultra Volume 200%\r\nWarna Glowing Purple, Glowing Black\r\n\r\n\r\nOPPO A78 4G\r\n\r\nNetwork : SM / HSPA / LTE\r\nDimensions : 160.1 x 73.2 x 7.9 mm (6.30 x 2.88 x 0.31 in)\r\nWeight : 180 g (6.35 oz)\r\nSIM : Dual SIM (Nano-SIM, dual stand-by)\r\nSpecial Feature: IP54\r\nDisplay Type : AMOLED, 90Hz\r\nSize : 6.43 inches, 99.3 cm2 (~84.8% screen-to-body ratio)\r\nResolution : 720 x 1612 pixels, 20:9 ratio (~275 ppi density)\r\nProtection : Corning Gorilla Glass 5\r\nPlatform : OS Android 13, ColorOS 13.1\r\nChipset : Qualcomm SM6225 Snapdragon 680 4G (6 nm)\r\nCPU : Octa-core (4x2.4 GHz Kryo 265 Gold & 4x1.9 GHz Kryo 265 Silver)\r\nGPU : Adreno 610\r\nMemory Card slot : microSDXC\r\nInternal : 256GB\r\nMain Camera : Dual 50 MP, f/1.8, (wide), PDAF 2 MP, f/2.4, (depth)\r\nFeatures : LED flash, HDR, panorama\r\nVideo : 1080p@30fps\r\nSelfie Camera : Single 8 MP, f/2.0, (wide)\r\nVideo : 1080p@30fps\r\nSound Loudspeaker : Yes, with stereo speakers\r\n3.5mm jack : Yes\r\nComms WLAN : Wi-Fi 802.11 a/b/g/n/ac, dual-band\r\nBluetooth : 5.0, A2DP, LE\r\nPositioning : GPS, GALILEO, GLONASS, BDS\r\nNFC : Yes\r\nRadio: No\r\nUSB : USB Type-C 2.0, OTG', '2023-11-13.Oppo A78.oppo a78.jpg', 1),
(18, 'Samsung S23', 'Samsung', 8, 18000000, 0, 'pesifikasi:\r\n\r\n- Processor : Snapdragon 8 Gen 2 (4nm)\r\n- Size : 6,8”\r\n- Technology : Dynamic AMOLED 2X, 1-120Hz\r\n- Resolution : QHD+ (3088 x 1440) 500 ppi\r\n- Rear Camera Resolution : 200.0 MP + 12.0 MP + 10.0 MP + 10.0 MP\r\n- Main Camera Auto Focus : Yes\r\n- Rear Camera - OIS : Yes\r\n- Rear Camera - Zoom : 10x optical zoom, Digital Zoom up to 100x\r\n- Front Camera Resolution : 12.0 MP\r\n- Front Camera Auto Focus : No\r\n- Video Resolution : UHD 8K (7680 x 4320) I @24fps\r\n- RAM : 12 GB\r\n- ROM : 256GB / 512GB/ 1TB\r\n- SIM Tray : Dual-SIM\r\n- Network Type :5G\r\n- USB Interface : USB Type-C\r\n- USB Version : USB Type-C 3.2\r\n- Earjack : -\r\n- Bluetooth Version : Bluetooth v5.3\r\n- NFC : Yes\r\n- Battery Capacity : 5000mAh, Super Fast Charging, Fast Wireless Charging 2.0, Reverse Wireless Charging\r\n- Others : S pen support', '2023-11-15.Samsung S23.samsungs23.png', 0),
(19, 'Realme GT Neo 3', 'Realme', 30, 6999999, 0, '150W UltraDart Charge +4500mAh Massive Battery\r\nDimensity 8100 5G Processor\r\nSony IMX766 OIS Camera\r\n50MP Primary camera\r\n16MP wide-angle selfie\r\nRacing Stripe Design\r\n120Hz Reality Display\r\nStainless Steel Vapor Cooling System Max\r\n360° NFC\r\nUp to 12G LPDDR5 RAM+256G UFS 3.1 Storage\r\nDual Stereo Speakers with Dolby Atmos\r\nIn-display Fingerprint Scanner\r\nrealmeUI 3.0 （Based on Android12）', '2023-11-15.Realme GT Neo 3.realmegtneo3.png', 0),
(20, 'X80 PRO', 'VIVO', 29, 15999999, 0, 'Body :\r\nDimensions : 165 x 75.2 x 8.3 mm or 8.8 mm\r\nWeight : 203 g / 206 g (7.16 oz)\r\nBuild : Glass front, glass back or eco leather back\r\nSIM : Dual SIM (Nano-SIM, dual stand-by)\r\n\r\nDisplay :\r\nType : AMOLED, 120Hz, HDR, 1500 nits (peak)\r\nSize : 6.78 inches, 111.0 cm2 (~89.4% screen-to-body ratio)\r\n\r\nPlatform :\r\nOS : Android 12, Funtouch 12 (Global), Origin OS Ocean (China)\r\nChipset : MediaTek Dimensity 9000 (4 nm)\r\nCPU : Octa-core (1x3.05 GHz Cortex-X2 & 3x2.85 GHz Cortex-A710 & 4x1.80 GHz Cortex-A510)\r\nGPU : Mali-G710 MC10\r\n\r\nComms :\r\nWLAN : Wi-Fi 802.11 a/b/g/n/ac/6, dual-band, Wi-Fi Direct, hotspot\r\nBluetooth : 5.3, A2DP, LE, aptX HD\r\nGPS : Yes, with dual-band A-GPS, GLONASS, BDS, GALILEO, QZSS, NavIC\r\nNFC : YES\r\nUSB : USB Type-C 2.0, USB On-The-Go\r\nBattery : Type Li-Po 4500 mAh, non-removable ( Fast Charging 80w in 11 min.)\r\n\r\nSpesifikasi X80 PRO 5G :\r\nOS : Android 12, Funtouch 12 (Global), Origin OS Ocean (China)\r\nChipset : Qualcomm SM8450 Snapdragon 8 Gen 1 (4 nm) | MediaTek Dimensity 9000 (4 nm)\r\n\r\nNFC : YES\r\nBattery : Type Li-Po 4700 mAh, non-removable', '2023-11-15.X80 PRO.x80pro.png', 0),
(21, 'GT 10 PRO', 'Infinix', 55, 3200000, 0, 'NETWORK Technology\r\nGSM / HSPA / LTE / 5G\r\nLAUNCH Announced 2023, August 3\r\nStatus Coming soon. 2023, August 13\r\nBODY Dimensions 162.7 x 75.9 x 8.1 mm (6.41 x 2.99 x 0.32 in)\r\nWeight 187 g (6.60 oz)\r\nSIM Dual SIM (Nano-SIM, dual stand-by)\r\nLED strip on the back\r\nDISPLAY Type AMOLED, 1B colors, 120Hz, 900 nits (peak)\r\nSize 6.67 inches, 107.4 cm2 (~87.0% screen-to-body ratio)\r\nResolution 1080 x 2400 pixels, 20:9 ratio (~395 ppi density)\r\nPLATFORM OS Android 13, XOS 13\r\nChipset Mediatek Dimensity 8050 (6 nm)\r\nCPU Octa-core (1x3.0 GHz Cortex-A78 & 3x2.6 GHz Cortex-A78 & 4x2.0 GHz Cortex-A55)\r\nGPU Mali-G77 MC9\r\nMEMORY Card slot microSDXC (dedicated slot)\r\nInternal 256GB 8GB RAM\r\nUFS 3.1\r\nMAIN CAMERA Triple 108 MP, f/1.8, (wide), 1/1.67\", AF\r\n2 MP, (macro)\r\n2 MP, (depth)\r\nFeatures Quad-LED flash, HDR, panorama\r\nVideo 4K@30fps, 1080p@30/60fps\r\nSELFIE CAMERA Single 32 MP, f/2.5, (wide)\r\nFeatures Dual-LED flash\r\nVideo 1440p@30fps, 1080p@30/60fps\r\nSOUND Loudspeaker Yes, with stereo speakers\r\n3.5mm jack Yes\r\nCOMMS WLAN Wi-Fi 802.11 a/b/g/n/ac/6, dual-band, Wi-Fi Direct\r\nBluetooth Yes\r\nPositioning GPS, GLONASS, GALILEO\r\nNFC Yes\r\nRadio FM radio\r\nUSB USB Type-C 2.0\r\nFEATURES Sensors Fingerprint (under display, optical), accelerometer, proximity, compass, gyro\r\nBATTERY Type Li-Po 5000 mAh, non-removable\r\nCharging 45W wired, PD3', '2023-11-15.GT 10 PRO.gt10pro.png', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id`, `username`, `email`, `password`, `gambar`) VALUES
(42, 'abdi', 'abdi@gmail.com', '$2y$10$BcRSRxxfr32gOXbsLy5q8ezJQI7Q3VpN8/AtbAp323xFdvAmybFzK', '2023-11-16GT10pro.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(255) NOT NULL,
  `id_pembeli` int(255) NOT NULL,
  `id_hp` int(255) NOT NULL,
  `jumlah` int(255) NOT NULL,
  `harga` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_pembeli`, `id_hp`, `jumlah`, `harga`) VALUES
(1, 40, 7, 1, 200000),
(2, 39, 10, 1, 3000000),
(3, 39, 13, 2, 6000000),
(4, 38, 18, 2, 36000000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hp_form`
--
ALTER TABLE `hp_form`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `hp_form`
--
ALTER TABLE `hp_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

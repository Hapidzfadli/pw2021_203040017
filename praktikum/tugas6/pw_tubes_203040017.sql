-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2021 at 04:50 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040017`
--

-- --------------------------------------------------------

--
-- Table structure for table `toko_item`
--

CREATE TABLE `toko_item` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `category` char(40) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `toko_item`
--

INSERT INTO `toko_item` (`id`, `name`, `category`, `price`, `picture`, `description`, `created`, `updated`) VALUES
(1, 'MUKENA BALI SAKURA JEPANG -', 'Mukena', '105000', './assets/image/img-1.jpg', 'coba ubah\r\ndata', '2021-04-17 15:33:31', '0000-00-00 00:00:00'),
(2, 'ASUS ZENBOOK PRO DUO UX581GV-H2041R i9-9980HK 32GB 1TB SSD RTX2060 6GB', 'Laptop', '55999000', './assets/image/img-2.jpg', 'Kondisi: Baru<br>\r\nBerat: 5 Kilogram<br>\r\nKategori: Laptop Consumer<br>\r\nEtalase: LAPTOP - ASUS<br>\r\nDeskripsi ASUS ZENBOOK PRO DUO UX581GV-H2041R i9-9980HK 32GB 1TB SSD RTX2060 6GB\r\nASUS ZenBook Duo UX581GV-H2041R - i9-9980HK 32GB 1TB SSD RTX2060 6GB 15.6\" 4K OLED W10\r\n<br>\r\nSPESIFIKASI:<br>\r\nProcessor Intel® Core™ i9-9980HK processor 2.4GHz octa-core with Turbo Boost (up to 5.0GHz) and 16MB cache<br>\r\nGraphics NVIDIA® GeForce RTX™ 2060 6GB GDDR6 VRAM<br>\r\nRAM 32GB 2666MHz DDR4<br>\r\nStorage 1TB PCIe® Gen3 x4 Intel® Optane™ Memory H10<br>\r\nDisplay 15.6” OLED 4K (3840 x 2160) 16:9 touchscreen<br>\r\nScreenPad Plus 14” 4K UHD (3840 x 1100) touch display<br>\r\nKeyboard : Full-size backlit with 1.4mm key travel<br>\r\nWINDOWS 10 PRO<br>\r\nPorts :<br>\r\n1 x Thunderbolt™ 3 USB-C™ (up to 40Gbps and DisplayPort)<br>\r\n2 x USB 3.1 Gen 2 Type-A (up to 10Gbps)<br>\r\n1 x Standard HDMI 2.0<br>\r\n1 x Audio combo jack<br>\r\n1 x DC-in<br>\r\nAudio :<br>\r\nHarman Kardon-certified audio system<br>\r\nASUS SonicMaster stereo audio system with surround-sound; smart amplifier for maximum audio performance<br>\r\nArray microphone with Cortana voice-recognition support<br>\r\n3.5mm headphone jack<br>\r\nCertified by Harman Kardon<br>\r\n<br>\r\nKamera : IR webcam with Windows Hello support<br>\r\nWireless Network : Intel Wi-Fi 6 with Gig+ performance (802.11ax)<br>\r\nBluetooth : Bluetooth® 5.0<br>\r\n<br>\r\nWarna : Celestial Blue<br>\r\n<br>\r\nGARANSI RESMI 2 TAHUN ASUS INDONESIA<br>', '2021-04-17 15:33:31', '2021-04-17 15:33:31'),
(3, 'SEPATU BOLA - NIKE MERCURIAL VAPOR 13 ELITE MDS FG ORIGINAL CJ1295110', 'Sepatu Bola', '3568000', './assets/image/img-3.jpg', 'Kondisi: Baru<br>\r\nBerat: 900 Gram<br>\r\nKategori: Sepatu Bola<br>\r\nEtalase: Sepatu Bola Nike<br>\r\nNIKE MERCURIAL VAPOR 13 ELITE MDS FG - Dream Speed 003<br>\r\nWarna: White/Black/White<br>\r\nJenis Lapangan: Karpet / Karet / Indoor<br>\r\nHarga Retail: IDR 3.969.000<br>\r\n================================<br>\r\nHarga SiongVo: IDR 3.568.000<br>\r\n================================<br>\r\nReady Size:<br>\r\n- 39<br>\r\n- 43<br>\r\n<br>\r\nArt #CJ1295110<br>\r\n100% Original<br>\r\nType: ELITE LEVEL<br>\r\nMade In China<br>\r\n-<br>\r\nDescription : Dream of speed and play fast in the Nike Mercurial Vapor 13 Pro MDS FG. A streamlined upper hugs your foot, while a Nike Aerowtrac zone on the soleplate helps supercharge traction.<br>\r\n------------------------------------------<br>\r\n<br>\r\nCATATAN PENTING: TOLONG KONFIRMASI UKURAN/ BARANG YANG DIINGINKAN TERLEBIH DAHULU SEBELUM MELAKUKAN PROSES BELI/ PEMBAYARAN DI TOKOPEDIA.<br>\r\n<br>\r\n\"Apabila barang yg diinginkan ready stok, maka pembeli dapat melakukan proses pembayaran/ BELI di tokopedia secepatnya. Karena stok kami dapat berubah sewaktu-waktu. \"<br>', '2021-04-17 15:57:41', '2021-04-17 15:57:41'),
(4, 'Tas Y3 BEACH Branded/Tas Pria/Fasion Pria/Tas Import', 'Tas Pria', '1400000', './assets/image/img-4.jpg', 'Kondisi: Baru <br>\r\nBerat: 200 Gram<br>\r\nKategori: Tas Selempang Pria<br>\r\nEtalase: Semua Etalase<br>\r\nELENGKAPAN:<br>\r\n-KAIN PEMBUNGKUS<br>\r\n<br>\r\nKUALITAS CLONING/CLONE 1:1<br>\r\n<br>\r\nkualitas Clone 1:1 adalah barang yang secara fisik bodi, detil, kehalusan bodi, berat, ukuran bodi, material kulit,<br>\r\n<br>\r\ncap merek, tampak depan belakang, kulit depan belakang, jahitan kulit, maupun tali rantai,warna, sudah sama persis,<br>\r\n<br>\r\nkelengkapan seperti kotak dan sterfikat 99% sama dengan originalnya.\r\nBarang ini murni di produksi, di seleksi, di standarisasi oleh sang produsen sendiri sehingga kualitas barang<br>\r\n\r\nbenar-benar terjaga dan tidak mengecewakan para pembelinya. Sehingga jika Anda membeli produk Cloning di kami maka\r\n<br>\r\norang awam pun akan sulit untuk membandingkan original atau Cloning karena clone 1:1 adalah TINGKAT TERAKHIR PALING\r\n<br>\r\nTINGGI DARI SEGALA JENIS BARANG TIRUAN. JADI UNTUK APA BELI YANG BELUM TENTU BERKUALITAS?<br>\r\nHARGA YANG ANDA BAYAR ADALAH KUALITAS YANG ANDA DAPATKAN BUKAN?', '2021-04-17 15:57:41', '2021-04-17 15:57:41'),
(5, 'ASUS ROG GT-AC2900 Wireless Dual Band Router Gaming AURA RBG WI-FI', 'Router', '3999000', './assets/image/img-5.jpg', 'Kondisi: Baru <br>\r\nBerat: 1.500 Gram<br>\r\nWaktu Preorder: 10 Hari<br>\r\nKategori: Router<br>\r\nEtalase: router<br>\r\nNotes:<br>\r\n- ASUS ROG GT-AC2900 Wireless Dual Band Gigabit Router Gaming WI-FI\r\n<br>- Garansi Resmi 3 Tahun Asus Internasional<br>\r\n\r\nMONITOR YOUR NETWORK WITH STYLE<br>\r\nFeaturing exclusive ASUS Aura lighting, GT-AC2900 glows in your choice of colors and multiple effects for a unique vibe that perfectly complements your gaming rig. The lighting can even be set to reflect the status of your network, so you\'ll know at a glance when your networks are running busy or when attacks arise.\r\n<br>\r\nAC2900 WiFi Gaming Router, certified by NVIDIA for the GeForce NOW Recommended program. Supports triple-level game acceleration, easy port forwarding, AiMesh for whole-home wifi and AiProtection Pro for network security\r\n<br>\r\nTriple-level Game Accelerator - Optimizes your online gaming packets all the way from your PC to the game server.\r\nGeForce Now Recommended Router – Enjoy an unrivaled cloud gaming experience with no latency.<br>\r\nAiMesh Supported - Works with ASUS AiMesh compatible routers to create a powerful, flexible, seamless whole-home Wi-Fi system.<br>\r\nFront-line Network Security – Lifetime free AiProtection Pro, powered by Trend Micro™, protects all connected devices from internet threats.<br>\r\nASUS Aura Lighting– Multiple effects for a stylish vibe while can even be set to reflect the status of your network.\r\n<br>\r\nROG First is a new feature of the ROG GameFirst V network acceleration software for ROG motherboards, laptops and desktops* that ensures seamless operation with ROG routers, resulting in smoother online gaming performance with shorter ping times and minimized lag\r\n<br>\r\nSPEC LINK<br>\r\nhttps://www.asus.com/ROG-Republic-Of-Gamers/ROG-Rapture-GT-AC2900/', '2021-04-17 16:05:54', '2021-04-17 16:05:54'),
(6, 'Mudah Tafsir Ibnu Katsir / Kasir Komplit 1set 6 Jilid - Maghfirah', 'Buku Agama Islam', '800000', './assets/image/img-6.jpg', 'Kondisi: Baru<br>\r\nBerat: 9.000 Gram<br>\r\nKategori: Buku Agama Islam<br>\r\nEtalase: Pustaka Maghfirah<br>\r\nPERHATIAN :<br>\r\n<br>\r\n<br>- Semua buku di TOKO HARGA BUKU ORIGINAL (ASLI/LANGSUNG DARI PENERBIT).\r\n<br>- Berat barang sesuai dengan berat yang tercantum di tokopedia.\r\n<br>- Packing menggunakan lapisan kardus atau buble warp.\r\n<br>- Untuk Wilayah JABODETABEK tidak bisa menggunakan JNE OKE (Minimal JNE REGULER) karena Peraturan dari JNE nya.\r\n<br>- Pesanan Anda akan segera kami kirim pada hari Anda memesan.\r\n<br>- Pesan sebelum pukul 15.00 WIB agar barang dikirim hari ini.\r\n<br>- Barang dikirim pukul 15.00 - 20.00 WIB. Input Resi pukul 20.00-22.00 WIB (bila ada kesibukkan akan diinput esok harinya).\r\n<br>\r\n<br>Harga sebelum diskon : Rp 1.254.000\r\n<br>\r\n<br>Detail Buku :\r\n<br>\r\n<br>Judul : Mudah Tafsir Ibnu Katsir\r\n<br>Penulis : Ibnu Katsir\r\n<br>Penerbit : Maghfirah\r\n<br>Ukuran : 17 x 29 cm\r\n<br>Jenis Cover : Hard Cover\r\n<br>Total Halaman : 3.944 halaman\r\n<br>Terdiri : 6 jilid\r\n<br>Berat : 9.000 gr\r\n<br>\r\n<br>Deskripsi Buku :\r\n<br>\r\n<br>Buku Tafsir Ibnu Katsir yang disusun ulang oleh DR. Shalah Abdul Fattah al-Khalidi, terbitan Maghfirah Pustaka ini berbeda dalam penyajiannya.\r\n<br>\r\nSangat memudahkan bagi orang awam sekalipun. Dikemas secara menarik dengan konsep dua kolom, dan dua warna. Sehingga pembaca tidak dibuat lelah meskipun membaca berhalaman-halaman.\r\n<br>\r\n#bukuislam #buku #hargabuku #alquran #islam #tafsiribnukatsir', '2021-04-17 16:05:54', '2021-04-17 16:05:54'),
(8, 'ONEX GD1100Z Gaming Desk Meja 43&quot;, Mousepad, Holder, Z Leg', 'Meja Laptop', '1875000', './assets/image/img-8.jpg', 'Baru<br /> Berat: 25 Kilogram<br /> Kategori: Meja Laptop<br /> Etalase: Gaming Desks<br /> ONEX 43\' Z Shaped Large Gaming Computer Desk, Home Office Gaming Computer Table<br /> <br /> This ONEX Gaming Desk is ideal for your home setup for work or gaming, thanks to its compact design making it easy to slot into the corner of your space. It has adjustable levelling feet for finding your ideal field of view, with cable management system to prevent clutter on the surface. It also has built-in storage for your surge protector, allowing you to easily plug in your devices safely.<br />', '2021-04-18 16:10:23', '2021-04-18 16:10:23');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `firstname`, `lastname`, `email`) VALUES
(1, 'hapidzfadli', '$2y$10$HmDWa.Ues2T6bqZiM8dpcut07ENBD2QFAPsLMKJbmmb6FEyeO0r8q', 'hapid ', 'fadli', 'hapidzfadli@gmail.com'),
(2, 'hedi', '$2y$10$pteMDDXmR4t07oNaO8Vn7eFwamyGYaXF1Qbg9SDoaidURA/SKas0y', 'hedi', 'harisma', 'hedi@gmail.com'),
(4, 'admin', '$2y$10$Kv.4z7ZEMJGJPuATu7C7G.wxPwgnAhPkf90DuHCcmf/svO0/Tha3q', 'admin', 'admin', 'admin@localhost.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `toko_item`
--
ALTER TABLE `toko_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `toko_item`
--
ALTER TABLE `toko_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

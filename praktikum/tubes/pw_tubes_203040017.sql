-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2021 at 08:51 AM
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
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `judul_category` varchar(100) NOT NULL,
  `img_category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_category`, `judul_category`, `img_category`) VALUES
(1, 'Elektronik', 'http://localhost/pw2021_203040017/praktikum/tubes/asset/category/elektronik.png'),
(2, 'Aksesoris Fashion', 'http://localhost/pw2021_203040017/praktikum/tubes/asset/category/Aksesoris%20Fashion.png'),
(3, 'Jam Tangan', 'http://localhost/pw2021_203040017/praktikum/tubes/asset/category/Jam%20Tangan.png'),
(4, 'Pakaian Pria', 'http://localhost/pw2021_203040017/praktikum/tubes/asset/category/Pakaian%20Pria.png'),
(5, 'Tas Pria', 'http://localhost/pw2021_203040017/praktikum/tubes/asset/category/Tas%20Pria.png'),
(6, 'Perawatan & Kecantikan', 'http://localhost/pw2021_203040017/praktikum/tubes/asset/category/Perawatan%20&%20Kecantikan.png'),
(7, 'Komputer & Aksesoris', 'http://localhost/pw2021_203040017/praktikum/tubes/asset/category/Komputer%20&%20Aksesoris.png'),
(8, 'Handphone & Aksesoris', 'http://localhost/pw2021_203040017/praktikum/tubes/asset/category/Handphone%20&%20Aksesoris.png'),
(9, 'Sepatu Pria', 'http://localhost/pw2021_203040017/praktikum/tubes/asset/category/Sepatu%20Pria.png');

-- --------------------------------------------------------

--
-- Table structure for table `toko_item`
--

CREATE TABLE `toko_item` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `category` char(40) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `img_cover` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `location` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `toko_item`
--

INSERT INTO `toko_item` (`id`, `name`, `category`, `price`, `img_cover`, `description`, `created`, `updated`, `location`, `username`) VALUES
(1, 'MUKENA BALI SAKURA JEPANG -', 'Mukena', '105000', 'http://localhost/pw2021_203040017/praktikum/tubes/asset/jual/img-1.jpg', 'mukena', '2021-04-17 15:33:31', '0000-00-00 00:00:00', 'KAB. KUNINGAN', 'admin'),
(2, 'ASUS ZENBOOK PRO DUO UX581GV-H2041R i9-9980HK 32GB 1TB SSD RTX2060 6GB', 'Laptop', '55999000', 'http://localhost/pw2021_203040017/praktikum/tubes/asset/jual/img-2.jpg', 'Kondisi: Baru<br>\r\nBerat: 5 Kilogram<br>\r\nKategori: Laptop Consumer<br>\r\nEtalase: LAPTOP - ASUS<br>\r\nDeskripsi ASUS ZENBOOK PRO DUO UX581GV-H2041R i9-9980HK 32GB 1TB SSD RTX2060 6GB\r\nASUS ZenBook Duo UX581GV-H2041R - i9-9980HK 32GB 1TB SSD RTX2060 6GB 15.6\" 4K OLED W10\r\n<br>\r\nSPESIFIKASI:<br>\r\nProcessor Intel® Core™ i9-9980HK processor 2.4GHz octa-core with Turbo Boost (up to 5.0GHz) and 16MB cache<br>\r\nGraphics NVIDIA® GeForce RTX™ 2060 6GB GDDR6 VRAM<br>\r\nRAM 32GB 2666MHz DDR4<br>\r\nStorage 1TB PCIe® Gen3 x4 Intel® Optane™ Memory H10<br>\r\nDisplay 15.6” OLED 4K (3840 x 2160) 16:9 touchscreen<br>\r\nScreenPad Plus 14” 4K UHD (3840 x 1100) touch display<br>\r\nKeyboard : Full-size backlit with 1.4mm key travel<br>\r\nWINDOWS 10 PRO<br>\r\nPorts :<br>\r\n1 x Thunderbolt™ 3 USB-C™ (up to 40Gbps and DisplayPort)<br>\r\n2 x USB 3.1 Gen 2 Type-A (up to 10Gbps)<br>\r\n1 x Standard HDMI 2.0<br>\r\n1 x Audio combo jack<br>\r\n1 x DC-in<br>\r\nAudio :<br>\r\nHarman Kardon-certified audio system<br>\r\nASUS SonicMaster stereo audio system with surround-sound; smart amplifier for maximum audio performance<br>\r\nArray microphone with Cortana voice-recognition support<br>\r\n3.5mm headphone jack<br>\r\nCertified by Harman Kardon<br>\r\n<br>\r\nKamera : IR webcam with Windows Hello support<br>\r\nWireless Network : Intel Wi-Fi 6 with Gig+ performance (802.11ax)<br>\r\nBluetooth : Bluetooth® 5.0<br>\r\n<br>\r\nWarna : Celestial Blue<br>\r\n<br>\r\nGARANSI RESMI 2 TAHUN ASUS INDONESIA<br>', '2021-04-17 15:33:31', '2021-04-17 15:33:31', 'KAB. KUNINGAN', 'admin'),
(3, 'SEPATU BOLA - NIKE MERCURIAL VAPOR 13 ELITE MDS FG ORIGINAL CJ1295110', 'Sepatu Bola', '3568000', 'http://localhost/pw2021_203040017/praktikum/tubes/asset/jual/img-3.jpg', 'Kondisi: Baru<br>\r\nBerat: 900 Gram<br>\r\nKategori: Sepatu Bola<br>\r\nEtalase: Sepatu Bola Nike<br>\r\nNIKE MERCURIAL VAPOR 13 ELITE MDS FG - Dream Speed 003<br>\r\nWarna: White/Black/White<br>\r\nJenis Lapangan: Karpet / Karet / Indoor<br>\r\nHarga Retail: IDR 3.969.000<br>\r\n================================<br>\r\nHarga SiongVo: IDR 3.568.000<br>\r\n================================<br>\r\nReady Size:<br>\r\n- 39<br>\r\n- 43<br>\r\n<br>\r\nArt #CJ1295110<br>\r\n100% Original<br>\r\nType: ELITE LEVEL<br>\r\nMade In China<br>\r\n-<br>\r\nDescription : Dream of speed and play fast in the Nike Mercurial Vapor 13 Pro MDS FG. A streamlined upper hugs your foot, while a Nike Aerowtrac zone on the soleplate helps supercharge traction.<br>\r\n------------------------------------------<br>\r\n<br>\r\nCATATAN PENTING: TOLONG KONFIRMASI UKURAN/ BARANG YANG DIINGINKAN TERLEBIH DAHULU SEBELUM MELAKUKAN PROSES BELI/ PEMBAYARAN DI TOKOPEDIA.<br>\r\n<br>\r\n\"Apabila barang yg diinginkan ready stok, maka pembeli dapat melakukan proses pembayaran/ BELI di tokopedia secepatnya. Karena stok kami dapat berubah sewaktu-waktu. \"<br>', '2021-04-17 15:57:41', '2021-04-17 15:57:41', 'KAB. KUNINGAN', 'admin'),
(4, 'Tas Y3 BEACH Branded/Tas Pria/Fasion Pria/Tas Import', 'Tas Pria', '1400000', 'http://localhost/pw2021_203040017/praktikum/tubes/asset/jual/img-4.jpg', 'Kondisi: Baru <br>\r\nBerat: 200 Gram<br>\r\nKategori: Tas Selempang Pria<br>\r\nEtalase: Semua Etalase<br>\r\nELENGKAPAN:<br>\r\n-KAIN PEMBUNGKUS<br>\r\n<br>\r\nKUALITAS CLONING/CLONE 1:1<br>\r\n<br>\r\nkualitas Clone 1:1 adalah barang yang secara fisik bodi, detil, kehalusan bodi, berat, ukuran bodi, material kulit,<br>\r\n<br>\r\ncap merek, tampak depan belakang, kulit depan belakang, jahitan kulit, maupun tali rantai,warna, sudah sama persis,<br>\r\n<br>\r\nkelengkapan seperti kotak dan sterfikat 99% sama dengan originalnya.\r\nBarang ini murni di produksi, di seleksi, di standarisasi oleh sang produsen sendiri sehingga kualitas barang<br>\r\n\r\nbenar-benar terjaga dan tidak mengecewakan para pembelinya. Sehingga jika Anda membeli produk Cloning di kami maka\r\n<br>\r\norang awam pun akan sulit untuk membandingkan original atau Cloning karena clone 1:1 adalah TINGKAT TERAKHIR PALING\r\n<br>\r\nTINGGI DARI SEGALA JENIS BARANG TIRUAN. JADI UNTUK APA BELI YANG BELUM TENTU BERKUALITAS?<br>\r\nHARGA YANG ANDA BAYAR ADALAH KUALITAS YANG ANDA DAPATKAN BUKAN?', '2021-04-17 15:57:41', '2021-04-17 15:57:41', 'KAB. KUNINGAN', 'admin'),
(5, 'ASUS ROG GT-AC2900 Wireless Dual Band Router Gaming AURA RBG WI-FI', 'Router', '3999000', 'http://localhost/pw2021_203040017/praktikum/tubes/asset/jual/img-5.jpg', 'Kondisi: Baru <br>\r\nBerat: 1.500 Gram<br>\r\nWaktu Preorder: 10 Hari<br>\r\nKategori: Router<br>\r\nEtalase: router<br>\r\nNotes:<br>\r\n- ASUS ROG GT-AC2900 Wireless Dual Band Gigabit Router Gaming WI-FI\r\n<br>- Garansi Resmi 3 Tahun Asus Internasional<br>\r\n\r\nMONITOR YOUR NETWORK WITH STYLE<br>\r\nFeaturing exclusive ASUS Aura lighting, GT-AC2900 glows in your choice of colors and multiple effects for a unique vibe that perfectly complements your gaming rig. The lighting can even be set to reflect the status of your network, so you\'ll know at a glance when your networks are running busy or when attacks arise.\r\n<br>\r\nAC2900 WiFi Gaming Router, certified by NVIDIA for the GeForce NOW Recommended program. Supports triple-level game acceleration, easy port forwarding, AiMesh for whole-home wifi and AiProtection Pro for network security\r\n<br>\r\nTriple-level Game Accelerator - Optimizes your online gaming packets all the way from your PC to the game server.\r\nGeForce Now Recommended Router – Enjoy an unrivaled cloud gaming experience with no latency.<br>\r\nAiMesh Supported - Works with ASUS AiMesh compatible routers to create a powerful, flexible, seamless whole-home Wi-Fi system.<br>\r\nFront-line Network Security – Lifetime free AiProtection Pro, powered by Trend Micro™, protects all connected devices from internet threats.<br>\r\nASUS Aura Lighting– Multiple effects for a stylish vibe while can even be set to reflect the status of your network.\r\n<br>\r\nROG First is a new feature of the ROG GameFirst V network acceleration software for ROG motherboards, laptops and desktops* that ensures seamless operation with ROG routers, resulting in smoother online gaming performance with shorter ping times and minimized lag\r\n<br>\r\nSPEC LINK<br>\r\nhttps://www.asus.com/ROG-Republic-Of-Gamers/ROG-Rapture-GT-AC2900/', '2021-04-17 16:05:54', '2021-04-17 16:05:54', 'KAB. KUNINGAN', 'admin'),
(6, 'Mudah Tafsir Ibnu Katsir / Kasir Komplit 1set 6 Jilid - Maghfirah', 'Buku Agama Islam', '800000', 'http://localhost/pw2021_203040017/praktikum/tubes/asset/jual/img-6.jpg', '', '2021-04-17 16:05:54', '0000-00-00 00:00:00', 'KAB. KUNINGAN', 'admin'),
(8, 'ONEX GD1100Z Gaming Desk Meja 43&quot;, Mousepad, Holder, Z Leg', 'Meja Laptop', '1875000', 'http://localhost/pw2021_203040017/praktikum/tubes/asset/jual/img-8.jpg', 'Baru<br /> Berat: 25 Kilogram<br /> Kategori: Meja Laptop<br /> Etalase: Gaming Desks<br /> ONEX 43\' Z Shaped Large Gaming Computer Desk, Home Office Gaming Computer Table<br /> <br /> This ONEX Gaming Desk is ideal for your home setup for work or gaming, thanks to its compact design making it easy to slot into the corner of your space. It has adjustable levelling feet for finding your ideal field of view, with cable management system to prevent clutter on the surface. It also has built-in storage for your surge protector, allowing you to easily plug in your devices safely.<br />', '2021-04-18 16:10:23', '2021-04-18 16:10:23', 'KAB. KUNINGAN', 'admin'),
(9, 'Black + Decker Vacuum Cleaner 650W (A2B650-B1)', 'Elektronik', '591000', 'http://localhost/pw2021_203040017/praktikum/tubes/asset/jual/Decker%20Vacuum%20Cleaner.jpg', 'Black and Decker A2B650 Vacuum Cleaner 650W\r\nGaransi resmi Black+Decker Indonesia 1 Tahun.\r\n\r\nSpesifikasi:\r\n-  Panjang Kabel: 3.5 m\r\n-  Daya: 650 W\r\n-  Power lock untuk merapihkan kabel\r\n-  One touch pedal operation\r\n\r\nAksesoris:\r\n-  1 Flexible Hose\r\n-  2 extension tube\r\n-  1 brush untuk karpet\r\n-  1 brush untuk matras\r\n-  1 upholstery nozzle 2 in 1 for corners, crevices and base boards.', '2021-05-06 18:07:19', '2021-05-06 18:07:19', 'KAB. KUNINGAN', 'admin'),
(10, 'Philips HD1173/80 Dry Iron', 'Elektronik', '322000', 'http://localhost/pw2021_203040017/praktikum/tubes/asset/jual/Philips%20HD1173.jpg', 'Philips HD1173/80 Dry Iron\r\n\r\nSetrika kering Klasik Philips yang berkelas ini didesain ulang, mempersembahkan aktivitas menyetrika yang nyaman dengan Ujung tapak setrika yang ramping, Pegangan yang nyaman untuk anti-slip ekstra, dudukan tumpuan yang Ekstra stabil yang telah didesain ulang dan lapisan keramik yang telah ditingkatkan, kini 2 kali lebih tahan lama.\r\n\r\nSpesifikasi Produk :\r\nDaya: 350 Watt\r\nPanjang Kabel: 1.7 m\r\nTersedia indikator pengatur suhu\r\n\r\nFitur Produk :\r\nTerdapat bagian untuk menggulung kabel pada dudukannya\r\nAlur kancing pada sisi depan setrika memudahkan proses menyetrika\r\nGagang nyaman; Ujung runcing dapat menjangkau area terumit pada pakaian\r\n\r\nBahan Produk :\r\nTapak Setrika: Menggunakan keramik anti lengket\r\n\r\nUkuran Produk :\r\nDimensi: Sekitar 27.5 cm x 16.5 cm x 27.5 cm\r\nBerat: 2 kg\r\n\r\nKelengkapan Produk :\r\n1x Unit Setrika, 1x Buku Panduan, 1x Kartu Garansi\r\n\r\nGaransi resmi Philips 2 tahun', '2021-05-06 18:07:19', '2021-05-06 18:07:19', 'KAB. KUNINGAN', 'admin'),
(11, 'Lenovo ThinkVision T24v-20 23.8\" FHD IPS VoIP Monitor 61FCMAR6WW (DP Cable, IR C', 'Komputer & Aksesoris', '4942000', 'http://localhost/pw2021_203040017/praktikum/tubes/asset/jual/Lenovo%20ThinkVision.jpg', 'Lenovo ThinkVision T24v-20 23.8\" FHD IPS VoIP Monitor 61FCMAR6WW (DP Cable, IR Camera, Microphone)\r\n\r\nDESIGNED FOR MODERN WORKSPACES\r\nBuilt to empower the next-generation workforce, the ThinkVision T24v-20 redefines workplace collaboration with its smart, innovative features. This 23.8-inch monitor has an IR camera, which along with Windows Hello and enterprise-grade security, ensures instant and secure login. The camera is equipped with a physical shutter that works as added protection to user privacy. Dual microphones and speakers offer an enhanced VoIP meeting experience. Create a strong first impression with every presentation on its Full-HD, 3-sided NearEdgeless display that delivers brilliant clarity and outstanding visuals. Its ergonomic features offer comfort and convenience for you to work efficiently. Designated as one of the Most Efficient ENERGY STAR certified products in 2020, it reduces your carbon footprint while lowering power consumption.\r\n\r\nFeatures & Benefits\r\n- 23.8 inch FHD In-Plane Switching display with 3-Side NearEdgeless bezel design\r\n- Integrated 1080p IR camera with dual microphone and 2x3W speaker\r\n- Facial Recognition camera with Windows Hello\r\n- Angle adjustable camera with privacy shutter\r\n\r\nSpecification:\r\n- Display Size: 23.8\"\r\n- View Area: 527.04 x 296.46 mm\r\n- Panel: 3-side NearEdgeless, In-Plane Switching (IPS)\r\n- Backlight: WLED\r\n- Aspect Ratio: 16:9\r\n- Resolution: 1920 x 1080\r\n- Pixel Pitch: 0.2745 x 0.2745 mm\r\n- Dot / Pixel Per Inch: 93 dpi\r\n- View Angle (H / V): 178° / 178°\r\n- Pixel Response Time: 4 ms (Extreme mode) / 6 ms (Typical mode) / 14 ms (off mode)\r\n- Refresh Rate: 60 Hz\r\n- Brightness: 250 nits\r\n- Contrast Ratio: 1000:1\r\n- Dynamic Contrast Ratio (typical): 3M:1\r\n- Color Gamut: 72% NTSC\r\n- Color Support (typical): 16.7 Million\r\n- Anti-glare: Yes\r\n- Multiple Input: HDMI 1.4, DP 1.2, VGA\r\n- Audio Signal: 1x Audio combo (3.5 mm; in/out)\r\n- USB Hub: Yes\r\n- USB Upstream: 1x USB 3.2 Gen1 \r\n- USB Port: 2x USB 3.2 Gen1 (1x BC1.2)\r\n- Integrated Camera: IR Camera\r\n- Integrated Microphone: Yes\r\n- Integrated Speaker: 2x 3W\r\n- Power Consumption (Typical / Maximum): Typical 13W / Max 44W\r\n- Power Consumption Sleep/Off Mode: < 0.5W\r\n- Power Consumption Switch-off Mode: < 0.3W\r\n- ENERGY STAR Power Consumption (Pon/ETEC): 11.36W / 35.68kWh\r\n- Power Adapter: Integrated\r\n- Voltage Required: AC 100 to 240 V (50-60 Hz)\r\n- Stand: Tilt, Swivel, Pivot, Height Adjust Stand\r\n- Tilt Angle (front/back): -5° / 35°\r\n- Swivel Angle (left/right): +45° / -45°\r\n- Lift (max range): 150 mm\r\n- Pivot: -90° / 90°\r\n- VESA Mount Capability: Yes (100 x 100 mm)\r\n- Tiny Bracket Support: Yes (sold separately)\r\n- Kensington Lock Slot: Yes\r\n- Cable Management: Yes\r\n- Color: Raven Black\r\n- Side Bezel Width (top/bottom): 1.8 mm / 22.0 mm\r\n- Monitor Cable: DP, USB Type-A to Type-B\r\n- ENERGY STAR: Yes\r\n- TCO: TCO 8.0\r\n- EPEAT: Silver\r\n- Low Blue Light / Eye Comfort / Eyesafe Display: Eye Comfort\r\n- Operating System: Support Windows 7, Windows 10\r\n- Presets / User Settings: 28 / 20\r\n- On Screen Display: OSD, 8 Languages\r\n- Sync Technology: None\r\n- CPU / Platform: None / None\r\n- Display Ram / Storage / Card Slot: None / None / None\r\n- Wireless / Ethernet / Bluetooth: None / None / None\r\n- Touch Screen / Digitizer Pen / Battery: None / None / None\r\n\r\nDIMENSION\r\n- Size Packed (D x H x W): 418.0 x 187.0 x 644.0 mm\r\n- Size Unpacked w/ Stand (D x H x W) Lowest position: 205.0 x 434.0 x 539.8 mm\r\n- Size Unpacked w/ Stand (D x H x W) Highest position: 205.0 x 584.0 x 539.8 mm\r\n- Size Unpacked w/o Stand head only (D x H x W): 48.35 x 344.3 x 539.8 mm\r\n- Min. Distance from Table to Panel (lowest pixel at bottom of screen): 114.1 mm\r\n- Max. Distance from Table to Panel (highest pixel at top of screen): 560.56 mm\r\n- Weight (Including Stand): 5.94kg\r\n\r\nWEIGHT\r\n- Weight Packed: 7.86 kg\r\n- Weight Unpacked: 5.94 kg\r\n- Weight (monitor head only): 3.48kg\r\n- Full Container Load (40\' STD / 20\' STD): 1012/440 units\r\n\r\nWARRANTY\r\nBase Warranty: Lenovo Indonesia 3-year\r\n\r\nWHAT’S IN THE BOX\r\n- Monitor with stand\r\n- 1x Power cable (1.8 m)\r\n- 1x DP cable (1.8 m)\r\n- 1x USB Type-A to Type-B cable (1.8 m)\r\n- Quick setup guide\r\n\r\nOngkir:\r\n- Pengiriman termasuk packing kayu KHUSUS dengan JNE\r\n- Semua pengiriman berasuransi\r\n\r\n#Lenovo #ThinkVision #T24v #T24v20 #24inch #FHD #WVA #IPS #250nits #VoIP #Monitor #61FCMAR6WW #WLED #Black #Hitam #HDMI #VGA #DP #edgeless #bezeltipis #integrated #IR #Camera #webcam #speaker #microphone #stand #display #resmi #officialstore #original #shopee #shopeeid #official #shopeehaul #powercable #tilt #swivel #pivot #lift #72NTSC #VESA #60Hz #1080p', '2021-05-06 18:07:19', '2021-05-06 18:07:19', 'KAB. KUNINGAN', 'admin'),
(12, 'UGREEN Original Casing Enclosure Hard Disk External 2.5 \"SATA USB 3.0 dengan Kab', 'Komputer & Aksesoris', '179349', 'http://localhost/pw2021_203040017/praktikum/tubes/asset/jual/UGREEN.jpg', 'Purchase Note:\r\nThere are 4 models available,please choose suitable model according to your needs:\r\n\r\n**this one is only a case for hard disk.\r\n \r\n1) USB 3.0 Model-1: Max 5Gbps transfer rate, comes with a detachable 50cm Micro USB 3.0 to USB 3.0 cable.\r\n \r\n2) USB 3.0 Model-2: Max 5Gbps transfer rate, comes with a detachable 50cm Micro USB 3.0 to USB 3.0 & USB C 2 in 1 cable.\r\n\r\n3) Hot-selling Type C Model: Max 6Gbps transfer rate, comes with a detachable 50cm USB Type C to USB A 3.1 cable. \r\n***When using with Mac, pls make sure to use a data sync. enabled USB-C to USB-C cable,length within 1 meter(Not Included). \r\n \r\n4) USB 3.0 Model-2: Max 5Gbps transfer rate, comes with a non-detachable 30cm Micro USB 3.0 to USB 3.0 cable.\r\n\r\n\r\nTips for Use\r\n \r\n1. For new unused hard drive, it\'s necessary to make a partition at first, ortherwise it can not be recognized.\r\n \r\n2. To achieve UASP function, please make sure that the device, operating system and controller have the UASP function enabled.\r\n \r\n2. Always safely remove your disc before unplugging this product.\r\n \r\n3. Do not suggest the connection with 12.5mm hard drive, the slide cover cannot be closed in this case.\r\n \r\n4. Win XP 32bit system does NOT support hard drives above 2TB.\r\n \r\n5.For Type C Model, as SATA-interface hard drives support max 6Gbps transfer rate, so Type C HDD enclosure could reach up to 6Gbps.\r\n \r\n6.Does NOT support hard drive that is powered with DC 12V. (Pls confirm power mode from the back of hard drive)', '2021-05-06 18:07:19', '2021-05-06 18:07:19', 'KAB. KUNINGAN', 'admin'),
(13, 'Jam Tangan Pria Analog Skmei 1260 Water Resistant 30m', 'Jam Tangan', '91800', 'http://localhost/pw2021_203040017/praktikum/tubes/asset/jual/Jam%20Tangan%20Pria.jpg', '# GARANSI RESMI GRB SKMEI 3 BULAN #\r\n\r\n- Produk dijamin 100% baru dan original\r\n( pada bagian belakang terdapat logo GRB SKMEI )\r\n\r\n-Terdapat kartu garansi resmi PT GRB SKMEI \r\nselalu distributor resmi di indonesia \r\n\r\nBrand Name: SKMEI 1260\r\nItem Type: Quartz Wristwatches\r\nMovement: Quartz Movement\r\nGender: MenWomen\r\nStyle: Fashion Casual\r\n\r\nCase Shape: Round\r\nDial Window Material Type: Glass\r\nCase Material: Zinc Alloy\r\nStrap Material: Stainless Steel\r\nClasp Type: Bracelet Clasp\r\n\r\nDial Diameter: 39mm\r\nCase Thickness: 9mm\r\nBand Length: 250mm\r\nBand Width: 20mm\r\nProduct Weight: About 90g\r\n\r\nFeature: Time,30M Water Resistant', '2021-05-06 18:23:01', '2021-05-06 18:23:01', 'KAB. KUNINGAN', 'admin'),
(14, 'T-shirt pria / kaos pria / kaos polos / T-shirt casual / T-shirt motif Hungry&co', 'Pakaian Pria', '50000', 'http://localhost/pw2021_203040017/praktikum/tubes/asset/jual/Tshirt.jpg', '• SEBELUM ORDER Silahkan baca DESKRIPSI sampai selesai ya kak\r\n\r\n•Kami memberikan garansi 100% ( Penukaran barang ) Jika barang yang di terima TIDAK SESUAI DESKRIPSI , BARANG KURANG , BARANG RIJEK ,  jadi Lebih baik HUBUNGI kami aja ya kak jika ada kendala \r\n\r\n• Sebelum buka paket harap vidio unboxing, sebagai bukti jika ada produk KURANG / RIJEK atas kelalaian kami untuk mengklaim garansi dari kami\r\n\r\n• Mohon SIZE di ukur dulu sebelum order dan di sesuaikan dengan SIZE CHART di slide foto , dikarenakan setiap Brand SIZE CHART nya berbeda \r\nJadi tolong dipastikan dulu sizenya ya kak karna kami tidak menerima untuk penukaran size🙏\r\n( toleransi - + 1 sampai 2 cm dari size chart ) gak bisa pas banget ya kak\r\n\r\n• Bahan mengunakan 100% Cotton combad 32s premium super Soft,adem,tidak berbulu,jahitan rapi,sehingga nyaman dipakai dan pastinya tidak akan mengecewakan\r\n    \r\n• REAL PICT barang yang akan diterima dijamin kualitasnya 100% sesuai deskripsi dan sesuai foto\r\n(Karena efek cahaya dan masing2 hp berbeda, mungkin terdapat sedikit perbedaan warna dari foto, akurasi +- 90% dari foto\r\n\r\n• Selama stok di etalase masih dan bisa di klik berarti stok Ready & siap kirim jadi silahkan langsung di order\r\n\r\n• Pembayaran / Cod accp shopee  yang masuk max jam 14.00 (WITA) akan dikirim di hari yang sama jika lewat jam 14.00 (WITA) akan di kirim besoknya  \r\nKecuali Sabtu Pembayaran / Cod accp shopee  yang masuk lewat jam 14.00 (WITA) akan di kirim Hari Senin, karena Hari MINGGU Kami LIBUR PENGIRIMAN\r\n\r\n• Reseller & Dropshipper welcome    \r\n\r\n• FREE Stiker tanpa minimal pembelanjaan \r\n Jadi langsung di order aja ya kak\r\n\r\nNOTED !!\r\nBarang yang akan di kirim adalah barang yang sesuai di klik di orderan \r\n( BARANG YANG KITA KIRIM SESUAI ORDERAN ) \r\nKami tidak menerima pesanan dan penukaran size / warna / design di Kolom Komentar,  jadi tolong di sesuaikan di orderan \r\nKarena semua BY SISTEM yang di KLIK = yang di PROSES\r\n\r\n• PENGAJUAN PEMBATALAN MAX JAM 14.00 (WITA), di atas itu kami TIDAK bisa ACC karena barang sudah di PACKING \r\n\r\n• Untuk cek status paket terupdate / estimasi paket diterima bisa langsung cek di LACAK di pesanan shopee', '2021-05-06 18:23:01', '2021-05-06 18:23:01', 'KAB. KUNINGAN', 'admin'),
(15, 'EIGER T.S LOGO EIGER 1F SHOULDER BAG', 'Tas Pria', '299000', 'http://localhost/pw2021_203040017/praktikum/tubes/asset/jual/SHOULDER%20BAG.jpg', 'T.S. Logo Eiger 1F adalah tas selempang yang praktis untuk penggunaan sehari-hari. Tas ini memiliki kompartemen utama, saku depan dengan organizer, dan saku belakang untuk menyimpan barang bawaan. Dimensi: 19x8x25 cm\r\nFitur:\r\n- Kompartemen utama.\r\n- Saku depan dengan organizer.\r\n- Saku belakang.\r\n- Saku untuk menyimpan botol minum di bagian samping.\r\n<div id=\"gtx-trans\" style=\"position: absolute; left: 583px; top: -12px;\"><div class=\"gtx-trans-icon\"></div></div>\r\nT.S. Logo Eiger 1F adalah tas selempang yang praktis untuk penggunaan sehari-hari.\r\n\r\nGENDER : Unisex Adults\r\nMATERIAL : Nylon 500 x 500D Slub, PVC Nappa', '2021-05-06 18:30:33', '2021-05-06 18:30:33', 'KAB. KUNINGAN', 'admin');

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
(4, 'admin', '$2y$10$Kv.4z7ZEMJGJPuATu7C7G.wxPwgnAhPkf90DuHCcmf/svO0/Tha3q', 'admin', 'admin', 'admin@localhost.com'),
(5, 'hediha', '$2y$10$CQFlF31UZ/jI5PswYOlscu8VR6iZbe9jS8P6rjxmv/81MNRN9b95e', 'hedi', 'harisma', 'hediharisma@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

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
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `toko_item`
--
ALTER TABLE `toko_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

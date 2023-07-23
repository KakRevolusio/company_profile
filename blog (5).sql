-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2023 at 10:15 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `acara`
--

CREATE TABLE `acara` (
  `id` int(11) NOT NULL,
  `jidul` varchar(255) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `poto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `acara`
--

INSERT INTO `acara` (`id`, `jidul`, `keterangan`, `poto`) VALUES
(5, 'Amal indigogo Donasi Penyadang Desabilitas', 'Amal indigogo Donasi Penyadang Desabilitas', '1689840029_88e2651a13a5846d7def.jpg'),
(6, 'Amal indigogo Donasi Penyadang Desabilitas', 'Amal indigogo Donasi Penyadang Desabilitas', '1689840043_2cab1a5a80da6ed9d889.jpg'),
(7, 'Amal indigogo Donasi Penyadang Desabilitas', 'Amal indigogo Donasi Penyadang Desabilitas', '1689840055_dfbc548284804b89b4b2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `end_date` datetime NOT NULL,
  `description` text NOT NULL,
  `img_path` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`id`, `title`, `status`, `end_date`, `description`, `img_path`) VALUES
(35, 'Peluncuran Kecepatan Fiber Optik Baru', 0, '2023-08-01 10:00:00', 'Bergabunglah dengan kami dalam acara peluncuran kecepatan fiber optik baru kami yang revolusioner. Temukan pengalaman internet super cepat dengan teknologi terkini.', 'https://cdn.discordapp.com/attachments/944243031954034739/1131229407353241741/054221200_1659505274-DCI-TX_01.jpeg'),
(36, 'Workshop Keamanan Jaringan', 1, '2023-08-02 15:30:00', 'Sertai workshop keamanan jaringan kami dan pelajari praktik terbaik untuk melindungi data dan privasi Anda dalam dunia digital yang semakin kompleks.', 'https://cdn.discordapp.com/attachments/944243031954034739/1131229925261725716/kemananJaringan.jpg'),
(37, 'Sesi Tanya Jawab Internet of Things (IoT)', 0, '2023-08-03 09:45:00', 'Ikuti sesi tanya jawab tentang Internet of Things (IoT) dan dapatkan wawasan tentang bagaimana teknologi ini dapat mengubah cara kita berinteraksi dengan perangkat di sekitar kita.', 'https://cdn.discordapp.com/attachments/944243031954034739/1131230175913316462/IOT.webp'),
(38, 'Pengenalan Layanan Cloud Computing Terbaru', 0, '2023-08-04 14:15:00', 'Bergabunglah dalam acara pengenalan layanan cloud computing terbaru kami. Pelajari keuntungan dan fitur-fitur canggih yang akan membantu mempercepat bisnis Anda ke tingkat berikutnya.', 'https://cdn.discordapp.com/attachments/944243031954034739/1131230383044821012/CLOUD.jpg'),
(39, 'Webinar Kecepatan Internet di Daerah', 0, '2023-08-05 11:30:00', 'Saksikan webinar tentang kecepatan internet di daerah Anda. Temukan bagaimana kami meningkatkan infrastruktur untuk memberikan kecepatan internet yang belum pernah Anda alami sebelumnya.', 'https://cdn.discordapp.com/attachments/944243031954034739/1131231021220765726/INTERNET.png'),
(40, 'Sesi Demonstrasi Teknologi 5G', 1, '2023-08-06 16:45:00', 'Jangan lewatkan sesi demonstrasi teknologi 5G kami. Lihatlah dengan mata kepala sendiri kecepatan dan kinerja luar biasa dari jaringan 5G yang akan segera tersedia.', 'https://cdn.discordapp.com/attachments/944243031954034739/1131231021220765726/INTERNET.png'),
(41, 'Diskusi Panel Keamanan Data Pribadi', 1, '2023-08-07 13:00:00', 'Bergabunglah dalam diskusi panel kami tentang keamanan data pribadi. Dapatkan perspektif dari para ahli tentang bagaimana melindungi privasi Anda dalam era digital yang terus berkembang.', 'https://cdn.discordapp.com/attachments/944243031954034739/1131231238208897064/data-security.png'),
(42, 'Sosialisasi Data Security', 0, '2024-01-01 13:00:00', 'Sosialisasi Keamanan Data adalah upaya untuk meningkatkan kesadaran dan pemahaman masyarakat tentang risiko keamanan cyber. Kegiatan ini mencakup seminar, pelatihan, dan kampanye publik yang bertujuan memberikan informasi tentang ancaman cyber dan cara melindungi data pribadi. Dengan melibatkan pemerintah, organisasi, dan masyarakat umum, sosialisasi keamanan data membantu menciptakan lingkungan digital yang aman dan terpercaya serta mengurangi risiko kejahatan siber dan penyalahgunaan data sensitif.\r\n\r\n', 'https://cdn.discordapp.com/attachments/944243031954034739/1131231238208897064/data-security.png');

-- --------------------------------------------------------

--
-- Table structure for table `adminusers`
--

CREATE TABLE `adminusers` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminusers`
--

INSERT INTO `adminusers` (`id`, `username`, `password`) VALUES
(1, 'admin1', 'admin123'),
(3, 'admin2', 'inipassword');

-- --------------------------------------------------------

--
-- Table structure for table `alat`
--

CREATE TABLE `alat` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `spesifikasi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alat`
--

INSERT INTO `alat` (`id`, `gambar`, `nama`, `spesifikasi`) VALUES
(49, '1689838150_165e119abc59e06d0ce7.jpg', 'Tenda N 300', '1 × 10/100 Mbps LAN/WAN Port 1 × 10/100Mbps LAN Port 1 × 2FF SIM Card Slot\r\nAuto-APN Auto dial-up Roaming SMS(Send/Receive/Delete) USSD Data limted PIN Management Failover'),
(50, '1689838171_7f8aab8f8046dfefb611.jpg', 'Totolink N3001', '1 × 10/100 Mbps LAN/WAN Port 1 × 10/100Mbps LAN Port 1 × 2FF SIM Card Slot\r\nAuto-APN Auto dial-up Roaming SMS(Send/Receive/Delete) USSD Data limted PIN Management Failover'),
(51, '1689838187_38f88335693053e2c0f4.jpg', 'Tenda A3200', '1 × 10/100 Mbps LAN/WAN Port 1 × 10/100Mbps LAN Port 1 × 2FF SIM Card Slot\r\nAuto-APN Auto dial-up Roaming SMS(Send/Receive/Delete) USSD Data limted PIN Management Failover'),
(52, '1689838208_88ced9b67bbb72bf31af.jpg', 'Tplink n250', '1 × 10/100 Mbps LAN/WAN Port 1 × 10/100Mbps LAN Port 1 × 2FF SIM Card Slot\r\nAuto-APN Auto dial-up Roaming SMS(Send/Receive/Delete) USSD Data limted PIN Management Failover'),
(53, '1689838232_843e78948c6ac9254a9c.jpg', 'ZTE 300', '1 × 10/100 Mbps LAN/WAN Port 1 × 10/100Mbps LAN Port 1 × 2FF SIM Card Slot\r\nAuto-APN Auto dial-up Roaming SMS(Send/Receive/Delete) USSD Data limted PIN Management Failover'),
(54, '1689838245_6afe35b7e2a453b9584a.jpg', 'ZTE N200', '1 × 10/100 Mbps LAN/WAN Port 1 × 10/100Mbps LAN Port 1 × 2FF SIM Card Slot\r\nAuto-APN Auto dial-up Roaming SMS(Send/Receive/Delete) USSD Data limted PIN Management Failover'),
(55, '1689838266_49a04dceb795970991cf.jpg', 'TP LINK 470', '1 × 10/100 Mbps LAN/WAN Port 1 × 10/100Mbps LAN Port 1 × 2FF SIM Card Slot\r\nAuto-APN Auto dial-up Roaming SMS(Send/Receive/Delete) USSD Data limted PIN Management Failover');

-- --------------------------------------------------------

--
-- Table structure for table `beranda`
--

CREATE TABLE `beranda` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `beranda`
--

INSERT INTO `beranda` (`id`, `gambar`) VALUES
(10, '1689835985_e1af52d61e87364e3318.jpg'),
(11, '1689836036_9ea3f28dfb71e80ec727.jpg'),
(12, '1689836047_bd05ad4092293b841274.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `beritaterkini`
--

CREATE TABLE `beritaterkini` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `beritaterkini`
--

INSERT INTO `beritaterkini` (`id`, `judul`, `deskripsi`, `gambar`) VALUES
(0, 'qeqww', 'qweqwe', '1689590181_7c60dd0a3cd9055a02cf.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `datapelamar`
--

CREATE TABLE `datapelamar` (
  `ID` int(11) NOT NULL,
  `Nama` varchar(255) DEFAULT NULL,
  `Usia` int(11) DEFAULT NULL,
  `Agama` varchar(255) DEFAULT NULL,
  `JenisKelamin` varchar(255) DEFAULT NULL,
  `SKCK` varchar(255) DEFAULT NULL,
  `CV` text DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Alamat` text DEFAULT NULL,
  `NomorHandphone` varchar(255) DEFAULT NULL,
  `TranskripNilaiTerakhir` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`id`, `judul`, `foto`) VALUES
(2, 'Belajar Bareng Indigogo', '1689839254_3fbc5a83473f6af620e3.jpg'),
(3, 'Belajar Bareng Indigogo', '1689839679_7dc8b289f19487cc4af7.jpg'),
(4, 'Belajar Bareng Indigogo', '1689839690_bf69701d7a81a7df51db.jpg'),
(5, 'Belajar Bareng Indigogo', '1689839699_aec8c8cd011666ba05c7.jpg'),
(6, 'Belajar Bareng Indigogo', '1689839707_8fd5377582a3635f5229.jpg'),
(7, 'Belajar Bareng Indigogo', '1689839725_8f8b0029f378a7098991.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jawaban`
--

CREATE TABLE `jawaban` (
  `id` int(11) NOT NULL,
  `pertanyaan_id` int(11) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jawaban`
--

INSERT INTO `jawaban` (`id`, `pertanyaan_id`, `isi`) VALUES
(7, 11, 'nfrastruktur jaringan yang kuat dan andal sangat penting bagi perusahaan karena menjadi dasar bagi berbagai aktivitas bisnis. Jaringan yang handal memungkinkan komunikasi yang lancar antara karyawan, meningkatkan kolaborasi, dan memungkinkan akses cepat terhadap data dan aplikasi penting. '),
(8, 10, 'nfrastruktur jaringan yang kuat dan andal sangat penting bagi perusahaan karena menjadi dasar bagi berbagai aktivitas bisnis. Jaringan yang handal memungkinkan komunikasi yang lancar antara karyawan, meningkatkan kolaborasi, dan memungkinkan akses cepat terhadap data dan aplikasi penting. ');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lapangan`
--

CREATE TABLE `lapangan` (
  `gambar` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lapangan`
--

INSERT INTO `lapangan` (`gambar`, `nama`, `jabatan`, `id`) VALUES
('1689838560_0530b6df1843b19b0a21.png', 'Dika Silalahi', 'Devisi Lapangan', 13),
('1689838654_c878b4972004b105fb8b.png', 'DIka', 'Devisi Lapangan', 14),
('1689838671_bce9d62347e00d73bdcb.png', 'dika', 'Devisi Lapangan', 15);

-- --------------------------------------------------------

--
-- Table structure for table `marketing`
--

CREATE TABLE `marketing` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `marketing`
--

INSERT INTO `marketing` (`id`, `gambar`, `nama`, `jabatan`) VALUES
(13, '1689838455_3b26cd3f0f626fa35eb3.png', 'david', 'devisi marketing'),
(14, '1689838473_f9fcae41d314a25717fd.png', 'david', 'devisi marketing'),
(15, '1689838489_8d091c7743df98d49e74.png', 'david', 'devisi marketing');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2023-07-09-140021', 'App\\Database\\Migrations\\News', 'default', 'App', 1689011042, 1);

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id` int(11) NOT NULL,
  `kecepatan` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id`, `kecepatan`, `harga`, `deskripsi`, `detail`) VALUES
(2, '10 Mbps', 'Rp. 125.000', 'Kecepatan Stabil dan Bisa digunakan 1-5 Pengguna', 'Paket Promo spesial');

-- --------------------------------------------------------

--
-- Table structure for table `pencapaian`
--

CREATE TABLE `pencapaian` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pencapaian`
--

INSERT INTO `pencapaian` (`id`, `judul`, `deskripsi`, `foto`) VALUES
(9, 'The best for speed internet 2020', 'pemeganag kecepatan internet tercepat', '1689836373_6b4167a94cfe2d41fa9d.jpg'),
(10, 'Internet stabil for jogja ', 'internet paling stabil di jogja', '1689836420_9cda00f5fb2dd71a639e.jpg'),
(11, 'The best security network', 'penghargaan security terbaik 2020', '1689836493_33f67ddeecc2c31905a4.jpg'),
(12, 'Penghargaan Terbaik dalam Inovasi Jaringan', 'Penghargaan Terbaik dalam Inovasi Jaringan 2020', '1689836554_e5de98942107aca1dfe2.jpg'),
(13, 'Penghargaan Terbaik dalam Inovasi Jaringan 2020', 'Penghargaan Terbaik dalam Inovasi Jaringan 2020', '1689836565_26fbfc59158bfd62dcc8.jpg'),
(14, 'Penghargaan Terbaik dalam Inovasi Jaringan 2020', 'Penghargaan Terbaik dalam Inovasi Jaringan 2020', '1689836578_71b0d9debbc59a4f134e.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id` int(11) NOT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `agama` varchar(20) DEFAULT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `usia` int(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `nomor_handphone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id` int(11) NOT NULL,
  `isi` text NOT NULL,
  `balasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pertanyaan`
--

INSERT INTO `pertanyaan` (`id`, `isi`, `balasan`) VALUES
(9, 'Apa pentingnya memiliki infrastruktur jaringan yang kuat dan andal bagi perusahaan?', ''),
(10, 'Apa pentingnya memiliki infrastruktur jaringan yang kuat dan andal bagi perusahaan?', ''),
(11, 'Apa pentingnya memiliki infrastruktur jaringan yang kuat dan andal bagi perusahaan?', ''),
(12, 'Apa pentingnya memiliki infrastruktur jaringan yang kuat dan andal bagi perusahaan?', ''),
(13, 'Apa pentingnya memiliki infrastruktur jaringan yang kuat dan andal bagi perusahaan?', ''),
(14, 'Apa pentingnya memiliki infrastruktur jaringan yang kuat dan andal bagi perusahaan?', '');

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `deskripsi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`id`, `nama`, `gambar`, `deskripsi`) VALUES
(19, 'Sandika M.kom ', '1689838003_ee5ff19d24adebf1cc48.png', 'DIREKTOR UTAMA'),
(20, 'Mamat Putra', '1689838038_8c6d85866be88df51a58.png', 'Ceo'),
(21, 'Mamat Putra', '1689838080_cd642c7fa6db3923d74e.png', 'CEO'),
(22, 'Mamat Putra', '1689838095_7470b3d6fbe60dbc2045.png', 'CEO');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `paket` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `nama`, `email`, `telepon`, `alamat`, `paket`) VALUES
(1, 'Rochmat', 'rochmat2003@gmail.com', '088829273', 'Jogja', '20 Mbps'),
(13, 'Rochmat Pramudya', 'rochmatpramudya@students.amikom.ac.id', '081298011769', 'Jogja,Condong Catur', '10 Mbps');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `image`) VALUES
(52, 'Vidio Original Cinta Dua Masa: Romansa Prilly dan Dikta Hadapi Patah Hati', 'Tumbuh di tengah keluarga yang kurang harmonis membuat Alma sulit percaya pada cinta. Namun, kehadiran Rangga mampu meluluhkan hati Alma. Selama tiga tahun bersama, tanpa sadar Alma jadi bergantung pada Rangga. Ketika suatu hari Rangga mengajak Alma bicara serius, bukan sebuah lamaran yang diterima melainkan Rangga justru meminta putus dengan alasan lelah karena Alma membuat Rangga terkekang dan tidak bisa menjadi dirinya sendiri. Alma patah hati dan merasa kehilangan sandaran. Hingga tiga bulan kemudian, Alma masih gagal move on. ', '1689838722_2555e14e7ea122d8223b.jpg'),
(53, 'Vidio Original Cinta Dua Masa: Romansa Prilly dan Dikta Hadapi Patah Hati', 'Tumbuh di tengah keluarga yang kurang harmonis membuat Alma sulit percaya pada cinta. Namun, kehadiran Rangga mampu meluluhkan hati Alma. Selama tiga tahun bersama, tanpa sadar Alma jadi bergantung pada Rangga. Ketika suatu hari Rangga mengajak Alma bicara serius, bukan sebuah lamaran yang diterima melainkan Rangga justru meminta putus dengan alasan lelah karena Alma membuat Rangga terkekang dan tidak bisa menjadi dirinya sendiri. Alma patah hati dan merasa kehilangan sandaran. Hingga tiga bulan kemudian, Alma masih gagal move on. ', '1689838748_8b1b74fb183179ba636d.jpg'),
(54, 'Vidio Original Cinta Dua Masa: Romansa Prilly dan Dikta Hadapi Patah Hati', 'Tumbuh di tengah keluarga yang kurang harmonis membuat Alma sulit percaya pada cinta. Namun, kehadiran Rangga mampu meluluhkan hati Alma. Selama tiga tahun bersama, tanpa sadar Alma jadi bergantung pada Rangga. Ketika suatu hari Rangga mengajak Alma bicara serius, bukan sebuah lamaran yang diterima melainkan Rangga justru meminta putus dengan alasan lelah karena Alma membuat Rangga terkekang dan tidak bisa menjadi dirinya sendiri. Alma patah hati dan merasa kehilangan sandaran. Hingga tiga bulan kemudian, Alma masih gagal move on. Alma dihantui ketakutan, bagaimana jika tidak ada lelaki lain yang bisa memahaminya sebaik Rangga? Puncaknya adalah saat Alma mengetahui bahwa Rangga jalan dengan perempuan lain.\r\n', '1689838768_2f39b0c824cfff426b06.jpg'),
(55, 'Vidio Original Cinta Dua Masa: Romansa Prilly dan Dikta Hadapi Patah Hati', 'Tumbuh di tengah keluarga yang kurang harmonis membuat Alma sulit percaya pada cinta. Namun, kehadiran Rangga mampu meluluhkan hati Alma. Selama tiga tahun bersama, tanpa sadar Alma jadi bergantung pada Rangga. Ketika suatu hari Rangga mengajak Alma bicara serius, bukan sebuah lamaran yang diterima melainkan Rangga justru meminta putus dengan alasan lelah karena Alma membuat Rangga terkekang dan tidak bisa menjadi dirinya sendiri. Alma patah hati dan merasa kehilangan sandaran. Hingga tiga bulan kemudian, Alma masih gagal move on.', '1689838785_c5cea551d015d125beb2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` int(11) NOT NULL,
  `img_path` text NOT NULL,
  `price` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `type`, `img_path`, `price`, `description`) VALUES
(73, 'Paket Gaming Unlimited', 1, 'https://cdn.discordapp.com/attachments/944243031954034739/1131216979873759272/InternetT.png', 150000, 'Paket internet gaming unlimited kami memberikan koneksi super cepat dan stabil untuk pengalaman gaming terbaik. Dengan kecepatan download dan upload yang tinggi serta latensi rendah, Anda dapat menikmati berbagai game online tanpa hambatan. Paket ini juga dilengkapi dengan fitur khusus untuk mengoptimalkan kinerja gaming, termasuk routing yang dioptimalkan dan dukungan QoS (Quality of Service). Dengan dukungan pelanggan yang responsif, kami siap membantu Anda dengan pertanyaan atau masalah teknis. Dengan paket gaming unlimited kami, Anda dapat meraih kemenangan di dunia gaming.'),
(74, 'Paket Roaming Plus', 1, 'https://cdn.discordapp.com/attachments/944243031954034739/1131216979873759272/InternetT.png', 250000, 'Paket internet roaming plus kami memberikan akses internet yang cepat dan terjangkau saat Anda berada di luar negeri. Dengan paket ini, Anda dapat tetap terhubung dengan mudah, menjelajahi web, berbagi foto dan video, serta menggunakan aplikasi favorit Anda saat bepergian. Kami menawarkan jaringan global yang luas dengan mitra operator terkemuka di berbagai negara. Dukungan pelanggan kami tersedia 24/7 untuk membantu Anda dengan pertanyaan atau masalah teknis. Dengan paket roaming plus kami, Anda dapat menjaga konektivitas di mana pun Anda berada.'),
(75, 'Paket Streaming Unlimited', 2, 'https://cdn.discordapp.com/attachments/944243031954034739/1131216979601150013/HomeT.png', 180000, 'Paket internet streaming unlimited kami memberikan pengalaman streaming yang tak terbatas. Dengan kecepatan tinggi dan tanpa batasan kuota, Anda dapat menikmati streaming film, serial TV, musik, dan konten digital lainnya dengan kualitas yang optimal. Paket ini juga dilengkapi dengan bonus langganan Netflix, sehingga Anda dapat menikmati ribuan film dan acara TV tanpa biaya tambahan. Tim dukungan pelanggan kami siap membantu Anda dengan pertanyaan atau masalah teknis. Dengan paket streaming unlimited kami, hiburan tak terbatas ada di ujung jari Anda.'),
(76, 'Paket Keluarga Plus', 2, 'https://cdn.discordapp.com/attachments/944243031954034739/1131216979601150013/HomeT.png', 300000, 'Paket internet keluarga plus kami menyediakan konektivitas yang handal untuk seluruh keluarga Anda. Dengan kecepatan tinggi dan kuota yang melimpah, setiap anggota keluarga dapat menikmati akses internet yang stabil untuk streaming video, browsing web, bermain game, dan aktivitas online lainnya. Paket ini juga dilengkapi dengan bonus langganan Netflix, sehingga keluarga Anda dapat menikmati berbagai film dan acara TV bersama-sama. Tim dukungan pelanggan kami siap membantu Anda dengan pertanyaan atau masalah teknis. Dengan paket keluarga plus kami, keluarga Anda dapat tetap terhubung dan terhibur dalam dunia digital.'),
(77, 'Paket Bisnis Basic', 3, 'https://cdn.discordapp.com/attachments/944243031954034739/1131216980184150046/EnterpriseT.png', 500000, 'Paket internet bisnis basic kami memberikan solusi konektivitas yang handal untuk perusahaan menengah ke bawah. Dengan kecepatan tinggi dan koneksi yang stabil, paket ini cocok untuk memenuhi kebutuhan akses internet dasar seperti browsing web, email, dan aplikasi bisnis ringan. Dukungan pelanggan kami tersedia 24/7 untuk membantu Anda dengan pertanyaan atau masalah teknis. Dengan paket internet bisnis basic kami, perusahaan Anda dapat menjaga konektivitas yang handal dalam anggaran yang terjangkau.'),
(78, 'Paket Gaming Pro', 1, 'https://cdn.discordapp.com/attachments/944243031954034739/1131216979873759272/InternetT.png', 350000, 'Paket internet gaming pro kami memberikan pengalaman gaming yang luar biasa. Dengan kecepatan super cepat, latensi rendah, dan jaringan yang stabil, Anda dapat menikmati game online dengan kualitas grafis yang tinggi dan responsivitas yang optimal. Paket ini dilengkapi dengan fitur khusus untuk mengoptimalkan kinerja gaming, termasuk routing yang dioptimalkan dan dukungan QoS (Quality of Service). Dukungan pelanggan kami siap membantu Anda dengan pertanyaan atau masalah teknis. Dengan paket gaming pro kami, Anda dapat meraih prestasi tinggi dalam dunia gaming.'),
(79, 'Paket Keluarga Entertainment', 2, 'https://cdn.discordapp.com/attachments/944243031954034739/1131216979601150013/HomeT.png', 280000, 'Paket internet keluarga entertainment kami memberikan hiburan tanpa batas untuk seluruh keluarga Anda. Dengan kecepatan tinggi dan kuota yang melimpah, setiap anggota keluarga dapat menikmati streaming video, bermain game online, mendengarkan musik, dan berbagi momen bersama. Paket ini dilengkapi dengan bonus langganan platform streaming terkemuka, seperti Netflix, Disney+, dan Spotify. Tim dukungan pelanggan kami siap membantu Anda dengan pertanyaan atau masalah teknis. Dengan paket keluarga entertainment kami, keluarga Anda dapat menikmati hiburan tak terbatas.'),
(80, 'Paket Bisnis Pro', 3, 'https://cdn.discordapp.com/attachments/944243031954034739/1131216980184150046/EnterpriseT.png', 800000, 'Paket internet bisnis pro kami memberikan solusi konektivitas yang canggih dan handal untuk perusahaan menengah ke bawah. Dengan kecepatan tinggi, jaringan yang stabil, dan kinerja yang optimal, paket ini cocok untuk memenuhi kebutuhan bisnis yang mengharuskan akses internet yang handal dan responsif, seperti konferensi video, manajemen data, dan aplikasi bisnis lainnya. Tim dukungan pelanggan kami siap membantu Anda dengan masalah atau pertanyaan teknis. Dengan paket internet bisnis pro kami, perusahaan Anda akan mendapatkan konektivitas yang efisien dan mendukung pertumbuhan bisnis Anda.'),
(81, 'Paket Gaming Ultimate', 1, 'https://cdn.discordapp.com/attachments/944243031954034739/1131216979873759272/InternetT.png', 500000, 'Paket internet gaming ultimate kami memberikan pengalaman gaming tak tertandingi. Dengan kecepatan super cepat, latensi sangat rendah, dan jaringan yang stabil, Anda dapat menikmati game online dengan kualitas grafis terbaik dan responsivitas yang luar biasa. Paket ini dilengkapi dengan fitur khusus untuk mengoptimalkan kinerja gaming, termasuk routing yang dioptimalkan dan dukungan QoS (Quality of Service). Dukungan pelanggan kami siap membantu Anda dengan pertanyaan atau masalah teknis. Dengan paket gaming ultimate kami, Anda dapat meraih prestasi tertinggi dalam dunia gaming.'),
(82, 'Paket Keluarga Premium', 2, 'https://cdn.discordapp.com/attachments/944243031954034739/1131216979601150013/HomeT.png', 450000, 'Paket internet keluarga premium kami memberikan pengalaman digital yang luar biasa untuk seluruh keluarga Anda. Dengan kecepatan tinggi, kuota yang melimpah, dan koneksi yang stabil, setiap anggota keluarga dapat menikmati streaming video, bermain game online, dan menjalankan aktivitas online lainnya tanpa hambatan. Paket ini dilengkapi dengan bonus langganan platform hiburan terkemuka, seperti Netflix, Disney+, dan Spotify. Tim dukungan pelanggan kami siap membantu Anda dengan pertanyaan atau masalah teknis. Dengan paket keluarga premium kami, Anda dapat menciptakan momen tak terlupakan bersama keluarga dalam dunia digital.'),
(83, 'Paket Bisnis Enterprise', 3, 'https://cdn.discordapp.com/attachments/944243031954034739/1131216980184150046/EnterpriseT.png', 1500000, 'Paket internet bisnis enterprise kami memberikan solusi konektivitas terdepan untuk perusahaan menengah ke bawah. Dengan kecepatan super cepat, jaringan yang kuat, dan kinerja yang optimal, paket ini cocok untuk memenuhi kebutuhan bisnis yang membutuhkan akses internet yang handal dan responsif, seperti konferensi video, manajemen data yang besar, dan aplikasi bisnis berat. Kami juga menyediakan layanan instalasi dan konfigurasi jaringan khusus sesuai dengan kebutuhan perusahaan Anda. Tim dukungan pelanggan kami siap membantu Anda dengan masalah atau pertanyaan teknis. Dengan paket internet bisnis enterprise kami, perusahaan Anda akan mendapatkan konektivitas yang efisien dan mendukung pertumbuhan bisnis Anda.');

-- --------------------------------------------------------

--
-- Table structure for table `progamer`
--

CREATE TABLE `progamer` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `progamer`
--

INSERT INTO `progamer` (`id`, `gambar`, `nama`, `jabatan`) VALUES
(37, '1689838384_94dc57070a479621bc4e.png', 'ade anya', 'progamer'),
(38, '1689838396_65a1a65f7d764b68f673.png', 'ade anya', 'progamer'),
(39, '1689838412_0ac1cdcae54a7ded5847.png', 'ade anya', 'progamer'),
(40, '1689838429_cf51d83d4cdfe88f82c6.png', 'ade anya', 'progamer');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` text DEFAULT NULL,
  `answer` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `answer`) VALUES
(8, 'Apa bidang usaha perusahaan Anda di dalam industri jaringan?', 'Perusahaan kami bergerak di bidang jaringan komunikasi dan teknologi informasi. Kami menyediakan layanan konsultasi, desain, dan implementasi infrastruktur jaringan yang kuat dan andal untuk perusahaan dan organisasi berbagai ukuran dan industri.'),
(9, 'Apa bidang usaha perusahaan Anda di dalam industri jaringan?', 'Perusahaan kami bergerak di bidang jaringan komunikasi dan teknologi informasi. Kami menyediakan layanan konsultasi, desain, dan implementasi infrastruktur jaringan yang kuat dan andal untuk perusahaan dan organisasi berbagai ukuran dan industri.'),
(10, 'Apa bidang usaha perusahaan Anda di dalam industri jaringan?', ' Perusahaan kami bergerak di bidang jaringan komunikasi dan teknologi informasi. Kami menyediakan layanan konsultasi, desain, dan implementasi infrastruktur jaringan yang kuat dan andal untuk perusahaan dan organisasi berbagai ukuran dan industri.'),
(11, 'Apa bidang usaha perusahaan Anda di dalam industri jaringan?', ' Perusahaan kami bergerak di bidang jaringan komunikasi dan teknologi informasi. Kami menyediakan layanan konsultasi, desain, dan implementasi infrastruktur jaringan yang kuat dan andal untuk perusahaan dan organisasi berbagai ukuran dan industri.'),
(12, 'Apa bidang usaha perusahaan Anda di dalam industri jaringan?', 'Perusahaan kami bergerak di bidang jaringan komunikasi dan teknologi informasi. Kami menyediakan layanan konsultasi, desain, dan implementasi infrastruktur jaringan yang kuat dan andal untuk perusahaan dan organisasi berbagai ukuran dan industri.');

-- --------------------------------------------------------

--
-- Table structure for table `struktur`
--

CREATE TABLE `struktur` (
  `id` int(11) NOT NULL,
  `gambar` blob DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `suggestion`
--

CREATE TABLE `suggestion` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `entry_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `suggestion`
--

INSERT INTO `suggestion` (`id`, `title`, `content`, `entry_date`) VALUES
(5, 'sdfds', ' sdffsdfsd', '2023-07-20 06:43:04');

-- --------------------------------------------------------

--
-- Table structure for table `testimony`
--

CREATE TABLE `testimony` (
  `id` int(11) NOT NULL,
  `gambar` blob DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimony`
--

INSERT INTO `testimony` (`id`, `gambar`, `judul`, `deskripsi`) VALUES
(78, 0x313638393833363735375f66353162323863653334613935303339323732312e6a7067, ' TechConnect Solutions', 'Saya sangat senang bekerja sama dengan TechConnect Solutions dalam mengatasi kebutuhan jaringan perusahaan kami. Mereka telah membuktikan diri sebagai mitra yang andal dan inovatif dalam membantu kami mengoptimalkan infrastruktur jaringan kami.'),
(79, 0x313638393833363830305f61386164323063613434326233313230366638642e6a7067, 'Sebagai startup teknologi', 'Saya sangat senang bekerja sama dengan TechConnect Solutions dalam mengatasi kebutuhan jaringan perusahaan kami. Mereka telah membuktikan diri sebagai mitra yang andal dan inovatif dalam membantu kami mengoptimalkan infrastruktur jaringan kami.'),
(80, 0x313638393833363831345f39643936613565363962636661666239646135392e6a7067, 'Sebagai startup teknologi', 'Saya sangat senang bekerja sama dengan TechConnect Solutions dalam mengatasi kebutuhan jaringan perusahaan kami. Mereka telah membuktikan diri sebagai mitra yang andal dan inovatif dalam membantu kami mengoptimalkan infrastruktur jaringan kami.'),
(81, 0x313638393833363834325f33363938663138313830323730373565363835622e6a7067, 'Sebagai startup teknologi', 'Saya sangat senang bekerja sama dengan TechConnect Solutions dalam mengatasi kebutuhan jaringan perusahaan kami. Mereka telah membuktikan diri sebagai mitra yang andal dan inovatif dalam membantu kami mengoptimalkan infrastruktur jaringan kami.'),
(82, 0x313638393833363836305f39646465636235303962363061643264643331622e6a7067, 'Sebagai startup teknologi', 'Saya sangat senang bekerja sama dengan TechConnect Solutions dalam mengatasi kebutuhan jaringan perusahaan kami. Mereka telah membuktikan diri sebagai mitra yang andal dan inovatif dalam membantu kami mengoptimalkan infrastruktur jaringan kami.'),
(83, 0x313638393833363839335f62653931383530386139323335356135373135622e6a7067, 'Sebagai startup teknologi', 'Saya sangat senang bekerja sama dengan TechConnect Solutions dalam mengatasi kebutuhan jaringan perusahaan kami. Mereka telah membuktikan diri sebagai mitra yang andal dan inovatif dalam membantu kami mengoptimalkan infrastruktur jaringan kami.');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `judul`, `video`) VALUES
(2, 'Indigogo layanan tanpa batas', '1689839769_1f563a24ad41c72edd91.mp4'),
(3, 'Indigogo layanan tanpa batas', '1689839801_16074f75b04df7af9dd2.mp4'),
(4, 'Indigogo layanan tanpa batas', '1689839822_7cab93df86bc663e4bc5.mp4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acara`
--
ALTER TABLE `acara`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminusers`
--
ALTER TABLE `adminusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alat`
--
ALTER TABLE `alat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beranda`
--
ALTER TABLE `beranda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datapelamar`
--
ALTER TABLE `datapelamar`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pertanyaan_id` (`pertanyaan_id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `lapangan`
--
ALTER TABLE `lapangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marketing`
--
ALTER TABLE `marketing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pencapaian`
--
ALTER TABLE `pencapaian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `progamer`
--
ALTER TABLE `progamer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `struktur`
--
ALTER TABLE `struktur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suggestion`
--
ALTER TABLE `suggestion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimony`
--
ALTER TABLE `testimony`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acara`
--
ALTER TABLE `acara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `adminusers`
--
ALTER TABLE `adminusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `alat`
--
ALTER TABLE `alat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `beranda`
--
ALTER TABLE `beranda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `lapangan`
--
ALTER TABLE `lapangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `marketing`
--
ALTER TABLE `marketing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pencapaian`
--
ALTER TABLE `pencapaian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `progamer`
--
ALTER TABLE `progamer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `struktur`
--
ALTER TABLE `struktur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `suggestion`
--
ALTER TABLE `suggestion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `testimony`
--
ALTER TABLE `testimony`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD CONSTRAINT `jawaban_ibfk_1` FOREIGN KEY (`pertanyaan_id`) REFERENCES `pertanyaan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2020 at 11:33 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci4`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `judul` varchar(100) NOT NULL DEFAULT 'judulnya',
  `isi` text NOT NULL DEFAULT 'isi',
  `gambar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `id_user`, `judul`, `isi`, `gambar`) VALUES
(3, 3, 'Judulnya', 'isinya', '1606678342_8736026aa862ecc7d13b.jpg'),
(4, 3, 'tesis tambah edit', ' tambah\r\ntambah\r\ntambah\r\ntambah\r\ntambah\r\ntambah\r\ntambah\r\ntambah\r\n', '1606680563_b423d553c115bb5de275.jpg'),
(5, 3, 'dadaadsada', 'adasdassdaadadsaa\r\nasdasda\r\nsaad', '1606680604_8c8d2e7c430d637fdd8a.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `id_resep` int(10) UNSIGNED NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `komentar` text DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `id_user`, `id_resep`, `created_at`, `komentar`, `gambar`, `updated_at`) VALUES
(5, 3, 27, '0000-00-00 00:00:00', 'sas', NULL, NULL),
(7, 3, 27, '0000-00-00 00:00:00', 'waww', NULL, NULL),
(9, 3, 27, '0000-00-00 00:00:00', 'waw', '1606651381_4ce9012fa6a9d8bf11cb.png', NULL),
(10, 3, 27, '0000-00-00 00:00:00', 'adasda', '', NULL),
(11, 3, 27, '0000-00-00 00:00:00', 'dsaasda', '', NULL),
(12, 3, 27, '0000-00-00 00:00:00', 'asdas', '', NULL),
(13, 3, 27, '0000-00-00 00:00:00', 'adsas', '1606653071_371b15f299c857707cef.png', NULL),
(14, 4, 27, '0000-00-00 00:00:00', 'sadasas', '', NULL),
(15, 4, 27, '0000-00-00 00:00:00', 'ini komen lagi lah kuy', '1606669801_1880c8c4c76a7c217b83.jpg', '2020-11-29 11:10:18');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` text NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(39, '2020-11-26-061634', 'App\\Database\\Migrations\\User', 'default', 'App', 1606554762, 1),
(40, '2020-11-26-073541', 'App\\Database\\Migrations\\Resep', 'default', 'App', 1606554763, 1),
(41, '2020-11-26-084222', 'App\\Database\\Migrations\\Komentar', 'default', 'App', 1606554764, 1),
(42, '2020-11-26-091849', 'App\\Database\\Migrations\\Artikel', 'default', 'App', 1606554765, 1);

-- --------------------------------------------------------

--
-- Table structure for table `resep`
--

CREATE TABLE `resep` (
  `id_resep` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `judul` varchar(50) NOT NULL DEFAULT 'judul_resep',
  `porsi` varchar(20) NOT NULL DEFAULT '1 Orang',
  `lama_memasak` varchar(20) NOT NULL DEFAULT '30 Menit',
  `bahan` text NOT NULL,
  `tutorial` text NOT NULL,
  `gambar_banner` text NOT NULL DEFAULT 'img/default.jpg',
  `gambar_tutorial` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `resep`
--

INSERT INTO `resep` (`id_resep`, `id_user`, `judul`, `porsi`, `lama_memasak`, `bahan`, `tutorial`, `gambar_banner`, `gambar_tutorial`, `created_at`, `updated_at`) VALUES
(14, 1, 'Pojok Kiri Atas', '1', '10', 'sda\r\nsas\r\nd\r\nasf\r\ns\r\ndasd\r\nas', 'asd\r\nas\r\nfas\r\nd\r\na\r\nasd', '1606587353_e3e29817e6bea8879cd5.png', '1606587546_d5fe8adcb425580ed15a', '2020-11-28 10:20:56', '2020-11-28 12:19:06'),
(15, 1, 'alsdlasdl', '123', '312', 'dsaa\r\nad\r\na\r\nasda', 'asd\r\nasd\r\na\r\ndas\r\n', 'brck.PNG', 'brck.PNG', '2020-11-28 10:26:20', '2020-11-28 10:26:20'),
(16, 1, 'sadafaa', '123', '4321', 'sadas\r\nasdasd\r\nasdasd\r\nda', 'asda\r\nsads\r\nasd', '1606584309_ad059d2ed8b145525b88.jpeg', '1606584309_7cc604b485c343897e18.png', '2020-11-28 10:29:42', '2020-11-28 11:25:09'),
(17, 1, 'dfs', '2', '213', 'fasada\r\ndas\r\nasd\r\nas\r\n\r\na', 'ad\r\nas\r\nda\r\nad', 'dp2_1.jpg', 'dp2_1.jpg', '2020-11-28 10:51:06', '2020-11-28 10:51:06'),
(18, 1, 'daasd', '12342', '4121231', 'adasdaasda', 'asdawasad', 'dp2_2.jpg', 'dp2_2.jpg', '2020-11-28 10:55:20', '2020-11-28 10:55:20'),
(19, 1, 'daasd', '123', '4213123', 'asdasd\r\nads\r\nasd\r\n', 'as\r\nda\r\nf\r\nas\r\nda', '1606584072_c7837fcc964b54dc4223.jpg', '1606584072_08652824711fe0bafb99.jpg', '2020-11-28 10:58:19', '2020-11-28 11:21:12'),
(20, 1, 'adasd', '12', '41231', 'wadjsad\r\nasdkasodkas\r\nasd', 'jiafjdisaakls', '1606583403_1da0e38267488777848d.jpg', '1606583403_3f11604f22ea4add9932.png', '2020-11-28 11:10:03', '2020-11-28 11:10:03'),
(21, 1, 'sad', '3123142', '12312324', 'asdasda', 'asada', '1606584254_60205d9c0ecd80e47c9c.png', '1606584254_a40e8daeb57d4dc6633b.jpg', '2020-11-28 11:24:14', '2020-11-28 11:24:14'),
(22, 1, 'daa', '31', '31', 'adas', 'daada', '1606588368_84aa4ceb8a5d683e924a.jpg', '1606588368_84aa4ceb8a5d683e924a.jpg', '2020-11-28 12:32:48', '2020-11-28 12:32:48'),
(23, 1, 'eda', '21', '31123', 'asdasd', 'dasa', '1606591464_4208deeeefc4b05e4125.png', NULL, '2020-11-28 13:24:24', '2020-11-28 13:24:24'),
(24, 1, 'daa', '1312', '1312', 'daa', 'adas', '1606591552_f99b8240fd18d7bed8b8.jpg', '1606591552_39f6dd0f6ff270865d16.jpg,1606591552_0fbd2e98c54c36108f8d.jpg,1606591552_39f6dd0f6ff270865d16.jpg,1606591552_0fbd2e98c54c36108f8d.jpg', '2020-11-28 13:25:52', '2020-11-28 13:25:52'),
(25, 1, 'Bracket', '213123', '1312', 'dsaasmldka', 'lkmaslkdmam', '1606609153_08f6b047ee41005b9755.png', '1606609176_277c74d2dd68dba64af6', '2020-11-28 18:19:13', '2020-11-28 18:19:36'),
(26, 2, 'eqwq', '12313', '132', 'dsaasd\r\nasda\r\nsdas\r\nas', 'aksdjklam\r\nasd\r\nas', '1606609268_450eda24acf9d7dffe0a.jpg', '1606609504_ebdcd50768edd8f0ce6d.jpg', '2020-11-28 18:21:08', '2020-11-28 18:25:04'),
(27, 2, 'udah engga dong', '1312', '311241231', 'adadas', 'asdasdasfasdavarca', '1606610163_8e74a7b03b43ee9eb57d.jpg', '1606618548_6537bb1fcebe4203f47d.jpg,1606618548_e06cf8bfe519f8545938.jpeg', '2020-11-28 18:36:03', '2020-11-28 20:55:48'),
(28, 2, 'sasda', '12312', '1231', 'asdad', 'asdadas', '1606611899_5df1461491ba1e7f049b.jpg', '1606611899_5475cd2a8b80ac1b3125.jpg,1606611899_b8e9184dcfeecda83c09.jpg,1606611899_173f4afe17f722dea6b2.jpeg', '2020-11-28 19:04:59', '2020-11-28 19:04:59'),
(29, 2, 'laper beneran', '1123', '2312', 'asdasdaakmdkm', 'ksamdklamdam', '1606618133_8f20ff336202c6093cef.png', '1606618133_7eac1a5fec2eedec6597.jpg,1606618133_e3daae4a156a2277b2ea.jpg,1606618133_b0731f30530a67c1778c.jpg,1606618133_be5513f3bfa52f617d1f.jpeg,1606618133_8fb4ea3baa28fdf7743d.jpg,1606618133_0ae76ec6836a68ae928e.png', '2020-11-28 20:48:53', '2020-11-28 20:49:23');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `username` varchar(20) NOT NULL DEFAULT 'nama_pengguna',
  `nama_lengkap` varchar(50) NOT NULL DEFAULT 'Nama_Lengkap',
  `email` varchar(50) NOT NULL DEFAULT 'Email',
  `password` varchar(255) NOT NULL DEFAULT 'Password',
  `jenis_kelamin` varchar(1) NOT NULL,
  `alamat` text DEFAULT NULL,
  `gambar_profile` varchar(255) DEFAULT 'img/default.jpg',
  `bio` varchar(255) DEFAULT 'img/default.jpg',
  `is_admin` varchar(1) DEFAULT 'N',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama_lengkap`, `email`, `password`, `jenis_kelamin`, `alamat`, `gambar_profile`, `bio`, `is_admin`, `created_at`, `updated_at`) VALUES
(1, 'haris2703', 'Haris Prasetyo', 'haris_2703@apps.ipb.ac.id', '12345678', 'L', 'cbn bgr', 'img/default.jpg', 'img/default.jpg', 'N', NULL, NULL),
(2, 'hp2703', 'Haris Prasetyo', 'haris2703@gmail.com', '12345678', 'L', 'cbn bgr', '1606604666_00937a1b59b2bd4e7355.jpg', 'life for life', 'N', '2020-11-28 17:04:26', '2020-11-28 17:04:26'),
(3, 'harispr2703', '87654321', 'harispr2703@gmail.com', '87654321', 'L', 'sasd', '1606606120_730815d96bf5240cbc0e.jpg', 'adsasdas', 'Y', '2020-11-28 17:28:40', '2020-11-28 17:28:40'),
(4, 'harisharis', 'haris haris', 'harisharis@gmail.com', 'harisharis', 'L', 'rumah haris', '1606659382_05baed27899e24cac4ba.png', 'saya haris', 'h', '2020-11-29 08:16:22', '2020-11-29 08:16:22'),
(5, 'userbiasa', 'user biasa', 'userbiasa@gmail.com', 'userbiasa', 'L', 'rumah biasa', 'N', 'hidup biasa', 'u', '2020-11-29 11:35:38', '2020-11-29 11:35:38'),
(6, 'adminadmin', 'adminadmin', 'adminadmin@admin.com', 'adminadmin', 'P', 'rumah admin', '1606681554_65b0547d565724d851db.png', 'bio admin', 'Y', '2020-11-29 14:25:54', '2020-11-29 14:25:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`),
  ADD KEY `artikel_id_user_foreign` (`id_user`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `komentar_id_user_foreign` (`id_user`),
  ADD KEY `komentar_id_resep_foreign` (`id_resep`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resep`
--
ALTER TABLE `resep`
  ADD PRIMARY KEY (`id_resep`),
  ADD KEY `resep_id_user_foreign` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `resep`
--
ALTER TABLE `resep`
  MODIFY `id_resep` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `artikel_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_id_resep_foreign` FOREIGN KEY (`id_resep`) REFERENCES `resep` (`id_resep`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `komentar_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `resep`
--
ALTER TABLE `resep`
  ADD CONSTRAINT `resep_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

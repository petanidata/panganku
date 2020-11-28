-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2020 at 09:06 AM
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
  `id_artikel` varchar(10) NOT NULL,
  `id_user` varchar(20) NOT NULL DEFAULT 'id_user',
  `judul` varchar(100) NOT NULL DEFAULT 'judul',
  `isi` text NOT NULL DEFAULT 'isi',
  `gambar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `id_user`, `judul`, `isi`, `gambar`) VALUES
('1', '1', 'Kementan dan Masyarakat', 'Kepala Badan Penyuluhan dan Pengembangan Sumber Daya Manusia Pertanian (BPPSDMP) Kementan Dedi Nursyamsi mengatakan, situasi tersebut harus dimanfaatkan untuk memproduksi pangan lokal baik secara on-farm maupun off-farm. \"Dengan situasi pandemi yang masih berlangsung ini, kita harus terus menggenjot produksi pangan lokal. Apalagi Indonesia kaya akan pangan lokal seperti sagu, singkong, jagung, ubi, dan lainnya,\" ujar Dedi, Rabu, (3/6).', 'img/article/article-image-1.jpg'),
('2', '2', 'Diversifikasi Pangan Perkuat Ketahanan Pangan Nasional', 'Kepala Humas dan Informasi Publik Kementan Kuntoro Boga Andri (ketiga kiri), Ketua Departemen Ilmu Ekonomi IPB Dr Sahara (ketiga kanan) dan perwakilan petani milenial Sandi Octa Susila (kedua kanan) menerima plakat penghargaan dari Forwatan atas kehadirannya sebagai pembicara dalam diskusi bertemakan Diversifikasi Pangan Kokohkan Ketahanan Pangan Nasional di Jakarta, Selasa (8/9)/Ist', 'img/article/article-image-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` varchar(10) NOT NULL,
  `id_user` varchar(20) NOT NULL DEFAULT 'id_user',
  `id_resep` varchar(10) NOT NULL,
  `waktu_komen` datetime NOT NULL,
  `komentar` text DEFAULT NULL,
  `gambar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `id_user`, `id_resep`, `waktu_komen`, `komentar`, `gambar`) VALUES
('1', '1', '1', '2020-11-28 08:51:14', 'wawaawkwkwkwkkw', 'img/default.jpg'),
('2', '1', '1', '2020-11-28 08:52:14', 'asfdgdfgdfdgdg', 'img/default.jpg');

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
(9, '2020-11-26-061634', 'App\\Database\\Migrations\\User', 'default', 'App', 1606469285, 1),
(10, '2020-11-26-073541', 'App\\Database\\Migrations\\Resep', 'default', 'App', 1606469288, 1),
(11, '2020-11-26-084222', 'App\\Database\\Migrations\\Komentar', 'default', 'App', 1606469291, 1),
(12, '2020-11-26-091849', 'App\\Database\\Migrations\\Artikel', 'default', 'App', 1606469294, 1);

-- --------------------------------------------------------

--
-- Table structure for table `resep`
--

CREATE TABLE `resep` (
  `id_resep` varchar(10) NOT NULL,
  `id_user` varchar(20) NOT NULL,
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
('1', '1', 'judul_resepnya', '1 Orang', '30 Menit', 'ini itu ini itu\r\nini itu ini itu\r\nini itu ini itu\r\nini itu ini itu\r\nini itu ini itu\r\nini itu ini itu', 'ini itu ini itu\r\nini itu ini itu\r\nini itu ini itu', 'img/default.jpg', NULL, NULL, NULL),
('2', '2', 'judul resepnya ini', '2 Orang', '35 Menit', 'ini itu ini itu\r\nini itu ini itu\r\nini itu ini itu\r\nini itu ini itu\r\nini itu ini itu\r\nini itu ini itu\r\nini itu ini itu\r\nini itu ini itu\r\nini itu ini itu\r\nini itu ini itu\r\nini itu ini itu\r\nini itu ini itu\r\nini itu ini itu\r\nini itu ini itu\r\nini itu ini itu\r\nini itu ini itu\r\nini itu ini itu\r\nini itu ini itu', 'ini itu ini itu\r\nini itu ini itu\r\nini itu ini itu\r\nini itu ini itu\r\nini itu ini itu\r\nini itu ini itu\r\nini itu ini itu\r\nini itu ini itu\r\nini itu ini itu', 'img/default.jpg', NULL, NULL, NULL),
('3', '2', 'judul_resepnya 3', '10 Orang', '300 Menit', 'ini itu ini itu\r\nini itu ini ituini itu ini ituini itu ini itu\r\nini itu ini ituini itu ini ituini itu ini itu\r\niniini itu ini ituini itu ini itu itu ini itu\r\nini itu ini ituini itu ini ituini itu ini itu\r\niniini itu ini itu itu ini itu', 'ini itu ini itu\r\nini itu ini itu\r\nini itu ini ituini itu ini itu\r\nini itu ini itu\r\nini itu ini ituini itu ini itu\r\nini itu ini itu\r\nini itu ini ituini itu ini itu\r\nini itu ini itu\r\nini itu ini ituini itu ini itu\r\nini itu ini itu\r\nini itu ini itu', 'img/default.jpg', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(20) NOT NULL,
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
('1', 'haris2703', 'Haris Prasetyo', 'haris_2703@apps.ipb.ac.id', '12345678', 'L', 'Cibinong Bogor', 'img/default.jpg', '', 'N', NULL, NULL),
('2', 'harispr2703', 'Haris Prasetyo', 'haris2703@gmail.com', '12345678', 'L', 'Cibinong Bogor', 'img/default.jpg', 'aaaa', 'N', NULL, NULL);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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

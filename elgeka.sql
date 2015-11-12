-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2015 at 11:17 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `elgeka`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `isi` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `artikel_tag`
--

CREATE TABLE IF NOT EXISTS `artikel_tag` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `artikel_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `asuransi`
--

CREATE TABLE IF NOT EXISTS `asuransi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_asuransi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `asuransi`
--

INSERT INTO `asuransi` (`id`, `nama_asuransi`, `created_at`, `updated_at`) VALUES
(4, 'Asuransi 1', '2015-10-29 01:00:01', '2015-10-29 01:00:01'),
(5, 'Asuransi 2', '2015-10-29 01:00:10', '2015-10-29 01:00:10'),
(6, 'Asuransi 3', '2015-10-29 01:00:34', '2015-10-29 01:00:34');

-- --------------------------------------------------------

--
-- Table structure for table `asuransi_history`
--

CREATE TABLE IF NOT EXISTS `asuransi_history` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `asuransi_id` int(11) NOT NULL,
  `tgl` datetime NOT NULL,
  `login` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE IF NOT EXISTS `dokter` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_dokter` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id`, `nama_dokter`, `created_at`, `updated_at`) VALUES
(1, 'Dokter 1', '2015-09-17 00:15:29', '2015-11-01 22:24:20'),
(2, 'Dokter 2', '2015-11-01 22:24:28', '2015-11-01 22:24:28'),
(3, 'Dokter 3', '2015-11-01 22:24:35', '2015-11-01 22:24:35'),
(4, 'Dokter 4', '2015-11-01 22:24:40', '2015-11-01 22:24:40');

-- --------------------------------------------------------

--
-- Table structure for table `dokter_history`
--

CREATE TABLE IF NOT EXISTS `dokter_history` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `dokter_id` int(11) NOT NULL,
  `tgl` datetime NOT NULL,
  `login` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `indikasi`
--

CREATE TABLE IF NOT EXISTS `indikasi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_indikasi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `indikasi`
--

INSERT INTO `indikasi` (`id`, `nama_indikasi`, `created_at`, `updated_at`) VALUES
(1, 'Pusing 7 keliling', '2015-09-17 00:35:04', '2015-09-17 00:35:21');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE IF NOT EXISTS `kecamatan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_kecamatan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `kotakab_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id`, `nama_kecamatan`, `created_at`, `updated_at`, `kotakab_id`) VALUES
(1, 'Kecamatan 1', '2015-10-29 01:05:11', '2015-10-29 01:05:11', 1),
(2, 'Kecamatan 2', '2015-10-29 01:05:20', '2015-10-29 01:05:20', 3),
(3, 'Kecamatan 3', '2015-10-29 01:05:31', '2015-10-29 01:05:31', 2),
(4, 'Kecamatan 4', '2015-10-29 01:05:47', '2015-10-29 01:05:47', 4),
(5, 'Kecamatan 5', '2015-10-29 01:06:01', '2015-10-29 01:06:01', 3);

-- --------------------------------------------------------

--
-- Table structure for table `kelurahan`
--

CREATE TABLE IF NOT EXISTS `kelurahan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_kelurahan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `kecamatan_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `kelurahan`
--

INSERT INTO `kelurahan` (`id`, `nama_kelurahan`, `created_at`, `updated_at`, `kecamatan_id`) VALUES
(1, 'Kelurahan 1', '2015-10-29 01:06:18', '2015-10-29 01:06:18', 1),
(2, 'Kelurahan 2', '2015-10-29 01:06:27', '2015-10-29 01:06:27', 3),
(3, 'Kelurahan 3', '2015-10-29 01:06:39', '2015-10-29 01:06:39', 5),
(4, 'Kelurahan 4', '2015-10-29 01:07:03', '2015-10-29 01:07:03', 4),
(5, 'Kelurahan 5', '2015-10-29 01:07:22', '2015-10-29 01:07:22', 2);

-- --------------------------------------------------------

--
-- Table structure for table `kotakab`
--

CREATE TABLE IF NOT EXISTS `kotakab` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_kotakab` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `provinsi_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `kotakab`
--

INSERT INTO `kotakab` (`id`, `nama_kotakab`, `created_at`, `updated_at`, `provinsi_id`) VALUES
(1, 'Kota 1', '2015-10-29 01:04:16', '2015-10-29 01:04:16', 1),
(2, 'Kota 2', '2015-10-29 01:04:24', '2015-10-29 01:04:24', 1),
(3, 'Kota 3', '2015-10-29 01:04:42', '2015-10-29 01:04:42', 2),
(4, 'Kota 4', '2015-10-29 01:04:51', '2015-10-29 01:04:51', 3);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_08_02_151429_genesis', 1),
('2015_09_03_142118_edit_kolom_jk', 1),
('2015_09_11_095634_edit_ttl', 2),
('2015_09_29_172522_damn_relasi', 3),
('2015_10_08_041504_relasi_artikel_creator', 4),
('2015_10_19_060522_revisi', 5),
('2015_10_20_064618_edit_penyakit', 6),
('2015_10_29_100124_edit_rs', 7),
('2015_11_06_054748_revisi2', 8),
('2015_11_09_065941_revisi_dokter', 9);

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE IF NOT EXISTS `obat` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_obat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id`, `nama_obat`, `jumlah`, `created_at`, `updated_at`) VALUES
(1, 'Obat 1', 1, '2015-09-16 01:18:52', '2015-11-02 01:53:15'),
(2, 'Obat 2', 412, '2015-09-16 01:19:02', '2015-11-02 01:53:21'),
(3, 'Obat 3', 1, '2015-11-02 01:53:38', '2015-11-02 01:53:38'),
(4, 'Obat 4', 2, '2015-11-02 01:53:43', '2015-11-02 01:53:43'),
(5, 'Obat 5', 6, '2015-11-02 01:53:52', '2015-11-02 01:53:52'),
(6, 'Obat 6', 2, '2015-11-05 20:57:10', '2015-11-05 20:57:10');

-- --------------------------------------------------------

--
-- Table structure for table `obat_history`
--

CREATE TABLE IF NOT EXISTS `obat_history` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `obat_id` int(11) NOT NULL,
  `tgl` datetime NOT NULL,
  `login` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `obat_user`
--

CREATE TABLE IF NOT EXISTS `obat_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `obat_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Dumping data for table `obat_user`
--

INSERT INTO `obat_user` (`id`, `obat_id`, `users_id`, `jumlah`, `created_at`, `updated_at`) VALUES
(1, 1, 6, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 2, 6, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 1, 10, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 2, 10, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 3, 10, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 4, 7, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 5, 7, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 3, 8, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 4, 8, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 5, 8, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 1, 9, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 3, 9, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 4, 9, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 5, 6, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 3, 6, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 2, 7, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE IF NOT EXISTS `penyakit` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_penyakit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id`, `nama_penyakit`, `created_at`, `updated_at`) VALUES
(2, 'Penyakit 1', '2015-10-19 23:49:49', '2015-10-19 23:49:49'),
(3, 'Penyakit 2', '2015-10-19 23:49:59', '2015-10-19 23:50:06'),
(4, 'Penyakit 3', '2015-10-19 23:50:15', '2015-10-19 23:50:15');

-- --------------------------------------------------------

--
-- Table structure for table `penyakit_history`
--

CREATE TABLE IF NOT EXISTS `penyakit_history` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `penyakit_id` int(11) NOT NULL,
  `tgl` datetime NOT NULL,
  `login` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `penyakit_history`
--

INSERT INTO `penyakit_history` (`id`, `users_id`, `penyakit_id`, `tgl`, `login`, `status`, `created_at`, `updated_at`) VALUES
(8, 6, 3, '2015-11-12 16:14:32', 0, 1, '2015-11-12 09:14:02', '2015-11-12 09:14:32'),
(9, 6, 4, '2015-11-12 16:15:13', 0, 1, '2015-11-12 09:14:45', '2015-11-12 09:15:13'),
(10, 11, 3, '2015-11-12 16:28:39', 0, 1, '2015-11-12 09:28:27', '2015-11-12 09:28:39');

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE IF NOT EXISTS `provinsi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_provinsi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id`, `nama_provinsi`, `created_at`, `updated_at`) VALUES
(1, 'Provinsi 1', '2015-10-29 01:03:34', '2015-10-29 01:03:34'),
(2, 'Provinsi 2', '2015-10-29 01:03:43', '2015-10-29 01:03:43'),
(3, 'Provinsi 3', '2015-10-29 01:03:48', '2015-10-29 01:03:48');

-- --------------------------------------------------------

--
-- Table structure for table `rs`
--

CREATE TABLE IF NOT EXISTS `rs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_rs` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `kelurahan_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `rs`
--

INSERT INTO `rs` (`id`, `nama_rs`, `created_at`, `updated_at`, `kelurahan_id`) VALUES
(1, 'Rumah Sakit 1', '2015-10-29 01:07:43', '2015-10-29 01:07:43', 1),
(2, 'Rumah Sakit 2', '2015-10-29 01:07:54', '2015-10-29 01:07:54', 2),
(3, 'Rumah Sakit 3', '2015-10-29 01:08:12', '2015-10-29 01:08:12', 3),
(4, 'Rumah Sakit 4', '2015-10-29 01:08:22', '2015-10-29 01:08:22', 4),
(5, 'Rumah Sakit 5', '2015-10-29 01:08:37', '2015-10-29 01:08:37', 5),
(6, 'Rumah Sakit 6', '2015-10-29 03:05:11', '2015-10-29 03:05:11', 3);

-- --------------------------------------------------------

--
-- Table structure for table `rs_history`
--

CREATE TABLE IF NOT EXISTS `rs_history` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `rs_id` int(11) NOT NULL,
  `tgl` datetime NOT NULL,
  `login` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE IF NOT EXISTS `tag` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jk` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama_pasien` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ttl_tl` datetime NOT NULL,
  `tgl_masuk` datetime NOT NULL,
  `status` smallint(6) NOT NULL,
  `alamat` text COLLATE utf8_unicode_ci NOT NULL,
  `telp_rumah` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hp1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hp2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ttl_t` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rs_id` int(11) NOT NULL,
  `asuransi_id` int(11) NOT NULL,
  `penyakit_id` int(11) NOT NULL,
  `kelurahan_id` int(11) NOT NULL,
  `dokter_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `jk`, `nama_pasien`, `ttl_tl`, `tgl_masuk`, `status`, `alamat`, `telp_rumah`, `hp1`, `hp2`, `role`, `remember_token`, `created_at`, `updated_at`, `ttl_t`, `rs_id`, `asuransi_id`, `penyakit_id`, `kelurahan_id`, `dokter_id`) VALUES
(6, 'pasien1', '$2y$10$nZFI2BkCYZC98wNWl3cC9.JEyRO0iz0yBBGe/Ox3JGAr3M6GQ6lA.', 'pasien1', 'l', 'Pasien 1', '1996-06-12 07:08:00', '0000-00-00 00:00:00', 1, 'Alamat Pasien 1', '234', '124', '56234', 'pasien', NULL, '2015-10-20 01:27:24', '2015-11-12 09:15:13', 'Tempat lahir Pasien 1', 3, 6, 2, 1, 0),
(7, 'pasien2', '$2y$10$W/.APeHqZ23KyDNeirwhuOyAJPi8qWDKDqrlg729/51EMZCb8Ipjy', 'Pasien 2', 'p', 'Pasien 2', '1995-05-11 07:52:03', '0000-00-00 00:00:00', 0, 'Pasien 2', '', '123', '123', 'pasien', NULL, '2015-11-02 00:52:03', '2015-11-12 08:38:14', 'Pasien 2', 1, 0, 2, 0, 0),
(8, 'pasien3', '$2y$10$4ObXNL1y6lHubvPcz8JixewNpyBPjznLCGJObMG02YyPCGn0FtFpi', 'Pasien 3', 'l', 'Pasien 3', '1999-05-12 07:53:28', '0000-00-00 00:00:00', 0, 'Pasien 2', '', '123', '', 'pasien', NULL, '2015-11-02 00:53:28', '2015-11-03 03:39:26', 'Pasien 2', 1, 6, 2, 0, 0),
(9, 'pasien4', '$2y$10$DG4d6jvIu5313TmJzXDcye.2ihZQDqU3JJoJy96iuhHKdXc8DiOeK', 'Pasien 4', 'l', 'Pasien 4', '1992-08-23 08:09:30', '0000-00-00 00:00:00', 0, 'Pasien 4', '', '123', '', 'pasien', NULL, '2015-11-02 01:09:30', '2015-11-03 03:39:04', 'Pasien 4', 5, 5, 4, 0, 0),
(10, 'pasien5', '$2y$10$QG.zm9Akq2xf83hmKW5HtuEVljt6JMGytbBoDyO5z.Ek/dWMuM.LO', 'Pasien 5', 'l', 'Pasien 5', '1998-11-12 08:20:01', '0000-00-00 00:00:00', 0, 'Pasien 5', '', '213', '', 'pasien', NULL, '2015-11-02 01:20:01', '2015-11-02 01:20:43', 'Pasien 5', 5, 0, 4, 0, 0),
(11, 'pasien6', '$2y$10$c9VTFuA/wGc/2zYbYUt.N.jZGhZccd3WiXkmYCSzRkh/O589vi5Rq', 'Pasien 6', 'p', 'Pasien 6', '1995-07-12 06:34:28', '0000-00-00 00:00:00', 0, 'Pasien 6', '', '', '', 'pasien', NULL, '2015-11-05 23:34:28', '2015-11-12 09:28:39', 'Pasien 6', 0, 0, 2, 5, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

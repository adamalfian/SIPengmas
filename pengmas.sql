-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08 Des 2018 pada 09.07
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengmas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `donasi`
--

CREATE TABLE `donasi` (
  `id_donasi` int(11) NOT NULL,
  `nama_donasi` varchar(50) DEFAULT NULL,
  `metode_donasi` varchar(15) DEFAULT NULL,
  `nominal_donasi` int(11) DEFAULT NULL,
  `tanggal_donasi` date DEFAULT NULL,
  `file_ext` varchar(30) DEFAULT NULL,
  `file_size` int(11) DEFAULT NULL,
  `location` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `donasi`
--

INSERT INTO `donasi` (`id_donasi`, `nama_donasi`, `metode_donasi`, `nominal_donasi`, `tanggal_donasi`, `file_ext`, `file_size`, `location`) VALUES
(1, 'sfdf', 'Transfer', 22323, '2018-09-19', 'jpg', 165589, '/admin/files/DESKTOP.jpg.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `id` int(100) NOT NULL,
  `ikut_kegiatan` varchar(25) DEFAULT NULL,
  `nama_peserta` varchar(50) DEFAULT NULL,
  `jk_peserta` char(1) DEFAULT NULL,
  `nohp_peserta` int(12) DEFAULT NULL,
  `alamat_peserta` varchar(99) DEFAULT NULL,
  `angkatan_peserta` int(5) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(50) NOT NULL DEFAULT 'tunda'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `id`, `ikut_kegiatan`, `nama_peserta`, `jk_peserta`, `nohp_peserta`, `alamat_peserta`, `angkatan_peserta`, `tanggal`, `status`) VALUES
(8, 3, 'Kambin', 'dsadasd', 'L', 9090909, 'jncsdjvnskdjvnkjn', 15, '0000-00-00 00:00:00', 'Disetujui'),
(12, 5, 'Kambin', 'bunda', 'P', 9090909, 'jember', 15, '2018-12-08 07:47:39', 'Disetujui'),
(13, 5, 'Dolly', 'hilmi', 'L', 3434343, 'totototo', 2017, '2018-12-12 17:00:00', 'Disetujui'),
(14, 3, 'Dolly', 'user', 'L', 3434343, 'totototo', 2015, '2018-12-05 17:00:00', 'Ditolak'),
(15, 49, 'Dolly', 'Azka Yasin', 'L', 5555, 'wowhowjow', 2017, '2018-12-08 07:56:04', 'tunda'),
(16, 49, 'Kambin', 'Azka Yasin', 'L', 5555, 'wowhowjow', 2017, '2018-12-08 07:57:34', 'tunda');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengmas`
--

CREATE TABLE `pengmas` (
  `id_pengmas` int(6) UNSIGNED NOT NULL,
  `nama_pengmas` varchar(30) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `Jam` time DEFAULT NULL,
  `tempat` varchar(100) NOT NULL,
  `deskripsi` varchar(500) DEFAULT NULL,
  `waktu_buat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `telepon` varchar(50) DEFAULT NULL,
  `jk` varchar(10) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `angkatan` varchar(100) DEFAULT NULL,
  `user_status` varchar(100) NOT NULL DEFAULT 'tunda',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `user_type`, `password`, `nama`, `telepon`, `jk`, `alamat`, `angkatan`, `user_status`, `created_at`) VALUES
(1, 'azka', 'azka@azka.com', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'Azka Yasin', '09090909090', 'L', 'yuyuyuyuyuy', '2015', 'konfirmed', '2018-12-03 10:15:18'),
(48, '5115100040', 'hehe@hehe.com', 'user', 'e10adc3949ba59abbe56e057f20f883e', 'user', '09090909090', 'L', 'yoyoi', '2018', 'konfirmed', '2018-12-08 14:22:45'),
(49, '5115100038', 'admin@manifest.com', 'user', 'e10adc3949ba59abbe56e057f20f883e', 'Azka Yasin', '5555', 'L', 'wowhowjow', '2017', 'konfirmed', '2018-12-08 14:23:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donasi`
--
ALTER TABLE `donasi`
  ADD PRIMARY KEY (`id_donasi`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `pengmas`
--
ALTER TABLE `pengmas`
  ADD PRIMARY KEY (`id_pengmas`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donasi`
--
ALTER TABLE `donasi`
  MODIFY `id_donasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pengmas`
--
ALTER TABLE `pengmas`
  MODIFY `id_pengmas` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

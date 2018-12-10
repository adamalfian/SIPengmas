-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10 Des 2018 pada 06.07
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
  `nohp_peserta` varchar(50) DEFAULT NULL,
  `alamat_peserta` varchar(99) DEFAULT NULL,
  `angkatan_peserta` int(5) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(50) NOT NULL DEFAULT 'tunda'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `id`, `ikut_kegiatan`, `nama_peserta`, `jk_peserta`, `nohp_peserta`, `alamat_peserta`, `angkatan_peserta`, `tanggal`, `status`) VALUES
(17, 53, 'Dolly', 'M Azka Yasin', 'L', '082229893288', 'Keputih gang 1b no. 26', 2015, '2018-12-10 04:37:45', 'Disetujui'),
(18, 53, 'Lapindo', 'M Azka Yasin', 'L', '082229893288', 'Keputih gang 1b no. 26', 2015, '2018-12-10 04:37:54', 'tunda'),
(19, 51, 'Kambin', 'Ichsan Sandi D', 'L', '085786869694', 'Keputih Tegal timur gg II no. 26', 2015, '2018-12-10 04:39:06', 'Ditolak'),
(20, 51, 'Lapindo', 'Ichsan Sandi D', 'L', '085786869694', 'Keputih Tegal timur gg II no. 26', 2015, '2018-12-10 04:38:28', 'tunda');

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

--
-- Dumping data untuk tabel `pengmas`
--

INSERT INTO `pengmas` (`id_pengmas`, `nama_pengmas`, `tanggal`, `Jam`, `tempat`, `deskripsi`, `waktu_buat`) VALUES
(1, 'Mengajar anak-anak di Gang Dol', '2018-12-12', '10:00:00', 'Dolly, Surabaya', 'Banyak sekali, anak-anak kecil lucu yang haus akan pengetahuan disini. yuk daftar dan segera berinteraksi terhadap mereka!', '2018-12-10 04:16:18'),
(2, 'Kampung Binaan FTIK', '2018-12-16', '08:00:00', 'Jojoran, Surabaya', 'Jadilah bagian dalam pencerdasan yang diinsiasi oleh FTIF. Kalo bukan sekarang ya kapan lagi !', '2018-12-10 04:17:23'),
(3, 'Korban Lumpur Lapindo', '2018-12-18', '09:00:00', 'Porong, Sidoarjo', 'Hidup mereka berubah selama-lamanya ketika lumpur panas menyerang rumah mereka.', '2018-12-10 04:18:11');

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
(51, '5115100167', 'ichsan@ichsan.com', 'user', 'e10adc3949ba59abbe56e057f20f883e', 'Ichsan Sandi D', '085786869694', 'L', 'Keputih Tegal timur gg II no. 26', '2015', 'konfirmed', '2018-12-10 11:26:00'),
(52, '5115100705', 'adam@adam.com', 'user', 'e10adc3949ba59abbe56e057f20f883e', 'Moh Adam ALfian', '085732889694', 'L', 'mulyosari gang 5 no.7 surabaya', '2015', 'tunda', '2018-12-10 11:26:53'),
(53, '5115100038', 'azkayasin2@gmail.com', 'user', 'e10adc3949ba59abbe56e057f20f883e', 'M Azka Yasin', '082229893288', 'L', 'Keputih gang 1b no. 25', '2015', 'konfirmed', '2018-12-10 11:28:20');

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
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pengmas`
--
ALTER TABLE `pengmas`
  MODIFY `id_pengmas` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

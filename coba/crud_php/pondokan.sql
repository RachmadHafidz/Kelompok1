-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22 Nov 2019 pada 16.53
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pondokan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_santri`
--

CREATE TABLE `data_santri` (
  `nis` char(6) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `status_pekerjaan` varchar(19) NOT NULL,
  `tempat_bekerja` varchar(50) NOT NULL,
  `no_kamar` varchar(2) NOT NULL,
  `nama_ortu` varchar(255) NOT NULL,
  `pekerjaan_ortu` varchar(255) NOT NULL,
  `alamat_rumah` varchar(255) NOT NULL,
  `no_telepon` varchar(13) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `mulai_menetap` date NOT NULL,
  `keluar_pondok` date NOT NULL,
  `status_hunian` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamar`
--

CREATE TABLE `kamar` (
  `no_kamar` varchar(2) NOT NULL,
  `slot` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `kode_pembayaran` varchar(9) NOT NULL,
  `nis` varchar(6) NOT NULL,
  `tanggal_pembayaran` date NOT NULL,
  `status_pembayaran` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_santri`
--
ALTER TABLE `data_santri`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`no_kamar`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`kode_pembayaran`),
  ADD UNIQUE KEY `nis` (`nis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

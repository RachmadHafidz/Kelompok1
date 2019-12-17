-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2019 at 03:29 AM
-- Server version: 10.1.25-MariaDB
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
-- Database: `db_desa3`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID_ADMIN` int(11) NOT NULL,
  `NIK_NIPADMIN` varchar(16) DEFAULT NULL,
  `NAMAADMIN` varchar(50) DEFAULT NULL,
  `JENIS_KELAMIN` varchar(9) DEFAULT NULL,
  `JABATAN` varchar(25) DEFAULT NULL,
  `TAHUN_JABATAN` date DEFAULT NULL,
  `BERAKHIR_JABATAN` date DEFAULT NULL,
  `LEVEL` varchar(20) DEFAULT NULL,
  `STATUSAKUN` varchar(12) DEFAULT NULL,
  `USERNAME` varchar(15) DEFAULT NULL,
  `PASSWORD` varchar(255) DEFAULT NULL,
  `FOTO` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `ID_ARTIKEL` int(11) NOT NULL,
  `ID_ADMIN` int(11) NOT NULL,
  `ID_KATEGORI` int(11) NOT NULL,
  `JUDUL_ARTIKEL` varchar(50) DEFAULT NULL,
  `ISI_ARTIKEL` text,
  `WAKTU_ARTIKEL` date DEFAULT NULL,
  `GAMBAR_ARTIKEL` varchar(30) DEFAULT NULL,
  `STATUS_ARTIKEL` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `ID_KATEGORI` int(11) NOT NULL,
  `KATEGORI` varchar(20) DEFAULT NULL,
  `DESK` text,
  `STATUS_KAT` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `keluarga`
--

CREATE TABLE `keluarga` (
  `NO_KK` varchar(16) NOT NULL,
  `ID_ADMIN` int(11) NOT NULL,
  `TGL_DIBUAT` date DEFAULT NULL,
  `KEPALA` varchar(50) DEFAULT NULL,
  `ALAMAT` varchar(20) DEFAULT NULL,
  `RT_RW` varchar(8) DEFAULT NULL,
  `DESA` varchar(7) DEFAULT NULL,
  `KEC` varchar(6) DEFAULT NULL,
  `KAB_KOTA` varchar(6) DEFAULT NULL,
  `KDPOS` varchar(5) DEFAULT NULL,
  `PROV` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `ID_CHAT` int(11) NOT NULL,
  `NAMA` varchar(20) DEFAULT NULL,
  `EMAIL` varchar(30) DEFAULT NULL,
  `PESAN` text,
  `WAKTU` datetime DEFAULT NULL,
  `STATUS_CHAT` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `NIK_PENDUDUK` varchar(16) NOT NULL,
  `ID_ADMIN` int(11) NOT NULL,
  `NO_KK` varchar(16) NOT NULL,
  `TGLDAFTAR` date DEFAULT NULL,
  `NAMAPEN` varchar(50) DEFAULT NULL,
  `TEMPATLHR` varchar(20) DEFAULT NULL,
  `TANGGALHR` date DEFAULT NULL,
  `JK_PEN` varchar(9) DEFAULT NULL,
  `AGAMAPEN` varchar(15) DEFAULT NULL,
  `STATUSPEN` varchar(20) DEFAULT NULL,
  `PEKERJAANPEN` varchar(30) DEFAULT NULL,
  `PENDIDIKANPEN` varchar(25) DEFAULT NULL,
  `KWNPEN` varchar(10) DEFAULT NULL,
  `STATUS_AKUN` varchar(12) DEFAULT NULL,
  `KET_HIDUP` varchar(10) DEFAULT NULL,
  `USERPEN` varchar(15) DEFAULT NULL,
  `PASSPEN` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sk_belumnikah`
--

CREATE TABLE `sk_belumnikah` (
  `NIK_PENDUDUK` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sk_domisili`
--

CREATE TABLE `sk_domisili` (
  `NO_DOMISILI` int(11) NOT NULL,
  `NIK_PENDUDUK` varchar(16) NOT NULL,
  `TGLSURATAJU` date DEFAULT NULL,
  `NAMAAJU` varchar(50) DEFAULT NULL,
  `JKAJU` varchar(9) DEFAULT NULL,
  `AGAMAAJU` varchar(20) DEFAULT NULL,
  `NIKPENGAJU` varchar(16) DEFAULT NULL,
  `TMPLHRAJU` varchar(20) DEFAULT NULL,
  `TGLHRAJU` date DEFAULT NULL,
  `PEKERJAAN_AJU` varchar(30) DEFAULT NULL,
  `ALAMATAJU` text,
  `TUJUANAJU` text,
  `KETERANGANAJU` varchar(15) DEFAULT NULL,
  `JENIS_SURATAJU` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sk_skck`
--

CREATE TABLE `sk_skck` (
  `NO_SKCK` int(11) NOT NULL,
  `NIK_PENDUDUK` varchar(16) NOT NULL,
  `TGLSURAT_AJU` date DEFAULT NULL,
  `NAMA_AJU` varchar(50) DEFAULT NULL,
  `NIK_AJU` varchar(16) DEFAULT NULL,
  `JK_AJU` varchar(9) DEFAULT NULL,
  `STATUS_AJU` varchar(20) DEFAULT NULL,
  `KWN_AJU` varchar(10) DEFAULT NULL,
  `TMPLHR_AJU` varchar(20) DEFAULT NULL,
  `TGLHR_AJU` date DEFAULT NULL,
  `AGAMA_AJU` varchar(15) DEFAULT NULL,
  `PEKERJAAN_AKU` varchar(30) DEFAULT NULL,
  `PENDIDIKAN_AJU` varchar(15) DEFAULT NULL,
  `ALAMAT_AJU` text,
  `TUJUAN_AJU` text,
  `KETERANGAN_AJU` varchar(15) DEFAULT NULL,
  `JENISURAT_AJU` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sk_tempatusaha`
--

CREATE TABLE `sk_tempatusaha` (
  `NIK_PENDUDUK` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_ADMIN`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`ID_ARTIKEL`),
  ADD KEY `FK_MEMILIKI2` (`ID_KATEGORI`),
  ADD KEY `FK_MENGUNGGAH` (`ID_ADMIN`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`ID_KATEGORI`);

--
-- Indexes for table `keluarga`
--
ALTER TABLE `keluarga`
  ADD PRIMARY KEY (`NO_KK`),
  ADD KEY `FK_MENAMBAHKAN2` (`ID_ADMIN`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`ID_CHAT`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`NIK_PENDUDUK`),
  ADD KEY `FK_MEMILIKI` (`NO_KK`),
  ADD KEY `FK_MENAMBAHKAN` (`ID_ADMIN`);

--
-- Indexes for table `sk_belumnikah`
--
ALTER TABLE `sk_belumnikah`
  ADD KEY `FK_MEMBUAT4` (`NIK_PENDUDUK`);

--
-- Indexes for table `sk_domisili`
--
ALTER TABLE `sk_domisili`
  ADD PRIMARY KEY (`NO_DOMISILI`),
  ADD KEY `FK_MEMBUAT1` (`NIK_PENDUDUK`);

--
-- Indexes for table `sk_skck`
--
ALTER TABLE `sk_skck`
  ADD PRIMARY KEY (`NO_SKCK`),
  ADD KEY `FK_MEMBUAT2` (`NIK_PENDUDUK`);

--
-- Indexes for table `sk_tempatusaha`
--
ALTER TABLE `sk_tempatusaha`
  ADD KEY `FK_MEMBUAT3` (`NIK_PENDUDUK`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `FK_MEMILIKI2` FOREIGN KEY (`ID_KATEGORI`) REFERENCES `kategori` (`ID_KATEGORI`),
  ADD CONSTRAINT `FK_MENGUNGGAH` FOREIGN KEY (`ID_ADMIN`) REFERENCES `admin` (`ID_ADMIN`);

--
-- Constraints for table `keluarga`
--
ALTER TABLE `keluarga`
  ADD CONSTRAINT `FK_MENAMBAHKAN2` FOREIGN KEY (`ID_ADMIN`) REFERENCES `admin` (`ID_ADMIN`);

--
-- Constraints for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD CONSTRAINT `FK_MEMILIKI` FOREIGN KEY (`NO_KK`) REFERENCES `keluarga` (`NO_KK`),
  ADD CONSTRAINT `FK_MENAMBAHKAN` FOREIGN KEY (`ID_ADMIN`) REFERENCES `admin` (`ID_ADMIN`);

--
-- Constraints for table `sk_belumnikah`
--
ALTER TABLE `sk_belumnikah`
  ADD CONSTRAINT `FK_MEMBUAT4` FOREIGN KEY (`NIK_PENDUDUK`) REFERENCES `penduduk` (`NIK_PENDUDUK`);

--
-- Constraints for table `sk_domisili`
--
ALTER TABLE `sk_domisili`
  ADD CONSTRAINT `FK_MEMBUAT1` FOREIGN KEY (`NIK_PENDUDUK`) REFERENCES `penduduk` (`NIK_PENDUDUK`);

--
-- Constraints for table `sk_skck`
--
ALTER TABLE `sk_skck`
  ADD CONSTRAINT `FK_MEMBUAT2` FOREIGN KEY (`NIK_PENDUDUK`) REFERENCES `penduduk` (`NIK_PENDUDUK`);

--
-- Constraints for table `sk_tempatusaha`
--
ALTER TABLE `sk_tempatusaha`
  ADD CONSTRAINT `FK_MEMBUAT3` FOREIGN KEY (`NIK_PENDUDUK`) REFERENCES `penduduk` (`NIK_PENDUDUK`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

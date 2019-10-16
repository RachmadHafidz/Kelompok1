-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2019 at 09:23 AM
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
-- Database: `db_desa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `NIKADMIN` varchar(20) DEFAULT NULL,
  `NAMAADMIN` char(100) DEFAULT NULL,
  `JENIS_KELAMIN` varchar(100) DEFAULT NULL,
  `USERNAME` varchar(50) DEFAULT NULL,
  `PASSWORD` varchar(255) DEFAULT NULL,
  `LEVEL` varchar(50) DEFAULT NULL,
  `FOTO` longblob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `NIKADMIN`, `NAMAADMIN`, `JENIS_KELAMIN`, `USERNAME`, `PASSWORD`, `LEVEL`, `FOTO`) VALUES
(1, '84262372213124', 'Arini Firdausiyah', 'Perempuan', 'rinrin', '48eafba9af6ae952c505845b5cfca3c3', 'Administrator', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `ID_ARTIKEL` int(11) NOT NULL,
  `ID_JENIS` int(11) DEFAULT NULL,
  `ID` int(11) NOT NULL,
  `JUDUL_ARTIKEL` text,
  `ISI_ARTIKEL` text,
  `WAKTU_ARTIKEL` date DEFAULT NULL,
  `GAMBAR_ARTIKEL` longblob,
  `STATUS_ARTIKEL` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dariwarga`
--

CREATE TABLE `dariwarga` (
  `ID_POST` int(11) NOT NULL,
  `NIK` varchar(20) NOT NULL,
  `JUDUL` text,
  `ISI` text,
  `WAKTU` datetime DEFAULT NULL,
  `GAMBAR` longblob,
  `STATUS_SUARA` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `domisili`
--

CREATE TABLE `domisili` (
  `NO_SURATDOM` int(11) NOT NULL,
  `NIK` varchar(20) NOT NULL,
  `TANGGAL_SURAT` date DEFAULT NULL,
  `NAMA_DOMISILI` varchar(100) DEFAULT NULL,
  `JENIS_KELAMIN` varchar(100) DEFAULT NULL,
  `TMP_LLHR` varchar(100) DEFAULT NULL,
  `THL_LHR` date DEFAULT NULL,
  `STATUS` varchar(50) DEFAULT NULL,
  `PEKERJAAN` varchar(100) DEFAULT NULL,
  `AGAMA` varchar(100) DEFAULT NULL,
  `NIK_PENGAJU` varchar(20) DEFAULT NULL,
  `ALAMAT` varchar(100) DEFAULT NULL,
  `TUJUAN` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `ID_JENIS` int(11) NOT NULL,
  `JENIS` varchar(100) DEFAULT NULL,
  `DESKRIPSI` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `KD_KATEGORI` varchar(20) NOT NULL,
  `KATEGORI` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kelahiran`
--

CREATE TABLE `kelahiran` (
  `NO_SURATLAHIR` varchar(100) NOT NULL,
  `NIK` varchar(20) NOT NULL,
  `TANGGAL_SURAT` date DEFAULT NULL,
  `NAMA_ANAK` varchar(100) DEFAULT NULL,
  `TMP_ANAK` varchar(100) DEFAULT NULL,
  `TGL_ANAK` date DEFAULT NULL,
  `JENIS_KELAMIN` varchar(100) DEFAULT NULL,
  `KEWARGANEGARAAN` varchar(100) DEFAULT NULL,
  `NIK_ANAK` varchar(20) DEFAULT NULL,
  `ALAMAT_ANAK` text,
  `AGAMA` varchar(100) DEFAULT NULL,
  `STATUS` varchar(50) DEFAULT NULL,
  `ANAK_KE` varchar(50) DEFAULT NULL,
  `NAMA_AYAH` varchar(100) DEFAULT NULL,
  `TMP_AYAH` varchar(100) DEFAULT NULL,
  `TGL_AYAH` date DEFAULT NULL,
  `ALAMAT_AYAH` text,
  `NAMA_IBU` varchar(100) DEFAULT NULL,
  `TMP_IBU` varchar(100) DEFAULT NULL,
  `TGL_IBU` date DEFAULT NULL,
  `ALAMAT_IBU` text,
  `TUJUAN` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `keluarga`
--

CREATE TABLE `keluarga` (
  `NO_KK` varchar(20) NOT NULL,
  `TANGGAL_BUAT` date DEFAULT NULL,
  `KEPALA_KELUARGA` varchar(100) DEFAULT NULL,
  `ALAMAT` varchar(100) DEFAULT NULL,
  `RT_RW` varchar(100) DEFAULT NULL,
  `DESA` varchar(100) DEFAULT NULL,
  `KECAMATAN` varchar(100) DEFAULT NULL,
  `KOTA_KAB` varchar(100) DEFAULT NULL,
  `KODE_POS` varchar(50) DEFAULT NULL,
  `PROVINSI` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `ID_CHAT` int(11) NOT NULL,
  `NAMA` varchar(100) DEFAULT NULL,
  `EMAIL` varchar(100) DEFAULT NULL,
  `PESAN` text,
  `WAKTU` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ktp`
--

CREATE TABLE `ktp` (
  `NO_SURATKTP` varchar(100) NOT NULL,
  `NIK` varchar(20) NOT NULL,
  `TANGGAL_SURAT` date DEFAULT NULL,
  `NOKTPLAMA` varchar(50) DEFAULT NULL,
  `NAMA_LAMA` varchar(100) DEFAULT NULL,
  `TMP_LHRLAMA` varchar(100) DEFAULT NULL,
  `TGL_LHRLAMA` date DEFAULT NULL,
  `STATUS_LAMA` varchar(50) DEFAULT NULL,
  `ALAMAT_LAMA` text,
  `NIK_PENGAJU` varchar(20) DEFAULT NULL,
  `NAMA_BARU` varchar(100) DEFAULT NULL,
  `TMP_LHRBARU` varchar(100) DEFAULT NULL,
  `TGL_LHRBARU` date DEFAULT NULL,
  `STATUS_BARU` varchar(100) DEFAULT NULL,
  `ALAMAT_BARU` text,
  `TUJUAN` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `NIK` varchar(20) NOT NULL,
  `NO_KK` varchar(20) NOT NULL,
  `KD_KATEGORI` varchar(20) DEFAULT NULL,
  `TANGGAL_DAFTAR` date DEFAULT NULL,
  `NAMAWARGA` varchar(100) DEFAULT NULL,
  `TMP_LHR` varchar(100) DEFAULT NULL,
  `TGL_LHR` date DEFAULT NULL,
  `JENIS_KELAMIN` varchar(100) DEFAULT NULL,
  `ALAMAT` varchar(100) DEFAULT NULL,
  `AGAMA` varchar(100) DEFAULT NULL,
  `STATUS` varchar(50) DEFAULT NULL,
  `PEKERJAAN` varchar(100) DEFAULT NULL,
  `KEWARGANEGARAAN` varchar(100) DEFAULT NULL,
  `USERNAME` varchar(50) DEFAULT NULL,
  `PASSWORD` varchar(20) DEFAULT NULL,
  `FOTO` longblob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `perijinan`
--

CREATE TABLE `perijinan` (
  `NO_SURATIJIN` varchar(100) NOT NULL,
  `NIK` varchar(20) NOT NULL,
  `TANGGAL_SURAT` date DEFAULT NULL,
  `NAMA_WALI` varchar(100) DEFAULT NULL,
  `TMP_LHR` varchar(100) DEFAULT NULL,
  `TGL_LHR` date DEFAULT NULL,
  `JENIS_KELAMIN` varchar(100) DEFAULT NULL,
  `ALAMAT` varchar(100) DEFAULT NULL,
  `NAMA_ANAK` varchar(100) DEFAULT NULL,
  `TMP_ANAK` varchar(100) DEFAULT NULL,
  `TGL_ANAK` date DEFAULT NULL,
  `KELAMIN` varchar(100) DEFAULT NULL,
  `ALAMAT_ANAK` text,
  `KEPERLUAN` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `skck`
--

CREATE TABLE `skck` (
  `NO_SURATSKCK` int(11) NOT NULL,
  `NIK` varchar(20) NOT NULL,
  `TANGGAL_SURAT` date DEFAULT NULL,
  `NAMA_LENGKAP` varchar(100) DEFAULT NULL,
  `JENIS_KELAMIN` varchar(100) DEFAULT NULL,
  `TMP_LAHIR` varchar(100) DEFAULT NULL,
  `TGL_LHR` date DEFAULT NULL,
  `NOKTP` varchar(100) DEFAULT NULL,
  `KEWARGANEGARAAN` varchar(100) DEFAULT NULL,
  `PEKERJAAN` varchar(100) DEFAULT NULL,
  `PENDIDIKAN` varchar(100) DEFAULT NULL,
  `ALAMAT` varchar(100) DEFAULT NULL,
  `TUJUAN` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`ID_ARTIKEL`),
  ADD KEY `FK_ARTIKEL_MENGELOMP_JENIS` (`ID_JENIS`),
  ADD KEY `FK_ARTIKEL_MENGUNGGA_ADMIN` (`ID`);

--
-- Indexes for table `dariwarga`
--
ALTER TABLE `dariwarga`
  ADD PRIMARY KEY (`ID_POST`),
  ADD KEY `FK_DARIWARG_MELAKUKAN_PENDUDUK` (`NIK`);

--
-- Indexes for table `domisili`
--
ALTER TABLE `domisili`
  ADD PRIMARY KEY (`NO_SURATDOM`),
  ADD KEY `FK_DOMISILI_MELAKUKAN_PENDUDUK` (`NIK`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`ID_JENIS`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`KD_KATEGORI`);

--
-- Indexes for table `kelahiran`
--
ALTER TABLE `kelahiran`
  ADD PRIMARY KEY (`NO_SURATLAHIR`),
  ADD KEY `FK_KELAHIRA_MELAKUKAN_PENDUDUK` (`NIK`);

--
-- Indexes for table `keluarga`
--
ALTER TABLE `keluarga`
  ADD PRIMARY KEY (`NO_KK`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`ID_CHAT`);

--
-- Indexes for table `ktp`
--
ALTER TABLE `ktp`
  ADD PRIMARY KEY (`NO_SURATKTP`),
  ADD UNIQUE KEY `NIK` (`NIK`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`NIK`),
  ADD UNIQUE KEY `NO_KK` (`NO_KK`),
  ADD UNIQUE KEY `KD_KATEGORI` (`KD_KATEGORI`);

--
-- Indexes for table `perijinan`
--
ALTER TABLE `perijinan`
  ADD PRIMARY KEY (`NO_SURATIJIN`),
  ADD UNIQUE KEY `NIK` (`NIK`);

--
-- Indexes for table `skck`
--
ALTER TABLE `skck`
  ADD PRIMARY KEY (`NO_SURATSKCK`),
  ADD UNIQUE KEY `NIK` (`NIK`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `FK_ARTIKEL_MENGELOMP_JENIS` FOREIGN KEY (`ID_JENIS`) REFERENCES `jenis` (`ID_JENIS`),
  ADD CONSTRAINT `FK_ARTIKEL_MENGUNGGA_ADMIN` FOREIGN KEY (`ID`) REFERENCES `admin` (`ID`);

--
-- Constraints for table `dariwarga`
--
ALTER TABLE `dariwarga`
  ADD CONSTRAINT `FK_DARIWARG_MELAKUKAN_PENDUDUK` FOREIGN KEY (`NIK`) REFERENCES `penduduk` (`NIK`);

--
-- Constraints for table `domisili`
--
ALTER TABLE `domisili`
  ADD CONSTRAINT `FK_DOMISILI_MELAKUKAN_PENDUDUK` FOREIGN KEY (`NIK`) REFERENCES `penduduk` (`NIK`);

--
-- Constraints for table `kelahiran`
--
ALTER TABLE `kelahiran`
  ADD CONSTRAINT `FK_KELAHIRA_MELAKUKAN_PENDUDUK` FOREIGN KEY (`NIK`) REFERENCES `penduduk` (`NIK`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2019 at 08:38 AM
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
  `ID_ADMIN` varchar(6) NOT NULL,
  `NIK_NIPADMIN` varchar(16) DEFAULT NULL,
  `NAMAADMIN` varchar(50) DEFAULT NULL,
  `JENIS_KELAMIN` varchar(9) DEFAULT NULL,
  `JABATAN` varchar(25) DEFAULT NULL,
  `TAHUN_JABATAN` date DEFAULT NULL,
  `BERAKHIR_JABATAN` date DEFAULT NULL,
  `LEVEL` varchar(20) DEFAULT NULL,
  `STATUS_AKUN` varchar(12) DEFAULT NULL,
  `NOTELP` varchar(13) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `USERNAME` varchar(15) DEFAULT NULL,
  `PASSWORD` varchar(255) DEFAULT NULL,
  `FOTO` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID_ADMIN`, `NIK_NIPADMIN`, `NAMAADMIN`, `JENIS_KELAMIN`, `JABATAN`, `TAHUN_JABATAN`, `BERAKHIR_JABATAN`, `LEVEL`, `STATUS_AKUN`, `NOTELP`, `EMAIL`, `USERNAME`, `PASSWORD`, `FOTO`) VALUES
('1', '2132', 'Arini Firdausiyah', 'Perempuan', '-', NULL, NULL, 'Super Admin', 'Aktif', '081335373470', 'arinifirdausiyah.af@gmail.com', 'rin', '48eafba9af6ae952c505845b5cfca3c3', NULL),
('AD0001', '2132', 'Arini Firdausiyah', 'Perempuan', '-', NULL, NULL, 'Super Admin', 'Aktif', '081335373470', 'arinifirdausiyah.af@gmail.com', 'rinrin', '48eafba9af6ae952c505845b5cfca3c3', NULL),
('AD0002', '3515646565', 'hafidz', 'Laki-Laki', 'sekretaris', '2019-12-01', '2024-12-01', 'Admin', 'Aktif', '0876564756', 'hafidz@gmail.com', 'hafidz', '29bca9f62e4af2306bcf9bc406ade0c4', '04122019101534Picture2.png'),
('AD0003', '3507655876', 'ryan', 'Laki-Laki', 'sekretaris', '2019-12-02', '2024-12-02', 'Perangkat Desa', 'Aktif', '4566476', 'ryan@gmail.com', 'ryan', '10c7ccc7a4f0aff03c915c485565b9da', '041220191016401.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `ID_ARTIKEL` varchar(5) NOT NULL,
  `ID_ADMIN` varchar(6) NOT NULL,
  `ID_KATEGORI` varchar(5) NOT NULL,
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
  `ID_KATEGORI` varchar(5) NOT NULL,
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
  `ID_ADMIN` varchar(6) NOT NULL,
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

--
-- Dumping data for table `keluarga`
--

INSERT INTO `keluarga` (`NO_KK`, `ID_ADMIN`, `TGL_DIBUAT`, `KEPALA`, `ALAMAT`, `RT_RW`, `DESA`, `KEC`, `KAB_KOTA`, `KDPOS`, `PROV`) VALUES
('3509122912160002', '1', '1019-06-20', 'Anang Supriyanto', 'Dusun Krajan', '002/013', 'Sabrang', 'Ambulu', 'Jember', '68172', 'Jawa Timur');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `ID_CHAT` varchar(5) NOT NULL,
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
  `ID_ADMIN` varchar(6) NOT NULL,
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
  `STATUSAKUN` varchar(12) DEFAULT NULL,
  `KET_HIDUP` varchar(10) DEFAULT NULL,
  `USERPEN` varchar(15) DEFAULT NULL,
  `PASSPEN` varchar(255) DEFAULT NULL,
  `NOTELPEN` varchar(13) NOT NULL,
  `EMAILPEN` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`NIK_PENDUDUK`, `ID_ADMIN`, `NO_KK`, `TGLDAFTAR`, `NAMAPEN`, `TEMPATLHR`, `TANGGALHR`, `JK_PEN`, `AGAMAPEN`, `STATUSPEN`, `PEKERJAANPEN`, `PENDIDIKANPEN`, `KWNPEN`, `STATUSAKUN`, `KET_HIDUP`, `USERPEN`, `PASSPEN`, `NOTELPEN`, `EMAILPEN`) VALUES
('1234', 'AD0001', '3509122912160002', '2019-12-05', 'rinrin', 'PROB', '0000-00-00', 'Laki-Laki', 'Islam', 'Kawin', '', '-', 'WNI', 'Aktif', 'Hidup', 'rinrin', '48eafba9af6ae952c505845b5cfca3c3', '090829', ''),
('12345', '1', '3509122912160002', '2019-12-03', 'Arini Firdausiyah', 'Probolinggo', '2019-12-01', 'Perempuan', 'Islam', 'Belum Kawin', 'Pelajar', 'Tidak/Belum Sekolah', 'WNI', 'Aktif', 'Hidup', 'arini', 'c4ca4238a0b923820dcc509a6f75849b', '081335373470', 'arinifirdausiyah.af@gmail.com'),
('81327783', '1', '3509122912160002', '2019-12-03', 'Hafidz', 'Jember', '2019-12-11', 'Laki-Laki', 'Islam', 'Belum Kawin', 'Pelajar', 'SLTA/Sederajat', 'WNI', 'Aktif', 'Hidup', 'hafidz', 'eb2e7a8d671bed3a767499b8d1b13169', '08238221213', 'hafidz@gmail.com');

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
  `NO_DOMISILI` varchar(7) NOT NULL,
  `NIK_PENDUDUK` varchar(16) NOT NULL,
  `TGLSURATAJU` date DEFAULT NULL,
  `TUJUANAJU` text,
  `KETERANGANAJU` varchar(15) DEFAULT NULL,
  `JENIS_SURATAJU` varchar(15) DEFAULT NULL,
  `ARSIP` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sk_domisili`
--

INSERT INTO `sk_domisili` (`NO_DOMISILI`, `NIK_PENDUDUK`, `TGLSURATAJU`, `TUJUANAJU`, `KETERANGANAJU`, `JENIS_SURATAJU`, `ARSIP`) VALUES
('SD00001', '1234', '0000-00-00', 'Registrasi RSU Jember', 'Sedang Proses', 'Surat Perwakila', 'arsip'),
('SD00002', '1234', '0000-00-00', 'Registrasi RSU Jember', 'Sedang Proses', 'Surat Perwakila', 'arsip'),
('SD00003', '1234', '0000-00-00', 'Registrasi RSU Jember', 'Sedang Proses', 'Surat Perwakila', 'arsip');

-- --------------------------------------------------------

--
-- Table structure for table `sk_skck`
--

CREATE TABLE `sk_skck` (
  `NO_SKCK` varchar(7) NOT NULL,
  `NIK_PENDUDUK` varchar(16) NOT NULL,
  `TGLSURAT_AJU` date DEFAULT NULL,
  `TUJUAN_AJU` text,
  `KETERANGAN_AJU` varchar(15) DEFAULT NULL,
  `JENISURAT_AJU` varchar(15) DEFAULT NULL,
  `ARSIP2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sk_skck`
--

INSERT INTO `sk_skck` (`NO_SKCK`, `NIK_PENDUDUK`, `TGLSURAT_AJU`, `TUJUAN_AJU`, `KETERANGAN_AJU`, `JENISURAT_AJU`, `ARSIP2`) VALUES
('SK00001', '12345', '2019-12-11', 'sesuatu', 'Sedang Proses', 'Surat Pribadi', '');

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
  ADD KEY `FK_MENGUNGGAH` (`ID_ADMIN`),
  ADD KEY `FK_MEMILIKI2` (`ID_KATEGORI`);

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

-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2019 at 02:39 PM
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
-- Database: `db_desa2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID_ADMIN` int(11) NOT NULL,
  `NIKADMIN` varchar(20) DEFAULT NULL,
  `NAMA_ADMIN` varchar(100) DEFAULT NULL,
  `JENIS_KELAMIN` varchar(50) DEFAULT NULL,
  `USERNAME` varchar(50) DEFAULT NULL,
  `PASSWORD` varchar(255) DEFAULT NULL,
  `LEVEL` varchar(50) DEFAULT NULL,
  `FOTO` mediumtext CHARACTER SET latin1 COLLATE latin1_bin
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `ID_ARTIKEL` int(11) NOT NULL,
  `ID_ADMIN` int(11) DEFAULT NULL,
  `JUDUL_ARTIKEL` varchar(100) DEFAULT NULL,
  `ISI_ARTIKEL` mediumtext,
  `WAKTU_ARTIKEL` date DEFAULT NULL,
  `GAMBAR_ARTIKEL` mediumtext CHARACTER SET latin1 COLLATE latin1_bin
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dariwarga`
--

CREATE TABLE `dariwarga` (
  `ID_SUARA` int(11) NOT NULL,
  `NIK_PENDUDUK` varchar(20) DEFAULT NULL,
  `JUDUL_SUARA` varchar(100) DEFAULT NULL,
  `ISI_SUARA` mediumtext,
  `WAKTU_SUARA` timestamp NULL DEFAULT NULL,
  `GAMBAR_SUARA` mediumtext CHARACTER SET latin1 COLLATE latin1_bin
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `KD_KATEGORI` int(11) NOT NULL,
  `ID_ARTIKEL` int(11) DEFAULT NULL,
  `ID_ADMIN` int(11) DEFAULT NULL,
  `JENIS` varchar(100) DEFAULT NULL,
  `DESKRIPSI` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `keluarga`
--

CREATE TABLE `keluarga` (
  `NO_KK` varchar(20) NOT NULL,
  `ID_ADMIN` int(11) DEFAULT NULL,
  `KEPALA_KELUARGA` varchar(100) DEFAULT NULL,
  `ALAMAT_KELURGA` varchar(100) DEFAULT NULL,
  `RRT_RW` varchar(100) DEFAULT NULL,
  `DESA` varchar(100) DEFAULT NULL,
  `KEC` varchar(100) DEFAULT NULL,
  `KAB_KOTA` varchar(100) DEFAULT NULL,
  `KODE_POS` varchar(100) DEFAULT NULL,
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
  `PESAN` mediumtext,
  `WAKTU` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `NIK_PENDUDUK` varchar(20) NOT NULL,
  `NO_KK` varchar(20) DEFAULT NULL,
  `ID_ADMIN` int(11) DEFAULT NULL,
  `NAMAPENDUDUK` varchar(100) DEFAULT NULL,
  `TMP_LAHIRPEN` varchar(100) DEFAULT NULL,
  `TGL_LAHIRPEN` date DEFAULT NULL,
  `JENIS_KELAMINPEN` varchar(50) DEFAULT NULL,
  `ALAMATPEN` mediumtext,
  `AGAMAPEN` varchar(50) DEFAULT NULL,
  `STATUSPEN` varchar(100) DEFAULT NULL,
  `PEKERJAANPEN` varchar(100) DEFAULT NULL,
  `KEWARGANEGARAANPEN` varchar(100) DEFAULT NULL,
  `FOTOPEN` mediumtext CHARACTER SET latin1 COLLATE latin1_bin,
  `PASS` varchar(255) DEFAULT NULL,
  `TGL_DAFTARPEN` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `perangkat_desa`
--

CREATE TABLE `perangkat_desa` (
  `ID_PERANGKAT` varchar(20) NOT NULL,
  `ID_ADMIN` int(11) DEFAULT NULL,
  `NAMA_PERANGKAT` varchar(100) DEFAULT NULL,
  `JENIS_KELAMIN` varchar(100) DEFAULT NULL,
  `ALAMAT_PD` mediumtext,
  `JABATAN` varchar(100) DEFAULT NULL,
  `TAHUN_JABATAN` date DEFAULT NULL,
  `BERAKHIR_JABATAN` date DEFAULT NULL,
  `PASSW` varchar(255) DEFAULT NULL,
  `FOTO_PERANGKAT` mediumtext CHARACTER SET latin1 COLLATE latin1_bin
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sp_domisili`
--

CREATE TABLE `sp_domisili` (
  `NO_SURATKK` int(11) NOT NULL,
  `NIK_PENDUDUK` varchar(20) DEFAULT NULL,
  `TANGGAL_SURAT` date DEFAULT NULL,
  `NAMA_PENGAJU` varchar(100) DEFAULT NULL,
  `JK_PENGAJU` varchar(100) DEFAULT NULL,
  `AGAMA_PENGAJU` varchar(100) DEFAULT NULL,
  `NIK_PENGAJU` varchar(100) DEFAULT NULL,
  `TMP_LAHIRPENGAJU` varchar(100) DEFAULT NULL,
  `TGL_LAHIRPENGAJU` date DEFAULT NULL,
  `PEKERJAANPENGAJU` varchar(100) DEFAULT NULL,
  `ALAMATPENGAJU` mediumtext,
  `TUJUAN` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sp_kelahiran`
--

CREATE TABLE `sp_kelahiran` (
  `NO_SURATLHR` int(11) NOT NULL,
  `NIK_PENDUDUK` varchar(20) DEFAULT NULL,
  `TANGGAL_SURAT` date DEFAULT NULL,
  `NAMA_ANAK` varchar(100) DEFAULT NULL,
  `TMP_LAHIRANAK` varchar(100) DEFAULT NULL,
  `TGL_LAHIRANAK` date DEFAULT NULL,
  `JK_ANAK` varchar(100) DEFAULT NULL,
  `ALAMAT_ANAK` mediumtext,
  `AGAMA_ANAK` varchar(100) DEFAULT NULL,
  `STATUS_ANAK` varchar(100) DEFAULT NULL,
  `NOKTP_NIK_ANAK` varchar(20) DEFAULT NULL,
  `KENEGARAAN_ANAK` varchar(100) DEFAULT NULL,
  `ANAK_KE` varchar(50) DEFAULT NULL,
  `NAMA_AYAH` mediumtext,
  `TMP_AYAH` varchar(100) DEFAULT NULL,
  `TGL_AYAH` date DEFAULT NULL,
  `ALAMAT_AYAH` mediumtext,
  `NAMA_IBU` varchar(100) DEFAULT NULL,
  `TMP_IBU` varchar(100) DEFAULT NULL,
  `TGL_IBU` date DEFAULT NULL,
  `ALAMAT_IBU` mediumtext,
  `TUJUAN` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sp_ktp`
--

CREATE TABLE `sp_ktp` (
  `NO_SURATKTP` int(11) NOT NULL,
  `NIK_PENDUDUK` varchar(20) DEFAULT NULL,
  `TANGGAL_SURAT` date DEFAULT NULL,
  `NO_KTPLAMA` varchar(20) DEFAULT NULL,
  `NAMA_LAMA` varchar(50) DEFAULT NULL,
  `TMP_LHRLAMA` varchar(50) DEFAULT NULL,
  `TGL_LHRLAMA` date DEFAULT NULL,
  `STATUS_LAMA` varchar(50) DEFAULT NULL,
  `ALAMAT_LAMA` varchar(250) DEFAULT NULL,
  `NIK_PENGAJU` varchar(20) DEFAULT NULL,
  `NAMA_BARU` varchar(100) DEFAULT NULL,
  `TMP_LHRBARU` varchar(250) DEFAULT NULL,
  `TGL_LHRBARU` date DEFAULT NULL,
  `STATUS_BARU` varchar(100) DEFAULT NULL,
  `ALAMAT_BARU` mediumtext,
  `TUJUAN` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sp_perijinan`
--

CREATE TABLE `sp_perijinan` (
  `NO_SURATIJIN` int(11) NOT NULL,
  `NIK_PENDUDUK` varchar(20) DEFAULT NULL,
  `TANGGAL_SURAT` date DEFAULT NULL,
  `NAMA_WALI` varchar(100) DEFAULT NULL,
  `TMP_LAHIRWALI` varchar(100) DEFAULT NULL,
  `TGL_LAHIRWALI` date DEFAULT NULL,
  `JENIS_KELAMINWALI` varchar(100) DEFAULT NULL,
  `ALAMATWALI` mediumtext,
  `NAMA_ANAK` varchar(100) DEFAULT NULL,
  `TMP_ANAK` varchar(100) DEFAULT NULL,
  `TGL_ANAK` date DEFAULT NULL,
  `KELAMINANAK` varchar(100) DEFAULT NULL,
  `ALAMAT_ANAK` mediumtext,
  `TUJUAN` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sp_skck`
--

CREATE TABLE `sp_skck` (
  `NO_SURATSKCK` int(11) NOT NULL,
  `NIK_PENDUDUK` varchar(20) DEFAULT NULL,
  `TANGGAL_SURAT` date DEFAULT NULL,
  `NIK_PEENGAJU` varchar(100) DEFAULT NULL,
  `NAMA_PENGAJU` varchar(50) DEFAULT NULL,
  `JENIS_KELAMINPENGAJU` varchar(50) DEFAULT NULL,
  `STATUSPENGAJU` varchar(100) DEFAULT NULL,
  `KEWARGANEGARAANPENGAJU` varchar(250) DEFAULT NULL,
  `TMP_LAHIRPENGAJU` varchar(50) DEFAULT NULL,
  `TGL_LAHIRPENGAJU` date DEFAULT NULL,
  `AGAMAPENGAJU` varchar(100) DEFAULT NULL,
  `PEKERJAANPENGAJU` varchar(100) DEFAULT NULL,
  `ALAMATPENGAJU` varchar(250) DEFAULT NULL,
  `PENDIDIKANPENGAJU` varchar(100) DEFAULT NULL,
  `TUJUANPENGAHU` mediumtext
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
  ADD KEY `FK_ARTIKEL_MENAMBAH__ADMIN` (`ID_ADMIN`);

--
-- Indexes for table `dariwarga`
--
ALTER TABLE `dariwarga`
  ADD PRIMARY KEY (`ID_SUARA`),
  ADD KEY `FK_DARIWARG_MEMBUAT_5_PENDUDUK` (`NIK_PENDUDUK`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`KD_KATEGORI`),
  ADD KEY `FK_KATEGORI_MENAMBAH__ADMIN` (`ID_ADMIN`),
  ADD KEY `FK_KATEGORI_MENGELOMP_ARTIKEL` (`ID_ARTIKEL`);

--
-- Indexes for table `keluarga`
--
ALTER TABLE `keluarga`
  ADD PRIMARY KEY (`NO_KK`),
  ADD KEY `FK_KELUARGA_MENAMBAH__ADMIN` (`ID_ADMIN`);

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
  ADD KEY `FK_PENDUDUK_MEMILIKI_KELUARGA` (`NO_KK`),
  ADD KEY `FK_PENDUDUK_MENAMBAH__ADMIN` (`ID_ADMIN`);

--
-- Indexes for table `perangkat_desa`
--
ALTER TABLE `perangkat_desa`
  ADD PRIMARY KEY (`ID_PERANGKAT`),
  ADD KEY `FK_PERANGKA_MENAMBAH__ADMIN` (`ID_ADMIN`);

--
-- Indexes for table `sp_domisili`
--
ALTER TABLE `sp_domisili`
  ADD PRIMARY KEY (`NO_SURATKK`),
  ADD KEY `FK_SP_DOMIS_MEMBUAT_4_PENDUDUK` (`NIK_PENDUDUK`);

--
-- Indexes for table `sp_kelahiran`
--
ALTER TABLE `sp_kelahiran`
  ADD PRIMARY KEY (`NO_SURATLHR`),
  ADD KEY `FK_SP_KELAH_MEMBUAT_3_PENDUDUK` (`NIK_PENDUDUK`);

--
-- Indexes for table `sp_ktp`
--
ALTER TABLE `sp_ktp`
  ADD PRIMARY KEY (`NO_SURATKTP`),
  ADD KEY `FK_SP_KTP_MEMBUAT_2_PENDUDUK` (`NIK_PENDUDUK`);

--
-- Indexes for table `sp_perijinan`
--
ALTER TABLE `sp_perijinan`
  ADD PRIMARY KEY (`NO_SURATIJIN`),
  ADD KEY `FK_SP_PERIJ_MEMBUAT_1_PENDUDUK` (`NIK_PENDUDUK`);

--
-- Indexes for table `sp_skck`
--
ALTER TABLE `sp_skck`
  ADD PRIMARY KEY (`NO_SURATSKCK`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `FK_ARTIKEL_MENAMBAH__ADMIN` FOREIGN KEY (`ID_ADMIN`) REFERENCES `admin` (`ID_ADMIN`);

--
-- Constraints for table `dariwarga`
--
ALTER TABLE `dariwarga`
  ADD CONSTRAINT `FK_DARIWARG_MEMBUAT_5_PENDUDUK` FOREIGN KEY (`NIK_PENDUDUK`) REFERENCES `penduduk` (`NIK_PENDUDUK`);

--
-- Constraints for table `kategori`
--
ALTER TABLE `kategori`
  ADD CONSTRAINT `FK_KATEGORI_MENAMBAH__ADMIN` FOREIGN KEY (`ID_ADMIN`) REFERENCES `admin` (`ID_ADMIN`),
  ADD CONSTRAINT `FK_KATEGORI_MENGELOMP_ARTIKEL` FOREIGN KEY (`ID_ARTIKEL`) REFERENCES `artikel` (`ID_ARTIKEL`);

--
-- Constraints for table `keluarga`
--
ALTER TABLE `keluarga`
  ADD CONSTRAINT `FK_KELUARGA_MENAMBAH__ADMIN` FOREIGN KEY (`ID_ADMIN`) REFERENCES `admin` (`ID_ADMIN`);

--
-- Constraints for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD CONSTRAINT `FK_PENDUDUK_MEMILIKI_KELUARGA` FOREIGN KEY (`NO_KK`) REFERENCES `keluarga` (`NO_KK`),
  ADD CONSTRAINT `FK_PENDUDUK_MENAMBAH__ADMIN` FOREIGN KEY (`ID_ADMIN`) REFERENCES `admin` (`ID_ADMIN`);

--
-- Constraints for table `perangkat_desa`
--
ALTER TABLE `perangkat_desa`
  ADD CONSTRAINT `FK_PERANGKA_MENAMBAH__ADMIN` FOREIGN KEY (`ID_ADMIN`) REFERENCES `admin` (`ID_ADMIN`);

--
-- Constraints for table `sp_domisili`
--
ALTER TABLE `sp_domisili`
  ADD CONSTRAINT `FK_SP_DOMIS_MEMBUAT_4_PENDUDUK` FOREIGN KEY (`NIK_PENDUDUK`) REFERENCES `penduduk` (`NIK_PENDUDUK`);

--
-- Constraints for table `sp_kelahiran`
--
ALTER TABLE `sp_kelahiran`
  ADD CONSTRAINT `FK_SP_KELAH_MEMBUAT_3_PENDUDUK` FOREIGN KEY (`NIK_PENDUDUK`) REFERENCES `penduduk` (`NIK_PENDUDUK`);

--
-- Constraints for table `sp_ktp`
--
ALTER TABLE `sp_ktp`
  ADD CONSTRAINT `FK_SP_KTP_MEMBUAT_2_PENDUDUK` FOREIGN KEY (`NIK_PENDUDUK`) REFERENCES `penduduk` (`NIK_PENDUDUK`);

--
-- Constraints for table `sp_perijinan`
--
ALTER TABLE `sp_perijinan`
  ADD CONSTRAINT `FK_SP_PERIJ_MEMBUAT_1_PENDUDUK` FOREIGN KEY (`NIK_PENDUDUK`) REFERENCES `penduduk` (`NIK_PENDUDUK`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

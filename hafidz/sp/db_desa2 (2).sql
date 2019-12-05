-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2019 at 02:43 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

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
  `NAMAADMIN` varchar(100) DEFAULT NULL,
  `JENIS_KELAMIN` varchar(50) DEFAULT NULL,
  `USERNAME` varchar(50) DEFAULT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `LEVEL` varchar(50) DEFAULT NULL,
  `FOTO` mediumtext CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `STATUS_AKUN` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID_ADMIN`, `NIKADMIN`, `NAMAADMIN`, `JENIS_KELAMIN`, `USERNAME`, `PASSWORD`, `LEVEL`, `FOTO`, `STATUS_AKUN`) VALUES
(1, '', 'Arini Firdausiyah', 'Perempuan', 'rin', '48eafba9af6ae952c505845b5cfca3c3', 'Administrator', '', 'Aktif'),
(2, '', 'Arini', 'Perempuan', 'arini', '32d871f40492ea15c187ce6bed5cdecc', 'Administrator', '', 'Aktif');

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
  `TGL_DIBUAT` date NOT NULL,
  `KEPALA_KELUARGA` varchar(100) DEFAULT NULL,
  `ALAMAT_KELURGA` varchar(100) DEFAULT NULL,
  `RRT_RW` varchar(100) DEFAULT NULL,
  `DESA` varchar(100) DEFAULT NULL,
  `KEC` varchar(100) DEFAULT NULL,
  `KAB_KOTA` varchar(100) DEFAULT NULL,
  `KODE_POS` varchar(100) DEFAULT NULL,
  `PROVINSI` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keluarga`
--

INSERT INTO `keluarga` (`NO_KK`, `ID_ADMIN`, `TGL_DIBUAT`, `KEPALA_KELUARGA`, `ALAMAT_KELURGA`, `RRT_RW`, `DESA`, `KEC`, `KAB_KOTA`, `KODE_POS`, `PROVINSI`) VALUES
('3509120102120014', 1, '0000-00-00', 'Hartono', 'Dusun Krajan', '001/017', 'Sabrang', 'Ambulu', 'Jember', '68172', 'Jawa Timur'),
('3509120309058295', 1, '0000-00-00', 'Suwono', 'Dusun Krajan', '003/009', 'Sabrang', 'Ambulu', 'Jember', '68172', 'Jawa Timur'),
('3509120401110146', 2, '0000-00-00', 'Edy Suryanto', 'Dusun Krajan', '002/015', 'Sabrang', 'Ambulu', 'Jember', '68172', 'Jawa Timur'),
('3509122001110059', 2, '0000-00-00', 'Muhamad Sholikhin', 'Dusun Krajan', '003/017', 'Sabrang', 'Ambulu', 'Jember', '68172', 'Jawa Timur'),
('35091220309054349', 1, '0000-00-00', 'Purnomo', 'Dusun Tegalrejo', '002/022', 'Sabrang', 'Ambulu', 'Jember', '68172', 'Jawa Timur'),
('3509122203190003', 2, '0000-00-00', 'Deni Andriyawan', 'Dusun Krajan', '001/013', 'Sabrang', 'Ambulu', 'Jember', '68172', 'Jawa Timur'),
('350912291210003', 1, '0000-00-00', 'Anang Supriyanto', 'Dusun Krajan', '002/013', 'Sabrang', 'Ambulu', 'Jember', '68172', 'Jawa Timur'),
('3509123105120004', 1, '0000-00-00', 'Muhammad Asmo', 'Dusun Krajan', '002/012', 'Sabrang', 'Ambulu', 'Jember', '68172', 'Jawa Timur'),
('350965239731207', 2, '2019-11-12', 'Rinrin', 'Dusun Kebon', '002/03', 'Sabrang', 'Ambulu', 'Jember', '68172', 'Jawa Timur'),
('3509687990', 1, '2019-11-12', 'Arini FirM', 'jauh', '012/03', 'Sabrang', 'Ambulu', 'Jember', '68172', 'Jawa Timur'),
('350968799023432', 1, '0000-00-00', 'Arini', 'Dusun Taman', '012/03', 'Sabrang', 'Ambulu', 'Jember', '68172', 'Jawa Timur');

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
  `PENDIDIKANPEN` varchar(100) NOT NULL,
  `PEKERJAANPEN` varchar(100) DEFAULT NULL,
  `KEWARGANEGARAANPEN` varchar(100) DEFAULT NULL,
  `FOTOPEN` mediumtext CHARACTER SET latin1 COLLATE latin1_bin,
  `PASS` varchar(255) DEFAULT NULL,
  `TGL_DAFTARPEN` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`NIK_PENDUDUK`, `NO_KK`, `ID_ADMIN`, `NAMAPENDUDUK`, `TMP_LAHIRPEN`, `TGL_LAHIRPEN`, `JENIS_KELAMINPEN`, `ALAMATPEN`, `AGAMAPEN`, `STATUSPEN`, `PENDIDIKANPEN`, `PEKERJAANPEN`, `KEWARGANEGARAANPEN`, `FOTOPEN`, `PASS`, `TGL_DAFTARPEN`) VALUES
('3509120801130006', '3509120102120014', 4, 'Wiby Zuna Al Akbar', 'Jember', '1983-08-25', 'Perempuan', 'Dusun Krajan', 'Islam', 'Kawin', 'SLTP/Sederajat', 'Wiraswasta', 'WNI', NULL, 'suciani', '2019-11-12'),
('3509120907870005', '3509122203190003', 4, 'Anang Supriyanto', 'Jember', '1987-07-09', 'Laki-Laki', 'Dusun Krajan', 'Islam', 'Kawin Tercatat', 'SLTP/Sederajat', 'Wiraswasta', 'WNI', NULL, '2326af735beba37279d41c7f0ab62e73', '2019-11-11'),
('3509122410830004', '3509120102120014', 4, 'Hartono', 'Jember', '1983-10-24', 'Laki-Laki', 'Dusun Krajan', 'Islam', 'Kawin', 'Tamat SD/Sederajat', 'Wiraswasta', 'WNI', NULL, 'hartono', '2019-11-12'),
('3509124103990002', '3509122203190003', 4, 'Nur Mega Ayu', 'Jember', '1999-03-17', 'Perempuan', 'Dusun Krajan', 'Islam', 'Kawin Tercatat', 'SLTP/Sederajat', 'Mengurus Rumah Tangga', 'WNI', NULL, 'ec03dafd5692357115a9c16bcb138026', '2019-11-11'),
('3509125510160002', '3509122203190003', 4, 'Clarisa Dita Putri Oktavia', 'Jember', '2016-10-15', 'Perempuan', 'Dusun Krajan', 'Islam', 'Belum Kawin', 'Tidak/Belum Sekolah', 'Tidak/Belum Bekerja', 'WNI', NULL, 'clarisa', '2019-11-11'),
('3509126506930009', '3509120102120014', 4, 'Suciani', 'Jember', '1983-08-25', 'Perempuan', 'Dusun Krajan', 'Islam', 'Kawin', 'SLTP/Sederajat', 'Wiraswasta', 'WNI', NULL, 'suciani', '2019-11-12');

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
  `NO_SURATDOM` varchar(11) NOT NULL,
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

--
-- Dumping data for table `sp_domisili`
--

INSERT INTO `sp_domisili` (`NO_SURATDOM`, `NIK_PENDUDUK`, `TANGGAL_SURAT`, `NAMA_PENGAJU`, `JK_PENGAJU`, `AGAMA_PENGAJU`, `NIK_PENGAJU`, `TMP_LAHIRPENGAJU`, `TGL_LAHIRPENGAJU`, `PEKERJAANPENGAJU`, `ALAMATPENGAJU`, `TUJUAN`) VALUES
('1', '3509125510160002', '2019-11-11', 'Siti Khomsatun', 'Perempuan', 'Islam', '3509125301950004', 'Jember', '1995-01-13', 'Wiraswasta', 'Dusun Kebonsari, RT/RW 002/004, Desa Sabrang, Kecamatan Ambulu, Kabupaten Jember', 'untuk melengkapi persyaratan; SPM di RSUD BALUNG'),
('11ee', '3509126506930009', '2019-11-12', '', '', '', '', NULL, NULL, NULL, NULL, 'Untuk melengkapi persyaratan; SPM Klinik Jember'),
('12ee', '3509125510160002', '2019-11-11', 'Budi Hermawan', 'Laki-Laki', 'Islam', '3509126675550004', 'Jember', '1999-01-01', 'Petani', 'Desa Krajan, RT/RW 012/002, Desa Sabrang, Kecamatan Ambuli, Kabupaten Jember', 'untuk melengkapi persyaratan; SPM di RSUD Jember'),
('13ee', '3509125510160002', '2019-11-11', 'Kartono', 'Laki-Laki', 'Islam', '3509128821910003', 'Jember', '1995-02-02', 'Wiraswasta', 'Dusun Tegalrejo, RT/RW 003/012, Desa Sabrang, Kecamatan Ambulu, Kabupaten Jember', 'untuk melengkapi persyaratan; SPM di RSUD Bali'),
('14ee', '3509124103990002', '2019-11-12', '', '', '', '', NULL, NULL, NULL, NULL, 'Untuk melengkapi persyaratan; SPM RS Malang');

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
  ADD KEY `FK_PNDUDUK_MENAMBAH_ADMIN` (`ID_ADMIN`);

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
  ADD PRIMARY KEY (`NO_SURATDOM`),
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
-- Constraints for table `dariwarga`
--
ALTER TABLE `dariwarga`
  ADD CONSTRAINT `FK_DARIWARG_MEMBUAT_5_PENDUDUK` FOREIGN KEY (`NIK_PENDUDUK`) REFERENCES `penduduk` (`NIK_PENDUDUK`);

--
-- Constraints for table `kategori`
--
ALTER TABLE `kategori`
  ADD CONSTRAINT `FK_KATEGORI_MENGELOMP_ARTIKEL` FOREIGN KEY (`ID_ARTIKEL`) REFERENCES `artikel` (`ID_ARTIKEL`);

--
-- Constraints for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD CONSTRAINT `FK_PENDUDUK_MEMILIKI_KELUARGA` FOREIGN KEY (`NO_KK`) REFERENCES `keluarga` (`NO_KK`);

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

-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2019 at 11:33 AM
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
-- Database: `ddesa`
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

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID_ADMIN`, `NIKADMIN`, `NAMA_ADMIN`, `JENIS_KELAMIN`, `USERNAME`, `PASSWORD`, `LEVEL`, `FOTO`) VALUES
(1, '3509191304990001', 'Rachmad Hafidz Adhiwiyoto', 'Laki laki', 'Hafidz', 'admin', 'admin', NULL),
(2, 'a', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'b', 'A', 'P', NULL, NULL, NULL, NULL);

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

--
-- Dumping data for table `keluarga`
--

INSERT INTO `keluarga` (`NO_KK`, `ID_ADMIN`, `KEPALA_KELUARGA`, `ALAMAT_KELURGA`, `RRT_RW`, `DESA`, `KEC`, `KAB_KOTA`, `KODE_POS`, `PROVINSI`) VALUES
('3509120102120014', 1, 'Hartono', 'Dusun Krajan', '001/017', 'Sabrang', 'Ambulu', 'Jember', '68172', 'Jawa timur'),
('3509120309054349', 1, 'Purnomo', 'Dusun Tegalrejo', '002/022', 'Sabrang', 'Ambulu', 'Jember', '86172', 'Jawa Timur'),
('3509120309058295', 1, 'Suwono', 'Dusun Krajan', '003/009', 'Sabrang', 'Ambulu', 'Jember', '68172', 'Jawa Timur'),
('3509120401110146', 1, 'Edy Suryanto', 'Dusun Krajan', '002/015', 'Sabrang', 'Ambulu', 'Jember', '68172', 'Jawa Timur'),
('3509120409055971', 1, 'Sudarmajid', 'Dusun Kebonsari', '001/002', 'Sabrang', 'Ambulu', 'Jember', '68172', 'Jawa Timur'),
('3509121011100020', 1, 'Purwanto', 'Dusun Tegalrejo', '003/005', 'Sabrang', 'Ambulu', 'Jember', '68172', 'Jawa Timur'),
('3509122203190003', 1, 'Deni Andriawan', 'Dusun Krajan', '001/013', 'Sabrang', 'Ambulu', 'Jember', '68172', 'Jawa Timur'),
('3509122912160003', 1, 'Anang Suprianto', 'Dusun Krajan', '002/013', 'Sabrang', 'Ambulu', 'Jember', '68172', 'Jawa Timur'),
('3509123105120004', 1, 'Muhammad Asmu', 'Dusun Krajan', '002/012', 'Sabrang', 'Ambulu', 'Jember', '68172', 'Jawa Timur');

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
  `TGL_DAFTARPEN` date DEFAULT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`NIK_PENDUDUK`, `NO_KK`, `ID_ADMIN`, `NAMAPENDUDUK`, `TMP_LAHIRPEN`, `TGL_LAHIRPEN`, `JENIS_KELAMINPEN`, `ALAMATPEN`, `AGAMAPEN`, `STATUSPEN`, `PEKERJAANPEN`, `KEWARGANEGARAANPEN`, `FOTOPEN`, `PASS`, `TGL_DAFTARPEN`, `level`) VALUES
('3509120801130003', '3509120102120014', 1, 'Wiby Zuna Al Akbar', 'Jember', '2013-01-08', 'Laki laki', 'Dusun Krajan', 'Islam', 'Tdk/Belum Sekolah', 'Belum/Tidak Bekerja', 'WNI', NULL, 'Wiby', '2019-11-04', 'warga'),
('3509120904970001', '3509120409055971', 1, 'Dedi Rahmad Alfan', 'Jember', '1997-04-09', 'Laki laki', 'Dusun Kebonsari', 'Islam', 'Tidak/Belum Sekolah', 'Pelajar/Mahasiswa', 'WNI', NULL, 'Dedi', '2019-11-04', 'warga'),
('350912151121100004', '3509120309054349', 1, 'Aditya Putra Wijaya', 'Jember', '2011-12-15', 'Laki laki', 'Dusun Tegalrejo', 'Islam', 'Tdk/Belum sekolah', 'Tdk/Belum Bekerja', 'WNI', NULL, 'Aditya', '2019-11-04', 'warga'),
('3509124204990001', '3509120309054349', 1, 'Andhika Putri Wijayanti', 'Jember', '1998-04-02', 'Perempuan', 'Dusun Tegalrejo', 'Islam', 'SLTA', 'Pelajar/Mahasiswa', 'WNI', NULL, 'Andhika', '2019-11-04', 'warga'),
('3509125007780002', '3509120309054349', 1, 'Kunanti', 'Jember', '1978-07-10', 'Perempuan', 'Dusun Tegalrejo', 'Islam', 'Nikah', 'Petani/Pekebun', 'WNI', NULL, 'Kunanti', '2019-11-04', 'warga'),
('3509125110090001', '3509121011100020', 1, 'Adinda Verlyta Udrisma Widyanata', 'Jember', '2009-10-01', 'Perempuan', 'Dusun Krajan', 'Islam', 'Tidak/Belum Sekolah', 'TIdak/Belum Bekerja', 'WNI', NULL, 'Adinda', '2019-11-04', 'warga'),
('3509125208600004', '3509120409055971', 1, 'Mut Daiyah', 'Jember', '1960-08-12', 'Perempuan', 'Dusun Kebonsari', 'Islam', 'Tamat SD', 'Mengurus Rumah Tangga', 'WNI', NULL, 'Daiyah', '2019-11-04', 'warga'),
('3509125406890002', '3509121011100020', 1, 'Nuris Nurmaikah', 'Jember', '1989-06-04', 'Perempuan', 'Dusun Tegalrejo', 'Islam', '', 'Petani/pekebun', 'WNI', NULL, 'Nuris', '2019-11-04', 'warga'),
('3509126506930009', '3509120102120014', 1, 'Sugani', 'Jember', '1993-05-25', 'Perempuan', 'Dusun Krajan', 'Islam', 'SLTP', 'Wiraswata', 'WNI', NULL, 'Sugani', '2019-11-04', 'warga');

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

--
-- Dumping data for table `perangkat_desa`
--

INSERT INTO `perangkat_desa` (`ID_PERANGKAT`, `ID_ADMIN`, `NAMA_PERANGKAT`, `JENIS_KELAMIN`, `ALAMAT_PD`, `JABATAN`, `TAHUN_JABATAN`, `BERAKHIR_JABATAN`, `PASSW`, `FOTO_PERANGKAT`) VALUES
('Pd001', 1, 'Rachmad Hafidz Adhiwiyoto', 'Laki laki', 'Bumi Mangli Permai BA-06', 'Wakil Kepala Desa', '2014-09-10', '2019-09-10', 'Hafidz', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sp_domisili`
--

CREATE TABLE `sp_domisili` (
  `NO_SURATKK` varchar(100) NOT NULL,
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

INSERT INTO `sp_domisili` (`NO_SURATKK`, `NIK_PENDUDUK`, `TANGGAL_SURAT`, `NAMA_PENGAJU`, `JK_PENGAJU`, `AGAMA_PENGAJU`, `NIK_PENGAJU`, `TMP_LAHIRPENGAJU`, `TGL_LAHIRPENGAJU`, `PEKERJAANPENGAJU`, `ALAMATPENGAJU`, `TUJUAN`) VALUES
('3509120102120014', '3509120801130003', '2019-11-05', 'wiby zuna al akbar', 'laki-laki', 'islam', '3509120801130003', 'jember', '2013-01-08', 'tidak bekerja', 'dsn krajan', 'membuat sp domisili');

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

--
-- Dumping data for table `sp_kelahiran`
--

INSERT INTO `sp_kelahiran` (`NO_SURATLHR`, `NIK_PENDUDUK`, `TANGGAL_SURAT`, `NAMA_ANAK`, `TMP_LAHIRANAK`, `TGL_LAHIRANAK`, `JK_ANAK`, `ALAMAT_ANAK`, `AGAMA_ANAK`, `STATUS_ANAK`, `NOKTP_NIK_ANAK`, `KENEGARAAN_ANAK`, `ANAK_KE`, `NAMA_AYAH`, `TMP_AYAH`, `TGL_AYAH`, `ALAMAT_AYAH`, `NAMA_IBU`, `TMP_IBU`, `TGL_IBU`, `ALAMAT_IBU`, `TUJUAN`) VALUES
(470, '3509120904970001', '2019-11-05', 'Dedi rahmad alfan', 'jember', '1997-04-09', 'laki-laki', 'dsn kebonsari', 'islam', 'tidak sekolah', '3509120904970001', 'WNI', '1', 'sudarmajid', 'jember', '1950-07-19', 'dsn kebonsari', 'mut dayyah', 'jember', '1960-08-12', 'dsn kebonsari', 'membuat sp kelahiran');

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

--
-- Dumping data for table `sp_ktp`
--

INSERT INTO `sp_ktp` (`NO_SURATKTP`, `NIK_PENDUDUK`, `TANGGAL_SURAT`, `NO_KTPLAMA`, `NAMA_LAMA`, `TMP_LHRLAMA`, `TGL_LHRLAMA`, `STATUS_LAMA`, `ALAMAT_LAMA`, `NIK_PENGAJU`, `NAMA_BARU`, `TMP_LHRBARU`, `TGL_LHRBARU`, `STATUS_BARU`, `ALAMAT_BARU`, `TUJUAN`) VALUES
(474, '3509125406890002', '2019-11-05', '3509125406890002', 'nuris nur', 'jember', '1989-06-14', 'sltp', 'dsn tegalrejo', '3509125406890002', 'nuris nurmaikah', 'jember', '1989-06-14', 'sltp', 'dsn tegalrejo', 'membuat sp ktp');

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

--
-- Dumping data for table `sp_perijinan`
--

INSERT INTO `sp_perijinan` (`NO_SURATIJIN`, `NIK_PENDUDUK`, `TANGGAL_SURAT`, `NAMA_WALI`, `TMP_LAHIRWALI`, `TGL_LAHIRWALI`, `JENIS_KELAMINWALI`, `ALAMATWALI`, `NAMA_ANAK`, `TMP_ANAK`, `TGL_ANAK`, `KELAMINANAK`, `ALAMAT_ANAK`, `TUJUAN`) VALUES
(474, '3509125406890002', '2019-11-05', 'nuris nurmaikah', 'jember', '1989-06-14', 'perempuan', 'dsn tegalrejo', 'adinda verlyta udrisma widyanata', 'jember', '2009-10-11', 'perempuan', 'dsn tegalrejo', 'membuat sp perijinan');

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

-- --------------------------------------------------------

--
-- Table structure for table `warga`
--

CREATE TABLE `warga` (
  `NIK` varchar(50) NOT NULL,
  `NO_KK` varchar(50) NOT NULL,
  `NAMA` varchar(200) NOT NULL,
  `JENIS_KELAMIN` varchar(20) NOT NULL,
  `TMP_LHR` varchar(20) NOT NULL,
  `TGL_LHR` date NOT NULL,
  `AGAMA` varchar(20) NOT NULL,
  `PENDIDIKAN` varchar(20) NOT NULL,
  `PEKERJAAN` varchar(100) NOT NULL,
  `ALAMAT` varchar(1000) NOT NULL,
  `RWRT` varchar(50) NOT NULL,
  `DESA` varchar(50) NOT NULL,
  `KECAMATAN` varchar(50) NOT NULL,
  `KAB_KOTA` varchar(100) NOT NULL,
  `KODE_POS` varchar(15) NOT NULL,
  `PROVINSI` varchar(50) NOT NULL,
  `KEWARGANEGARAAN` varchar(10) NOT NULL,
  `USERNAME` varchar(100) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL,
  `TGL_DAFTAR` date NOT NULL,
  `LEVEL` varchar(50) NOT NULL,
  `FOTO` mediumtext NOT NULL,
  `STATUS` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warga`
--

INSERT INTO `warga` (`NIK`, `NO_KK`, `NAMA`, `JENIS_KELAMIN`, `TMP_LHR`, `TGL_LHR`, `AGAMA`, `PENDIDIKAN`, `PEKERJAAN`, `ALAMAT`, `RWRT`, `DESA`, `KECAMATAN`, `KAB_KOTA`, `KODE_POS`, `PROVINSI`, `KEWARGANEGARAAN`, `USERNAME`, `PASSWORD`, `TGL_DAFTAR`, `LEVEL`, `FOTO`, `STATUS`) VALUES
('', '', '', 'perempuan', '', '0000-00-00', '', 'kasd', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', 'admin', '19112019034404IMG-20190329-WA0009.jpg', 'aktif'),
('123456', '123456', 'rian', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', 'rian', 'rian', '0000-00-00', 'admin', '', ''),
('3509120107830369', '3509121011100020', 'Purwanto', 'Laki-laki', 'Jember', '2019-11-05', 'islam', 'Tamat SD', 'PETANI', 'Dusun Tegalrejo', '003/005', 'SABRANG', 'Ambulu', 'Jember', '68172', 'Jawa Timur', 'WNI', 'Purnomo', 'purnomo', '2019-11-06', 'warga', '', ''),
('3509120412710002', '3509120309054349', 'Purnomo', 'Laki-laki', 'Jember', '1971-12-04', 'islam', 'Tamat SD', 'PETANI', 'Dusun Tegalrejo', '002/022', 'SABRANG', 'Ambulu', 'Jember', '68172', 'Jawa Timur', 'WNI', 'Purnomo', 'purnomo', '2019-11-06', 'warga', '', ''),
('3509120904970001', '3509120409055971', 'Dedi Rahmad Alfan', 'Laki-laki', 'Jember', '1997-04-09', 'islam', 'Belum Sekolah', 'Belum Bekerja', 'Dusun Kebonsari', '001/002', 'SABRANG', 'Ambulu', 'Jember', '68172', 'Jawa Timur', 'WNI', 'Dedi', 'dedi', '2019-11-06', 'warga', '', ''),
('3509120907870005', '3509122912160003', 'Anang Supriyanto', 'Laki-laki', 'Jember', '1987-07-09', 'islam', 'SLTP', 'WIRASWASTA', 'Dusun Krajan', '002/013', 'SABRANG', 'Ambulu', 'Jember', '68172', 'Jawa Timur', 'WNI', 'Anang', 'anang', '2019-11-06', 'warga', '', ''),
('3509121004100003', '3509123105120004', 'Muhammad Irfan Asrori', 'Laki-laki', 'Jember', '2010-04-10', 'islam', 'Belum Sekoah', 'Belum Bekerja', 'Dusun Krajan', '002/012', 'SABRANG', 'Ambulu', 'Jember', '68172', 'Jawa Timur', 'WNI', 'Irfan', 'irfan', '2019-11-06', 'warga', '', ''),
('3509121108650003', '35091221001110059', 'Muhammad Sholikhin', 'Laki-laki', 'Jember', '1966-08-11', 'islam', 'SLTP', 'PETANI', 'Dusun Krajan', '003/017', 'SABRANG', 'Ambulu', 'Jember', '68172', 'Jawa Timur', 'WNI', 'Sholikhin', 'sholikhin', '2019-11-06', 'warga', '', ''),
('3509121512110004', '3509120309054349', 'Aditiya Putra Wijayanti', 'Laki-laki', 'Jember', '2011-12-15', 'islam', 'Belum Sekolah', 'Belum Bekerja', 'Dusun Tegalrejo', '002/022', 'SABRANG', 'Ambulu', 'Jember', '68172', 'Jawa Timur', 'WNI', 'Aditiya', 'aditiya', '2019-11-06', 'warga', '', ''),
('3509121907500001', '3509120409055971', 'Sudarmajid', 'Laki-laki', 'Jember', '1950-07-19', 'islam', 'Tamat SD', 'PETANI', 'Dusun Kebonsari', '001/002', 'SABRANG', 'Ambulu', 'Jember', '68172', 'Jawa Timur', 'WNI', 'Sudarmajid', 'sudarmajid', '2019-11-06', 'warga', '', ''),
('3509122710720005', '3509123105120004', 'Muhammad Asmo', 'Laki-laki', 'Jember', '1972-10-27', 'islam', 'Tamat SD', 'WIRASWASTA', 'Dusun Krajan', '002/012', 'SABRANG', 'Ambulu', 'Jember', '68172', 'Jawa Timur', 'WNI', 'Muhammad', 'muhammad', '2019-11-06', 'warga', '', ''),
('3509123107980004', '35091221001110059', 'Moh. Ali Zaenal Abidin', 'Laki-laki', 'Jember', '1998-07-30', 'islam', 'Tamat SD', 'Pelajar/Mahasiswa', 'Dusun Krajan', '003/017', 'SABRANG', 'Ambulu', 'Jember', '68172', 'Jawa Timur', 'WNI', 'Zaenal', 'zaenal', '2019-11-06', 'warga', '', ''),
('350912340689002', '3509121011100020', 'Nuris Nurmaikah', 'Perempuan', 'Jember', '1989-06-04', 'islam', 'SLTP', 'PETANI', 'Dusun Tegalrejo', '003/005', 'SABRANG', 'Ambulu', 'Jember', '68172', 'Jawa Timur', 'WNI', 'Nuris', 'nuris', '2019-11-06', 'warga', '', ''),
('3509124103990002', '3509122912160003', 'Nur Mega Ayu', 'Perempuan', 'Jember', '1999-03-17', 'islam', 'SLTP', 'MENGURUS RUMAH TANGGA', 'Dusun Krajan', '002/013', 'SABRANG', 'Ambulu', 'Jember', '68172', 'Jawa Timur', 'WNI', 'Mega', 'Mega', '2019-11-06', 'warga', '', ''),
('3509124104760004', '35091221001110059', 'Wardatul Fadilah', 'Perempuan', 'Jember', '1976-04-01', 'islam', 'SLTP', 'MENGURUS RUMAH TANGGA', 'Dusun Krajan', '003/017', 'SABRANG', 'Ambulu', 'Jember', '68172', 'Jawa Timur', 'WNI', 'Wardatul', 'wardatul', '2019-11-06', 'warga', '', ''),
('3509124112660006', '35091221001110059', 'Husbanatun', 'Laki-laki', 'Jember', '1966-12-01', 'islam', 'Tamat SD', 'Belum Bekerja', 'Dusun Krajan', '003/017', 'SABRANG', 'Ambulu', 'Jember', '68172', 'Jawa Timur', 'WNI', 'Husbanatun', 'husbanatun', '2019-11-06', 'warga', '', ''),
('3509124204990001', '3509120309054349', 'Andika Putri Wijayanti', 'Perempuan', 'Jember', '1998-04-02', 'islam', 'SLTA', 'Pelajar/Mahasiswa', 'Dusun Tegalrejo', '002/022', 'SABRANG', 'Ambulu', 'Jember', '68172', 'Jawa Timur', 'WNI', 'Andika', 'andika', '2019-11-06', 'warga', '', ''),
('3509125007780002', '3509120309054349', 'Kunanti', 'Perempuan', 'Jember', '1978-07-10', 'islam', 'Tamat SD', 'PETANI', 'Dusun Tegalrejo', '002/022', 'SABRANG', 'Ambulu', 'Jember', '68172', 'Jawa Timur', 'WNI', 'Kunanti', 'kunanti', '2019-11-06', 'warga', '', ''),
('3509125110090001', '3509121011100020', 'Adinda Verlyta Udrisma Widyanata', 'Perempuan', 'Jember', '2009-10-11', 'islam', 'Belum Sekolah', 'Belum Bekerja', 'Dusun Tegalrejo', '003/005', 'SABRANG', 'Ambulu', 'Jember', '68172', 'Jawa Timur', 'WNI', 'Adinda', 'adinda', '2019-11-06', 'warga', '', ''),
('350912520860004', '3509120409055971', 'Mut Daiyah', 'Perempuan', 'Jember', '1960-08-12', 'islam', 'Tamat SD', 'MENGURUS RUMAH TANGGA', 'Dusun Kebonsari', '001/002', 'SABRANG', 'Ambulu', 'Jember', '68172', 'Jawa Timur', 'WNI', 'Mutdaiyah', 'mutdaiyah', '2019-11-06', 'warga', '', ''),
('3509125404000005', '35091221001110059', 'Lailatul Maghfiroh', 'Perempuan', 'Jember', '2000-04-14', 'islam', 'Belum Tamat SD', 'Pelajar/Mahasiswa', 'Dusun Krajan', '003/017', 'SABRANG', 'Ambulu', 'Jember', '68172', 'Jawa Timur', 'WNI', 'Lailatul', 'lailatul', '2019-11-06', 'warga', '', ''),
('3509125404000006', '35091221001110059', 'Laili Zakiyah', 'Perempuan', 'Jember', '2000-04-14', 'islam', 'Belum Tamat SD', 'Pelajar/Mahasiswa', 'Dusun Krajan', '003/017', 'SABRANG', 'Ambulu', 'Jember', '68172', 'Jawa Timur', 'WNI', 'Laili', 'laili', '2019-11-06', 'warga', '', ''),
('3509125510160002', '3509122912160003', 'Clarisa Dita Putri Oktavia', 'Perempuan', 'Jember', '2016-10-15', 'islam', 'Belum Sekolah', 'Belum Bekerja', 'Dusun Krajan', '002/013', 'SABRANG', 'Ambulu', 'Jember', '68172', 'Jawa Timur', 'WNI', 'Dita', 'dita', '2019-11-06', 'warga', '', ''),
('3509125801820003', '3509123105120004', 'Enik Nur Yatun', 'Perempuan', 'Jember', '1982-01-18', 'islam', 'Tamat SD', 'MENGURUS RUMAH TANGGA', 'Dusun Krajan', '002/012', 'SABRANG', 'Ambulu', 'Jember', '68172', 'Jawa Timur', 'WNI', 'Enik', 'enik', '2019-11-06', 'warga', '', '');

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
  ADD PRIMARY KEY (`NO_SURATSKCK`),
  ADD KEY `FK_SP_SKCK_MEMBUAT_6_PENDUDUK` (`NIK_PENDUDUK`) USING BTREE;

--
-- Indexes for table `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`NIK`);

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

--
-- Constraints for table `sp_skck`
--
ALTER TABLE `sp_skck`
  ADD CONSTRAINT `sp_skck_ibfk_1` FOREIGN KEY (`NIK_PENDUDUK`) REFERENCES `penduduk` (`NIK_PENDUDUK`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

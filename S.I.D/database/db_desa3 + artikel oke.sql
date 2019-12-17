-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2019 at 04:43 PM
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
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `isi`, `foto`, `tanggal`) VALUES
(11, 'Kemajuan Desa', '<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p><span style=\"font-size:48px\">Desa Sabrang adalah <span style=\"color:#1abc9c\">heheheh </span><span style=\"background-color:#3498db\">hahaha hiihihi</span></span></p>\r\n\r\n<p style=\"text-align:right\"><span style=\"font-size:48px\"><span style=\"background-color:#3498db\">asdsaduashduhsduha</span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n', '11122019031812WhatsApp Image 2019-04-07 at 02.06.00.jpg', '0000-00-00'),
(12, 'artikel2', '<p>uwew</p>\r\n', '11122019031835IMG_20180921_200219.jpg', '0000-00-00'),
(13, 'rian', '<p>wdadas</p>\r\n', '11122019035145IMG-20190328-WA0012.jpg', '0000-00-00'),
(19, 'tes', '<p>dsa</p>\r\n', '11122019040825IMG-20190328-WA0012.jpg', '2019-12-11'),
(20, 'ghgh', '<p>Pernah berfikir bahwa setiap sukses seorang tidak lepas dari &quot;Karena,&quot; berjuang bersama mereka.</p>\r\n\r\n<p>Ketika sukses dalam gengaman maka &nbsp;mereka harus ada dalam kesuksesan itu. Keberanian mahasiswa komunikasi penyiaran Islam dalam beragumen dan berpendapat dalam kepentingan bersama tidak diragukan lagi, sudah sepatutnya diberi apresiasi.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Mereka berkomitmen, menjadikan tangung jawab yang harus dipikul bersama, mereka jadikan kampus sebagai rumah kumpul, dan teman dari ibu berbeda ia jadikan sebagai saudara.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Mahasiswa komunikasi penyiaran islam est17 Teungku Dirundeng Alpen, &nbsp;telah memberi begitu banyak kenangan. Sehingga otak tidak sangub jika harus menyimpannya lagi dan pun ketakutan yang luar biasa justruh bila kelak kenangan bersama akan tergelam bersama kematian. Hal inilah yang memungkinkan saya untuk menulis. Agar kenangan itu tetap ada dan terjaga.</p>\r\n\r\n<p>Perjalanan ini terasa masih panjang, dan banyak doa mereka panjatkan untuk kebaikan bersama, diselah kenikmatan yang dinikmati dengan syukur melihat alam ciptaan maha kuasa dan mereka juga tak lupa akan kewajiban 4 rakaat kala Dzuhur itu datang.</p>\r\n\r\n<p>Lalu bagaimana bisa orang menilai mereka remaja yang jahat?<br />\r\nSedangkan mereka adalah remaja bergelar muda yang taat dan bermanfaat.</p>\r\n\r\n<p>Jangan uji keberanian Mahasiswa Komunikasi Penyiaran Islam est17, dalam setiap gerak selalu mengkokohkan berisan tanpa sedikitpun mereka longgar.</p>\r\n\r\n<p><br />\r\nBegitulah mereka dan beruntungnya saya adalah bagian dari mereka, dan mereka adalah bagian dari saya.</p>\r\n', '11122019041551IMG-20190401-WA0011.jpg', '2019-12-11');

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
  `id` int(11) NOT NULL,
  `artikel` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `artikel`, `nama`, `isi`) VALUES
(7, 11, 'Ade Zenudin ', 'ini artkel macam apa '),
(8, 11, 'ya', 'gas');

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
  `NO_BNIKAH` varchar(7) NOT NULL,
  `NIK_PENDUDUK` varchar(16) NOT NULL,
  `TGLSURATBN` date NOT NULL,
  `BERLAKUBN` date NOT NULL,
  `NAMABN` varchar(50) NOT NULL,
  `NIKBN` varchar(16) NOT NULL,
  `JKBN` varchar(10) NOT NULL,
  `TMPLHRBN` varchar(25) NOT NULL,
  `TGLHRBN` date NOT NULL,
  `AGAMABN` varchar(15) NOT NULL,
  `PEKERJAANBN` varchar(25) NOT NULL,
  `KWNBN` varchar(15) NOT NULL,
  `ALAMATBN` text NOT NULL,
  `TUJUANBN` text NOT NULL,
  `KETERANGANBN` varchar(15) NOT NULL,
  `JSBN` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sk_domisili`
--

CREATE TABLE `sk_domisili` (
  `NO_DOMISILI` varchar(7) NOT NULL,
  `NIK_PENDUDUK` varchar(16) NOT NULL,
  `TGLSURATAJU` date DEFAULT NULL,
  `BERLAKU` date NOT NULL,
  `NAMAAJU` varchar(50) NOT NULL,
  `JKAJU` varchar(10) NOT NULL,
  `AGAMAAJU` varchar(15) NOT NULL,
  `NIKAJU` varchar(16) NOT NULL,
  `TMPLHRAJU` varchar(20) NOT NULL,
  `TGLHRAJU` date NOT NULL,
  `STATUSAJU` varchar(15) NOT NULL,
  `PEKERJAANAJU` varchar(25) NOT NULL,
  `KWNAJU` varchar(20) NOT NULL,
  `ALAMATAJU` text NOT NULL,
  `TUJUANAJU` text,
  `KETERANGANAJU` varchar(15) DEFAULT NULL,
  `JENIS_SURATAJU` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sk_domisili`
--

INSERT INTO `sk_domisili` (`NO_DOMISILI`, `NIK_PENDUDUK`, `TGLSURATAJU`, `BERLAKU`, `NAMAAJU`, `JKAJU`, `AGAMAAJU`, `NIKAJU`, `TMPLHRAJU`, `TGLHRAJU`, `STATUSAJU`, `PEKERJAANAJU`, `KWNAJU`, `ALAMATAJU`, `TUJUANAJU`, `KETERANGANAJU`, `JENIS_SURATAJU`) VALUES
('SD00001', '1234', '2019-12-16', '2019-12-23', 'gfhgf', 'Laki-Laki', 'Islam', '35567965756', 'tydft', '2019-01-16', 'Belum Kawin', 'utfuy', 'WNI', 'vhjh', 'ghvh', 'Sedang Proses', 'Surat Perwakila'),
('SD00002', '1234', '2019-12-16', '2019-12-23', 'dwwe', 'Perempuan', 'Islam', '329812', 'dew', '2019-11-16', 'Kawin', 'utfuy', 'WNI', 'vhjh', 'ghvh', 'Sedang Proses', 'Surat Perwakila');

-- --------------------------------------------------------

--
-- Table structure for table `sk_skck`
--

CREATE TABLE `sk_skck` (
  `NO_SKCK` varchar(7) NOT NULL,
  `NIK_PENDUDUK` varchar(16) NOT NULL,
  `TGLSURAT_AJU` date DEFAULT NULL,
  `BERLAKU_AJU` date NOT NULL,
  `NAMA_AJU` varchar(50) NOT NULL,
  `JK_AJU` varchar(10) NOT NULL,
  `TMPLHR_AJU` varchar(20) NOT NULL,
  `TGLHR_AJU` date NOT NULL,
  `NIK_AJU` varchar(16) NOT NULL,
  `KWN_AJU` varchar(15) NOT NULL,
  `AGAMA_AJU` varchar(15) NOT NULL,
  `STATUS_AJU` varchar(15) NOT NULL,
  `PEKERJAAN_AJU` varchar(25) NOT NULL,
  `PENDIDIKAN_AJU` varchar(25) NOT NULL,
  `ALAMAT_AJU` text NOT NULL,
  `TUJUAN_AJU` text,
  `KETERANGAN_AJU` varchar(15) DEFAULT NULL,
  `JENISURAT_AJU` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sk_skck`
--

INSERT INTO `sk_skck` (`NO_SKCK`, `NIK_PENDUDUK`, `TGLSURAT_AJU`, `BERLAKU_AJU`, `NAMA_AJU`, `JK_AJU`, `TMPLHR_AJU`, `TGLHR_AJU`, `NIK_AJU`, `KWN_AJU`, `AGAMA_AJU`, `STATUS_AJU`, `PEKERJAAN_AJU`, `PENDIDIKAN_AJU`, `ALAMAT_AJU`, `TUJUAN_AJU`, `KETERANGAN_AJU`, `JENISURAT_AJU`) VALUES
('SK00001', '12345', '2019-12-11', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', 'sesuatu', 'Sedang Proses', 'Surat Pribadi'),
('SK00002', '1234', '2019-12-12', '2019-12-19', 'arin', 'Laki-Laki', 'prob', '2019-12-02', '76327921', 'dskej', 'Islam', 'Kawin', 'Pelajar', 'Strata II', 'Dusun Krajan RT/RW 012/003 Desa Sabrang Kecamatan Ambulu Kabupaten Jember Provinsi Jawa Timur', 'sesuatu', 'Sedang Proses', 'Surat Perwakila'),
('SK00003', '1234', '2019-12-12', '2019-12-19', 'arin', 'Laki-Laki', 'prob', '2019-12-02', '76327921', 'dskej', 'Islam', 'Kawin', 'Pelajar', 'Strata II', 'Dusun Krajan RT/RW 012/003 Desa Sabrang Kecamatan Ambulu Kabupaten Jember Provinsi Jawa Timur', 'sesuatu', 'Sedang Proses', 'Surat Perwakila');

-- --------------------------------------------------------

--
-- Table structure for table `sk_tempatusaha`
--

CREATE TABLE `sk_tempatusaha` (
  `NO_TUSAHA` varchar(7) NOT NULL,
  `NIK_PENDUDUK` varchar(16) NOT NULL,
  `TGLSURATTU` date NOT NULL,
  `BERLAKUTU` date NOT NULL,
  `NAMATU` varchar(50) NOT NULL,
  `TMPLHRTU` varchar(25) NOT NULL,
  `TGLHRTU` date NOT NULL,
  `JKTU` varchar(10) NOT NULL,
  `STATUSTU` varchar(15) NOT NULL,
  `PEKERJAANTU` varchar(25) NOT NULL,
  `AGAMATU` varchar(15) NOT NULL,
  `KWNTU` varchar(15) NOT NULL,
  `NIKTU` varchar(16) NOT NULL,
  `ALAMATU` text NOT NULL,
  `NAMAUSAHA` text NOT NULL,
  `TUJUANTU` text NOT NULL,
  `KETERANGAN` varchar(15) NOT NULL,
  `JNSURAT` varchar(15) NOT NULL
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
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`NO_BNIKAH`),
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
  ADD PRIMARY KEY (`NO_TUSAHA`),
  ADD KEY `FK_MEMBUAT3` (`NIK_PENDUDUK`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

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

-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2019 at 02:50 PM
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
  `NAMAADMIN` varchar(100) DEFAULT NULL,
  `JENIS_KELAMIN` varchar(9) DEFAULT NULL,
  `JABATAN` varchar(25) DEFAULT NULL,
  `TAHUN_JABATAN` date DEFAULT NULL,
  `BERAKHIR_JABATAN` date DEFAULT NULL,
  `LEVEL` varchar(20) DEFAULT NULL,
  `STATUS_AKUN` varchar(12) DEFAULT NULL,
  `NOTELP` varchar(13) NOT NULL,
  `USERNAME` varchar(15) DEFAULT NULL,
  `PASSWORD` varchar(255) DEFAULT NULL,
  `FOTO` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID_ADMIN`, `NIK_NIPADMIN`, `NAMAADMIN`, `JENIS_KELAMIN`, `JABATAN`, `TAHUN_JABATAN`, `BERAKHIR_JABATAN`, `LEVEL`, `STATUS_AKUN`, `NOTELP`, `USERNAME`, `PASSWORD`, `FOTO`) VALUES
('AD0001', '2132', 'Arini Firdausiyah', 'Perempuan', '-', NULL, NULL, 'Super Admin', 'Aktif', '081335373470', 'rinrin', '48eafba9af6ae952c505845b5cfca3c3', NULL),
('AD0002', '3515646565', 'hafidz', 'Laki-Laki', 'sekretaris', '2019-12-01', '2024-12-01', 'Admin', 'Aktif', '0876564756', 'hafidz', '29bca9f62e4af2306bcf9bc406ade0c4', '04122019101534Picture2.png'),
('AD0003', '3507655876', 'ryan', 'Laki-Laki', 'sekretaris', '2019-12-02', '2024-12-02', 'Perangkat Desa', 'Aktif', '4566476', 'ryan', '10c7ccc7a4f0aff03c915c485565b9da', '041220191016401.PNG'),
('AD0004', '8792131', 'rizal', 'Laki-Laki', '-', '0000-00-00', '0000-00-00', 'Admin', 'Aktif', '0823982', 'rizal', '150fb021c56c33f82eef99253eb36ee1', '1712201918062220742670.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `ID_ARTIKEL` int(11) NOT NULL,
  `ID_ADMIN` varchar(6) NOT NULL,
  `ID_KATEGORI` varchar(5) NOT NULL,
  `JUDUL_ARTIKEL` varchar(100) DEFAULT NULL,
  `ISI_ARTIKEL` text,
  `TANGGAL_ARTIKEL` date DEFAULT NULL,
  `FOTO_ARTIKEL` varchar(100) DEFAULT NULL,
  `STATUS_ARTIKEL` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`ID_ARTIKEL`, `ID_ADMIN`, `ID_KATEGORI`, `JUDUL_ARTIKEL`, `ISI_ARTIKEL`, `TANGGAL_ARTIKEL`, `FOTO_ARTIKEL`, `STATUS_ARTIKEL`) VALUES
(6, 'AD0001', 'AD002', 'Kegagalan Masa Lalu adalah Proses Keberhasilan Masa Depan', '<p>Sekali lagi pendidikan bukanlah tanda bahwa pernah bersekolah atau berada di universitas tetapi pendidikan tanda bahwa pernah berfikir.</p>\r\n\r\n<p>Mengapa pendidikan identik dengan masa depan? Sebab dalam pendidikan dituntut untuk berpikir bagaimana menjadi sukses dalam situasi serba kurang, yang nanti memicu pada sebuah hasil masa depan yang lebih baik.</p>\r\n\r\n<p>Komitmen serta tangungjawab yang diajarkan menjadikan mahasiswa harus benar-benar jeli dalam menuntut ilmu agar keberhasilan dapat diraih dengan sempurna.</p>\r\n\r\n<p>Lalu bagaimana masa depan bisa di identik dengan pendidikan untuk meraih masa depan yang lebih baik?</p>\r\n\r\n<p>Sebab ilmu didapatkan dari pendidikan, lalu hasil menuntut pendidikan yang dibawa pada masa depan guna paham betul bagaimana kehidupan yang harus di hadapi, apalagi kehidupan yang dihuni oleh makhluk sosial yang tiap hari berubah-ubah fikiran dan ide.</p>\r\n\r\n<p>Kesadaran ini harus menjadi kajian bersama, bagaimana sesuatu hal akan terjadi di masa depan haruslah diraih, agar kehidupan tidak kurang dan miskin pikiran.</p>\r\n\r\n<p>Upaya-upaya konsisten dan berfikir lebih keras, berjuang penuh dalam menuntut ilmu agar terhindar dari perkara penipuan, karena sukses orang berilmu akan sangat menjamin ekonomi kehidupan individu.</p>\r\n\r\n<p>Faktanya banyak motivator yang lahir dari orang-orang sederhana yang berjuang keras dipendidikan lalu meraih keberhasilan yang sangat memuaskan, oleh sebab itu masa depan haruslah menjadi perubahan besar dalam kehidupan.</p>\r\n\r\n<p>Peran menuntut ilmu lagi dan lagi haruslah berkomitmen dalam tangungjawab karena sudah jelas ketingalan informasi di masa depan akan membuat persoalan masalah baru bagi generasi, itulah mengapa &quot;sebab masa depan harus didukung keras dengan pendidikan.&quot;</p>\r\n\r\n<p>Karena masa depan belum bisa di telusuri seperti apa jadinya seseorang? Maka tuntutan pendidikan dan belajar itulah untuk mencegah hal buruk di masa depan kelak.</p>\r\n\r\n<p>Dan peran keyakinan dalam proses menuju masa depan yang lebih baik tidak bisa dipungkiri bahwa dalam setiap Langkah harus disertakan kegigihan dan rasa tidak putus asa, bangkit dan terus berjuang.</p>\r\n', '2019-12-25', '26122019142705keamanan-jaringan-300x223.png', 'Aktif'),
(7, 'AD0001', 'AD002', 'Konseling tentang Kedisiplinan', '<p>Menurut Sondang P. Siagian, disiplin merupakan tindakan manajemen untuk mendorong para anggota organisasi memenuhi tuntutan berbagai ketentuan tersebut (sondang, 305: 2008). Tulus (2004) menjelaskan bahwa disilin adalah mengikuti dan menaati eraturan, nilai dan hukum yang berlaku. Sedangkan menurut Suharsini Arikunto mengatakan disiplin merupakan suatu yang berkenaan dengan pengendalian diri seseorang terhadap bentuk-bentuk aturan (Arikunto, 114: 1993).</p>\r\n\r\n<p>Menurut Singodimedjo mendefinisikan disiplin sebagai sikap kesediaan dan kerelaan seorang santri untuk mematuhi dan menaati norma- norma peraturan yang berlaku di sekitarnya. Disiplin santri yang baik akan mempercepat tujuan lembaga pesantre, sedangkan disiplin yang rendah akan menjadi penghalang dan memperlambat pencapaian tujuan pesantren (Ulum, 2010: 35).</p>\r\n\r\n<p>Kedisiplinan berasal dari kata disiplin. Kennet W. Requena menjelaskan tentang kata disiplin yang dalam bahasa inggris discipline, berasal dari kata bahasalatin yang sama (discipulus) yang dengan kata discipline mempunyai makna yang sama yaitu mengajari atau mengikuti pemimpin yang dihormati (Kenneth,2005: 12).</p>\r\n\r\n<p>Sikap disiplin yang baik menurut Andrini &amp; Gabriella (2012) adalah sikap disiplin yang sifatnya internal yaitu yang disertai tanggungjawab dan atas kesadaran diri siswa sendiri untuk mentaati norma dan aturan yang berlaku. Disiplin merupakan sikap mental yang tercermin dalam perbuatan tingkah laku perorangan, kelompok atau masyarakat berupa kepatuhan atau ketaaan terhadap peraturan, ketentuan, etika, norma dan kaidah yang berlaku.</p>\r\n\r\n<p>Maman Rachman (1999 dalam Tu&#39;u 2004) menyatakan disiplin sebagai upaya mengendalikan diri dan sikap mental individu atau masyarakat dalam mengembangkan kepatuhan dan ketaatan terhadap peraturan dan tata tertib berdasarkan dorongan dan kesadaran yang muncul dari dalam hatinya. Setiap sekolah memiliki peraturan dan tata tertib yang harus dilaksanakan dan dipatuhi oleh semua siswa. Kesadaran untuk menegakkan peraturan itu merupakan dasar bagi siswa dalam beraktivitas sesuai dengan peran, tugas, dan kewajiban masing-masing. Agar disiplin dapat dijamin dalam penerapan dan pelaksanaannya maka perlu diberi sanksi kepada mereka yang melanggarnya.</p>\r\n\r\n<p>Aspek-aspek Sikap Disiplin</p>\r\n\r\n<p>Menurut Slameto (1992), ciri-ciri orang yang disiplin yaitu: orang yang selalu tepat waktu dan taat pada tata tertib. Sedangkan menurut M. Hasibuan (1997), orang yang disiplin adalah: orang yang selalu tepat dalam waktu dan tindakan, mengerjakan pekerjaan dengan baik dan mematuhi peraturan dan norma yang berlaku.</p>\r\n\r\n<p>Ketepatan</p>\r\n\r\n<p>Kata &quot;Tepat&quot; dalam kamus umum bahasa indonesia diartikan dengan enam arti yaitu: 1) Betul atau lurus, berbetulan benar, 2) Kena benar, 3) Persis, tidak selisih sedikit pun, 4) Betul atau cocok, 5) Jitu, dan 6) Betul atau kena (Poerwadarminata, 1976). Ketepatan merupakan hal yang sangat signifikan dalam mencapai tujuan, karena dengan ketepatan, setiap apa yang dilakukan menjadi tidak sia-sia dan sesuai dengan yang telah direncanakan. Ketepatan dalam hal ini bisa diartikan sebagai ketepatan dalam merencanakan dan ketepatan dalam bertindak.</p>\r\n\r\n<p>Mengerjakan pekerjaan dengan baik</p>\r\n\r\n<p>Pekerjaan merupakan rangkaian perbuatan tetap yang dilakukan oleh seseorang yang menghasilkan sesuatu yang dapat dinikmati, baik langsung maupun tidak langsung, baik hasil itu berupa jasa maupun barang.Perbuatan di sini dapat diartikan sebagai gerakan teratur yang dilakukan dengan menggunakan anggota badan, panca indera, serta dikendalikan oleh pikiran, sehingga terdapat keserasian dalam gerakan, yaitu terdapatnya kodinasi yang tinggi pada anggota badan, panca indera dan pikiran. Perbuatan yang teratur merupakan suatu proses yang akan mewujudkan sesuatu yang bermanfaat baik bagi dirinya sendiri maupun orang lain.</p>\r\n', '2019-12-25', '26122019142624understanding_cyber_threats_and_vulnerabilities_are.jpg', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `ID_KATEGORI` varchar(5) NOT NULL,
  `KATEGORI` varchar(20) DEFAULT NULL,
  `STATUS_KAT` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`ID_KATEGORI`, `KATEGORI`, `STATUS_KAT`) VALUES
('AD001', 'Berita', 'Aktif'),
('AD002', 'Artikel', 'Aktif'),
('AD003', 'Musik', 'Aktif'),
('AD004', 'Olahraga', 'Nonaktif');

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
  `RT_RW` varchar(10) DEFAULT NULL,
  `DESA` varchar(10) DEFAULT NULL,
  `KEC` varchar(10) DEFAULT NULL,
  `KAB_KOTA` varchar(10) DEFAULT NULL,
  `KDPOS` varchar(10) DEFAULT NULL,
  `PROV` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keluarga`
--

INSERT INTO `keluarga` (`NO_KK`, `ID_ADMIN`, `TGL_DIBUAT`, `KEPALA`, `ALAMAT`, `RT_RW`, `DESA`, `KEC`, `KAB_KOTA`, `KDPOS`, `PROV`) VALUES
('350912011100020', 'AD0001', '2010-11-11', 'Purwanto', 'Dusun Tegalrejo', '003/005', 'Sabrang', 'Ambulu', 'Jember', '68172', 'Jawa Timur'),
('3509120309054349', 'AD0001', '2019-07-19', 'Purnomo', 'Dusun Tegalrejo', '002/022', 'Sabrang', 'Ambulu', 'Jember', '68172', 'Jawa Timur'),
('3509120309058295', 'AD0001', '2012-09-19', 'Suwono', 'Dusun Krajan', '003/009', 'Sabrang', 'Ambulu', 'Jember', '68172', 'Jawa Timur'),
('3509120409055971', 'AD0001', '2017-10-31', 'Sudarmajid', 'Dusun Kebonsari', '001/002', 'Sabrang', 'Ambulu', 'Jember', '68172', 'Jawa Timur'),
('3509122203190003', 'AD0001', '2019-03-22', 'Deni Andriyawan', 'Dusun Krajan', '001/013', 'Sabrang', 'Ambulu', 'Jember', '68172', 'Jawa Timur'),
('3509122912160002', 'AD0001', '1019-06-20', 'Anang Supriyanto', 'Dusun Krajan', '002/013', 'Sabrang', 'Ambulu', 'Jember', '68172', 'Jawa Timur');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `ID_KMN` int(11) NOT NULL,
  `ID_ARTIKEL` int(11) NOT NULL,
  `NAMA_KMN` varchar(100) NOT NULL,
  `ISI_KMN` varchar(100) NOT NULL,
  `WAKTU_KMN` date NOT NULL,
  `STATUS_KMN` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`ID_KMN`, `ID_ARTIKEL`, `NAMA_KMN`, `ISI_KMN`, `WAKTU_KMN`, `STATUS_KMN`) VALUES
(28, 6, 'Arini Firdausiyah', 'ayooooo', '2019-12-26', 'Aktif'),
(29, 7, 'Arini Firdausiyah', 'Belum Smpurna, masih ada yg erroe:((', '2019-12-26', 'Aktif'),
(30, 6, 'Rara', 'Iya jugasih', '2019-12-26', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `NIK_PENDUDUK` varchar(16) NOT NULL,
  `ID_ADMIN` varchar(6) NOT NULL,
  `NO_KK` varchar(16) NOT NULL,
  `TGLDAFTAR` date DEFAULT NULL,
  `NAMAPEN` varchar(100) DEFAULT NULL,
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
  `PASSPEN` varchar(255) DEFAULT NULL,
  `NOTELPEN` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`NIK_PENDUDUK`, `ID_ADMIN`, `NO_KK`, `TGLDAFTAR`, `NAMAPEN`, `TEMPATLHR`, `TANGGALHR`, `JK_PEN`, `AGAMAPEN`, `STATUSPEN`, `PEKERJAANPEN`, `PENDIDIKANPEN`, `KWNPEN`, `STATUSAKUN`, `KET_HIDUP`, `PASSPEN`, `NOTELPEN`) VALUES
('3509120904970001', 'AD0001', '3509120409055971', '2019-12-27', 'Dedi Rahmad Alfan', 'Jember', '1997-04-09', 'Laki-Laki', 'Islam', 'Belum Kawin', 'Pelajar/Mahasiswa', 'Tidak/Belum Sekolah', 'WNI', 'Aktif', 'Hidup', 'af380bde719d9716583fbab03df4385a', '897'),
('3509120910800004', 'AD0001', '3509120309058295', '2019-12-27', 'Suwono', 'Jember', '1960-10-09', 'Laki-Laki', 'Islam', 'Kawin', 'Buruh Tani/Perkebunan', 'Tamat SD/Sederajat', 'WNI', 'Aktif', '', 'c6c4fe73fd53b3876f801957f217bbbd', '0812345678'),
('3509121907500001', 'AD0001', '3509120409055971', '2019-12-27', 'Sudarmajid', 'Jember', '1960-07-15', 'Laki-Laki', 'Islam', 'Kawin', 'Petani/Pekebun', 'Tamat SD/Sederajat', 'WNI', 'Aktif', 'Hidup', '3fbe2938a2c1b4c3f649094f316639b3', '08156456'),
('3509122512890006', 'AD0001', '3509122203190003', '2019-12-27', 'Deni Andriyawan', 'Jember', '1989-12-25', 'Laki-Laki', 'Islam', 'Belum Kawin', 'Wiraswasta', 'SLTP/Sederajat', 'WNI', 'Aktif', 'Hidup', '8f3cfdf226757fcf7b808b44b58fd9bc', '081111'),
('3509125208600004', 'AD0001', '3509120409055971', '2019-12-27', 'Mut Daiyah', 'Jember', '1960-08-12', 'Perempuan', 'Islam', 'Kawin', 'Mengurus rumah tangga', 'Tamat SD/Sederajat', 'WNI', 'Aktif', 'Hidup', '9863ff15e0fde001c305a78373d4d1cb', '086'),
('3509127006050006', 'AD0001', '3509122203190003', '2019-12-27', 'Siti Kholifa', 'Jember', '2005-06-30', 'Perempuan', 'Islam', 'Belum Kawin', 'Belum/Tidak Bekerja', 'Tidak/Belum Sekolah', 'WNI', 'Aktif', 'Hidup', 'cbcac7f6ff844dbe69c93481b3bee2f5', '08444');

-- --------------------------------------------------------

--
-- Table structure for table `sk_belumnikah`
--

CREATE TABLE `sk_belumnikah` (
  `NO_BNIKAH` varchar(7) NOT NULL,
  `NIK_PENDUDUK` varchar(16) NOT NULL,
  `TGLSURATBN` date NOT NULL,
  `BERLAKUBN` date NOT NULL,
  `NAMABN` varchar(100) NOT NULL,
  `NIKBN` varchar(16) NOT NULL,
  `JKBN` varchar(10) NOT NULL,
  `TMPLHRBN` varchar(25) NOT NULL,
  `TGLHRBN` date NOT NULL,
  `AGAMABN` varchar(15) NOT NULL,
  `PEKERJAANBN` varchar(30) NOT NULL,
  `KWNBN` varchar(15) NOT NULL,
  `ALAMATBN` tinytext NOT NULL,
  `TUJUANBN` tinytext NOT NULL,
  `KETERANGANBN` varchar(15) NOT NULL,
  `JSBN` varchar(17) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sk_belumnikah`
--

INSERT INTO `sk_belumnikah` (`NO_BNIKAH`, `NIK_PENDUDUK`, `TGLSURATBN`, `BERLAKUBN`, `NAMABN`, `NIKBN`, `JKBN`, `TMPLHRBN`, `TGLHRBN`, `AGAMABN`, `PEKERJAANBN`, `KWNBN`, `ALAMATBN`, `TUJUANBN`, `KETERANGANBN`, `JSBN`) VALUES
('BN00001', '3509122512890006', '2019-12-27', '2020-01-03', 'Siti Kholifa', '3509127006050006', 'Perempuan', 'Jember', '2005-06-30', 'Islam', 'Belum/Tidak Bekerja', 'WNI', 'Dusun Krajan', 'Pendaftan di Perusahaan', 'Tidak Valid', 'Surat Perwakilan'),
('BN00002', '3509121907500001', '2019-12-27', '2020-01-03', '', '', '', '', '0000-00-00', '', '', 'WNI', '', 'Pendaftan di Universitas', 'Sedang Proses', 'Surat Pribadi');

-- --------------------------------------------------------

--
-- Table structure for table `sk_domisili`
--

CREATE TABLE `sk_domisili` (
  `NO_DOMISILI` varchar(7) NOT NULL,
  `NIK_PENDUDUK` varchar(16) NOT NULL,
  `TGLSURATAJU` date DEFAULT NULL,
  `BERLAKU` date NOT NULL,
  `NAMAAJU` varchar(100) NOT NULL,
  `JKAJU` varchar(10) NOT NULL,
  `AGAMAAJU` varchar(15) NOT NULL,
  `NIKAJU` varchar(16) NOT NULL,
  `TMPLHRAJU` varchar(20) NOT NULL,
  `TGLHRAJU` date NOT NULL,
  `STATUSAJU` varchar(15) NOT NULL,
  `PEKERJAANAJU` varchar(30) NOT NULL,
  `KWNAJU` varchar(20) NOT NULL,
  `ALAMATAJU` tinytext NOT NULL,
  `TUJUANAJU` tinytext,
  `KETERANGANAJU` varchar(15) DEFAULT NULL,
  `JENIS_SURATAJU` varchar(17) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sk_domisili`
--

INSERT INTO `sk_domisili` (`NO_DOMISILI`, `NIK_PENDUDUK`, `TGLSURATAJU`, `BERLAKU`, `NAMAAJU`, `JKAJU`, `AGAMAAJU`, `NIKAJU`, `TMPLHRAJU`, `TGLHRAJU`, `STATUSAJU`, `PEKERJAANAJU`, `KWNAJU`, `ALAMATAJU`, `TUJUANAJU`, `KETERANGANAJU`, `JENIS_SURATAJU`) VALUES
('SD00002', '3509120910800004', '2019-12-27', '2020-01-03', 'Dedi Rahmad Alfan', 'Laki-Laki', 'Islam', '3509120904970001', 'Jember', '1997-04-09', 'Belum Kawin', 'Pelajar/Mahasiswa', 'WNI', 'Dusun Kebonsari', 'Registrasi RUD Jember', 'Valid', 'Surat Perwakilan'),
('SD00003', '3509120910800004', '2019-12-27', '2020-01-03', 'Dedi Rahmad Alfan', 'Laki-Laki', 'Islam', '3509120904970001', 'Jember', '1997-04-09', 'Belum Kawin', 'Pelajar/Mahasiswa', 'WNI', 'Dusun Kebonsari', 'Registrasi RUD Jember', 'Tidak Valid', 'Surat Perwakilan'),
('SD00004', '3509120910800004', '2019-12-27', '2020-01-03', 'Dedi Rahmad Alfan', 'Laki-Laki', 'Islam', '3509120904970001', 'Jember', '1997-04-09', 'Belum Kawin', 'Pelajar/Mahasiswa', 'WNI', 'Dusun Kebonsari', 'Registrasi RUD Jember', 'Selesai', 'Surat Perwakilan'),
('SD00005', '3509120904970001', '2019-12-27', '2020-01-03', '', '', '', '', '', '0000-00-00', '', '', '', '', 'Registrasi RUD Probolinggo', 'Sedang Proses', 'Surat Pribadi'),
('SD00006', '3509120910800004', '2019-12-28', '2020-01-04', 'Sudarmajid', 'Laki-Laki', 'Islam', '3509121907500001', 'Jember', '1960-07-15', 'Kawin', 'Petani/Pekebun', 'WNI', 'Dusun Kebonsari', 'Ujian Masuk Perguruan Tinggi', 'Sedang Proses', 'Surat Perwakilan');

-- --------------------------------------------------------

--
-- Table structure for table `sk_skck`
--

CREATE TABLE `sk_skck` (
  `NO_SKCK` varchar(7) NOT NULL,
  `NIK_PENDUDUK` varchar(16) NOT NULL,
  `TGLSURAT_AJU` date DEFAULT NULL,
  `BERLAKU_AJU` date NOT NULL,
  `NAMA_AJU` varchar(100) NOT NULL,
  `JK_AJU` varchar(10) NOT NULL,
  `TMPLHR_AJU` varchar(20) NOT NULL,
  `TGLHR_AJU` date NOT NULL,
  `NIK_AJU` varchar(16) NOT NULL,
  `KWN_AJU` varchar(15) NOT NULL,
  `AGAMA_AJU` varchar(15) NOT NULL,
  `STATUS_AJU` varchar(15) NOT NULL,
  `PEKERJAAN_AJU` varchar(30) NOT NULL,
  `PENDIDIKAN_AJU` varchar(25) NOT NULL,
  `ALAMAT_AJU` tinytext NOT NULL,
  `TUJUAN_AJU` tinytext,
  `KETERANGAN_AJU` varchar(15) DEFAULT NULL,
  `JENISURAT_AJU` varchar(17) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sk_skck`
--

INSERT INTO `sk_skck` (`NO_SKCK`, `NIK_PENDUDUK`, `TGLSURAT_AJU`, `BERLAKU_AJU`, `NAMA_AJU`, `JK_AJU`, `TMPLHR_AJU`, `TGLHR_AJU`, `NIK_AJU`, `KWN_AJU`, `AGAMA_AJU`, `STATUS_AJU`, `PEKERJAAN_AJU`, `PENDIDIKAN_AJU`, `ALAMAT_AJU`, `TUJUAN_AJU`, `KETERANGAN_AJU`, `JENISURAT_AJU`) VALUES
('SK00001', '3509120904970001', '2019-12-27', '2020-01-03', '', '', '', '0000-00-00', '', '', '', '', '', '', '', 'Pendaftaran Institusi', 'Sedang Proses', 'Surat Pribadi'),
('SK00002', '3509125208600004', '2019-12-27', '2020-01-03', 'Dedi Rahmad Alfan', 'Laki-Laki', 'Jember', '1997-04-09', '3509120904970001', 'WNI', 'Islam', 'Belum Kawin', 'Pelajar/Mahasiswa', 'Tidak/Belum Sekolah', 'Dusun Kebonsari', 'Pendaftaran Institusi', 'Sedang Proses', 'Surat Perwakilan');

-- --------------------------------------------------------

--
-- Table structure for table `sk_tempatusaha`
--

CREATE TABLE `sk_tempatusaha` (
  `NO_TUSAHA` varchar(7) NOT NULL,
  `NIK_PENDUDUK` varchar(16) NOT NULL,
  `TGLSURATTU` date NOT NULL,
  `BERLAKUTU` date NOT NULL,
  `NAMATU` varchar(100) NOT NULL,
  `TMPLHRTU` varchar(25) NOT NULL,
  `TGLHRTU` date NOT NULL,
  `JKTU` varchar(10) NOT NULL,
  `STATUSTU` varchar(15) NOT NULL,
  `PEKERJAANTU` varchar(30) NOT NULL,
  `AGAMATU` varchar(15) NOT NULL,
  `KWNTU` varchar(15) NOT NULL,
  `NIKTU` varchar(16) NOT NULL,
  `ALAMATU` tinytext NOT NULL,
  `NAMAUSAHA` tinytext NOT NULL,
  `TUJUANTU` tinytext NOT NULL,
  `KETERANGAN` varchar(15) NOT NULL,
  `JNSURAT` varchar(17) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sk_tempatusaha`
--

INSERT INTO `sk_tempatusaha` (`NO_TUSAHA`, `NIK_PENDUDUK`, `TGLSURATTU`, `BERLAKUTU`, `NAMATU`, `TMPLHRTU`, `TGLHRTU`, `JKTU`, `STATUSTU`, `PEKERJAANTU`, `AGAMATU`, `KWNTU`, `NIKTU`, `ALAMATU`, `NAMAUSAHA`, `TUJUANTU`, `KETERANGAN`, `JNSURAT`) VALUES
('TU00001', '3509120910800004', '2019-12-27', '2020-01-03', '', '', '0000-00-00', '', '', '', '', '', '', '', 'Rumah Makan Ayam Bakar', 'Berpindah tempat lokasi usaha', 'Sedang Proses', 'Surat Pribadi'),
('TU00002', '3509120910800004', '2019-12-27', '2020-01-03', 'Deni Andriyawan', 'Jember', '1989-12-25', 'Laki-Laki', 'Belum Kawin', 'Wiraswasta', 'Islam', 'WNI', '3509122512890006', 'Dusun Krajan', 'Rumah Makan Lalapan Ayam', 'Berpindah tempat lokasi usaha', 'Sedang Proses', 'Surat Perwakilan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_ADMIN`),
  ADD UNIQUE KEY `USERNAME` (`USERNAME`);

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
  ADD PRIMARY KEY (`ID_KMN`),
  ADD KEY `ID_ARTIKEL` (`ID_ARTIKEL`);

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
  MODIFY `ID_ARTIKEL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `ID_KMN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
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
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `FK_MEMILIKI0` FOREIGN KEY (`ID_ARTIKEL`) REFERENCES `artikel` (`ID_ARTIKEL`);

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

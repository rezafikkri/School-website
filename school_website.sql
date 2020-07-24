-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 24, 2020 at 01:49 PM
-- Server version: 10.5.4-MariaDB-1:10.5.4+maria~xenial
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_website`
--
CREATE DATABASE `school_website`;
use `school_website`;
-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `berita_id` varchar(36) NOT NULL,
  `judulBesar` varchar(50) NOT NULL,
  `judulKecil` varchar(32) DEFAULT NULL,
  `urlImgUtama` varchar(100) DEFAULT NULL,
  `isi` text NOT NULL,
  `post` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`berita_id`, `judulBesar`, `judulKecil`, `urlImgUtama`, `isi`, `post`) VALUES
('12f71ba3-b1d8-4735-be9c-82ec7ab67fb3', 'Ujikom kelas 12 berjalan dengan lancar', '', '', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', '1558409788'),
('32447057-7967-4d61-a709-e400af41b9f1', 'Ujian Kelas 12 tahun 2018-2019', 'berjalan dengan tertib', 'http://localhost/School-website/assets/img/berita/1.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '1595565305'),
('54333c64-191a-482a-a73a-3245d80cb802', 'Kedatangan Bapak Gubernur Bengkulu', '- Rohidin Mersyah', '', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,&nbsp;&nbsp;&nbsp; quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, <span style=\"color:#c0392b\"><strong>sunt in culpa qui officia deserunt mollit anim id est laborum.</strong></span></p>\r\n', '1556843847'),
('cd132d87-d308-451f-a0cb-fa86cc94c0a3', 'Kedatangan Kepala Dinas Pendidikan dan Kebudayaan', 'Budiman', '', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmo tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', '1558409648');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `fasilitas_id` varchar(36) NOT NULL,
  `url_img` varchar(100) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`fasilitas_id`, `url_img`, `keterangan`) VALUES
('42c2becf-28cf-446d-a948-42fb2878c7c8', 'http://localhost/School-website/assets/img/fasilitas/musolla.JPG', 'Musollah'),
('74a89d87-6abf-4acd-9b01-69e8942ada6b', 'http://localhost/School-website/assets/img/fasilitas/lapangan.jpg', 'Lapangan olahraga'),
('d65f58b5-fa5a-4472-88eb-c806707c2a2e', 'http://localhost/School-website/assets/img/fasilitas/lab komputer.jpg', 'Lab komputer'),
('df948be2-84b9-4d7b-a841-f9cd67e163c2', 'http://localhost/School-website/assets/img/fasilitas/perpustakaan.JPG', 'Perpustakaan');

-- --------------------------------------------------------

--
-- Table structure for table `file_download`
--

CREATE TABLE `file_download` (
  `file_download_id` varchar(36) NOT NULL,
  `name` varchar(50) NOT NULL,
  `url` varchar(100) NOT NULL,
  `post` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file_download`
--

INSERT INTO `file_download` (`file_download_id`, `name`, `url`, `post`) VALUES
('1fe0703f-2e90-4abb-835d-5fec37353282', 'Tugas kelas XII Multimedia - Matematika', 'https://www.bing.com', '1558422540'),
('9b37c5d5-3b56-4bf5-9daa-7a8a593cba4f', 'Jadwal', 'https://www.google.com', '1558422482');

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `foto_id` varchar(36) NOT NULL,
  `url_foto` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `post` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`foto_id`, `url_foto`, `keterangan`, `post`) VALUES
('631bd4eb-b896-49e4-9eab-692491c07dcc', 'http://localhost/School-website/assets/img/galeri/2.png', 'Belajar komputer', '1595564787'),
('a3f713d4-91f3-4c6a-a1a3-0a0844400575', 'http://localhost/School-website/assets/img/galeri/4.jpg', 'Basket', '1595564721'),
('b468d1c6-1428-4452-b35d-5d618f326fd3', 'http://localhost/School-website/assets/img/galeri/7.jpg', 'Anak teladan', '1595564706');

-- --------------------------------------------------------

--
-- Table structure for table `guru_staf`
--

CREATE TABLE `guru_staf` (
  `guru_staf_id` varchar(36) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(32) NOT NULL,
  `kategori` enum('guru','staf','kepala_sekolah') NOT NULL,
  `keterangan` text DEFAULT NULL,
  `url_fotoProfile` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru_staf`
--

INSERT INTO `guru_staf` (`guru_staf_id`, `nama`, `jabatan`, `kategori`, `keterangan`, `url_fotoProfile`) VALUES
('1', 'Dian Pranata', 'Guru TIK', 'guru', '', NULL),
('bc3f9300-6432-46ce-b04b-3374c97bf0fa', 'Sopika Alawiya', 'Bendahara', 'staf', NULL, NULL),
('d1b74016-534f-4e35-a72a-2803881b8f6d', 'Reza Sariful Fikkri', 'Kepala Sekolah', 'kepala_sekolah', '<h4>IDENTITAS DIRI</h4>\r\n\r\n<table class=\"\\\">\r\n	<tbody>\r\n		<tr>\r\n			<td>NIP</td>\r\n			<td>:</td>\r\n			<td>19670707 199412 1 002</td>\r\n		</tr>\r\n		<tr>\r\n			<td>PANGKAT/GOLONGAN</td>\r\n			<td>:</td>\r\n			<td>PEMBINA Tk.I/IV b</td>\r\n		</tr>\r\n		<tr>\r\n			<td>TEMPAT TANGGAL LAHIR</td>\r\n			<td>:</td>\r\n			<td>BUKIT KEMUNING, 07 JULI 1967</td>\r\n		</tr>\r\n		<tr>\r\n			<td>JENIS KELAMIN</td>\r\n			<td>:</td>\r\n			<td>LAKI-LAKI</td>\r\n		</tr>\r\n		<tr>\r\n			<td>AGAMA</td>\r\n			<td>:</td>\r\n			<td>ISLAM</td>\r\n		</tr>\r\n		<tr>\r\n			<td>ALAMAT</td>\r\n			<td>:</td>\r\n			<td>Jl. KGS HASAN KEL. PASAR UJUNG KECAMATAN KEPAHIANG PROVINSI BENGKULU</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h4>PENDIDIKAN</h4>\r\n\r\n<ol>\r\n	<li>Sekolah Dasar Negeri 03 Bukit Kemuning Lampung 1981</li>\r\n	<li>SMPN 01 Bukit Kemuning Lampung Tahun 1984</li>\r\n	<li>SMAN 01 Bukit Kemuning Lampung Tahun 1987</li>\r\n	<li>\r\n	<div>D3 Pendidikan Sejarah Universitas Lampung Tahun 1990</div>\r\n	</li>\r\n	<li>\r\n	<div>S1 Pendidikan Sejarah Universitas Negeri Padang Tahun 2000</div>\r\n	</li>\r\n	<li>\r\n	<div>S2 Manajemen Pendidikan Universitas Bengkulu Tahun 2010</div>\r\n	</li>\r\n</ol>\r\n\r\n<h4>RIWAYAT KEPANGKATAN DAN JABATAN</h4>\r\n\r\n<ol>\r\n	<li>Penerimaan Penghargaan Satya Lencana Karya Satya 10 Tahun Dari Presiden Republik Indonesia Tahun 2012.</li>\r\n	<li>Kepala Sekolah di SMKN 01 Bermani Ilir, Peningkatan Jumlah Siswa Secara Signifikan dari 24 Siswa menjadi 153 Siswa.</li>\r\n	<li>Kepala Sekolah SMKN 02 Kepahiang : &nbsp;</li>\r\n</ol>\r\n\r\n<ul style=\"margin-left:40px\">\r\n	<li>Kepala Sekolah Berprestasi Tahun 2013</li>\r\n	<li>\r\n	<div>Sekolah &ldquo;Adiwiyata Nasional&rdquo; Tahun 2013</div>\r\n	</li>\r\n	<li>\r\n	<div>Juara II Nasional PIK.R tahap TEGAK Tahun 2013</div>\r\n	</li>\r\n	<li>\r\n	<div>Juara III Nasional PIK.R tahap TEGAR Tahun 2013</div>\r\n	</li>\r\n	<li>\r\n	<div>Kader Bina Keluarga Remaja (BKR) Tingkat Nasional Tahun 2014</div>\r\n	</li>\r\n	<li>\r\n	<div>Perwakilan Provinsi Bengkulu FLSN SENI TARI Tahun 2014 dan 2015</div>\r\n	</li>\r\n	<li>\r\n	<div>Sekolah Rujukan Tahun 2016</div>\r\n	</li>\r\n	<li>\r\n	<div>Ujian Nasional Berbasis Nasional berbasis Komputer (UNBK) Tahun 2016</div>\r\n	</li>\r\n	<li>\r\n	<div>Penambahan areal lahan Sekolah 1,5 Ha Tahun 2016</div>\r\n	</li>\r\n	<li>\r\n	<div>\r\n	<div>Penambahan Bangunan Sekolah dari 14 Unit menjadi 60 Unit (rata rata danaberasal dari dana Pusat ).</div>\r\n	</div>\r\n	</li>\r\n</ul>\r\n\r\n<ol start=\"4\">\r\n	<li>Pengawas Sekolah Dinas Pendidikan dan Kebudayaan Provinsi Bengkulu Tahun 2016.</li>\r\n	<li>\r\n	<div>Kepala Sekolah SMKN 05 Kepahiang Tahun 2019</div>\r\n	</li>\r\n</ol>\r\n', 'http://localhost/School-website/assets/img/profile kepala sekolah/reza.jpg'),
('f310af00-b1c8-40b8-8b80-919ca8861f1f', 'Adelina Damayanti', 'Guru Keprawatan', 'guru', '', NULL),
('fbb5ca5f-fe68-4dd0-8428-48d1bb2032c3', 'Reza Sariful Fikri', 'Kepala sekolah', 'guru', 'Kepala sekolah', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `jurusan_id` varchar(36) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `url_logo` varchar(100) DEFAULT NULL,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`jurusan_id`, `jurusan`, `url_logo`, `keterangan`) VALUES
('cc85eb50-af79-4f0f-910b-51082803793e', 'Marketingg', '', ''),
('fceeee24-8c36-43c8-89ac-164157bee8d7', 'Multimediaa', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `komentar_id` varchar(36) NOT NULL,
  `berita_id` varchar(36) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `komentar` text NOT NULL,
  `post` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `komentarbalas`
--

CREATE TABLE `komentarbalas` (
  `balas_id` varchar(36) NOT NULL,
  `komentar_id` varchar(36) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `komenBalas` text NOT NULL,
  `post` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `kontak_id` varchar(36) NOT NULL,
  `no_telp` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `facebook` varchar(32) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`kontak_id`, `no_telp`, `email`, `facebook`, `alamat`) VALUES
('4d3d9961-f3ae-4886-b318-bd133e373ce2', '(0721) 789-456', 'fikkri.reza@gmail.com', 'reza fikkri', 'Jl. Lintas Kepahing - Curup Des.Pekalongan, Kec.Ujan Mas, Kab.Kepahiang Prov. Bengkulu');

-- --------------------------------------------------------

--
-- Table structure for table `logo_sekolah`
--

CREATE TABLE `logo_sekolah` (
  `logo_sekolah_id` varchar(36) NOT NULL,
  `file_name` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logo_sekolah`
--

INSERT INTO `logo_sekolah` (`logo_sekolah_id`, `file_name`) VALUES
('68123721-5235-43e3-b2de-d536f7a7df6e', '56011ca0af4c72065300883c6b7cca79.png');

-- --------------------------------------------------------

--
-- Table structure for table `opening_word`
--

CREATE TABLE `opening_word` (
  `opening_word_id` varchar(36) NOT NULL,
  `nama_sekolah` varchar(50) NOT NULL,
  `word` varchar(255) NOT NULL,
  `url_background` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `opening_word`
--

INSERT INTO `opening_word` (`opening_word_id`, `nama_sekolah`, `word`, `url_background`) VALUES
('668b92df-b4d5-468e-ba87-a438aef68830', 'SMK NEGERI R KEPAHIANG', '<p>SMK Negeri R Kepahiang adalah salah satu Sekolah Menengah Kejuruan di Provinsi bengkulu, Kabupaten Kepahiang. Menciptakan Lulusan yang Berkompeten dan Siap Kerja</p>\r\n\r\n<p>SMK BISA-HEBAT. Siap Kerja - Santun - Mandiri - Kreatif</p>\r\n', 'http://localhost/School-website/assets/img/opening word/my.JPG'),
('c010ad2f-7a6c-440a-a9de-a6414ede44e6', 'SMK NEGERI R KEPAHIANG', '<p>SMK Negeri R Kepahiang adalah salah satu Sekolah Menengah Kejuruan di Provinsi bengkulu, Kabupaten Kepahiang. Menciptakan Lulusan yang Berkompeten dan Siap Kerja</p>\r\n\r\n<p>SMK BISA-HEBAT. Siap Kerja - Santun - Mandiri - Kreatif</p>\r\n', 'http://localhost/School-website/assets/img/opening word/my.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `pengunguman`
--

CREATE TABLE `pengunguman` (
  `pengunguman_id` varchar(36) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengunguman`
--

INSERT INTO `pengunguman` (`pengunguman_id`, `judul`, `isi`) VALUES
('5ef4b609-caed-4969-bce7-d2d724117b10', 'Perpisahan', 'Perpisahan akan dilaksanakan pada tanggal 30 april 2019, dan akan ada tamu istimewa yaitu bapak Gubernur Bengkulu ');

-- --------------------------------------------------------

--
-- Table structure for table `sejarah`
--

CREATE TABLE `sejarah` (
  `sejarah_id` varchar(36) NOT NULL,
  `judul_sejarah` varchar(50) NOT NULL,
  `sejarah` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sejarah`
--

INSERT INTO `sejarah` (`sejarah_id`, `judul_sejarah`, `sejarah`) VALUES
('12155b75-fa57-41e7-84e8-15cd70d36f40', 'Sejarah SMKN R Kepahiang', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>1.</td>\r\n			<td><strong>Nama Awal Berdiri</strong></td>\r\n			<td>:</td>\r\n			<td>SMK N 1 R Kepahiang</td>\r\n		</tr>\r\n		<tr>\r\n			<td>2.</td>\r\n			<td><strong>Berdiri</strong></td>\r\n			<td>:</td>\r\n			<td>20 September 2008</td>\r\n		</tr>\r\n		<tr>\r\n			<td>3.</td>\r\n			<td><strong>SK Berdiri</strong></td>\r\n			<td>:</td>\r\n			<td>No. 2245/Kedj/1959</td>\r\n		</tr>\r\n		<tr>\r\n			<td>4.</td>\r\n			<td><strong>NSS Pertama</strong></td>\r\n			<td>:</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>5.</td>\r\n			<td><strong>Alamat Awal Berdiri</strong></td>\r\n			<td>:</td>\r\n			<td>Pekalongan Kec.Ujan Mas Kab.Kepahiang</td>\r\n		</tr>\r\n		<tr>\r\n			<td>6.</td>\r\n			<td><strong>Asal Gedung Awal Berdir</strong>i</td>\r\n			<td>:</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>7.</td>\r\n			<td><strong>Kepala Sekolah</strong></td>\r\n			<td>:</td>\r\n			<td>HELMI JOHAN, M.Pd</td>\r\n		</tr>\r\n		<tr>\r\n			<td>8.</td>\r\n			<td><strong>Kepemimpinan Sekolah</strong></td>\r\n			<td>:</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>Tahun 2008 s.d 2019</td>\r\n			<td>&nbsp;</td>\r\n			<td>Syaiful Amri</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>Tahun 2019 s.d Sekarang</td>\r\n			<td>&nbsp;</td>\r\n			<td>HELMI JOHAN, M.Pd</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `struktur`
--

CREATE TABLE `struktur` (
  `struktur_id` varchar(36) NOT NULL,
  `url_struktur` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `struktur`
--

INSERT INTO `struktur` (`struktur_id`, `url_struktur`) VALUES
('0e45aa60-8c8d-4a40-9316-3e17e633ab07', 'http://localhost/School-website/assets/img/structur.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` varchar(36) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(60) NOT NULL,
  `level` enum('operator','admin','superAdmin') NOT NULL,
  `lastLogin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `nama`, `username`, `password`, `level`, `lastLogin`) VALUES
('07155353-13cc-488b-82e4-d01536627098', 'prisko', 'prisko', '$2y$10$rnHLjt4l3As8QAu/VTRhYuszVCQudI9yFy/I.54sERS1DipOMSRzS', 'operator', '1558335680'),
('82829b15-de76-4cfd-9d32-7939584c70a5', 'reza', 'reza', '$2y$10$VLfbO01GIagiidlHYqLU5eaSvZ46XkZ8V/.KOs/pe0H9ULHS4p/Nu', 'superAdmin', '1595564498'),
('d46d5ae1-7b5a-4594-a9f2-cbf9376be135', 'dian', 'dian', '$2y$10$AVOsSP6fJCnI0O9FYz0bmOQ1sZMyysiimg/dBXlz8psIxmAztK46O', 'admin', '1558408319');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `video_id` varchar(36) NOT NULL,
  `url_video` varchar(100) NOT NULL,
  `post` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`video_id`, `url_video`, `post`) VALUES
('0b608b7b-c5c7-4ca7-9c0e-4b4e7c00989d', 'https://www.youtube.com/embed/fG60N2D26hA?rel=0', '1558431954'),
('7ca0777c-804b-46f6-8661-a7a48ce359da', 'https://www.youtube.com/embed/fG60N2D26hA?rel=0', '1553592899'),
('a1060795-0cd8-42d2-83ae-de814a9d68ec', 'https://www.youtube.com/embed/fG60N2D26hA?rel=0', '1595573185'),
('a585b2aa-7908-4cfa-82f2-8322ae292e90', 'https://www.youtube.com/embed/fG60N2D26hA?rel=0', '1558431950'),
('a88645a0-71ec-42a7-a012-78c9e26a18cc', 'https://www.youtube.com/embed/fG60N2D26hA?rel=0', '1558431940'),
('bbaf767e-5ef0-44c3-b754-dc746ea41348', 'https://www.youtube.com/embed/fG60N2D26hA?rel=0', '1558431944'),
('fca88bfe-2ddf-4436-a3ed-b889073d299e', 'https://www.youtube.com/embed/fG60N2D26hA?rel=0', '1558431947');

-- --------------------------------------------------------

--
-- Table structure for table `visi_misi`
--

CREATE TABLE `visi_misi` (
  `visi_misi_id` varchar(36) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visi_misi`
--

INSERT INTO `visi_misi` (`visi_misi_id`, `visi`, `misi`) VALUES
('be7c3e96-a39a-4a00-931e-96dd08a9ae8d', '<p>SMK Negeri 5 Kepahiang sebagai Sekolah Menengah Kejuruan Negeri yang mempunyai tanggung jawab dan urut andil dalam menjawab tantangan dunia untuk menciptakan tenaga didik yang Mandiri, Terampil dan Berkompetensi yang berwawasan ke depan berlandaskan IMTAQ dan IPTEKg</p>\r\n', '<p>Dalamn rangka mempercepat terwujudnya Indonesia agar dapat sejajar dengan Bangsa - Bangsa maju lainya SMK Negeri 5 Kepahiang juga mempunyai Misi :</p>\r\n\r\n<ol>\r\n	<li>Menerapkan Manajement partisipatif</li>\r\n	<li>Melaksanakan Pembelajaran yang Kondusif</li>\r\n	<li>Melaksanakan Pembelajaran dengan pendekatan ICT dan Pembelajaran dengan model Pakem</li>\r\n	<li>Melaksanakan Kegiatan Imtaq terpadu</li>\r\n	<li>Melaksanakan Pembinaan Kegiatan Ektrakulikuler</li>\r\n	<li>Meningkatkan Kreatifitas, Keterampilan dan Jiwa Wiraswasta</li>\r\n	<li>Meningkatkan Sarana dan Prasarana Sekolah dan Kegiatan 6 K</li>\r\n</ol>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`berita_id`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`fasilitas_id`);

--
-- Indexes for table `file_download`
--
ALTER TABLE `file_download`
  ADD PRIMARY KEY (`file_download_id`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`foto_id`);

--
-- Indexes for table `guru_staf`
--
ALTER TABLE `guru_staf`
  ADD PRIMARY KEY (`guru_staf_id`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`jurusan_id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`komentar_id`),
  ADD KEY `berita_id` (`berita_id`);

--
-- Indexes for table `komentarbalas`
--
ALTER TABLE `komentarbalas`
  ADD PRIMARY KEY (`balas_id`),
  ADD KEY `komentar_id` (`komentar_id`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`kontak_id`);

--
-- Indexes for table `logo_sekolah`
--
ALTER TABLE `logo_sekolah`
  ADD PRIMARY KEY (`logo_sekolah_id`);

--
-- Indexes for table `opening_word`
--
ALTER TABLE `opening_word`
  ADD PRIMARY KEY (`opening_word_id`);

--
-- Indexes for table `pengunguman`
--
ALTER TABLE `pengunguman`
  ADD PRIMARY KEY (`pengunguman_id`);

--
-- Indexes for table `sejarah`
--
ALTER TABLE `sejarah`
  ADD PRIMARY KEY (`sejarah_id`);

--
-- Indexes for table `struktur`
--
ALTER TABLE `struktur`
  ADD PRIMARY KEY (`struktur_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`video_id`);

--
-- Indexes for table `visi_misi`
--
ALTER TABLE `visi_misi`
  ADD PRIMARY KEY (`visi_misi_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`berita_id`) REFERENCES `berita` (`berita_id`) ON UPDATE CASCADE;

--
-- Constraints for table `komentarbalas`
--
ALTER TABLE `komentarbalas`
  ADD CONSTRAINT `komentarbalas_ibfk_1` FOREIGN KEY (`komentar_id`) REFERENCES `komentar` (`komentar_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

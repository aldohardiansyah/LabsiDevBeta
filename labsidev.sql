-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Sep 2018 pada 10.12
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `labsidev`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `aktivitas`
--

CREATE TABLE `aktivitas` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `aktivitas` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `aktivitas`
--

INSERT INTO `aktivitas` (`id`, `id_user`, `aktivitas`, `created_at`) VALUES
(7, 8, 'Aldo Hardiansyah login pada 04 September 2018 jam 17:19', '2018-09-04 10:19:52'),
(9, 30, 'Ana Yulianty login pada 04 September 2018 jam 17:45', '2018-09-04 10:45:50'),
(10, 31, 'Muhammad Aditya Fadhil login pada 04 September 2018 jam 17:52', '2018-09-04 10:52:28'),
(11, 33, 'Arfikriawan Fikri login pada 04 September 2018 jam 17:56', '2018-09-04 10:56:06'),
(12, 18, 'Dimas Raka Setti login pada 04 September 2018 jam 18:00', '2018-09-04 11:00:04'),
(13, 8, 'Aldo Hardiansyah login pada 04 September 2018 jam 18:11', '2018-09-04 11:11:48'),
(14, 8, 'Aldo Hardiansyah login pada 04 September 2018 jam 18:12', '2018-09-04 11:12:21'),
(15, 8, 'Aldo Hardiansyah login pada 05 September 2018 jam 01:20', '2018-09-04 18:20:10'),
(16, 26, 'Esther Elawati login pada 05 September 2018 jam 01:37', '2018-09-04 18:37:28'),
(17, 8, 'Aldo Hardiansyah login pada 05 September 2018 jam 01:40', '2018-09-04 18:40:18'),
(18, 8, 'Aldo Hardiansyah login pada 05 September 2018 jam 09:21', '2018-09-05 02:21:06'),
(19, 8, 'Aldo Hardiansyah login pada 05 September 2018 jam 14:21', '2018-09-05 07:21:57'),
(20, 28, 'Trinada Willya Citra login pada 05 September 2018 jam 14:23', '2018-09-05 07:23:24'),
(21, 8, 'Aldo Hardiansyah login pada 06 September 2018 jam 07:04', '2018-09-06 00:04:46'),
(22, 8, 'Aldo Hardiansyah login pada 08 September 2018 jam 23:21', '2018-09-08 16:21:50'),
(23, 8, 'Aldo Hardiansyah login pada 09 September 2018 jam 00:31', '2018-09-08 17:31:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `asisten`
--

CREATE TABLE `asisten` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `kelas` varchar(6) NOT NULL,
  `npm` varchar(9) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL,
  `kewarganegaraan` varchar(20) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_tlp` varchar(20) NOT NULL,
  `ipk` varchar(5) NOT NULL,
  `kemampuan` text NOT NULL,
  `foto` varchar(50) NOT NULL,
  `cv` varchar(50) NOT NULL,
  `surat` varchar(50) NOT NULL,
  `nilai` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `semester` varchar(10) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `asisten`
--

INSERT INTO `asisten` (`id`, `id_user`, `nama_lengkap`, `kelas`, `npm`, `jabatan`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `kewarganegaraan`, `agama`, `alamat`, `email`, `no_tlp`, `ipk`, `kemampuan`, `foto`, `cv`, `surat`, `nilai`, `created_at`, `semester`, `status`) VALUES
(2, 8, 'Aldo Hardiansyah', '4KA22', '10114761', 'PJ Shift', 'Jakarta', '1996-05-02', 'L', 'WNI', 'Islam', 'Komplek Kejaksaan Agung Blok E.17 Pasar Minggu, Jakarta Selatan', 'aldohardiansyah@gmail.com', '085888114229', '3,33', 'Web Developing, Graphic Design', '10114761.jpg', '10114761cv.pdf', '10114761surat.pdf', '10114761nilai.pdf', '2018-07-26 05:19:00', 'PTA 16/17', 1),
(3, 9, 'Dwi Novitasari', '4KA01', '13114305', 'PJ Shift', 'Jakarta', '1995-11-21', 'P', 'WNI', 'Islam', 'Jl. Pancoran Barat V No. 44B. Rt 006/06. Pacoran. Jakarta Selatan.', 'dwinovitasari21@gmail.com', '081806703670', '3.72', 'mampu membuat sistem dengan ERD, manajemen kegiatan, Graphic Design', '13114305.jpg', '13114305cv.pdf', '13114305surat.pdf', '13114305nilai.pdf', '2018-07-26 05:27:44', 'PTA 16/17', 1),
(9, 17, 'Aditya Eka Pratama', '4KA10', '10114294', 'Ketua Asisten', 'Jakarta', '1997-12-20', 'L', 'WNI', 'Islam', 'Jl Gorda RT 01/01 No 26 Lubang Buaya', 'restuistritua@gmail.com', '087878363766', '3.33', 'Read A Map', '10114294.jpg', '10114294cv.pdf', '10114294surat.pdf', '10114294nilai.pdf', '2018-07-27 15:26:56', 'PTA 16/17', 1),
(10, 18, 'Dimas Raka Setti', '4KA04', '13114119', 'PJ Shift', 'Jakarta', '1996-12-26', 'L', 'WNI', 'Islam', 'Jl. Nurul Ikhsan, Gg.Muammalah V (5), RT 02/03, No.17, Jagakarsa, Jakarta Selatan', 'dimasrakamj313@gmail.com', '087777171325', '3.38', 'Web Developing, Android Develope, 3D Model,  Graphic Design', '13114119.jpg', '13114119cv.pdf', '13114119surat.pdf', '13114119nilai.pdf', '2018-07-27 16:14:38', 'PTA 16/17', 1),
(11, 19, 'Akbar Adhinugroho', '4KA03', '10114689', 'PJ Shift', 'Jakarta', '1996-03-18', 'L', 'WNI', 'Islam', 'Jalan Raya Ciracas Gang Indah RT 10/02 No 24 Ciracas Jakarta Timur', 'akbarnugroho62@gmail.com', '085691935087', '3.46', 'Graphic Design,  Data analyst, 3D Desaign', '10114689.jpg', '10114689cv.pdf', '10114689surat.pdf', '10114689nilai.pdf', '2018-07-27 16:14:44', 'PTA 16/17', 1),
(12, 20, 'Muhammad Arief Setiawan', '4KA20', '17114095', 'PJ Shift', 'Jakarta', '1994-04-30', 'L', 'WNI', 'Islam', 'Jl. M. Alif III No.29F Beji, Depok', 'ariefs58@yahoo.co.id', '087784297095', '3,26', 'HTML, CSS, PHP, C#, C++, C, LaTex, COBOL, Pascal', '17114095.jpg', '17114095cv.pdf', '17114095surat.pdf', '17114095nilai.pdf', '2018-07-27 16:14:50', 'PTA 17/18', 1),
(14, 24, 'Natasya Irani Putri', '4KA01', '17114834', 'Asisten', 'Depok', '1996-11-06', 'P', 'WNI', 'Islam', 'Jl. H. Salim Lingk. Cipayung No.48 RT.07 RW.01 Depok', 'natasyairaniputri@Gmail.com', '085710001137', '3,65', 'Pascal, Cobol, HTML, PHP, C, MYSQL', '17114834.jpg', '17114834cv.pdf', '17114834surat.pdf', '17114834nilai.pdf', '2018-07-28 09:17:32', 'PTA 17/18', 1),
(15, 25, 'Nando Putra Pratama', '4KA01', '17114811', 'Ketua Asisten', 'Bogor', '1996-06-26', 'L', 'WNI', 'Islam', 'Jl. Berkah No.26 Bogor', 'nandoputrap@gmail.com', '085716513806', '3.5', 'Web Developer, Graphic Designer, Writing', '17114811.jpg', '17114811cv.pdf', '17114811surat.pdf', '17114811nilai.pdf', '2018-07-28 09:20:25', 'PTA 17/18', 1),
(16, 26, 'Esther Elawati', '4KA01', '13114664', 'Ketua Asisten', 'Jakarta', '1996-09-26', 'P', 'WNI', 'Kristen', 'Jl. Sepakat Lubang Buaya TMII RT.08/01, Jakarta Timur', 'estherelawati@gmail.com', '081381343401', '3.78', 'Pascal, Cobol, HTML, PHP, C, MYSQL', '13114664.jpg', '13114664cv.pdf', '13114664surat.pdf', '13114664nilai.pdf', '2018-07-28 15:55:48', 'PTA 16/17', 1),
(17, 27, 'Albertus Dwi Septianto', '3IA14', '50415451', 'Ketua Asisten', 'Jakarta', '1996-09-17', 'L', 'WNI', 'Katolik', 'Jl. Rawa Kepa XI No.116, Jakarta Barat', 'AlbertusDwiSeptianto@gmail.com', '085773232623', '3.78', 'Pascal, Delphi, MySQL, C', '50415451.jpg', '50415451cv.pdf', '50415451surat.pdf', '50415451nilai.pdf', '2018-07-29 10:41:17', 'PTA 17/18', 1),
(18, 28, 'Trinada Willya Citra', '4KA01', '1A114872', 'Asisten', 'Bukittinggi', '1995-07-18', 'P', 'WNI', 'Islam', 'Kos Griya Ardine Jl. Salak No. 9A, Depok', 'trinadacitra@gmail.com', '085263232260', '3.72', 'Pascal, Internet, Cobol, HTML, MySQL, PHP, C', '1A114872.jpg', '1A114872cv.pdf', '1A114872surat.pdf', '1A114872nilai.pdf', '2018-08-02 07:21:47', 'PTA 17/18', 1),
(20, 30, 'Ana Yulianty', '4KA15', '10114982', 'PJ Shift', 'Bogor', '1995-07-19', 'P', 'WNI', 'Islam', 'Jalan Akses UI No.19 Depok', 'anna.yulianty@ymail.com', '085718200205', '3.52', 'Android Developer, Website Developer', '10114982.jpg', '10114982cv.pdf', '10114982surat.pdf', '10114982nilai.pdf', '2018-09-04 17:44:13', 'ATA 16/17', 1),
(21, 31, 'Muhammad Aditya Fadhil', '3KA16', '14115459', 'Ketua Asisten', 'Bogor', '1997-07-27', 'L', 'WNI', 'Islam', 'Jl. MT. Almansturiah No.43 Kabupaten Bogor', 'madityafadhil@gmail.com', '082298912497', '3.60', 'Pacal, Cobol, HTML, PHP C, Delphi', '14115459.jpg', '14115459cv.pdf', '14115459surat.pdf', '14115459nilai.pdf', '2018-09-04 17:44:48', 'ATA 16/17', 1),
(22, 32, 'Wahid Khairul Anam', '4KA21', '1C114115', 'Asisten', 'Jakarta', '1996-06-15', 'L', 'WNI', 'Islam', 'Villa pertiwi blok Q2 no.1', 'anamwahid87@gmail.com', '082211077259', '3,27', 'Web Developer, Web Designer, Motion Graphic', '1C114115.jpg', '1C114115cv.pdf', '1C114115surat.pdf', '1C114115nilai.pdf', '2018-09-04 17:49:51', 'PTA 17/18', 1),
(23, 33, 'Arfikriawan Fikri', '4KA04', '10115950', 'Asisten', 'Depok', '1997-03-17', 'L', 'WNI', 'Islam', 'Jl. Raden Saleh RT.01 RW.06 Depok 16412', 'Arfikriawan@Gmail.com', '081315055517', '3.08', 'Pascal, C, Windows, MySQL', '10115950.jpg', '10115950cv.pdf', '10115950surat.pdf', '10115950nilai.pdf', '2018-09-04 17:50:13', 'ATA 17/18', 1),
(24, 34, 'Muhammad Luthfi Tamani', '4KA04', '14115696', 'Asisten', 'Jakarta', '1997-02-26', 'L', 'WNI', 'Islam', 'Komplek DKI Blok Q1 No.25, Jakarta Timur', 'mluthfitamani@gmail.com', '083873650505', '3.49', 'Pascal, Cobol, HTML, PHP, C, MYSQL', '14115696.jpg', '14115696cv.pdf', '14115696surat.pdf', '14115696nilai.pdf', '2018-09-04 17:50:19', 'ATA 17/18', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `catatan`
--

CREATE TABLE `catatan` (
  `id` int(11) NOT NULL,
  `id_asisten` int(11) NOT NULL,
  `jenis_catatan` varchar(50) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi`
--

CREATE TABLE `informasi` (
  `id` int(11) NOT NULL,
  `judul` varchar(150) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `slug` varchar(300) NOT NULL,
  `kategori` varchar(10) NOT NULL,
  `id_user` int(11) NOT NULL,
  `isi` text NOT NULL,
  `tgl_buat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `informasi`
--

INSERT INTO `informasi` (`id`, `judul`, `photo`, `slug`, `kategori`, `id_user`, `isi`, `tgl_buat`) VALUES
(1, 'Daftar Ulang Asisten untuk Periode Bertugas PTA 18/19 Dibuka !', 'info.jpg', 'Poses Daftar Ulang Asisten untuk periode bertugas PTA 18/19 dibuka', 'Asisten', 1, '<p>Poses Daftar Ulang Asisten untuk periode bertugas PTA 18/19 dibuka, daftar ulang dapat dilakukan dari menu dashboard masing-masing.\r\nDaftar ulang akan ditutup pada tanggal 30 Juli 2018</p>', '2018-07-28 20:21:13'),
(2, 'Praktikum Pengganti 4KA22', 'info.jpg', 'Praktikum Pengganti 4KA22', 'Public', 1, '<p>Sehubungan dengan hari libur pada tanggal 10 Juli 2018, maka untuk praktikum pengganti kelas 4KA22 akan diadakan pada hari Kamis 12 Juli 2018 di Laboratorium E431 Universitas Gunadarma.</p>', '2018-07-28 20:37:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `isian_jadwal_asisten`
--

CREATE TABLE `isian_jadwal_asisten` (
  `id` int(11) NOT NULL,
  `id_asisten` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `jabatan` varchar(25) NOT NULL,
  `senin` varchar(11) NOT NULL DEFAULT '0',
  `selasa` varchar(11) NOT NULL DEFAULT '0',
  `rabu` varchar(11) NOT NULL DEFAULT '0',
  `kamis` varchar(11) NOT NULL DEFAULT '0',
  `jumat` varchar(11) NOT NULL DEFAULT '0',
  `sabtu` varchar(11) NOT NULL DEFAULT '0',
  `minggu` varchar(11) NOT NULL DEFAULT '0',
  `semester` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `isian_jadwal_asisten`
--

INSERT INTO `isian_jadwal_asisten` (`id`, `id_asisten`, `nama_lengkap`, `jabatan`, `senin`, `selasa`, `rabu`, `kamis`, `jumat`, `sabtu`, `minggu`, `semester`) VALUES
(1, 2, 'Aldo Hardiansyah', 'PJ Shift', '123', '345', '0', '0', '245', '0', '0', 'ATA 17/18'),
(2, 14, 'Natasya Irani Putri', 'Asisten', '1234', '1234', '1234', '1234', '1234', '1234', '1234', 'ATA 17/18'),
(3, 9, 'Aditya Eka Pratama', 'Ketua Asisten', '1234', '1234', '1234', '1234', '1234', '1234', '1234', 'ATA 17/18'),
(6, 18, 'Trinada Willya Citra', 'Asisten', '12', '456', '123456', '23', '25', '15', '12345', 'Genap');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_asisten`
--

CREATE TABLE `jadwal_asisten` (
  `id` int(11) NOT NULL,
  `id_jadwalpraktikum` int(11) NOT NULL,
  `id_asisten` int(11) NOT NULL,
  `jabatan_tugas` varchar(25) NOT NULL,
  `semester` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_praktikum`
--

CREATE TABLE `jadwal_praktikum` (
  `id` int(11) NOT NULL,
  `id_praktikum` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_lab` int(11) NOT NULL,
  `hari` varchar(25) NOT NULL,
  `shift` varchar(2) NOT NULL,
  `jam_mulai` varchar(25) NOT NULL,
  `jam_selesai` varchar(25) NOT NULL,
  `semester` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal_praktikum`
--

INSERT INTO `jadwal_praktikum` (`id`, `id_praktikum`, `id_kelas`, `id_lab`, `hari`, `shift`, `jam_mulai`, `jam_selesai`, `semester`) VALUES
(2, 2, 1, 1, 'Senin', '3', '12:00', '14:00', 'ATA 17/18'),
(3, 2, 3, 2, 'Kamis', '3', '12:00', '14:00', 'ATA 17/18'),
(4, 2, 5, 3, 'Jumat', '4', '14:00', '16:00', 'ATA 17/18'),
(5, 1, 20, 4, 'Senin', '3', '12:00', '14:00', 'ATA 17/18'),
(6, 4, 21, 4, 'Senin', '1', '08:00', '10:00', 'ATA 17/18'),
(7, 2, 2, 2, 'Selasa', '2', '10:00', '12:00', 'ATA 17/18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(11) NOT NULL,
  `kode_jurusan` varchar(25) NOT NULL,
  `jurusan` varchar(25) NOT NULL,
  `fakultas` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id`, `kode_jurusan`, `jurusan`, `fakultas`) VALUES
(1, 'KA', 'Sistem Informasi', 'Fakultas Ilmu Komputer dan Teknologi Informasi'),
(2, 'KB', 'Sistem Komputer', 'Fakultas Ilmu Komputer dan Teknologi Informasi'),
(3, 'DB', 'Manajemen Informatika', 'Fakultas Ilmu Komputer dan Teknologi Informasi'),
(5, 'DC', 'Manajemen Komputer', 'Fakultas Ilmu Komputer dan Teknologi Informasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `kelas` varchar(6) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `kampus` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id`, `kelas`, `id_jurusan`, `kampus`) VALUES
(1, '1KA01', 1, 'Depok'),
(2, '1KA02', 1, 'Depok'),
(3, '1KA03', 1, 'Depok'),
(5, '1KA04', 1, 'Depok'),
(6, '1KA05', 1, 'Depok'),
(7, '1KA06', 1, 'Depok'),
(8, '1KA07', 1, 'Depok'),
(9, '1KA08', 1, 'Depok'),
(10, '1KA09', 1, 'Depok'),
(11, '1KA10', 1, 'Depok'),
(12, '1KA11', 1, 'Depok'),
(13, '1KA12', 1, 'Depok'),
(14, '1KA13', 1, 'Depok'),
(15, '1KA14', 1, 'Depok'),
(16, '1KA15', 1, 'Depok'),
(17, '1KA16', 1, 'Depok'),
(18, '1KA17', 1, 'Depok'),
(19, '1KA18', 1, 'Depok'),
(20, '4KA01', 1, 'Depok'),
(21, '4KA02', 1, 'Depok'),
(22, '4KA03', 1, 'Depok'),
(23, '4KA04', 1, 'Depok');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laboratorium`
--

CREATE TABLE `laboratorium` (
  `id` int(11) NOT NULL,
  `laboratorium` varchar(25) NOT NULL,
  `kampus` varchar(25) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `laboratorium`
--

INSERT INTO `laboratorium` (`id`, `laboratorium`, `kampus`, `keterangan`) VALUES
(1, 'E531', 'E', 'Kampus E, Gedung 5, Lantai 3, Ruangan 1'),
(2, 'E533', 'E', 'Kampus E, Gedung 5, Lantai 3, Ruangan 3'),
(3, 'E532', 'E', 'Kampus E, Gedung 5, Lantai 3, Ruang 2'),
(4, 'H408', 'H', 'Kampus H Lantai 4 Ruangan 8'),
(5, 'H409', 'H', 'Kampus H Lantai 4 Ruangan 9');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu_aktif`
--

CREATE TABLE `menu_aktif` (
  `id` int(11) NOT NULL,
  `menu` varchar(25) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menu_aktif`
--

INSERT INTO `menu_aktif` (`id`, `menu`, `status`) VALUES
(1, 'Pendaftaran Asisten Baru', '1'),
(2, 'Daftar Ulang Asisten', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran_asisten`
--

CREATE TABLE `pendaftaran_asisten` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `kelas` varchar(6) NOT NULL,
  `npm` varchar(9) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL,
  `kewarganegaraan` varchar(20) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_tlp` varchar(20) NOT NULL,
  `ipk` varchar(5) NOT NULL,
  `kemampuan` text NOT NULL,
  `foto` varchar(50) NOT NULL,
  `cv` varchar(50) NOT NULL,
  `surat` varchar(50) NOT NULL,
  `nilai` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `semester` varchar(10) NOT NULL,
  `status` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendaftaran_asisten`
--

INSERT INTO `pendaftaran_asisten` (`id`, `nama_lengkap`, `kelas`, `npm`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `kewarganegaraan`, `agama`, `alamat`, `email`, `no_tlp`, `ipk`, `kemampuan`, `foto`, `cv`, `surat`, `nilai`, `created_at`, `updated_at`, `semester`, `status`) VALUES
(1, 'Aldo Hardiansyah', '4KA22', '10114761', 'Jakarta', '1996-05-02', 'L', 'WNI', 'Islam', 'Komplek Kejaksaan Agung Blok E.17 Pasar Minggu, Jakarta Selatan', 'aldohardiansyah@gmail.com', '085888114229', '3,33', 'Web Developing, Graphic Design', '10114761.jpg', '10114761cv.pdf', '10114761surat.pdf', '10114761nilai.pdf', '2018-07-28 15:43:59', '2018-07-28 15:43:59', 'PTA 16/17', 'Diterima'),
(2, 'Dimas Raka Setti', '4KA04', '13114119', 'Jakarta', '1996-12-26', 'L', 'WNI', 'Islam', 'Jl. Nurul Ikhsan, Gg.Muammalah V (5), RT 02/03, No.17, Jagakarsa, Jakarta Selatan', 'dimasrakamj313@gmail.com', '087777171325', '3.38', 'Web Developing, Android Develope, 3D Model,  Graphic Design', '13114119.jpg', '13114119cv.pdf', '13114119surat.pdf', '13114119nilai.pdf', '2018-07-28 15:43:59', '2018-07-28 15:43:59', 'PTA 16/17', 'Diterima'),
(3, 'Akbar Adhinugroho', '4KA03', '10114689', 'Jakarta', '1996-03-18', 'L', 'WNI', 'Islam', 'Jalan Raya Ciracas Gang Indah RT 10/02 No 24 Ciracas Jakarta Timur', 'akbarnugroho62@gmail.com', '085691935087', '3.46', 'Graphic Design,  Data analyst, 3D Desaign', '10114689.jpg', '10114689cv.pdf', '10114689surat.pdf', '10114689nilai.pdf', '2018-07-28 15:43:59', '2018-07-28 15:43:59', 'PTA 16/17', 'Diterima'),
(4, 'Muhammad Arief Setiawan', '4KA20', '17114095', 'Jakarta', '1994-04-30', 'L', 'WNI', 'Islam', 'Jl. M. Alif III No.29F Beji, Depok', 'ariefs58@yahoo.co.id', '087784297095', '3,26', 'HTML, CSS, PHP, C#, C++, C, LaTex, COBOL, Pascal', '17114095.jpg', '17114095cv.pdf', '17114095surat.pdf', '17114095nilai.pdf', '2018-07-27 16:14:50', '2018-07-27 09:14:50', 'PTA 17/18', 'Diterima'),
(5, 'Dwi Novitasari', '4KA01', '13114305', 'Jakarta', '1995-11-21', 'P', 'WNI', 'Islam', 'Jl. Pancoran Barat V No. 44B. Rt 006/06. Pacoran. Jakarta Selatan.', 'dwinovitasari21@gmail.com', '081806703670', '3.72', 'mampu membuat sistem dengan ERD, manajemen kegiatan, Graphic Design', '13114305.jpg', '13114305cv.pdf', '13114305surat.pdf', '13114305nilai.pdf', '2018-07-28 15:43:59', '2018-07-28 15:43:59', 'PTA 16/17', 'Diterima'),
(6, 'Natasya Irani Putri', '4KA01', '17114834', 'Depok', '1996-11-06', 'P', 'WNI', 'Islam', 'Jl. H. Salim Lingk. Cipayung No.48 RT.07 RW.01 Depok', 'natasyairaniputri@Gmail.com', '085710001137', '3,65', 'Pascal, Cobol, HTML, PHP, C, MYSQL', '17114834.jpg', '17114834cv.pdf', '17114834surat.pdf', '17114834nilai.pdf', '2018-07-28 09:17:32', '2018-07-28 02:17:32', 'PTA 17/18', 'Diterima'),
(7, 'Nando Putra Pratama', '4KA01', '17114811', 'Bogor', '1996-06-26', 'L', 'WNI', 'Islam', 'Jl. Berkah No.26 Bogor', 'nandoputrap@gmail.com', '085716513806', '3.5', 'Web Developer, Graphic Designer, Writing', '17114811.jpg', '17114811cv.pdf', '17114811surat.pdf', '17114811nilai.pdf', '2018-07-28 09:20:25', '2018-07-28 02:20:25', 'PTA 17/18', 'Diterima'),
(8, 'Wahid Khairul Anam', '4KA21', '1C114115', 'Jakarta', '1996-06-15', 'L', 'WNI', 'Islam', 'Villa pertiwi blok Q2 no.1', 'anamwahid87@gmail.com', '082211077259', '3,27', 'Web Developer, Web Designer, Motion Graphic', '1C114115.jpg', '1C114115cv.pdf', '1C114115surat.pdf', '1C114115nilai.pdf', '2018-09-04 17:49:51', '2018-09-04 10:49:51', 'PTA 17/18', 'Diterima'),
(9, 'Aditya Eka Pratama', '4KA10', '10114294', 'Jakarta', '1997-12-20', 'L', 'WNI', 'Islam', 'Jl Gorda RT 01/01 No 26 Lubang Buaya', 'restuistritua@gmail.com', '087878363766', '3.33', 'Read A Map', '10114294.jpg', '10114294cv.pdf', '10114294surat.pdf', '10114294nilai.pdf', '2018-07-28 15:43:59', '2018-07-28 15:43:59', 'PTA 16/17', 'Diterima'),
(10, 'Muhammad Luthfi Tamani', '4KA04', '14115696', 'Jakarta', '1997-02-26', 'L', 'WNI', 'Islam', 'Komplek DKI Blok Q1 No.25, Jakarta Timur', 'mluthfitamani@gmail.com', '083873650505', '3.49', 'Pascal, Cobol, HTML, PHP, C, MYSQL', '14115696.jpg', '14115696cv.pdf', '14115696surat.pdf', '14115696nilai.pdf', '2018-09-04 17:50:19', '2018-09-04 10:50:19', 'ATA 17/18', 'Diterima'),
(11, 'Arfikriawan Fikri', '4KA04', '10115950', 'Depok', '1997-03-17', 'L', 'WNI', 'Islam', 'Jl. Raden Saleh RT.01 RW.06 Depok 16412', 'Arfikriawan@Gmail.com', '081315055517', '3.08', 'Pascal, C, Windows, MySQL', '10115950.jpg', '10115950cv.pdf', '10115950surat.pdf', '10115950nilai.pdf', '2018-09-04 17:50:13', '2018-09-04 10:50:13', 'ATA 17/18', 'Diterima'),
(12, 'Muhammad Aditya Fadhil', '3KA16', '14115459', 'Bogor', '1997-07-27', 'L', 'WNI', 'Islam', 'Jl. MT. Almansturiah No.43 Kabupaten Bogor', 'madityafadhil@gmail.com', '082298912497', '3.60', 'Pacal, Cobol, HTML, PHP C, Delphi', '14115459.jpg', '14115459cv.pdf', '14115459surat.pdf', '14115459nilai.pdf', '2018-09-04 17:44:48', '2018-09-04 10:44:48', 'ATA 16/17', 'Diterima'),
(13, 'Albertus Dwi Septianto', '3IA14', '50415451', 'Jakarta', '1996-09-17', 'L', 'WNI', 'Katolik', 'Jl. Rawa Kepa XI No.116, Jakarta Barat', 'AlbertusDwiSeptianto@gmail.com', '085773232623', '3.78', 'Pascal, Delphi, MySQL, C', '50415451.jpg', '50415451cv.pdf', '50415451surat.pdf', '50415451nilai.pdf', '2018-07-29 10:41:17', '2018-07-29 03:41:17', 'PTA 17/18', 'Diterima'),
(14, 'Esther Elawati', '4KA01', '13114664', 'Jakarta', '1996-09-26', 'P', 'WNI', 'Kristen', 'Jl. Sepakat Lubang Buaya TMII RT.08/01, Jakarta Timur', 'estherelawati@gmail.com', '081381343401', '3.78', 'Pascal, Cobol, HTML, PHP, C, MYSQL', '13114664.jpg', '13114664cv.pdf', '13114664surat.pdf', '13114664nilai.pdf', '2018-07-28 15:55:48', '2018-07-28 08:55:48', 'PTA 16/17', 'Diterima'),
(15, 'Trinada Willya Citra', '4KA01', '1A114872', 'Bukittinggi', '1995-07-18', 'P', 'WNI', 'Islam', 'Kos Griya Ardine Jl. Salak No. 9A, Depok', 'trinadacitra@gmail.com', '085263232260', '3.72', 'Pascal, Internet, Cobol, HTML, MySQL, PHP, C', '1A114872.jpg', '1A114872cv.pdf', '1A114872surat.pdf', '1A114872nilai.pdf', '2018-08-02 07:21:47', '2018-08-02 00:21:47', 'PTA 17/18', 'Diterima'),
(17, 'Ana Yulianty', '4KA15', '10114982', 'Bogor', '1995-07-19', 'P', 'WNI', 'Islam', 'Jalan Akses UI No.19 Depok', 'anna.yulianty@ymail.com', '085718200205', '3.52', 'Android Developer, Website Developer', '10114982.jpg', '10114982cv.pdf', '10114982surat.pdf', '10114982nilai.pdf', '2018-09-04 17:51:21', '2018-09-04 17:51:21', 'PTA 16/17', 'Diterima');

-- --------------------------------------------------------

--
-- Struktur dari tabel `praktikum`
--

CREATE TABLE `praktikum` (
  `id` int(11) NOT NULL,
  `kode_matkul` varchar(10) NOT NULL,
  `matkul` varchar(100) NOT NULL,
  `kode_praktikum` varchar(10) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `tingkat` varchar(4) NOT NULL,
  `materi` text NOT NULL,
  `semester` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `praktikum`
--

INSERT INTO `praktikum` (`id`, `kode_matkul`, `matkul`, `kode_praktikum`, `id_jurusan`, `tingkat`, `materi`, `semester`) VALUES
(1, 'AK011211', 'Pemrograman Berbasis Web', 'PBW', 1, '4KA', 'https://drive.google.com/open?id=1YyUDVMG7aWUEC3xLI87L9xMODFsX3SgS', 'PTA'),
(2, 'IT011222', 'Sistem Berbasis Pengetahuan', 'SBP', 1, '3KA', 'https://drive.google.com/open?id=1vxqMI224eA-snBcOe7sqhIDOIKkdvOIq', 'PTA'),
(3, 'IT011316', 'Pengantar Teknologi Sistem Informasi', 'PTSI', 1, '1KA', 'https://drive.google.com/open?id=1bxb9O4ZCtOMwCSIiuzW28f4MlBaN0113', 'ATA'),
(4, 'PB013202', 'Pemrograman Berbasis Web', 'PBW', 3, '3DB', 'https://drive.google.com/open?id=1YyUDVMG7aWUEC3xLI87L9xMODFsX3SgS', 'PTA'),
(5, 'AK011204', 'Grafik Komputer dan Pengolahan Citra', 'GKPC', 1, '3KA', 'https://drive.google.com/open?id=1O3ZCmTtxhlwWMlzyaGq8AKieOwlEqHrZ', 'PTA'),
(6, 'AK011305', 'Interaksi Manusia dan Komputer ', 'IMK', 1, '3KA', 'https://drive.google.com/open?id=1L9I5ZNkaHJaZBqEkw8UabxAK_DlTwUc0', 'PTA'),
(9, 'AK011318', 'Sistem Basis Data 2', 'SBD 2', 1, '3KA', 'https://drive.google.com/open?id=1JZugBTQr94hSmyeP8vlqRBpm0zg2g4DD', 'ATA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `resign`
--

CREATE TABLE `resign` (
  `id` int(11) NOT NULL,
  `id_biodata` int(11) NOT NULL,
  `alasan` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `semester`
--

CREATE TABLE `semester` (
  `id` int(11) NOT NULL,
  `semester` varchar(7) NOT NULL,
  `tahun_ajaran` varchar(20) NOT NULL,
  `kode_semester` varchar(10) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `semester`
--

INSERT INTO `semester` (`id`, `semester`, `tahun_ajaran`, `kode_semester`, `status`) VALUES
(8, 'Genap', '2016/2017', 'ATA 16/17', 0),
(9, 'Ganjil', '2017/2018', 'PTA 17/18', 0),
(14, 'Genap', '2017/2018', 'ATA 17/18', 1),
(15, 'Ganjil', '2018/2019', 'PTA 18/19', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ava` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `role`, `password`, `remember_token`, `ava`, `created_at`, `updated_at`) VALUES
(1, 'Admin Staff', 'adminstaff', 'Staff', '$2y$12$mTKw0IxbEH4YW8TuxjeguuzaPtDpW/am0591rAoWGg09Er7hYp34.', '2M0PNPZ6Gt9uPkwvD9HG2wCCIRgJdOdhK5bfl9qKuY0PKHeHBdJKnUzcZae6', 'gundar.jpg', '2018-04-30 17:00:00', NULL),
(8, 'Aldo Hardiansyah', '10114761', 'PJ Shift', '$2y$10$l/lfu9DOEMH.36TFI3ucBe6tVRRZL3rWJW9GR1Zm5js0L.4WFFjOq', 'ZJaXxq9MR8vS7f8oRak9CEvsSPbDzPYvvDAet3FNJsawRVz8ex64DyLzWPLW', '10114761.jpg', '2018-07-25 22:19:00', '2018-07-25 22:19:00'),
(9, 'Dwi Novitasari', '13114305', 'Asisten', '$2y$10$E12EHimY864NZaJ1X/d9Ge8iwMXep4dzAfS7ezsW80EpJCTECSCsu', 'ws9S6zd0Ig26LKVKUXUWOhJJ6AdE1og81t5qwr0i6QphvUS8Qgpmui5a8cxC', '13114305.jpg', '2018-07-25 22:27:44', '2018-07-25 22:27:44'),
(17, 'Aditya Eka Pratama', '10114294', 'Asisten', '$2y$10$sX3pP66uFKluKeuSNMjLvOaL2sDIPoXhOFJU.DLFPZeB81Uj/STh.', '7fHorJBTN5ZmvdbeGNVQKPJpkIkSvN2manYSyUz4vfLbDhIrJrUA7X0cKqdY', '10114294.jpg', '2018-07-27 08:26:56', '2018-07-27 08:26:56'),
(18, 'Dimas Raka Setti', '13114119', 'Asisten', '$2y$10$ZryEgTiab7EACgcOlbN3wO/TffF2PBl.rBGJz1FvCpqktFHIe9una', '8rfGCNHR4S6zwgrsBm5EmiY05tCso34Dl7VeXXlUtLzL60UgmS1OBGBmikm1', '13114119.jpg', '2018-07-27 09:14:38', '2018-07-27 09:14:38'),
(19, 'Akbar Adhinugroho', '10114689', 'Asisten', '$2y$10$pdSk8riPrQ2BfCskrQ2.r.mUhZESPPzROovWBC6Cg8s43E1MK2RTS', NULL, '10114689.jpg', '2018-07-27 09:14:44', '2018-07-27 09:14:44'),
(20, 'Muhammad Arief Setiawan', '17114095', 'Asisten', '$2y$10$DWBlnGTTlhZUiYXX/Hn0LuxCfHRkWk5XpRRGDdp/8P6jxAMql9Lb6', NULL, '17114095.jpg', '2018-07-27 09:14:50', '2018-07-27 09:14:50'),
(24, 'Natasya Irani Putri', '17114834', 'Asisten', '$2y$10$CrbYk4X95txfxdJtR42/9eYw3TPNtbwkVx0Ux4LotkxWqQ1Ho9JbK', 'O1pgDwgvQB96efpXEp9IIgHFn3oB3dDPl9fcL5PtL3vu4IdZn7DL98xYYzV3', '17114834.jpg', '2018-07-28 02:17:32', '2018-07-28 02:17:32'),
(25, 'Nando Putra Pratama', '17114811', 'Asisten', '$2y$10$T6w9fZDFBnfGJ2vPq4In6.65amIlQt89QmhKtcz7HwHD8CIH4vgDm', NULL, '17114811.jpg', '2018-07-28 02:20:25', '2018-07-28 02:20:25'),
(26, 'Esther Elawati', '13114664', 'Asisten', '$2y$10$uxFzysoALFGGA9UECVVHHeS953deSyYeiOH0h2FlK25ec0vlYItri', NULL, '13114664.jpg', '2018-07-28 08:55:47', '2018-09-05 07:22:41'),
(27, 'Albertus Dwi Septianto', '50415451', 'Asisten', '$2y$10$SXt9ft3QaSmaD1zQcTFs2O.w2COsu5zV3/zha8QAwXFzOyE/JrYsu', NULL, '50415451.jpg', '2018-07-29 03:41:17', '2018-09-05 07:22:19'),
(28, 'Trinada Willya Citra', '1A114872', 'Asisten', '$2y$10$6OZPacXEuxxkbAOitxNNVOUiV4bEnIg/xiqpZbouoNNGnM5zK/ZtC', NULL, '1A114872.jpg', '2018-08-02 00:21:47', '2018-08-02 00:21:47'),
(30, 'Ana Yulianty', '10114982', 'PJ Shift', '$2y$10$LxMB0j4pdkNActyITyCMguE4rWcwtzvWknqMaiAFJ9lN1oYJpl5CC', '27OKqUluB4raKmQUv6kQQO72JVSQ23G5aN5zsiGWtiCns0skyuthStbw87Qr', '10114982.jpg', '2018-09-04 10:44:13', '2018-09-04 18:44:05'),
(31, 'Muhammad Aditya Fadhil', '14115459', 'Asisten', '$2y$10$DOuRdJ/qXJYJGYYQE4AOnOjzFb4qbTcBkReKhOrPT3KrCE0HJuELy', 'dlfB7CwxQaoywbb74BMVLbb1maIUsjY8rLWKQujaT2CnBXynUwp1J76uFXns', '14115459.jpg', '2018-09-04 10:44:48', '2018-09-05 07:22:31'),
(32, 'Wahid Khairul Anam', '1C114115', 'Asisten', '$2y$10$0OOjNmKnnIkx1go1fj/FKukF0IdgxkYhf6GOOsACXyXlRfVjCEr4G', NULL, '1C114115.jpg', '2018-09-04 10:49:51', '2018-09-04 10:49:51'),
(33, 'Arfikriawan Fikri', '10115950', 'Asisten', '$2y$10$wLPdCMmOtBYBayEviBkVoOv47ZN9KZTG6EB2eN34mtpEBtQGZ1hdu', 'NYu8GTrAdBPqmkqInIxQ4A0XU5q97XnBnnotQmwi6pFEUUBgx4AhxFDhHQrb', '10115950.jpg', '2018-09-04 10:50:13', '2018-09-04 10:50:13'),
(34, 'Muhammad Luthfi Tamani', '14115696', 'Asisten', '$2y$10$kc2kYg7XiZezkzCfz87xOu7NZW11nJ.e4bzyV3k.HpIWiw4xJzLmW', NULL, '14115696.jpg', '2018-09-04 10:50:19', '2018-09-04 10:50:19');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `aktivitas`
--
ALTER TABLE `aktivitas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `asisten`
--
ALTER TABLE `asisten`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `catatan`
--
ALTER TABLE `catatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `isian_jadwal_asisten`
--
ALTER TABLE `isian_jadwal_asisten`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jadwal_asisten`
--
ALTER TABLE `jadwal_asisten`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jadwal_praktikum`
--
ALTER TABLE `jadwal_praktikum`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `laboratorium`
--
ALTER TABLE `laboratorium`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `menu_aktif`
--
ALTER TABLE `menu_aktif`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pendaftaran_asisten`
--
ALTER TABLE `pendaftaran_asisten`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `praktikum`
--
ALTER TABLE `praktikum`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `resign`
--
ALTER TABLE `resign`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `aktivitas`
--
ALTER TABLE `aktivitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `asisten`
--
ALTER TABLE `asisten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `catatan`
--
ALTER TABLE `catatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `isian_jadwal_asisten`
--
ALTER TABLE `isian_jadwal_asisten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `jadwal_asisten`
--
ALTER TABLE `jadwal_asisten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jadwal_praktikum`
--
ALTER TABLE `jadwal_praktikum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `laboratorium`
--
ALTER TABLE `laboratorium`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `menu_aktif`
--
ALTER TABLE `menu_aktif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran_asisten`
--
ALTER TABLE `pendaftaran_asisten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `praktikum`
--
ALTER TABLE `praktikum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `resign`
--
ALTER TABLE `resign`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `semester`
--
ALTER TABLE `semester`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2022 at 03:55 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan_futri`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_anggota`
--

CREATE TABLE `tabel_anggota` (
  `id_anggota` int(5) NOT NULL,
  `nama_anggota` varchar(50) NOT NULL,
  `jenis_kelamin` enum('l','p') NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_anggota`
--

INSERT INTO `tabel_anggota` (`id_anggota`, `nama_anggota`, `jenis_kelamin`, `alamat`, `no_hp`) VALUES
(12239, 'melinda', 'p', 'futri', '08359424249'),
(12240, 'melinda', 'p', 'ggfhfddd', '09788895');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_buku`
--

CREATE TABLE `tabel_buku` (
  `id_buku` int(7) NOT NULL,
  `isbn` varchar(30) NOT NULL,
  `nama_buku` varchar(50) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `tahun terbit` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_pegawai`
--

CREATE TABLE `tabel_pegawai` (
  `id_pegawai` int(5) NOT NULL,
  `Nama_pegawai` varchar(50) NOT NULL,
  `jenis_kelamin` enum('l','p') NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `jabatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_pegawai`
--

INSERT INTO `tabel_pegawai` (`id_pegawai`, `Nama_pegawai`, `jenis_kelamin`, `alamat`, `no_hp`, `jabatan`) VALUES
(1254, 'dila', 'p', 'cikanyere', '0321565', 'osis');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_transaksi`
--

CREATE TABLE `tabel_transaksi` (
  `id_transaksi` int(5) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `id_anggota` int(5) NOT NULL,
  `id_pegawai` int(5) NOT NULL,
  `id_buku` int(7) NOT NULL,
  `quantity` int(2) NOT NULL,
  `jenis_transaksi` enum('pinjam','kembali') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_transaksi`
--

INSERT INTO `tabel_transaksi` (`id_transaksi`, `tanggal_transaksi`, `id_anggota`, `id_pegawai`, `id_buku`, `quantity`, `jenis_transaksi`) VALUES
(1255, '2021-02-08', 12234, 1253, 25366, 2, 'pinjam');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_user`
--

CREATE TABLE `tabel_user` (
  `id_user` int(5) NOT NULL,
  `id_pegawai` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `dibuatpada` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_user`
--

INSERT INTO `tabel_user` (`id_user`, `id_pegawai`, `username`, `password`, `level`, `dibuatpada`) VALUES
(12233, 1253, 'amar zoni', '152667', 2, '2021-02-02 22:44:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_anggota`
--
ALTER TABLE `tabel_anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `tabel_buku`
--
ALTER TABLE `tabel_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `tabel_pegawai`
--
ALTER TABLE `tabel_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `tabel_transaksi`
--
ALTER TABLE `tabel_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `tabel_user`
--
ALTER TABLE `tabel_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_anggota`
--
ALTER TABLE `tabel_anggota`
  MODIFY `id_anggota` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12242;

--
-- AUTO_INCREMENT for table `tabel_buku`
--
ALTER TABLE `tabel_buku`
  MODIFY `id_buku` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25367;

--
-- AUTO_INCREMENT for table `tabel_pegawai`
--
ALTER TABLE `tabel_pegawai`
  MODIFY `id_pegawai` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1255;

--
-- AUTO_INCREMENT for table `tabel_transaksi`
--
ALTER TABLE `tabel_transaksi`
  MODIFY `id_transaksi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1256;

--
-- AUTO_INCREMENT for table `tabel_user`
--
ALTER TABLE `tabel_user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12234;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

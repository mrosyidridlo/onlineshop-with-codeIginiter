-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2019 at 03:55 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(3) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
(1, 'muhammad syaiful alam', 'alam', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `id_foto` int(10) NOT NULL,
  `id_produk` int(10) NOT NULL,
  `foto_detail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(10) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `kategori_produk` varchar(25) NOT NULL,
  `harga_produk` int(10) NOT NULL,
  `foto_produk` varchar(25) NOT NULL,
  `tag_produk` varchar(25) NOT NULL,
  `url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `kategori_produk`, `harga_produk`, `foto_produk`, `tag_produk`, `url`) VALUES
(1, 'Mecca Syar\'i', 'Muslimah', 110000, 'jb_syari1.jpg', 'hijab', 'mecca-syari'),
(2, 'QIELLA SYARI', 'Muslimah', 119000, 'jb_syari2.jpg', 'hijab', 'qiella-syari'),
(3, 'NIRVANA SYARI', 'Muslimah', 249000, 'jb_syari3_putih.jpg', 'hijab', 'nirvana-syari'),
(4, 'ROYAL SYAR\'I', 'Muslimah', 79000, 'jb_syari4.jpg', 'hijab', 'royal-syari'),
(5, 'FARABI KURTA', 'Muslim', 100000, 'koko1.jpg', 'koko', 'farabi-kurta'),
(6, 'HAWAMI KURTA', 'Muslim', 110000, 'koko2.jpg', 'koko', 'hawami-kurta'),
(7, 'KHADI KURTA', 'Muslim', 130000, 'koko3.jpg', 'koko', 'khadi-kurta'),
(8, 'YUSOOF KURTA', 'Muslim', 135000, 'koko4.jpg', 'koko', 'yusoof kurta');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(10) NOT NULL,
  `id_produk` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `warna_produk` varchar(25) NOT NULL,
  `ukuran_produk` varchar(10) NOT NULL,
  `bahan_produk` varchar(25) NOT NULL,
  `jumlah_transaksi` int(10) NOT NULL,
  `harga_total` int(10) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `status` varchar(25) NOT NULL,
  `no_resi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(10) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `no_hp` int(12) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id_foto` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

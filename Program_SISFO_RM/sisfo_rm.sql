-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2018 at 04:25 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisfo_rm`
--

-- --------------------------------------------------------

--
-- Table structure for table `bahan`
--

CREATE TABLE `bahan` (
  `id_bahan` int(10) NOT NULL,
  `nama_bahan` varchar(30) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `satuan` varchar(30) NOT NULL,
  `harga_satuan` int(11) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_kadaluarsa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bahan`
--

INSERT INTO `bahan` (`id_bahan`, `nama_bahan`, `jumlah`, `satuan`, `harga_satuan`, `tgl_masuk`, `tgl_kadaluarsa`) VALUES
(1, 'Daging Ayam', 100, 'Kg', 25000, '2018-11-15', '2018-11-20'),
(2, 'Daging Sapi', 100, 'Kg', 50000, '2018-11-24', '2018-11-29'),
(5, 'Garam', 100, 'Kg', 10000, '2018-11-24', '2018-11-29'),
(6, 'Ikan Tuna', 10, 'Kg', 50000, '2018-12-13', '2018-12-20');

-- --------------------------------------------------------

--
-- Table structure for table `dapur`
--

CREATE TABLE `dapur` (
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gudang`
--

CREATE TABLE `gudang` (
  `id_gudang` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `jeniskelamin` varchar(10) NOT NULL,
  `ttl` date NOT NULL,
  `alamat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gudang`
--

INSERT INTO `gudang` (`id_gudang`, `nama`, `username`, `password`, `jeniskelamin`, `ttl`, `alamat`) VALUES
(1, 'Cristiano Ronaldo Dos Santos', 'cr7', 'cr7', 'male', '1995-08-17', 'Turin,Italia');

-- --------------------------------------------------------

--
-- Table structure for table `kasir`
--

CREATE TABLE `kasir` (
  `id_kasir` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama_kasir` varchar(30) NOT NULL,
  `ttl` date NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `jeniskelamin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kasir`
--

INSERT INTO `kasir` (`id_kasir`, `username`, `password`, `nama_kasir`, `ttl`, `alamat`, `jeniskelamin`) VALUES
(1, 'aaa', 'aaa', 'Paul Pogba', '1990-03-21', 'Manchester, England', 'male'),
(2, 'ronaldo7', 'ronaldo7', 'Ronaldo', '0000-00-00', 'ronaldo7', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `tgl_awal` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `jenis` varchar(10) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `id_manager` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama_manager` varchar(30) NOT NULL,
  `ttl` date NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `jeniskelamin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`id_manager`, `username`, `password`, `nama_manager`, `ttl`, `alamat`, `jeniskelamin`) VALUES
(1, 'ikhsan', 'ikhsan', 'ikhsan', '2018-12-01', 'Bandung', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` int(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(10) NOT NULL,
  `id_transaksi` int(100) NOT NULL,
  `nama_pesanan` varchar(30) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `harga` double NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `keterangan` varchar(30) NOT NULL,
  `total_harga` int(10) NOT NULL,
  `status` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `id_transaksi`, `nama_pesanan`, `jumlah`, `harga`, `tanggal`, `keterangan`, `total_harga`, `status`) VALUES
(11, 19, 'Ayam Goreng', 2, 10000, '2018-12-09 01:41:02', '', 20000, 'Lunas'),
(12, 19, 'Burger', 1, 20000, '2018-12-09 01:41:02', '', 20000, 'Lunas'),
(13, 19, 'Pizza', 1, 25000, '2018-12-09 01:41:02', '', 25000, 'Lunas'),
(14, 19, 'Lasagna', 2, 30000, '2018-12-09 01:41:02', '', 60000, 'Lunas'),
(15, 19, 'Lemon Tea', 3, 8000, '2018-12-09 01:41:02', '', 24000, 'Lunas'),
(16, 19, 'Es Teh Manis', 4, 5000, '2018-12-09 01:41:02', '', 20000, 'Lunas'),
(17, 43, 'Ayam Goreng', 2, 10000, '2018-12-09 19:09:55', '', 20000, 'Lunas'),
(18, 43, 'Burger', 3, 20000, '2018-12-09 19:09:55', '', 60000, 'Lunas'),
(19, 43, 'Pizza', 1, 25000, '2018-12-09 19:09:55', '', 25000, 'Lunas'),
(20, 43, 'Lasagna', 1, 30000, '2018-12-09 19:09:55', '', 30000, 'Lunas'),
(21, 43, 'Steak', 2, 35000, '2018-12-09 19:09:55', '', 70000, 'Lunas'),
(22, 43, 'Lemon Tea', 3, 8000, '2018-12-09 19:09:55', '', 24000, 'Lunas'),
(23, 43, 'Es Teh Manis', 3, 5000, '2018-12-09 19:09:56', '', 15000, 'Lunas'),
(24, 48, 'Ayam Goreng', 1, 10000, '2018-12-11 14:19:26', '-', 10000, 'Lunas'),
(25, 48, 'Burger', 2, 20000, '2018-12-11 14:19:26', '-', 40000, 'Lunas'),
(26, 18, 'Ayam Goreng', 2, 10000, '2018-12-13 22:10:45', '', 20000, 'Lunas'),
(27, 18, 'Burger', 1, 20000, '2018-12-13 22:10:45', '', 20000, 'Lunas'),
(28, 18, 'Pizza', 1, 25000, '2018-12-13 22:10:45', '', 25000, 'Lunas'),
(29, 18, 'Lasagna', 2, 30000, '2018-12-13 22:10:45', '', 60000, 'Lunas'),
(30, 18, 'Spaghetti', 1, 15000, '2018-12-13 22:10:45', '', 15000, 'Lunas'),
(31, 18, 'Steak', 3, 35000, '2018-12-13 22:10:45', '', 105000, 'Lunas'),
(32, 18, 'Lemon Tea', 3, 8000, '2018-12-13 22:10:45', '', 24000, 'Lunas'),
(33, 18, 'Es Teh Manis', 3, 5000, '2018-12-13 22:10:45', '', 15000, 'Lunas'),
(34, 96, 'Ayam Goreng', 3, 10000, '2018-12-13 22:12:00', '', 30000, 'Lunas'),
(35, 96, 'Burger', 3, 20000, '2018-12-13 22:12:00', '', 60000, 'Lunas'),
(36, 96, 'Lemon Tea', 1, 8000, '2018-12-13 22:12:00', '', 8000, 'Lunas'),
(37, 96, 'Es Teh Manis', 2, 5000, '2018-12-13 22:12:00', '', 10000, 'Lunas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bahan`
--
ALTER TABLE `bahan`
  ADD PRIMARY KEY (`id_bahan`);

--
-- Indexes for table `dapur`
--
ALTER TABLE `dapur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gudang`
--
ALTER TABLE `gudang`
  ADD PRIMARY KEY (`id_gudang`);

--
-- Indexes for table `kasir`
--
ALTER TABLE `kasir`
  ADD PRIMARY KEY (`id_kasir`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`id_manager`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bahan`
--
ALTER TABLE `bahan`
  MODIFY `id_bahan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dapur`
--
ALTER TABLE `dapur`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gudang`
--
ALTER TABLE `gudang`
  MODIFY `id_gudang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kasir`
--
ALTER TABLE `kasir`
  MODIFY `id_kasir` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `id_manager` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2023 at 11:41 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_jbm`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_service`
--

CREATE TABLE `tbl_service` (
  `servis_id` varchar(10) NOT NULL,
  `customer_id` varchar(10) NOT NULL,
  `nama_customer` varchar(50) NOT NULL,
  `plat_no` varchar(20) NOT NULL,
  `jenis_mobil` varchar(50) NOT NULL,
  `tipe_mobil` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_service`
--

INSERT INTO `tbl_service` (`servis_id`, `customer_id`, `nama_customer`, `plat_no`, `jenis_mobil`, `tipe_mobil`) VALUES
('SRV-001', 'CUS-001', 'Rey', 'T 1234 RDK', 'BMW M3 GTR', 'AT');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sparepart`
--

CREATE TABLE `tbl_sparepart` (
  `sparepart_id` varchar(20) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `nama_part` varchar(50) NOT NULL,
  `harga_barang` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sparepart`
--

INSERT INTO `tbl_sparepart` (`sparepart_id`, `nama_barang`, `nama_part`, `harga_barang`) VALUES
('BRG-001', 'CASTROL MAGNATEC', 'OLI', 25000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_service`
--
ALTER TABLE `tbl_service`
  ADD PRIMARY KEY (`servis_id`);

--
-- Indexes for table `tbl_sparepart`
--
ALTER TABLE `tbl_sparepart`
  ADD PRIMARY KEY (`sparepart_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

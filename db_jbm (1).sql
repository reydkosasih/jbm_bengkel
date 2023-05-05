-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2023 at 03:00 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

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
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `kode_barang` varchar(10) DEFAULT NULL,
  `nama_barang` varchar(50) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `stok` int(5) DEFAULT NULL,
  `foto_barang` varchar(100) DEFAULT NULL,
  `id_jenis` int(11) DEFAULT NULL,
  `id_merk` int(11) DEFAULT NULL,
  `kode_supplier` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `kode_barang`, `nama_barang`, `harga`, `stok`, `foto_barang`, `id_jenis`, `id_merk`, `kode_supplier`) VALUES
(3, 'BRG0003', 'Knalpot', 500000, 4, 'barang_1526268446.jpg', 1, 1, 'sp002'),
(4, 'BRG0004', 'Ban Dalam', 50000, 3, 'barang_1603700071', 1, 1, 'sp002'),
(5, 'BRG0005', 'Oli Mesin', 50000, 12, 'barang_1603705795', 1, 1, 'sp001');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `booking_id` int(20) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `tgl_servis` varchar(20) NOT NULL,
  `jam_servis` varchar(11) NOT NULL,
  `email_customer` varchar(50) NOT NULL,
  `nama_customer` varchar(50) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `nama_mobil` varchar(30) NOT NULL,
  `merk_mobil` varchar(20) NOT NULL,
  `jenis_mobil` varchar(20) NOT NULL,
  `transmisi` varchar(30) NOT NULL,
  `tahun_keluar` varchar(11) NOT NULL,
  `plat_no` varchar(15) NOT NULL,
  `layanan_servis` varchar(50) NOT NULL,
  `keluhan` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`booking_id`, `customer_id`, `tgl_servis`, `jam_servis`, `email_customer`, `nama_customer`, `no_telp`, `nama_mobil`, `merk_mobil`, `jenis_mobil`, `transmisi`, `tahun_keluar`, `plat_no`, `layanan_servis`, `keluhan`, `status`) VALUES
(1, 17, '', '', '', 'Razor', '081122334455', 'Avanza', 'Toyota', 'Mini Van', 'MT / Manual', '2012', 'N 111 GA', '', '', ''),
(3, 18, '2023-05-04', '11:00', 'rey@email.com', 'Rey Dwi Kosasih', '081234567891', 'Ayla', 'Toyota', '', 'AT / Automatic', '', 'T 1001 NE', '10.000 KM / 6 Bulan', 'Ac rusak', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kendaraan`
--

CREATE TABLE `tbl_kendaraan` (
  `kendaraan_id` varchar(20) NOT NULL,
  `merk_mobil` varchar(25) NOT NULL,
  `nama_mobil` varchar(30) NOT NULL,
  `jenis_mobil` varchar(20) NOT NULL,
  `transmisi` varchar(30) NOT NULL,
  `tahun_keluar` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_kendaraan`
--

INSERT INTO `tbl_kendaraan` (`kendaraan_id`, `merk_mobil`, `nama_mobil`, `jenis_mobil`, `transmisi`, `tahun_keluar`) VALUES
('KRD-001', 'Toyota', 'Avanza', 'Mini Van', 'AT / Automatic', '2012'),
('KRD-002', 'Honda', 'Civic', 'Sedan', 'MT / Manual', '2016');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_service`
--

CREATE TABLE `tbl_service` (
  `servis_id` int(11) NOT NULL,
  `booking_id` int(20) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `email_customer` varchar(50) NOT NULL,
  `nama_customer` varchar(50) NOT NULL,
  `plat_no` varchar(20) NOT NULL,
  `jenis_mobil` varchar(50) NOT NULL,
  `tipe_mobil` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_service`
--

INSERT INTO `tbl_service` (`servis_id`, `booking_id`, `customer_id`, `email_customer`, `nama_customer`, `plat_no`, `jenis_mobil`, `tipe_mobil`) VALUES
(1, 0, 0, '', 'Rey', 'T 1234 RDK', 'BMW M3 GTR', 'AT'),
(2, 3, 18, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sparepart`
--

CREATE TABLE `tbl_sparepart` (
  `sparepart_id` int(20) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `nama_part` varchar(50) NOT NULL,
  `harga_barang` int(25) NOT NULL,
  `stok_barang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_sparepart`
--

INSERT INTO `tbl_sparepart` (`sparepart_id`, `nama_barang`, `nama_part`, `harga_barang`, `stok_barang`) VALUES
(1, 'CASTROL MAGNATEC', 'OLI', 25000, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `transaksi_id` int(11) NOT NULL,
  `servis_id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `total_harga` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `nickname` varchar(20) NOT NULL,
  `username` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL,
  `birthday` varchar(20) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `nama_lengkap`, `nickname`, `username`, `email`, `image`, `password`, `birthday`, `no_telp`, `gender`, `role_id`, `is_active`, `date_created`) VALUES
(9, 'Administrator', 'Admin', 'admintest', '', 'martinnnn.jpg', '$2y$10$b8MPOsqU4Zl70Ker3Uc3q.PZN.3GbANN8Gl2moYhHh6.xPc62UHN6', '2022-08-01', '112233445566', 'Male', 1, 1, 1660057679),
(11, 'Rey Dwi Kosasih', 'Rey', 'reyitdies', '', 'author-image.jpg', '$2y$10$SBBc4ffXFbHuETCkSP7w9O45H6HLM8iVMZr9nCwT4puGM/FLeZ0qi', '2001-12-17', '085211223161', 'Male', 1, 1, 1660871372),
(17, 'Coklat Enak', 'Coklat', 'choco', '', 'default.jpg', '$2y$10$8l9WCDA4hA.CGaut5kBts.9bMz/6vzC1kC2/TeYWLTRm4LF6G4PqW', '', '', '', 2, 1, 1678242234),
(18, 'Rey Dwi Kosasih', 'Rey', 'reydk', 'rey@email.com', 'default.jpg', '$2y$10$au7dJWuHMAQaaRQIqsAbHeg2QyVH2dLdZSDEUjPLwrCkcLaZps6wO', '', '081234567891', '', 2, 1, 1683111129);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(3, 2, 2),
(9, 1, 3),
(10, 1, 2),
(12, 2, 5),
(13, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(5, 'Tools');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-desktop', 1),
(2, 2, 'Home', 'user/home', 'fas fa-fw fa-solid fa-home', 1),
(3, 2, 'My Profile', 'user', 'fas fa-fw fa-solid fa-user', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-solid fa-bars', 1),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-solid fa-ellipsis-h', 1),
(7, 5, 'Penggunaan Dies', 'pemakaian', 'fas fa-fw fa-cog', 1),
(8, 1, 'Laporan', 'report', 'fas fa-fw fa-book', 1),
(9, 1, 'Role Access Account', 'admin/role', 'fas fa-fw fa-user-circle', 1),
(10, 1, 'Customer', 'customer', 'fas fa-fw fa-address-book', 0),
(12, 1, 'Master Data Dies', 'mold/index', 'fas fa-fw fa-server', 1),
(13, 5, 'Data Pemakaian', 'pemakaian', 'fas fa-fw fa-share', 0),
(14, 5, 'Data Pengembalian', 'pengembalian', 'fas fa-fw fa-reply', 0),
(15, 1, 'User Manager', 'admin/usermanage', 'fas fa-fw fa-users', 1),
(16, 3, 'Supplier/Maker', 'menu/maker', 'fas fa-cubes', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `tbl_kendaraan`
--
ALTER TABLE `tbl_kendaraan`
  ADD PRIMARY KEY (`kendaraan_id`);

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

--
-- Indexes for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`transaksi_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `booking_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_service`
--
ALTER TABLE `tbl_service`
  MODIFY `servis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_sparepart`
--
ALTER TABLE `tbl_sparepart`
  MODIFY `sparepart_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `transaksi_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

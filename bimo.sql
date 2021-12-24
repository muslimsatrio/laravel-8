-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2021 at 08:18 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bimo`
--

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `id_bank` bigint(10) NOT NULL,
  `nama_bank` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id_user` bigint(20) NOT NULL,
  `nama_akun` varchar(50) NOT NULL,
  `jeniskelamin_akun` varchar(10) NOT NULL,
  `tanggallahir_akun` varchar(50) NOT NULL,
  `alamat_akun` varchar(255) NOT NULL,
  `email_akun` varchar(50) NOT NULL,
  `sandi_akun` varchar(255) NOT NULL,
  `telepon_akun` varchar(50) NOT NULL,
  `nama_bank` varchar(50) NOT NULL,
  `pemelikrekening_akun` varchar(50) NOT NULL,
  `nomorrekening_akun` int(11) NOT NULL,
  `status_akun` varchar(50) NOT NULL,
  `foto_akun` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `transactiondetails`
--

CREATE TABLE `transactiondetails` (
  `id_transaksi` bigint(20) NOT NULL,
  `id_unit` int(11) NOT NULL,
  `nama_unit` varchar(255) NOT NULL,
  `jumlahlembar_transaksi` int(11) NOT NULL,
  `total_transaksi` int(11) NOT NULL,
  `hargaperlembar_unit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transactionhistories`
--

CREATE TABLE `transactionhistories` (
  `id_transaksi` bigint(20) NOT NULL,
  `nama_unit` varchar(255) NOT NULL,
  `jumlahlembar_transaksi` int(11) NOT NULL,
  `total_transaksi` int(11) NOT NULL,
  `devidenyield_unit` int(11) NOT NULL,
  `tanggalbagihasil_unit` varchar(50) NOT NULL,
  `status_transaksi` varchar(50) NOT NULL,
  `jenis_transaksi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id_transaksi` bigint(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_akun` bigint(20) NOT NULL,
  `nama_akun` varchar(50) NOT NULL,
  `status_transaksi` varchar(10) NOT NULL,
  `snap_token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id_unit` bigint(100) NOT NULL,
  `nama_unit` varchar(255) NOT NULL,
  `usahamilik_unit` varchar(255) NOT NULL,
  `email_unit` varchar(50) NOT NULL,
  `jumlahlembar_unit` int(11) NOT NULL,
  `hargaperlembar_unit` int(11) NOT NULL,
  `totaldana_unit` int(11) NOT NULL,
  `bataswaktu_unit` varchar(50) NOT NULL,
  `tanggalbagihasil_unit` varchar(50) NOT NULL,
  `dividenyield_unit` int(11) NOT NULL,
  `periodedividen_unit` varchar(50) NOT NULL,
  `status_unit` varchar(50) NOT NULL,
  `foto_unit` varchar(50) NOT NULL,
  `prospektus_unit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `name`, `password`, `no_hp`, `role_id`) VALUES
('muslim@bimo.com', 'Muslim', '$2y$10$lU2/p5ChtcfLeXR/7fqNkOKS2Axu4MfUIndJkAW4LGHjUULkbxog2', '0983838383', 2),
('penerbit@bimo.com', 'penerbit bimo', '$2y$10$1zJyRJs8iTqgjuj08.MC4.Uek.G10YJun5Csu0lP/uzFQVt2/mCTO', '029299298338', 3),
('test@bimo.com', 'Testing', '$2a$10$p/HWzq10c.XtGS6rOn4mfeIk2mSnn4bbNFMcJvLhwVxtzfl1PNTRu', '083939393993', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id_bank`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id_unit`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `id_bank` bigint(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id_transaksi` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id_unit` bigint(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

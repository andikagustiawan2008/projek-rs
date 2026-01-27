-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2026 at 04:57 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rawat_inap_andika`
--

-- --------------------------------------------------------

--
-- Table structure for table `kamar_andika`
--

CREATE TABLE `kamar_andika` (
  `id_kamar_andika` varchar(10) NOT NULL,
  `no_kamar_andika` int(11) NOT NULL,
  `kelas_andika` varchar(50) NOT NULL,
  `status_kamar_andika` varchar(50) NOT NULL,
  `harga_andika` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kamar_andika`
--

INSERT INTO `kamar_andika` (`id_kamar_andika`, `no_kamar_andika`, `kelas_andika`, `status_kamar_andika`, `harga_andika`) VALUES
('K-001', 1, 'PREMIUM', 'KOSONG', 700000),
('K-002', 2, 'STANDAR', 'KOSONG', 500000),
('K-003', 3, 'SWEET', 'FULL', 1000000),
('K-004', 4, 'PREMIUM', 'KOSONG', 700000),
('K-005', 5, 'STANDAR', 'FULL', 500000);

-- --------------------------------------------------------

--
-- Table structure for table `pasien_andika`
--

CREATE TABLE `pasien_andika` (
  `id_pasien_andika` varchar(10) NOT NULL,
  `nama_andika` varchar(50) NOT NULL,
  `alamat_andika` varchar(50) NOT NULL,
  `kontak_andika` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pasien_andika`
--

INSERT INTO `pasien_andika` (`id_pasien_andika`, `nama_andika`, `alamat_andika`, `kontak_andika`) VALUES
('P-001', 'ITING', 'JL.PZOK', '0812345323'),
('P-002', 'RENDY HIDEUNG', 'JL.TEGAL KWAYUNG', '08567321134'),
('P-003', 'ARIPIN', 'JL.CISENDAL', '08236214243'),
('P-004', 'IWANDEUNG', 'JL.CILEUR', '0812343753'),
('P-005', 'EPIH', 'JL.KUMANG', '08136547825');

-- --------------------------------------------------------

--
-- Table structure for table `rawat_inap_andika`
--

CREATE TABLE `rawat_inap_andika` (
  `id_rawat_andika` varchar(10) NOT NULL,
  `id_pasien_andika` varchar(10) NOT NULL,
  `id_kamar_andika` varchar(10) NOT NULL,
  `tgl_masuk_andika` date NOT NULL,
  `tgl_keluar_andika` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rawat_inap_andika`
--

INSERT INTO `rawat_inap_andika` (`id_rawat_andika`, `id_pasien_andika`, `id_kamar_andika`, `tgl_masuk_andika`, `tgl_keluar_andika`) VALUES
('R-001', 'P-001', 'K-001', '2026-01-09', '2026-01-03'),
('R-002', 'P-002', 'K-002', '2026-01-02', '2026-01-05'),
('R-003', 'P-003', 'K-003', '2026-01-04', '2026-01-07'),
('R-004', 'P-004', 'K-004', '2026-01-02', '2026-01-06'),
('R-005', 'P-005', 'K-005', '2026-01-09', '2026-01-13');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_andika`
--

CREATE TABLE `transaksi_andika` (
  `id_transaksi_andika` varchar(10) NOT NULL,
  `id_passien_andika` varchar(10) NOT NULL,
  `id_rawat_andika` varchar(10) NOT NULL,
  `total_biaya_andika` int(11) NOT NULL,
  `status_pembayaran_andika` varchar(50) NOT NULL,
  `tanggal_andika` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi_andika`
--

INSERT INTO `transaksi_andika` (`id_transaksi_andika`, `id_passien_andika`, `id_rawat_andika`, `total_biaya_andika`, `status_pembayaran_andika`, `tanggal_andika`) VALUES
('T-001', 'P-001', '', 700000, 'SUKSES', '2026-01-01'),
('T-002', 'P-002', '', 500000, 'SUKSES', '2026-01-02'),
('T-003', 'P-003', '', 1000000, 'BELUM', '2026-01-03'),
('T-004', 'P-004', '', 700000, 'BELUM', '2026-01-09'),
('T-005', 'P-005', '', 500000, 'sudah', '2026-01-21');

-- --------------------------------------------------------

--
-- Table structure for table `user_andika`
--

CREATE TABLE `user_andika` (
  `id_user_andika` varchar(10) NOT NULL,
  `username_andika` varchar(20) NOT NULL,
  `password_andika` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_andika`
--

INSERT INTO `user_andika` (`id_user_andika`, `username_andika`, `password_andika`) VALUES
('U-001', 'USER1', '6352123'),
('U-002', 'USER2', '47874382'),
('U-003', 'USER3', '8734738'),
('U-004', 'USER4', '4543453'),
('U-005', 'USER5', '3432425');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kamar_andika`
--
ALTER TABLE `kamar_andika`
  ADD PRIMARY KEY (`id_kamar_andika`),
  ADD KEY `harga_gavin` (`harga_andika`);

--
-- Indexes for table `pasien_andika`
--
ALTER TABLE `pasien_andika`
  ADD PRIMARY KEY (`id_pasien_andika`);

--
-- Indexes for table `rawat_inap_andika`
--
ALTER TABLE `rawat_inap_andika`
  ADD PRIMARY KEY (`id_rawat_andika`),
  ADD KEY `id_pasien_gavin` (`id_pasien_andika`),
  ADD KEY `id_kamar_gavin` (`id_kamar_andika`);

--
-- Indexes for table `transaksi_andika`
--
ALTER TABLE `transaksi_andika`
  ADD PRIMARY KEY (`id_transaksi_andika`),
  ADD KEY `id_pasien_gavin` (`id_passien_andika`),
  ADD KEY `id_rawat_gavin` (`id_rawat_andika`);

--
-- Indexes for table `user_andika`
--
ALTER TABLE `user_andika`
  ADD PRIMARY KEY (`id_user_andika`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rawat_inap_andika`
--
ALTER TABLE `rawat_inap_andika`
  ADD CONSTRAINT `rawat_inap_andika_ibfk_1` FOREIGN KEY (`id_pasien_andika`) REFERENCES `pasien_andika` (`id_pasien_andika`),
  ADD CONSTRAINT `rawat_inap_andika_ibfk_2` FOREIGN KEY (`id_kamar_andika`) REFERENCES `kamar_andika` (`id_kamar_andika`);

--
-- Constraints for table `transaksi_andika`
--
ALTER TABLE `transaksi_andika`
  ADD CONSTRAINT `transaksi_andika_ibfk_1` FOREIGN KEY (`id_passien_andika`) REFERENCES `pasien_andika` (`id_pasien_andika`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

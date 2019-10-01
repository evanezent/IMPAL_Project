-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2019 at 07:04 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evanue`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `idEvent` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namaEvent` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggalEvent` date DEFAULT NULL,
  `poster` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Validasi` tinyint(1) DEFAULT NULL,
  `delete_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`idEvent`, `username`, `namaEvent`, `tanggalEvent`, `poster`, `Validasi`, `delete_at`) VALUES
('evt-30gAB', 'esmeralda', 'Sabyan', '2019-09-28', 'event6.jpg', 0, '2019-09-25'),
('evt-6f3Fa', 'esmeralda', 'NYOBA SI', '2019-10-05', 'event4.jpg', 0, NULL),
('evt-6SPQI', 'esmeralda', 'NYOBA KOK', '2019-10-16', 'login.PNG', 0, '2019-10-01'),
('evt-8ZFgB', 'esmeralda', 'HMMMMM', '2019-10-17', 'login1.PNG', 0, NULL),
('evt-hKRov', 'esmeralda', 'SI NYOBA', '2019-10-04', 'event5.jpg', 0, NULL),
('evt-sd9vj', 'esmeralda', 'NYOBA LAGI', '2019-11-02', '44916249_2357618624253459_8748134120300740608_n.jpg', 0, '2019-10-01'),
('evt-SHwyf', 'esmeralda', 'AMAN KOK', '2019-10-19', 'menu_tiket_user.PNG', 0, '2019-10-01');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namaMember` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noHp` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`username`, `namaMember`, `email`, `password`, `alamat`, `noHp`) VALUES
('esmeralda', 'Esmeralda Smith', 'esmeralda@gmail.com', 'TyU7h7bNm', 'Jalan Patimura no.1, NBandung, Jawa Barat', '08977456821');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `idTransaksi` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenisTransaksi` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggalTransaksi` date DEFAULT NULL,
  `delete_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`idTransaksi`, `username`, `jenisTransaksi`, `tanggalTransaksi`, `delete_at`) VALUES
('0172', 'esmeralda', 'DEBIT MANDIRI', '2019-03-14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `idTicket` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namaTicket` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggalTicket` date DEFAULT NULL,
  `poster` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contactPerson` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Validasi` tinyint(1) DEFAULT NULL,
  `delete_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`idTicket`, `username`, `namaTicket`, `tanggalTicket`, `poster`, `contactPerson`, `Validasi`, `delete_at`) VALUES
('1301188', 'esmeralda', 'konser Sabyan', '2019-03-13', 'o.jpg', '089324678234', 1, '2020-03-03'),
('tkt-0Inab', 'esmeralda', 'adadad', '2019-09-25', 'Bad_Menu_Sistem.PNG', '08932424', 0, NULL),
('tkt-10gFM', 'esmeralda', 'ini ticket', '2019-09-30', '2.PNG', '089234142134', 0, NULL),
('tkt-2kHwa', 'esmeralda', 'TICKET', '2019-10-26', '44916249_2357618624253459_8748134120300740608_n.jpg', '0891981313', 0, NULL),
('tkt-Ulp8j', 'esmeralda', 'ahay', '2019-09-21', 'Alif.jpg', NULL, 0, '2019-10-01'),
('tkt-WYHv0', 'esmeralda', 'COBA 1', '2019-10-18', 'tick1.png', '098291091', 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`idEvent`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`idTransaksi`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`idTicket`),
  ADD KEY `username` (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`username`) REFERENCES `member` (`username`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`username`) REFERENCES `member` (`username`);

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`username`) REFERENCES `member` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2019 at 06:40 AM
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
  `poster` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Validasi` tinyint(1) DEFAULT NULL,
  `delete_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`idEvent`, `username`, `namaEvent`, `tanggalEvent`, `poster`, `Validasi`, `delete_at`) VALUES
('event1', 'esmeralda', 'Vans World Cup of Surfing', '2018-11-25', 'event1.png', NULL, NULL),
('event2', 'esmeralda', 'Seminar Born To Be Developer', '2015-04-26', 'event2.jpg', NULL, NULL),
('event3-', 'esmeralda', 'Freestyle on Jam', '2012-11-11', 'event3.jpg', NULL, NULL),
('event4', 'esmeralda', 'Jak Cloth 2014', '2014-05-28', 'event4.jpg', NULL, NULL),
('event5', 'esmeralda', 'Futsal Competition 2018', '2018-01-14', 'event5.jpg', NULL, NULL),
('event6', 'esmeralda', 'Inception Saturdays', '2014-03-22', 'event6.jpg', NULL, NULL);

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
('esmeralda', 'Esmeralda Smith', 'esmeralda@gmail.com', 'TyU7h7bNm', 'Jalan Patimura no.1, Bandung, Jawa Barat', '08977456821'),
('pranapramudita', 'Prana Pramudita Kusdiananggalih', 'pranapramudita@gmail.com', 'password', 'Batununggal, Bandung', '081273470046');

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
  `poster` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contactPerson` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Validasi` tinyint(1) DEFAULT NULL,
  `delete_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`idTicket`, `username`, `namaTicket`, `tanggalTicket`, `poster`, `contactPerson`, `Validasi`, `delete_at`) VALUES
('1301188', 'esmeralda', 'konser Sabyan', '2019-03-13', 'o.jpg', '089324678234', 1, '2020-03-03'),
('tkt-0Inab', 'esmeralda', 'adadad', '2019-09-25', 'Bad_Menu_Sistem.PNG', '08932424', 0, '0000-00-00'),
('tkt-Ulp8j', 'esmeralda', 'ahay', '2019-09-21', 'Alif.jpg', NULL, 0, '0000-00-00');

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

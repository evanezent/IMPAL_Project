-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2019 at 02:21 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

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
('evt-17hCW', 'meliod', 'ini event dummy ', '2019-10-26', 'myhome.jpg', 1, NULL),
('evt-30gAB', 'esmeralda', 'Sabyan', '2019-09-28', 'event6.jpg', 1, '2019-09-25'),
('evt-6ecbs', 'tagato', 'HIMA IF 3', '2019-09-17', 'pikacu.png', 1, NULL),
('evt-6f3Fa', 'esmeralda', 'NYOBA SI', '2019-10-05', 'event4.jpg', 0, NULL),
('evt-6SPQI', 'esmeralda', 'NYOBA KOK', '2019-10-16', 'login.PNG', 0, '2019-10-01'),
('evt-8ZFgB', 'esmeralda', 'HMMMMMWKWK', '2019-10-17', 'login1.PNG', 0, NULL),
('evt-hKRov', 'esmeralda', 'SI NYOBA', '2019-10-04', 'event5.jpg', 1, NULL),
('evt-owPu3', 'pranapramudita', 'asdas', '2019-12-03', 'Login_UsernamePasswordSalah.PNG', 0, NULL),
('evt-Rg236', 'ardhito', 'Ardhitokustik', '2019-12-20', '59147.jpg', 0, NULL),
('evt-sd9vj', 'esmeralda', 'NYOBA LAGI', '2019-11-02', '44916249_2357618624253459_8748134120300740608_n.jpg', 0, '2019-10-01'),
('evt-SHwyf', 'esmeralda', 'AMAN KOK', '2019-10-19', 'menu_tiket_user.PNG', 0, '2019-10-01'),
('evt-ZHS3j', 'tagato', 'EVENTZ', '2019-12-11', '2016-06-11-0114.jpg', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namaMember` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noHp` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`username`, `namaMember`, `email`, `password`, `alamat`, `noHp`) VALUES
('ardhito', 'Ardhito Pramono', 'arpram@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Jakarta', '081123456789'),
('esmeralda', 'Esmeralda Smith', 'esmeralda@gmail.com', 'TyU7h7bNm', 'Jalan Patimura no.1, NBandung, Jawa Barat', '08977456821'),
('meliod', 'meliodas', 'mel@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 'Sukabirus 1', '089123456789'),
('pranapramudita', 'Prana Pramudita Kusdiananggalih', 'pranapramudita@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Pegadaian Cikudapateuh, Jl. Jendral Ahmad Yani, Su', '081273470046'),
('tagato', 'Pratama Yoga', 'pratamayo16@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Wisma Kos Al Muhayat, Sukabirus', '082226651838'),
('tamtam', 'Pratama Yoga', 'a@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Wisma Kos Al Muhayat, Sukabirus', '08220000000');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `idTransaksi` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idEvent` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggalTransaksi` date DEFAULT NULL,
  `foto_bayar` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delete_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`idTransaksi`, `idEvent`, `username`, `tanggalTransaksi`, `foto_bayar`, `delete_at`) VALUES
('0172', '', 'esmeralda', '2019-03-14', NULL, NULL),
('45ZCE', 'evt-qC2L3', 'tagato', '2019-12-09', '1-128.jpg', NULL),
('mAeoj', 'evt-ZHS3j', 'tagato', '2019-12-09', '1_1_defineai_361736a3.png', NULL),
('oGLq2', 'evt-owPu3', 'pranapramudita', '2019-12-18', 'Login_UsernamePasswordKosong.PNG', NULL),
('ol3Hx', 'evt-6ecbs', 'tagato', '2019-12-09', '408151.jpg', NULL);

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
('tkt-10gFM', 'esmeralda', 'ini ticket', '2019-09-30', '1.PNG', '089234142134', 0, '2019-10-23'),
('tkt-2kHwa', 'esmeralda', 'TICKET', '2019-10-26', '44916249_2357618624253459_8748134120300740608_n.jpg', '0891981313', 0, NULL),
('tkt-I0ynj', 'esmeralda', 'TICKET again', '2019-10-19', 'dashboard_user.PNG', '0992137914', 1, NULL),
('tkt-Nv8O1', 'ardhito', 'artkustik', '2019-12-20', 'wp2727923.jpg', '081123456789', 0, NULL),
('tkt-o2Xtk', 'tagato', 'Tiket Hima IF Festival 2', '2019-10-01', 'JOXZjSb1.jpg', '0891981314', 0, NULL),
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

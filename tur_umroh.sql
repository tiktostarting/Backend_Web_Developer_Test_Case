-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2020 at 10:24 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tur_umroh`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_jamaah`
--

CREATE TABLE `data_jamaah` (
  `idjamaah` varchar(15) NOT NULL,
  `namajamaah` varchar(50) NOT NULL,
  `gender` enum('L','P') NOT NULL,
  `telpjamaah` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_jamaah`
--

INSERT INTO `data_jamaah` (`idjamaah`, `namajamaah`, `gender`, `telpjamaah`) VALUES
('2', 'Nierman Wijaya kusumo', 'L', '081293232');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_jamaah`
--
ALTER TABLE `data_jamaah`
  ADD PRIMARY KEY (`idjamaah`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

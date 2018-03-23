-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2018 at 03:04 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taruna`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_taruna`
--

CREATE TABLE `data_taruna` (
  `no_ak` varchar(150) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `pangkat` varchar(100) NOT NULL,
  `nsp` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_taruna`
--

INSERT INTO `data_taruna` (`no_ak`, `nama`, `pangkat`, `nsp`) VALUES
('A11.2015.09266', 'Abdurahman', 'Mahasiswa', 100),
('A11.2015.09267', 'Abdurahman', 'Mahasiswa', 100),
('A11.2015.09268', 'Abdurahman', 'Mahasiswa', 100),
('A11.2015.09271', 'Abdurahman', 'Mahasiswa', 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_taruna`
--
ALTER TABLE `data_taruna`
  ADD PRIMARY KEY (`no_ak`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

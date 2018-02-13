-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2018 at 07:33 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `storsukan`
--
CREATE DATABASE IF NOT EXISTS `storsukan` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `storsukan`;

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

DROP TABLE IF EXISTS `barang`;
CREATE TABLE `barang` (
  `NoBarang` varchar(6) NOT NULL,
  `Nama` varchar(10) NOT NULL,
  `Kuantiti` int(3) NOT NULL,
  `HargaSeunit` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`NoBarang`, `Nama`, `Kuantiti`, `HargaSeunit`) VALUES
('101', 'KopiO', 20, 3),
('106', 'Kopi', 20, 3),
('109', 'Kopi', 20, 3),
('115', 'Kopi', 20, 3),
('118', 'Kopi', 20, 3),
('134', 'Kopi', 20, 3),
('135', 'Kopi', 20, 3),
('143', 'Kopi', 20, 3),
('157', 'Kopi', 20, 3),
('162', 'Kopi', 20, 3),
('164', 'Kopi', 20, 3),
('165', 'Kopi', 20, 3),
('179', 'Kopi', 20, 3),
('190', 'Kopi', 20, 3),
('201', 'Kopi', 20, 3),
('211', 'Kopi', 20, 3),
('212', 'Kopi', 20, 3),
('217', 'Kopi', 20, 3),
('23', 'Kopi', 20, 3),
('276', 'Kopi', 20, 3),
('285', 'Kopi', 20, 3),
('302', 'Kopi', 20, 3),
('324', 'Kopi', 20, 3),
('337', 'Kopi', 20, 3),
('339', 'Kopi', 20, 3),
('350', 'Kopi', 20, 3),
('351', 'Kopi', 20, 3),
('354', 'Kopi', 20, 3),
('355', 'Kopi', 20, 3),
('419', 'almostlunc', 36, 99),
('421', 'Kopi', 20, 3),
('429', 'Kopi', 20, 3),
('430', 'Kopi', 20, 3),
('437', 'Kopi', 20, 3),
('453', 'Kopi', 20, 3),
('456', 'Kopi', 20, 3),
('462', 'Kopi', 20, 3),
('474', 'Kopi', 20, 3),
('487', 'Kopi', 20, 3),
('488', 'Kopi', 20, 3),
('492', 'Kopi', 20, 3),
('493', 'Kopi', 20, 3),
('500', 'Kopi', 20, 3),
('513', 'Kopi', 20, 3),
('515', 'Kopi', 20, 3),
('528', 'Kopi', 20, 3),
('529', 'Kopi', 20, 3),
('530', 'Kopi', 20, 3),
('548', 'Kopi', 20, 3),
('552', 'Kopi', 20, 3),
('565', 'Kopi', 20, 3),
('57', 'Kopi', 20, 3),
('573', 'Kopi', 20, 3),
('577', 'Kopi', 20, 3),
('581', 'Kopi', 20, 3),
('605', 'lunchsoon', 36, 99),
('622', 'Kopi', 20, 3),
('651', 'Kopi', 20, 3),
('656', 'Kopi', 20, 3),
('658', 'Kopi', 20, 3),
('659', 'Kopi', 20, 3),
('662', 'Kopi', 20, 3),
('677', 'Kopi', 20, 3),
('691', 'Kopi', 20, 3),
('696', 'Kopi', 20, 3),
('697', 'Kopi', 20, 3),
('700', 'Kopi', 20, 3),
('704', 'Kopi', 20, 3),
('715', 'Kopi', 20, 3),
('719', 'Kopi', 20, 3),
('732', 'Kopi', 20, 3),
('733', 'Kopi', 20, 3),
('741', 'Kopi', 20, 3),
('746', 'Kopi', 20, 3),
('767', 'Kopi', 20, 3),
('768', 'Kopi', 20, 3),
('770', 'Kopi', 20, 3),
('772', 'Kopi', 20, 3),
('776', 'Kopi', 20, 3),
('783', 'Kopi', 20, 3),
('838', 'Kopi', 20, 3),
('839', 'Kopi', 20, 3),
('844', 'Kopi', 20, 3),
('863', 'Kopi', 20, 3),
('866', 'Kopi', 20, 3),
('881', 'Kopi', 20, 3),
('89', 'Kopi', 20, 3),
('894', 'Kopi', 20, 3),
('895', 'Kopi', 20, 3),
('90', 'Kopi', 20, 3),
('902', 'Kopi', 20, 3),
('920', 'Kopi', 20, 3),
('922', 'Kopi', 20, 3),
('935', 'Kopi', 20, 3),
('960', 'Kopi', 20, 3),
('961', 'Kopi', 20, 3),
('962', 'Kopi', 20, 3),
('968', 'Kopi', 20, 3),
('979', 'Kopi', 20, 3),
('98', 'Kopi', 20, 3),
('99', 'Kopi', 20, 3),
('A01', 'Bola Sepak', 10, 5),
('A02', 'Ping', 10, 5),
('A03', 'Pong', 10, 5),
('A05', 'Golf', 8, 255),
('A07', 'Kopi', 20, 3),
('A66', 'bolaaa', 50, 32),
('qwe', 'qwe', 23, 553);

-- --------------------------------------------------------

--
-- Table structure for table `murid`
--

DROP TABLE IF EXISTS `murid`;
CREATE TABLE `murid` (
  `muridID` int(6) NOT NULL,
  `barangID` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `murid`
--

INSERT INTO `murid` (`muridID`, `barangID`) VALUES
(8, '101'),
(5464, '101'),
(4, 'A01'),
(77, 'A01');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('12345', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`NoBarang`);

--
-- Indexes for table `murid`
--
ALTER TABLE `murid`
  ADD PRIMARY KEY (`muridID`),
  ADD KEY `barangID` (`barangID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `murid`
--
ALTER TABLE `murid`
  MODIFY `muridID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5465;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `murid`
--
ALTER TABLE `murid`
  ADD CONSTRAINT `murid_ibfk_1` FOREIGN KEY (`barangID`) REFERENCES `barang` (`NoBarang`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

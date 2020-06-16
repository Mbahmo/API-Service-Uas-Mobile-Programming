-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 16, 2020 at 06:35 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kampus`
--

-- --------------------------------------------------------

--
-- Table structure for table `Dosen`
--

CREATE TABLE `Dosen` (
  `IdDosen` int(11) NOT NULL,
  `NamaDosen` varchar(100) NOT NULL,
  `NoTelpDosen` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Dosen`
--

INSERT INTO `Dosen` (`IdDosen`, `NamaDosen`, `NoTelpDosen`) VALUES
(1, 'Bambang', '123'),
(3, 'Joko', '456'),
(4, 'Susilo', '789');

-- --------------------------------------------------------

--
-- Table structure for table `Mahasiswa`
--

CREATE TABLE `Mahasiswa` (
  `NIM` varchar(20) NOT NULL,
  `NamaMahasiswa` varchar(100) NOT NULL,
  `NoTelpMahasiswa` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Mahasiswa`
--

INSERT INTO `Mahasiswa` (`NIM`, `NamaMahasiswa`, `NoTelpMahasiswa`) VALUES
('18101097', 'Anthony Lee', '087760303967');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Dosen`
--
ALTER TABLE `Dosen`
  ADD PRIMARY KEY (`IdDosen`);

--
-- Indexes for table `Mahasiswa`
--
ALTER TABLE `Mahasiswa`
  ADD PRIMARY KEY (`NIM`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Dosen`
--
ALTER TABLE `Dosen`
  MODIFY `IdDosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

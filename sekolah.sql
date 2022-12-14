-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2022 at 12:38 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_siswa`
--

CREATE TABLE `tabel_siswa` (
  `ID` int(11) NOT NULL COMMENT 'ID siswa',
  `Nama` varchar(100) NOT NULL COMMENT 'Nama Siswa',
  `Jenis_Kelamin` tinyint(1) NOT NULL COMMENT '0:laki-laki\r\n1:perempuan',
  `Alamat` text NOT NULL COMMENT 'alamat lengkap siswa\r\n'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_siswa`
--

INSERT INTO `tabel_siswa` (`ID`, `Nama`, `Jenis_Kelamin`, `Alamat`) VALUES
(1, 'putra', 0, 'Jl. Danau toba no 33 RT 01 RW 03 Sawojajar Kedungkandang Malang'),
(2, 'putri', 1, 'Jl. Danau Ranau no 77 RT 11 RW 07 Sawojajar Kedungkandang Malang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_siswa`
--
ALTER TABLE `tabel_siswa`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_siswa`
--
ALTER TABLE `tabel_siswa`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID siswa', AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

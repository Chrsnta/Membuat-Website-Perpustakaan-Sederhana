-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2023 at 06:12 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.3.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sip`
--

-- --------------------------------------------------------

--
-- Table structure for table `peminjam`
--

CREATE TABLE `peminjam` (
  `nim` int(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_tlp` varchar(50) NOT NULL,
  `judul_buku` varchar(200) NOT NULL,
  `kode_buku` varchar(30) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peminjam`
--

INSERT INTO `peminjam` (`nim`, `nama`, `no_tlp`, `judul_buku`, `kode_buku`, `tanggal_pinjam`, `tanggal_kembali`) VALUES
(210170180, 'chris', '082277870744', 'Filosofi', 'F02', '0000-00-00', '0000-00-00'),
(210170, 'Dzaky Ananta', '', 'Atomic Habits', 'A002', '2023-06-22', '2023-06-29'),
(210120172, 'Dimas Hadi Purnama', '', 'dunia Shopee', 'D001', '2023-06-24', '2023-07-04'),
(210170169, 'Eriska', '082183012544', 'Marry Pose ', 'M001', '2023-06-30', '2023-07-07');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nama`, `username`, `password`) VALUES
('Chris', 'chrsnta', '123'),
('Chrisnata Manihuruk', 'chris27', '111'),
('', '', ''),
('', '', ''),
('', '', ''),
('Akbar Irfandi', 'Akbar', 'Akbar0509'),
('', '', ''),
('Dzaky', 'Jeni', '222'),
('Zulham', 'zulham', '012'),
('Jeni', 'Jenii', '888'),
('chris27', 'chriss', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

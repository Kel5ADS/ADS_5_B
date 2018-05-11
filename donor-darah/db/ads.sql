-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2018 at 11:54 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ads`
--

-- --------------------------------------------------------

--
-- Table structure for table `even`
--

CREATE TABLE `even` (
  `id_even` int(11) NOT NULL,
  `judul` varchar(25) NOT NULL,
  `isi` text NOT NULL,
  `alamat` text NOT NULL,
  `kontak` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `even`
--

INSERT INTO `even` (`id_even`, `judul`, `isi`, `alamat`, `kontak`) VALUES
(1, 'Siaga Donor Malang', '', 'Jl. Semarang', 2147483647),
(3, 'Siaga malang berdarah', 'Malang mengadakan even gratis untuk donor darah di daerah singosari', 'singosari', 123124);

-- --------------------------------------------------------

--
-- Table structure for table `even_temp`
--

CREATE TABLE `even_temp` (
  `judul` varchar(25) NOT NULL,
  `isi` text NOT NULL,
  `alamat` text NOT NULL,
  `kontak` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `even_temp`
--

INSERT INTO `even_temp` (`judul`, `isi`, `alamat`, `kontak`) VALUES
('Simak Dokter ', 'Ikatan Relawan Dokter mengadakan penyuluhan tentang penyakit yang diakibatkan kekurangan darah', 'Jl. Semarang', 341560897),
('Donor Darah daerah KebonA', 'Kebonagung sedang dalam masa krisis kekurangan darah', 'Jalan KebonAgung', 341781201);

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE `temp` (
  `pendonor` varchar(25) NOT NULL,
  `gol_darah` varchar(10) NOT NULL,
  `pmi` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `kontak` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp`
--

INSERT INTO `temp` (`pendonor`, `gol_darah`, `pmi`, `alamat`, `kontak`) VALUES
('Setia', 'AB', 'Malang', 'Jalan Jalan', 9128309),
('Dani', 'O', 'Surabaya', 'Jalan Kenangan', 1029312);

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

CREATE TABLE `work` (
  `id_pendonor` int(99) NOT NULL,
  `pendonor` varchar(25) NOT NULL,
  `gol_darah` varchar(10) NOT NULL,
  `pmi` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `kontak` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `work`
--

INSERT INTO `work` (`id_pendonor`, `pendonor`, `gol_darah`, `pmi`, `alamat`, `kontak`) VALUES
(2, 'dali', 'B', 'sby', 'Jl. Kertosuro', 91283124),
(3, 'jana', 'a', 'mlg', 'alamatnya', 890912),
(4, 'te', 'sdf', 'sfg', 'dg', 890912),
(5, 'jo', 'jo', 'jo', 'jo', 12938),
(6, 'saya', 'A', 'Malang', 'Jl. kenangan', 182091273);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `even`
--
ALTER TABLE `even`
  ADD PRIMARY KEY (`id_even`);

--
-- Indexes for table `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`id_pendonor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `even`
--
ALTER TABLE `even`
  MODIFY `id_even` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `work`
--
ALTER TABLE `work`
  MODIFY `id_pendonor` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

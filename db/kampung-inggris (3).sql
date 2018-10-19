-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 08, 2018 at 08:38 PM
-- Server version: 5.7.23-0ubuntu0.16.04.1
-- PHP Version: 7.0.31-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kampung-inggris`
--

-- --------------------------------------------------------

--
-- Table structure for table `asrama`
--

CREATE TABLE `asrama` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `HargaP` int(20) NOT NULL,
  `tipe` varchar(25) NOT NULL,
  `lama` varchar(8) NOT NULL,
  `jumlah_orang` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asrama`
--

INSERT INTO `asrama` (`id`, `nama`, `HargaP`, `tipe`, `lama`, `jumlah_orang`) VALUES
(0, 'Asrama', 9, 'Reg. 1', '1 Bulan', 0),
(2, 'Asrama', 200, 'Reg. 1', '2 Minggu', 0),
(3, 'Kost', 250, 'Reg. 1', '1 Bulan', 0),
(4, 'Kost', 150, 'Reg. 1', '2 Minggu', 0),
(5, 'Asrama', 350, 'Reg. 2', '1 Bulan', 0),
(6, 'Asrama', 250, 'Reg. 2', '2 Minggu', 0),
(7, 'Kost', 300, 'Reg. 2', '1 Bulan', 0),
(8, 'Kost', 225, 'Reg. 2', '2 Minggu', 0),
(9, 'Asrama', 750, 'VIP', '1 Bulan', 2),
(10, 'Asrama', 550, 'VIP', '2 Minggu', 2),
(11, 'Kost', 750, 'VIP', '1 Bulan', 2),
(12, 'Kost', 550, 'VIP', '2 Minggu', 2),
(13, 'Asrama', 650, 'VIP', '1 Bulan', 4),
(14, 'Asrama', 450, 'VIP', '2 Minggu', 4),
(15, 'Kost', 650, 'VIP', '1 Bulan', 4),
(16, 'Kost', 450, 'VIP', '2 Minggu', 4),
(17, 'Homestay', 150, 'Tipe 1', '1 Hari', 0);

-- --------------------------------------------------------

--
-- Table structure for table `Paket`
--

CREATE TABLE `Paket` (
  `id_paket` int(11) NOT NULL,
  `nama_paket` varchar(20) NOT NULL,
  `HargaK` int(20) NOT NULL,
  `lama` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Paket`
--

INSERT INTO `Paket` (`id_paket`, `nama_paket`, `HargaK`, `lama`) VALUES
(1, 'Paket 1', 400, '1 Bulan'),
(2, 'Paket 1', 300, '2 Minggu'),
(3, 'Paket 2', 400, '1 Bulan'),
(4, 'Paket 2', 300, '2 Minggu'),
(5, 'Paket 3', 400, '1 Bulan'),
(6, 'Paket 3', 300, '2 Minggu'),
(7, 'Betty Study', 500, '1 Bulan'),
(8, 'Betty Study', 400, '2 Minggu'),
(9, 'TOEFL', 600, '1 Bulan'),
(10, 'TOEFL', 500, '2 Minggu'),
(11, 'IELTS', 600, '1 Bulan'),
(12, 'IELTS', 500, '2 Minggu'),
(13, 'Paket All In', 2000, '5 Bulan'),
(14, 'Paket All In', 1000, '3 Bulan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `id_login` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `level` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`id_login`, `username`, `password`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendaftaran`
--

CREATE TABLE `tb_pendaftaran` (
  `id_daftar` int(11) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Tetala` varchar(35) NOT NULL,
  `TelpSiswa` int(12) NOT NULL,
  `TelpOrtu` int(12) NOT NULL,
  `Paket` int(30) NOT NULL,
  `HargaP` int(20) NOT NULL,
  `Asrama` int(30) NOT NULL,
  `HargaK` int(20) NOT NULL,
  `Total` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pendaftaran`
--

INSERT INTO `tb_pendaftaran` (`id_daftar`, `Nama`, `Tetala`, `TelpSiswa`, `TelpOrtu`, `Paket`, `HargaP`, `Asrama`, `HargaK`, `Total`) VALUES
(4, 'j', 'j', 0, 0, 2, 300, 2, 200, '500'),
(5, 'j', 'j', 9, 9, 4, 300, 3, 250, '550'),
(6, 'faris', 'turen', 987, 87, 2, 300, 5, 350, '650'),
(7, 'najib', 'p', 8787, 8787, 5, 400, 15, 650, '1050'),
(8, 'najib', 'iji9', 98989, 898, 6, 300, 9, 750, '1050'),
(9, 'Najibul Hoir', 'Probolinggo, 1998/09/05', 9898, 989, 2, 300, 2, 200, '500'),
(10, 'Najibul Hoir', 'Probolinggo, 1998/09/05', 9898, 989, 2, 300, 2, 200, '500'),
(11, 'jjhjh', 'jhjh', 98798, 898, 2, 300, 2, 200, '500'),
(12, 'kjkj', 'jkj', 65, 6565, 2, 300, 2, 200, '500'),
(13, 'jh', 'jhj', 98, 98, 2, 300, 2, 200, '500'),
(14, 'iuiu', '98', 989, 989, 2, 300, 2, 200, '500'),
(15, 'iuiu', '98', 989, 989, 2, 300, 2, 200, '500'),
(16, 'iuiu', '98', 989, 989, 2, 300, 2, 200, '500'),
(17, 'iuiu', '98', 989, 989, 2, 300, 2, 200, '500'),
(18, 'iuiu', '98', 989, 989, 2, 300, 2, 200, '500'),
(19, 'iuiu', '98', 989, 989, 2, 300, 2, 200, '500'),
(20, 'iuiu', '98', 989, 989, 2, 300, 2, 200, '500'),
(21, 'iuiu', '98', 989, 989, 2, 300, 2, 200, '500'),
(22, 'iuiu', '98', 989, 989, 2, 300, 2, 200, '500'),
(23, 'iuiu', '98', 989, 989, 2, 300, 2, 200, '500'),
(24, 'iuiu', '98', 989, 989, 2, 300, 2, 200, '500'),
(25, 'iuiu', '98', 989, 989, 2, 300, 2, 200, '500'),
(26, 'iuiu', '98', 989, 989, 2, 300, 2, 200, '500'),
(27, 'iuiu', '98', 989, 989, 2, 300, 2, 200, '500'),
(28, 'iuiu', '98', 989, 989, 2, 300, 2, 200, '500'),
(29, 'iuiu', '98', 989, 989, 2, 300, 2, 200, '500'),
(30, 'iuiu', '98', 989, 989, 2, 300, 2, 200, '500'),
(31, 'iuiu', '98', 989, 989, 2, 300, 2, 200, '500'),
(32, 'iuiu', '98', 989, 989, 2, 300, 2, 200, '500'),
(33, 'iuiu', '98', 989, 989, 2, 300, 2, 200, '500'),
(34, 'iuiu', '98', 989, 989, 2, 300, 2, 200, '500'),
(35, 'iuiu', '98', 989, 989, 2, 300, 2, 200, '500'),
(36, 'iuiu', '98', 989, 989, 2, 300, 2, 200, '500'),
(37, 'iuiu', '98', 989, 989, 2, 300, 2, 200, '500'),
(38, 'iuiu', '98', 989, 989, 2, 300, 2, 200, '500'),
(39, 'iuiu', '98', 989, 989, 2, 300, 2, 200, '500'),
(40, 'iuiu', '98', 989, 989, 2, 300, 2, 200, '500'),
(41, 'iuiu', '98', 989, 989, 2, 300, 2, 200, '500'),
(42, 'iuiu', '98', 989, 989, 2, 300, 2, 200, '500'),
(43, 'iuiu', '98', 989, 989, 2, 300, 2, 200, '500'),
(44, 'iuiu', '98', 989, 989, 2, 300, 2, 200, '500'),
(45, 'iuiu', '98', 989, 989, 2, 300, 2, 200, '500'),
(46, 'iuiu', '98', 989, 989, 2, 300, 2, 200, '500'),
(47, 'iuiu', '98', 989, 989, 2, 300, 2, 200, '500'),
(48, 'iuiu', '98', 989, 989, 2, 300, 2, 200, '500'),
(49, 'iuiu', '98', 989, 989, 2, 300, 2, 200, '500'),
(50, 'iuiu', '98', 989, 989, 2, 300, 2, 200, '500'),
(51, 'iuiu', '98', 989, 989, 2, 300, 2, 200, '500'),
(52, 'iuiu', '98', 989, 989, 2, 300, 2, 200, '500'),
(53, 'iuiu', '98', 989, 989, 2, 300, 2, 200, '500'),
(54, 'iuiu', '98', 989, 989, 2, 300, 2, 200, '500');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asrama`
--
ALTER TABLE `asrama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Paket`
--
ALTER TABLE `Paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  ADD PRIMARY KEY (`id_daftar`),
  ADD KEY `Paket` (`Paket`),
  ADD KEY `Asrama` (`Asrama`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  MODIFY `id_daftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  ADD CONSTRAINT `tb_pendaftaran_ibfk_1` FOREIGN KEY (`Asrama`) REFERENCES `asrama` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_pendaftaran_ibfk_2` FOREIGN KEY (`Paket`) REFERENCES `Paket` (`id_paket`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

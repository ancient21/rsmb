-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2019 at 08:43 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gd_sirs`
--

-- --------------------------------------------------------

--
-- Table structure for table `bpup`
--

CREATE TABLE `bpup` (
  `no_bpjs` int(30) NOT NULL,
  `no_medrec` int(30) NOT NULL,
  `dokter` varchar(30) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `penjamin` varchar(25) NOT NULL,
  `tgl_reg` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bpup`
--

INSERT INTO `bpup` (`no_bpjs`, `no_medrec`, `dokter`, `nama`, `penjamin`, `tgl_reg`) VALUES
(1234568, 1234456, 'Dr.Yanuar', 'Yazril Fahlevi', 'Fikri', '1998-09-21'),
(9883821, 19828381, 'Dr.Yanuar', 'Yudi', 'Fauzi', '2019-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `kd_user` int(11) NOT NULL,
  `username` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`kd_user`, `username`, `password`, `nama`, `alamat`) VALUES
(11, 'admin1', '21232f297a57a5a743894a0e4a801fc3', 'Yazril Fahlevi', 'Bandung, Cempaka Arum'),
(12, 'admin2', 'c84258e9c39059a89ab77d846ddab909', 'Yudi Gusma', 'Tubagus Ismail'),
(13, 'admin3', '32cacb2f994f6b42183a1300d9a3e8d6', 'Fitra Ramdani', 'Tasik');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `no_kartu` int(20) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `nik` int(20) NOT NULL,
  `faskes_t` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `status_perkawinan` varchar(20) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `kewarganegaraan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rekam_medis`
--

CREATE TABLE `rekam_medis` (
  `tgl_lahir` date NOT NULL,
  `nama_pasien` varchar(30) NOT NULL,
  `diagnosa` varchar(50) NOT NULL,
  `hasil_periksa` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rekam_medis`
--

INSERT INTO `rekam_medis` (`tgl_lahir`, `nama_pasien`, `diagnosa`, `hasil_periksa`) VALUES
('1998-09-22', 'Yazril Fahlevi', 'Tidak terlalu parah', 'Mengalami Sakit Kepala'),
('1998-12-09', 'Yudi', 'Tidak terjadi apa apa ', 'Baik');

-- --------------------------------------------------------

--
-- Table structure for table `rujukan`
--

CREATE TABLE `rujukan` (
  `no_rujukan` int(30) NOT NULL,
  `nama_puskes` varchar(30) NOT NULL,
  `no_kartubpjs` int(30) NOT NULL,
  `umur` int(5) NOT NULL,
  `status` varchar(25) NOT NULL,
  `kota` varchar(15) NOT NULL,
  `kode` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rujukan`
--

INSERT INTO `rujukan` (`no_rujukan`, `nama_puskes`, `no_kartubpjs`, `umur`, `status`, `kota`, `kode`) VALUES
(141514, 'Cempaka', 131415, 21, 'Aktif', 'Bandung', 123141),
(12345678, 'Tubagus', 31299281, 21, 'Aktif', 'Bandung', 21345);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bpup`
--
ALTER TABLE `bpup`
  ADD PRIMARY KEY (`no_bpjs`),
  ADD UNIQUE KEY `no_medrec` (`no_medrec`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`kd_user`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`no_kartu`),
  ADD UNIQUE KEY `nik` (`nik`);

--
-- Indexes for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD PRIMARY KEY (`tgl_lahir`);

--
-- Indexes for table `rujukan`
--
ALTER TABLE `rujukan`
  ADD PRIMARY KEY (`no_rujukan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bpup`
--
ALTER TABLE `bpup`
  MODIFY `no_bpjs` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9883822;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `kd_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `no_kartu` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1209939;

--
-- AUTO_INCREMENT for table `rujukan`
--
ALTER TABLE `rujukan`
  MODIFY `no_rujukan` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12345679;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

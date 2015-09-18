-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2015 at 10:31 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_tugasahir`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tugasahir`
--

CREATE TABLE IF NOT EXISTS `tbl_tugasahir` (
`kodepasien` int(50) NOT NULL,
  `tanggalmasuk` varchar(50) NOT NULL,
  `namapasien` varchar(50) NOT NULL,
  `tgllahir` varchar(50) NOT NULL,
  `tmplahir` varchar(100) NOT NULL,
  `jk` varchar(50) NOT NULL,
  `almtpasien` varchar(300) NOT NULL,
  `usia` int(50) NOT NULL,
  `koderuangan` int(50) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `namaruangan` varchar(50) NOT NULL,
  `noranjang` int(50) NOT NULL,
  `penyakit` varchar(300) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12201 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tugasahir`
--

INSERT INTO `tbl_tugasahir` (`kodepasien`, `tanggalmasuk`, `namapasien`, `tgllahir`, `tmplahir`, `jk`, `almtpasien`, `usia`, `koderuangan`, `jenis`, `namaruangan`, `noranjang`, `penyakit`) VALUES
(1, '3 desember 2014', 'haha', '4 agustus 2015', 'lampung timur', 'Perempuan', 'metro', 34, 12, 'VIP', 'melati', 5, 'asma'),
(12200, '12 janu ari 2015', 'oasis', '4 agustus 2015', 'lampung', 'Laki-Laki', 'lampung timur', 100, 100, 'VIP', 'melati', 7, 'panu kronis');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_tugasahir`
--
ALTER TABLE `tbl_tugasahir`
 ADD PRIMARY KEY (`kodepasien`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_tugasahir`
--
ALTER TABLE `tbl_tugasahir`
MODIFY `kodepasien` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12201;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

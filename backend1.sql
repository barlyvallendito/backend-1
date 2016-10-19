-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2016 at 07:57 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `backend1`
--

-- --------------------------------------------------------

--
-- Table structure for table `kelamin`
--

CREATE TABLE IF NOT EXISTS `kelamin` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `kelamin`
--

INSERT INTO `kelamin` (`id`, `nama`) VALUES
(1, 'Laki Laki'),
(2, 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE IF NOT EXISTS `kota` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id`, `nama`) VALUES
(1, 'Malang'),
(2, 'Nganjuk'),
(3, 'Blitar'),
(4, 'Tulungagung'),
(5, 'Surabaya');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `id_pegawai` varchar(255) NOT NULL DEFAULT '',
  `nama` varchar(255) DEFAULT NULL,
  `no_telp` varchar(255) DEFAULT NULL,
  `kota` varchar(255) DEFAULT NULL,
  `kelamin` int(1) DEFAULT NULL,
  `id_posisi` varchar(50) DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama`, `no_telp`, `kota`, `kelamin`, `id_posisi`, `status`) VALUES
('0e9132cde2e43e8636a562327a76756a', 'Barly Valendito', '081267543289', '1', 1, '1', 1),
('932e191e3ea31cae287589e97fc0f784', 'desi', '08123459987', '3', 2, '3', 1);

-- --------------------------------------------------------

--
-- Table structure for table `posisi`
--

CREATE TABLE IF NOT EXISTS `posisi` (
  `id_posisi` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posisi`
--

INSERT INTO `posisi` (`id_posisi`, `nama`) VALUES
('1', 'IT'),
('2', 'HRD'),
('3', 'Keuangan'),
('4', 'Produk'),
('5', 'Marketing');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

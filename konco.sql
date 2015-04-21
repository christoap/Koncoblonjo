-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2015 at 09:18 PM
-- Server version: 5.5.34
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `konco`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE IF NOT EXISTS `akun` (
  `password` varchar(50) NOT NULL,
  `Nama_User` varchar(50) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `Tanggal_lahir` date NOT NULL,
  `Nomor_HP` int(15) NOT NULL,
  `ID_Akun` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  PRIMARY KEY (`ID_Akun`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`password`, `Nama_User`, `Alamat`, `Tanggal_lahir`, `Nomor_HP`, `ID_Akun`, `username`) VALUES
('abc', 'christo', 'surabaya', '1994-12-25', 821, 1, 'christoap');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `ID_Barang` int(50) NOT NULL AUTO_INCREMENT,
  `Nama_Barang` varchar(100) NOT NULL,
  `Deskripsi_barang` text NOT NULL,
  `Foto` varchar(20) NOT NULL,
  `satuan` varchar(10) NOT NULL,
  `Kategori` varchar(50) NOT NULL,
  PRIMARY KEY (`ID_Barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `barang_vendor`
--

CREATE TABLE IF NOT EXISTS `barang_vendor` (
  `ID_barang_vendor` int(11) NOT NULL AUTO_INCREMENT,
  `ID_barang` int(50) NOT NULL,
  `ID_Vendor` int(20) NOT NULL,
  `Harga` int(11) NOT NULL,
  `Keterangan` varchar(50) NOT NULL,
  PRIMARY KEY (`ID_barang_vendor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE IF NOT EXISTS `detail_transaksi` (
  `ID_detail_transaksi` int(200) NOT NULL AUTO_INCREMENT,
  `ID_Barang` int(50) NOT NULL,
  `ID_Transaksi` int(20) NOT NULL,
  `kuantitas` int(11) NOT NULL,
  PRIMARY KEY (`ID_detail_transaksi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE IF NOT EXISTS `kontak` (
  `ID_Kontak` int(11) NOT NULL AUTO_INCREMENT,
  `Pesan` text NOT NULL,
  `ID_Akun` int(11) NOT NULL,
  PRIMARY KEY (`ID_Kontak`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `ID_Transaksi` int(20) NOT NULL AUTO_INCREMENT,
  `Status` int(11) NOT NULL,
  `Tanggal_Pembayaran` date NOT NULL,
  `ID_Akun` int(11) NOT NULL,
  PRIMARY KEY (`ID_Transaksi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE IF NOT EXISTS `vendor` (
  `ID_Vendor` int(20) NOT NULL,
  `Nama_Vendor` varchar(50) NOT NULL,
  PRIMARY KEY (`ID_Vendor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

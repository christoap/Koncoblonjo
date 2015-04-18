-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2014 at 03:47 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `inventaris`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(512) DEFAULT NULL,
  `password` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('administrator', '@-nCcc43mzB3udh'),
('kalab', 'kbjifits');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `id_barang` int(11) NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(512) NOT NULL,
  `status` varchar(512) NOT NULL,
  `keterangan` varchar(512) NOT NULL,
  `kondisi` varchar(512) NOT NULL,
  `tanggal_masuk` date DEFAULT NULL,
  `gambar` varchar(25) NOT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=149 ;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `status`, `keterangan`, `kondisi`, `tanggal_masuk`, `gambar`) VALUES
(2, 'KSM1', '1', 'Kursi Standart Merah ', '1', '2014-10-31', '2.jpg'),
(3, 'KSM2', '1', 'KURSI STANDART MERAH', '1', '2014-11-01', '3.jpg'),
(4, 'KSM3', '1', 'KURSI STANDAR MERAH', '1', '2014-11-01', '4.jpg'),
(5, 'KSM4', '1', 'KURSI STANDAR MERAH', '1', '2014-11-01', '5.jpg'),
(6, 'KSM5', '1', 'KURSI STANDAR MERAH', '1', '2014-11-01', '6.jpg'),
(7, 'KSM6', '1', 'KURSI STANDAR MERAH', '1', '2014-11-01', '7.jpg'),
(8, 'KSM7', '1', 'Kursi Standar Merah', '1', '2014-11-01', '8.jpg'),
(9, 'KSM8', '1', 'Kursi Standar Merah', '1', '2014-11-01', '9.jpg'),
(10, 'KSM9', '1', 'Kursi Standar Merah', '1', '2014-11-01', '10.jpg'),
(11, 'KSM10', '1', 'Kursi Standar Merah', '1', '2014-11-01', '11.jpg'),
(12, 'KSM11', '1', 'Kursi Standar Merah', '1', '2014-11-01', '12.jpg'),
(13, 'KSM12', '1', 'Kursi Standar Merah', '1', '2014-11-01', '13.jpg'),
(14, 'KSM13', '1', 'Kursi Standar Merah', '1', '2014-11-01', '14.jpg'),
(15, 'KSM14', '1', 'Kursi Standar Merah', '1', '2014-11-01', '15.jpg'),
(16, 'KSM15', '1', 'Kursi Standar Merah', '1', '2014-11-01', '16.jpg'),
(17, 'KSM16', '1', 'Kursi Standar Merah', '1', '2014-11-01', '17.jpg'),
(18, 'KSM17', '1', 'Kursi Standar Merah', '1', '2014-11-01', '18.jpg'),
(19, 'KSM18', '1', 'Kursi Standar Merah', '1', '2014-11-01', '19.jpg'),
(20, 'KSM19', '1', 'Kursi Standar Merah', '1', '2014-11-01', '20.jpg'),
(21, 'KSM20', '1', 'Kursi Standar Merah', '1', '2014-11-01', '21.jpg'),
(22, 'KSM21', '1', 'Kursi Standar Merah', '1', '2014-11-01', '22.jpg'),
(23, 'KSM22', '1', 'Kursi Standar Merah', '1', '2014-11-01', '23.jpg'),
(24, 'KSB1', '1', 'KURSI STANDAR BIRU', '1', '2014-11-01', '24.jpg'),
(25, 'KSB2', '1', 'Kursi Standar BIRU', '1', '2014-11-01', '25.jpg'),
(26, 'KSB3', '1', 'Kursi Standar BIRU', '1', '2014-11-01', '26.jpg'),
(27, 'KSB4', '1', 'Kursi Standar BIRU', '1', '2014-11-01', '27.jpg'),
(28, 'KSB5', '1', 'Kursi Standar BIRU', '1', '2014-11-01', '28.jpg'),
(29, 'KB1', '1', 'KURSI BESAR LOKASI DI RUANG KEPALA LAB NCC', '1', '2014-11-01', '29.jpg'),
(30, 'KB2', '1', 'KURSI BESAR LOKASI DI MEJA SERVER', '1', '2014-11-01', '30.jpg'),
(31, 'MD1', '1', 'MEJA DISKUSI LOKASI LAB NCC TENGAH', '1', '2014-11-01', '31.jpg'),
(32, 'PT1', '1', 'PAPAN TULIS BESAR', '1', '2014-11-01', '32.jpg'),
(33, 'DSPN1', '1', 'DISPENSER DAN GALON', '1', '2014-11-01', '33.jpg'),
(34, 'SCN1', '1', 'PRINTER SCANNER LOKASI DI RUANG ADMIN', '1', '2014-11-01', '34.jpg'),
(35, 'SB1', '1', 'SPEAKER BESAR LOKASI DI RUANG ADMIN', '1', '2014-11-01', '35.jpg'),
(36, 'SK1', '1', 'SPEAKER KECIL', '1', '2014-11-01', '36.jpg'),
(37, 'MKALAB1', '1', 'MEJA SEDANG LOKASI DI RUANG KEPALA LAB', '1', '2014-11-01', '37.jpg'),
(38, 'MP1', '1', 'MEJA UKURAN SEDANG UNTUK TEMPAT KOMPUTER PRINTER', '1', '2014-11-01', '38.jpg'),
(39, 'TVT1', '1', 'TV TURNER', '1', '2014-11-01', '39.jpg'),
(40, 'MU1', '1', 'MEJA PERSONAL KOMPUTER USER - (RUSAK RINGAN PADA TEMPAT KEYBOARD)', '0', '2014-11-01', '40.jpg'),
(41, 'MU2', '1', 'MEJA PERSONAL KOMPUTER USER', '1', '2014-11-01', '41.jpg'),
(42, 'MU3', '1', 'MEJA PERSONAL KOMPUTER USER - (RUSAK RINGAN PADA TEMPAT KEYBOARD)', '0', '2014-11-01', '42.jpg'),
(43, 'MU4', '1', 'MEJA PERSONAL KOMPUTER USER', '1', '2014-11-01', '43.jpg'),
(44, 'MU5', '1', 'MEJA PERSONAL KOMPUTER USER - (RUSAK RINGAN PADA TEMPAT KEYBOARD)', '0', '2014-11-01', '44.jpg'),
(45, 'MU6', '1', 'MEJA PERSONAL KOMPUTER USER', '1', '2014-11-01', '45.jpg'),
(46, 'MU7', '1', 'MEJA PERSONAL KOMPUTER USER', '1', '2014-11-01', '46.jpg'),
(47, 'MU8', '1', 'MEJA PERSONAL KOMPUTER USER', '1', '2014-11-01', '47.jpg'),
(48, 'MAS1', '1', 'MEJA ADMIN DEKAT LOKASI SERVER', '1', '2014-11-01', '48.jpg'),
(49, 'LK2P1', '1', 'LEMARI KABINET KACA 2 PINTU DEKAT PINTU MASUK NCC', '1', '2014-11-01', '49.jpg'),
(50, 'LK2P2', '1', 'LEMARI KABINET KACA 2 PINTU LOKASI DI DALAM RUANG KEPALA LAB', '1', '2014-11-01', '50.jpg'),
(51, 'FK1', '1', 'FILLING KABINET BESI 4 PINTU', '1', '2014-11-01', '51.jpg'),
(52, 'FK2', '1', 'FILLING KABINET BESI 4 PINTU (LOKASI DI DALAM RUANG KEPALA LAB)', '1', '2014-11-01', '52.jpg'),
(53, 'RS1', '1', 'RAK SERVER 4 TINGKAT', '1', '2014-11-01', '53.jpg'),
(54, 'LKT1', '1', 'LEMARI KECIL TIGA TINGKAT DEKAT MEJA KOMPUTER PRINTER', '1', '2014-11-01', '54.jpg'),
(55, 'LKD1', '1', 'LEMARI KECIL DUA TINGKAT (LOKASI DIBAWAH TV TURNER)', '1', '2014-11-01', '55.jpg'),
(56, 'PCS1', '1', 'PC SERVER', '1', '2014-11-01', '56.jpg'),
(57, 'PCS2', '1', 'PC SERVER', '1', '2014-11-01', '57.jpg'),
(58, 'PCS3', '1', 'PC SERVER', '1', '2014-11-01', '58.jpg'),
(59, 'PCS4', '1', 'PC SERVER', '1', '2014-11-01', '59.jpg'),
(60, 'WR1', '1', 'WIFI ROUTER PUTIH', '1', '2014-11-01', '60.jpg'),
(61, 'WR2', '1', 'WIFI ROUTER HITAM CISCO (BARU)', '1', '2014-11-01', '61.jpg'),
(62, 'SW1', '1', 'SWITCH LOKASI DI RAK 4 TINGKAT SERVER NCC', '1', '2014-11-01', '62.jpg'),
(63, 'SW2', '1', 'SWITCH (DIGUNAKAN USER TA BIMBINGAN PAK WASKHITO)', '1', '2014-11-01', '63.jpg'),
(64, 'SVB1', '1', 'SERVER BLADE LOKASI DI RAK 4 TINGKAT SERVER NCC', '1', '2014-11-01', '64.jpg'),
(65, 'AC1', '1', 'AC LOKASI DI DEKAT RUANG ADMIN (REMOTE AC TIDAK BISA DIGUNAKAN)', '0', '2014-11-01', '65.jpg'),
(66, 'AC2', '1', 'AC BESAR LOKASI TENGAH RUANG NCC', '1', '2014-11-01', '66.jpg'),
(67, 'AC3', '1', 'AC LOKASI DI TENGAH LAB NCC (TIDAK BISA DINYALAKAN)', '0', '2014-11-01', '67.jpg'),
(68, 'AC4', '1', 'AC LOKASI DI DALAM RUANG KEPALA LAB (REMOTE TIDAK ADA)', '0', '2014-11-01', '68.jpg'),
(69, 'LB1', '1', 'LEMARI BESI 2 PINTU (LOKASI DEKAT PAPAN TULIS)', '1', '2014-11-01', '69.jpg'),
(70, 'LB2', '1', 'LEMARI BESI 2 PINTU LOKASI DI DEKAT PAPAN TULIS', '1', '2014-11-01', '70.jpg'),
(71, 'MNT1', '1', 'MONITOR', '1', '2014-11-01', '71.jpg'),
(72, 'MNT2', '1', 'MONITOR', '1', '2014-11-01', '72.jpg'),
(73, 'MNT3', '1', 'MONITOR', '1', '2014-11-01', '73.jpg'),
(74, 'MNT4', '1', 'MONITOR', '1', '2014-11-01', '74.jpg'),
(75, 'MNT5', '1', 'MONITOR', '1', '2014-11-01', '75.jpg'),
(76, 'MNT6', '1', 'MONITOR', '1', '2014-11-01', '76.jpg'),
(77, 'MNT7', '1', 'MONITOR', '1', '2014-11-01', '77.jpg'),
(78, 'MNT8', '1', 'MONITOR', '1', '2014-11-01', '78.jpg'),
(79, 'MNT9', '1', 'MONITOR', '1', '2014-11-01', '79.jpg'),
(80, 'MNT10', '1', 'MONITOR', '1', '2014-11-01', '80.jpg'),
(81, 'MNT11', '1', 'MONITOR', '1', '2014-11-01', '81.jpg'),
(82, 'MNT12', '1', 'MONITOR', '1', '2014-11-01', '82.jpg'),
(83, 'MNT13', '1', 'MONITOR', '1', '2014-11-01', '83.jpg'),
(84, 'MNT14', '1', 'MONITOR', '1', '2014-11-01', '84.jpg'),
(85, 'MNT15', '1', 'MONITOR (TIDAK BISA DINYALAKAN)', '0', '2014-11-01', '85.jpg'),
(86, 'NC1', '1', 'NETWORK CAMERA FOR WEBCAM CONFERENCE', '1', '2014-11-01', '86.jpg'),
(87, 'P1', '1', 'PROYEKTOR', '1', '2014-11-01', '87.jpg'),
(88, 'NFCS1', '1', 'NFC SHIELD FOR ARDUINO', '1', '2014-11-01', '88.jpg'),
(89, 'NFCC', '1', 'NFC CARD SEBANYAK 9 KARTU', '1', '2014-11-01', '89.jpg'),
(90, 'NFCR1', '1', 'NFC READER', '1', '2014-11-01', '90.jpg'),
(91, 'SCJ1', '1', 'SCANNER SIDIK JARI', '1', '2014-11-01', '91.jpg'),
(92, 'RSP1', '1', 'RASBERRY PI', '1', '2014-11-01', '92.jpg'),
(93, 'RSP2', '1', 'RASBERRY PI', '1', '2014-11-01', '93.jpg'),
(94, 'PCP1', '1', 'PC DAN PRINTER UNTUK KEPERLUAN PRINT USER DAN LAB', '1', '2014-11-01', '94.jpg'),
(95, 'GSA1', '1', 'GSM SHIELD SIM 908 ARDUINO', '0', '2014-11-01', '95.jpg'),
(96, 'ARD1', '0', 'ARDUINO UNO', '1', '2014-11-01', '96.jpg'),
(97, 'ARD2', '1', 'ARDUINO UNO', '1', '2014-11-01', '97.jpg'),
(98, 'PCT1', '1', 'PC ALL IN ONE (DIGUNAKAN USER TA BIMBINGAN PAK ROYYAN, KOMPUTER DARI JICA)', '1', '2014-11-01', '98.jpg'),
(99, 'PCA1', '1', 'PC ADMIN DEKAT PRINTER SCANNER', '1', '2014-11-01', '99.jpg'),
(100, 'PCA2', '1', 'PC ADMIN DEKAT RAK 3 TINGKAT SERVER NCC', '0', '2014-11-01', '100.jpg'),
(101, 'MUT1', '1', 'MEJA USER KAPASITAS 3 KOMPUTER', '1', '2014-11-01', '101.jpg'),
(102, 'MUT2', '1', 'MEJA USER KAPASITAS 3 KOMPUTER', '1', '2014-11-01', '102.jpg'),
(103, 'PCU1', '1', 'PC USER', '1', '2014-11-01', '103.jpg'),
(104, 'PCU2', '1', 'PC USER', '1', '2014-11-01', '104.jpg'),
(105, 'PCU3', '1', 'PC USER', '1', '2014-11-01', '105.jpg'),
(106, 'PCU4', '1', 'PC USER', '1', '2014-11-01', '106.jpg'),
(107, 'PCU5', '1', 'PC USER', '1', '2014-11-01', '107.jpg'),
(108, 'PCU6', '1', 'PC USER', '1', '2014-11-01', '108.jpg'),
(109, 'PCU7', '1', 'PC USER', '1', '2014-11-01', '109.jpg'),
(110, 'PCU8', '1', 'PC USER', '1', '2014-11-01', '110.jpg'),
(111, 'PCU9', '1', 'PC USER', '1', '2014-11-01', '111.jpg'),
(112, 'PCU10', '0', 'PC USER', '1', '2014-11-01', '112.jpg'),
(113, 'PCU11', '0', 'PC USER', '1', '2014-11-01', '113.jpg'),
(114, 'PCU12', '0', 'PC USER', '1', '2014-11-01', '114.jpg'),
(115, 'PCU13', '1', 'PC USER', '1', '2014-11-01', '115.jpg'),
(116, 'PCU14', '1', 'PC USER', '1', '2014-11-01', '116.jpg'),
(117, 'PCU15', '1', 'PC USER', '1', '2014-11-01', '117.jpg'),
(118, 'RSP3', '1', 'Rasberry Pi', '1', '2014-11-14', '118.jpg'),
(119, 'RSP4', '1', 'Rassberry Pi', '1', '2014-11-14', '119.jpg'),
(120, 'RSP5', '1', 'Rassberry Pi', '1', '2014-11-14', '120.jpg'),
(121, 'RSP6', '1', 'Rassberry Pi', '1', '2014-11-14', '121.jpg'),
(122, 'RSP7', '1', 'Rassberry Pi', '1', '2014-11-14', '122.jpg'),
(123, 'GSA2', '1', 'GPRS Shield Arduino sim900', '1', '2014-11-14', '123.jpg'),
(124, 'GSA3', '1', 'GPRS Shield Arduino sim900', '1', '2014-11-14', '124.jpg'),
(125, 'GSA4', '1', 'GPRS Shield Arduino sim900', '1', '2014-11-14', '125.jpg'),
(126, 'ARD3', '1', 'Arduino Uno', '1', '2014-11-14', '126.jpg'),
(127, 'ARD4', '1', 'Arduino Uno', '1', '2014-11-14', '127.jpg'),
(128, 'ARD5', '1', 'Arduino Uno', '1', '2014-11-14', '128.jpg'),
(129, 'ARD6', '1', 'Arduino Uno', '1', '2014-11-14', '129.jpg'),
(130, 'ARD7', '1', 'Arduino Uno', '1', '2014-11-14', '130.jpg'),
(131, 'ARD8', '1', 'Arduino Uno', '1', '2014-11-14', '131.jpg'),
(132, 'ARD9', '1', 'Arduino Uno', '1', '2014-11-14', '132.jpg'),
(133, 'ARD10', '1', 'Arduino Uno', '1', '2014-11-14', '133.jpg'),
(134, 'ARD11', '1', 'Arduino Uno', '1', '2014-11-14', '134.jpg'),
(135, 'ARD12', '1', 'Arduino Uno', '1', '2014-11-14', '135.jpg'),
(136, 'TCR1', '1', 'TANG CRIMPING', '1', '2014-11-14', '136.jpg'),
(137, 'DCH1', '1', 'DOCKING HARDISK INTERNAL', '1', '2014-11-14', '137.jpg'),
(138, 'KYB1', '1', 'KEYBOARD + MOUSE LOGITECH', '1', '2014-11-14', '138.jpg'),
(139, 'KYB2', '1', 'KEYBOARD + MOUSE LOGITECH', '1', '2014-11-14', '139.jpg'),
(140, 'XBS1', '1', 'XBEE SHIELD', '1', '2014-11-14', '140.jpg'),
(141, 'XBS2', '1', 'XBEE SHIELD', '1', '2014-11-14', '141.jpg'),
(142, 'XBS3', '1', 'XBEE SHIELD', '1', '2014-11-14', '142.jpg'),
(143, 'XBPS1', '1', 'XBEE PCB SHIELD', '1', '2014-11-24', '143.jpg'),
(144, 'XBPS2', '1', 'XBEE PCB SHIELD', '1', '2014-11-24', '144.jpg'),
(145, 'BMA1', '1', 'BLUETOOTH MODUL ARDUINO', '1', '2014-11-24', '145.jpg'),
(146, 'BMA2', '1', 'BLUETOOTH MODUL ARDUINO', '1', '2014-11-24', '146.jpg'),
(147, 'WSA1', '1', 'WIFI SHIELD ARDUINO (#991-263)', '1', '2014-11-24', '147.jpg'),
(148, 'WSA2', '1', 'EMS WIFI SHIELD (#991-263)', '1', '2014-11-24', '148.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE IF NOT EXISTS `detail` (
  `id_barang` int(11) DEFAULT NULL,
  `id_peminjaman` int(11) DEFAULT NULL,
  KEY `FK_RELATIONSHIP_1` (`id_barang`),
  KEY `FK_RELATIONSHIP_2` (`id_peminjaman`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`id_barang`, `id_peminjaman`) VALUES
(2, 2),
(96, 3),
(113, 4),
(113, 5),
(112, 6),
(114, 7),
(96, 8);

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE IF NOT EXISTS `peminjaman` (
  `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(512) NOT NULL,
  `nrp` varchar(512) NOT NULL,
  `tanggal_pinjam` datetime NOT NULL,
  `tanggal_kembali` datetime NOT NULL,
  `status_peminjaman` int(11) NOT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_peminjaman`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `nama`, `nrp`, `tanggal_pinjam`, `tanggal_kembali`, `status_peminjaman`, `no_hp`) VALUES
(1, 'Ardhiansyah baskara', '5111100088', '2014-10-31 10:03:47', '2014-10-31 10:05:09', 2, '085646743945'),
(2, 'Nabilla Sabbaha Audria P', '5111100015', '2014-10-31 11:10:26', '0000-00-00 00:00:00', 0, '087855812080'),
(3, 'Ardhiansyah Baskara', '5111100088', '2014-11-03 08:31:32', '2014-11-03 08:37:51', 3, '085646743945'),
(4, 'Yolanda Septiana Dewi', '5109100187', '2014-11-05 13:55:15', '0000-00-00 00:00:00', 0, '085731179764'),
(5, 'Yolanda Septiana Dewi', '5109100187', '2014-11-05 13:56:25', '0000-00-00 00:00:00', 0, '085731179764'),
(6, 'Dian Rahma Latifa Hayun', '5113201051', '2014-11-05 13:58:17', '0000-00-00 00:00:00', 0, '083845911541'),
(7, 'Herleeyandi Markoni', '5111100056', '2014-11-14 07:36:52', '0000-00-00 00:00:00', 1, '081916336679'),
(8, 'Ramadhan Rosihadi Perdana', '5112100032', '2014-11-25 02:31:13', '0000-00-00 00:00:00', 0, '08982948597');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 14, 2015 at 10:22 PM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ulangan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tadmin`
--

CREATE TABLE IF NOT EXISTS `tadmin` (
  `Nama` varchar(100) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `User` varchar(10) NOT NULL,
  PRIMARY KEY (`Nama`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tadmin`
--

INSERT INTO `tadmin` (`Nama`, `Password`, `User`) VALUES
('admin', 'admin', 'admin'),
('murid', 'murid', 'siswa'),
('guru', 'guru', 'guru');

-- --------------------------------------------------------

--
-- Table structure for table `tguru`
--

CREATE TABLE IF NOT EXISTS `tguru` (
  `NIP` varchar(50) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `IdMatPel` varchar(50) NOT NULL,
  `IdKelas` varchar(30) NOT NULL,
  PRIMARY KEY (`NIP`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tguru`
--

INSERT INTO `tguru` (`NIP`, `Nama`, `IdMatPel`, `IdKelas`) VALUES
('200593', 'Syaiful Nazar', '11001', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tkelas`
--

CREATE TABLE IF NOT EXISTS `tkelas` (
  `IdKelas` varchar(30) NOT NULL,
  `Kelas` varchar(30) NOT NULL,
  PRIMARY KEY (`IdKelas`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tkelas`
--

INSERT INTO `tkelas` (`IdKelas`, `Kelas`) VALUES
('1', '8');

-- --------------------------------------------------------

--
-- Table structure for table `tmatpel`
--

CREATE TABLE IF NOT EXISTS `tmatpel` (
  `IdMatPel` varchar(50) NOT NULL,
  `Matpel` varchar(50) NOT NULL,
  `IdKelas` varchar(30) NOT NULL,
  PRIMARY KEY (`IdMatPel`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tmatpel`
--

INSERT INTO `tmatpel` (`IdMatPel`, `Matpel`, `IdKelas`) VALUES
('11001', 'Seni Budaya', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tnilai`
--

CREATE TABLE IF NOT EXISTS `tnilai` (
  `IdNilai` int(5) NOT NULL AUTO_INCREMENT,
  `tanggal_ujian` varchar(20) NOT NULL,
  `IdMatPel` varchar(50) NOT NULL,
  `Nilai` int(3) DEFAULT NULL,
  `NIS` varchar(50) NOT NULL,
  PRIMARY KEY (`IdNilai`),
  KEY `NIS` (`NIS`),
  KEY `IdMatPel` (`IdMatPel`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `tnilai`
--

INSERT INTO `tnilai` (`IdNilai`, `tanggal_ujian`, `IdMatPel`, `Nilai`, `NIS`) VALUES
(18, '', '', 100, ''),
(20, '', '', 100, ''),
(21, '', '', 100, ''),
(22, '', '', 100, ''),
(23, '', '', 100, ''),
(24, '', '', 100, ''),
(25, '', '', 100, ''),
(26, '', '', 100, ''),
(27, '', '', 100, ''),
(19, '', '', 100, '');

-- --------------------------------------------------------

--
-- Table structure for table `tsiswa`
--

CREATE TABLE IF NOT EXISTS `tsiswa` (
  `NIS` varchar(50) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `IdKelas` varchar(30) NOT NULL,
  PRIMARY KEY (`NIS`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tsiswa`
--


-- --------------------------------------------------------

--
-- Table structure for table `tsoal`
--

CREATE TABLE IF NOT EXISTS `tsoal` (
  `IdSoal` varchar(50) NOT NULL,
  `IdMatPel` varchar(50) NOT NULL,
  `nip` varchar(10) NOT NULL,
  `Pertanyaan` varchar(100) NOT NULL,
  `JawabanA` varchar(100) NOT NULL,
  `JawabanB` varchar(100) NOT NULL,
  `JawabanC` varchar(100) NOT NULL,
  `JawabanD` varchar(100) NOT NULL,
  `Jawaban` varchar(100) NOT NULL,
  PRIMARY KEY (`IdSoal`),
  KEY `IdMatPel` (`IdMatPel`),
  KEY `nip` (`nip`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tsoal`
--

INSERT INTO `tsoal` (`IdSoal`, `IdMatPel`, `nip`, `Pertanyaan`, `JawabanA`, `JawabanB`, `JawabanC`, `JawabanD`, `Jawaban`) VALUES
('1', '11001', '200593', 'Hardware komputer secara umum terdiri dari empat komponen penting seperti di bawah ini, Kecuali....', 'Untuk menghapus karakter dalam suatu naskah', 'Untuk menghapus karakter dalam suatu naskah', 'Untuk menghapus karakter dalam suatu naskah', 'Untuk menghapus karakter dalam suatu naskah', 'D');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

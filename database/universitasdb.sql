-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 12, 2017 at 12:57 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `universitasdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id_admin` int(9) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `password`, `email`) VALUES
(1, 'dayat', '123', 'dayat@gmail.com'),
(2, 'muntakap', '123', 'muntakap@gmail.com'),
(3, 'suci', '123', 'suci@email.com'),
(4, 'dwi', '123', 'dwi@gmail.com'),
(5, 'siti', '123', 'siti@gmail.com'),
(6, 'neng', '123', 'neng@gmai.com'),
(7, 'budi', '123', 'budi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
`npm` bigint(13) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gender` enum('L','P') NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(10) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `alamat` varchar(155) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=201643500313 ;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`npm`, `nama`, `gender`, `tempat_lahir`, `tgl_lahir`, `agama`, `jurusan`, `email`, `telepon`, `alamat`) VALUES
(201443500548, 'SUCHI NILA W', 'P', 'Jakarta', '1994-05-25', 'ISLAM', 'SASTRA INGGRIS', 'suci@gmail.com', '082138474', 'jakarta'),
(201443500549, 'DWI HANDAYANI', 'P', 'Jakarta', '1994-05-27', 'ISLAM', 'DKV', 'dwi@gmail.com', '083840555', 'jakarta'),
(201443500552, 'Nurul Hidayat', 'L', 'Banyuwangi', '1994-05-31', 'ISLAM', 'Teknik Informatika', 'nurulhidayat404@gmail.com', '085210558370', 'jakarta'),
(201443500556, 'MUNTAKAP', 'L', 'LAMPUNG', '1994-05-20', 'ISLAM', 'Teknik Industri', 'muntakap@gmail.com', '085210558303', 'jakarta'),
(201443500563, 'SITI MUNAWAROH', 'P', 'JAKARTA', '1994-05-20', 'ISLAM', 'SASTRA INGGRIS', 'muna@gmail.com', '085210558304', 'jakarta'),
(201443500622, 'SRI SUNINGSIH', 'P', 'JAKARTA', '1994-05-20', 'ISLAM', 'DKV', 'neng@gmail.com', '085210558304', 'jakarta'),
(201443500624, 'hapusen', 'L', 'jakarta', '1999-09-07', 'HINDU', 'SASTRA INGGRIS', 'del@gmail.com', '085210558777', 'bekasi'),
(201443500625, 'hapusin', 'P', 'bekasi', '1999-09-07', 'KRISTEN', 'Teknik Industri', 'deli@gmail.com', '0836848382', 'jakarta');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_user` int(9) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `password`, `email`) VALUES
(1, 'budi', '123', 'budi@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id_admin`), ADD UNIQUE KEY `nama` (`nama`,`password`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
 ADD PRIMARY KEY (`npm`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id_admin` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
MODIFY `npm` bigint(13) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=201643500313;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

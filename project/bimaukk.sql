-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2017 at 08:30 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bimaukk`
--
CREATE DATABASE IF NOT EXISTS `bimaukk` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bimaukk`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'bima', 'bima');

-- --------------------------------------------------------

--
-- Table structure for table `bookticket`
--

CREATE TABLE IF NOT EXISTS `bookticket` (
  `id_book` int(11) NOT NULL AUTO_INCREMENT,
  `id_post` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `date` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `status` enum('1','0') NOT NULL,
  PRIMARY KEY (`id_book`),
  KEY `id_movie` (`id_post`),
  KEY `id_customer` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `bookticket`
--

INSERT INTO `bookticket` (`id_book`, `id_post`, `id_user`, `date`, `time`, `qty`, `total`, `status`) VALUES
(13, 3, 3, '2017-03-02 ', '', 6, 150000, '0'),
(14, 6, 2, '2017-03-02 ', '', 10, 400000, '0'),
(15, 1, 1, '2017-03-02 ', '', 8, 200000, '0'),
(16, 1, 1, '2017-03-02 ', '', 10, 250000, '0'),
(17, 6, 2, '2017-03-02 ', '', 1, 40000, '0'),
(18, 3, 1, '2017-03-02 ', '', 80, 2000000, '0'),
(19, 8, 1, '2017-03-02 ', '', 50, 1350000, '0'),
(20, 8, 227502, '2017-03-03 ', '', 7, 189000, '1'),
(21, 3, 839861, '2017-03-03 ', '', 89, 2225000, '0'),
(22, 3, 839861, '2017-03-03 ', '', 2, 50000, '1'),
(23, 3, 3, '2017-03-03 ', '', 8, 200000, '0');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id_post` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(30) NOT NULL,
  `intro` text NOT NULL,
  `isi` text NOT NULL,
  `harga` int(100) NOT NULL,
  `kuota` int(11) NOT NULL,
  `gambar` text NOT NULL,
  PRIMARY KEY (`id_post`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id_post`, `judul`, `intro`, `isi`, `harga`, `kuota`, `gambar`) VALUES
(1, '3 idiotsaa', 'ini intro post ', 'ini isi yaaa', 25000, 80, 'g7'),
(3, 'the mummy', 'ini intro mummy', 'ini isi mummy', 25000, 1, 'g6'),
(4, 'snare', 'intro snare', 'isi snare', 35, 140, 'g3'),
(6, 'terpana', 'ini intro terpana', 'ini isi terpana', 40000, 89, 'g2'),
(8, 'insidious 3', 'intro insidious 3', 'detail insidious 3', 27000, 93, 'g9');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telepone` text NOT NULL,
  `address` varchar(100) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=839862 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `name`, `username`, `password`, `email`, `telepone`, `address`) VALUES
(1, 'Bima Susila Mukti', 'bimasm', 'aqua0505', 'bima@idca.or.id', '085204848227', 'banyuwangi'),
(2, 'galih', 'galih', 'galih', 'galih@gmail.com', '085776544567', 'nganjuk'),
(3, 'user', 'user', 'userpass', 'user@gmail.com', '089987567567', 'jakarta'),
(227502, 'erine', 'erin', 'erin', 'erine@gail.com', '085607014704', 'jl danau ranau g7 b9'),
(839860, 'tomi', 'tomi', 'tomi', 'tim@gmai.com', '908287323', 'jombang'),
(839861, 'kecap', 'manis', '123', 'kecap@gmail.com', '08292933320', 'malang');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

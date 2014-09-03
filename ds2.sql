-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ds`
--

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `levels` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- dump ตาราง `account`
--

INSERT INTO `account` (`id`, `username`, `password`, `levels`, `status`) VALUES
(3, 'test', 'a', 2, 1),
(4, 'test', 'aaaaa', 1, 1);

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dep_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dep_root` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- dump ตาราง `department`
--

INSERT INTO `department` (`id`, `dep_name`, `dep_root`) VALUES
(2, 'à¸—à¸”à¸ªà¸­à¸š', 0),
(3, 'aa', 0),
(5, 'b', 3),
(6, 'c', 5),
(7, 'test ', 6),
(8, 'à¸Ÿà¸Ÿà¸Ÿà¸Ÿ', 0);

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `medicine`
--

CREATE TABLE IF NOT EXISTS `medicine` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `size` int(11) NOT NULL,
  `kind` int(11) NOT NULL,
  `packaging` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- dump ตาราง `medicine`
--

INSERT INTO `medicine` (`id`, `name`, `size`, `kind`, `packaging`) VALUES
(3, 'test', 3, 1, 2);

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `med_kind`
--

CREATE TABLE IF NOT EXISTS `med_kind` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kind_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- dump ตาราง `med_kind`
--

INSERT INTO `med_kind` (`id`, `kind_name`) VALUES
(1, 'b');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `med_size`
--

CREATE TABLE IF NOT EXISTS `med_size` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `size_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- dump ตาราง `med_size`
--

INSERT INTO `med_size` (`id`, `size_name`) VALUES
(3, 'a'),
(4, 'b');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `packaging`
--

CREATE TABLE IF NOT EXISTS `packaging` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `packaging_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- dump ตาราง `packaging`
--

INSERT INTO `packaging` (`id`, `packaging_name`) VALUES
(2, 'aaaa');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

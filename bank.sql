-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 24, 2022 at 12:27 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `app_info`
--

DROP TABLE IF EXISTS `app_info`;
CREATE TABLE IF NOT EXISTS `app_info` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `footer` varchar(255) NOT NULL,
  `aboutus` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app_info`
--

INSERT INTO `app_info` (`id`, `nombre`, `img`, `description`, `footer`, `aboutus`) VALUES
(1, 'PeyNau', '5000723_network_online_paypal_payment_finance_icon.png', 'Pag bancaria', 'INFO', '');

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

DROP TABLE IF EXISTS `config`;
CREATE TABLE IF NOT EXISTS `config` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `color` varchar(255) NOT NULL,
  `header` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `active` varchar(255) NOT NULL,
  `active_slider` varchar(255) NOT NULL,
  `color_gradient` varchar(255) NOT NULL,
  `color_gradient2` varchar(255) NOT NULL,
  `color_gradient3` varchar(255) NOT NULL,
  `coin` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`id`, `color`, `header`, `content`, `active`, `active_slider`, `color_gradient`, `color_gradient2`, `color_gradient3`, `coin`) VALUES
(1, '#7be5b3', 'Lo hacemos de la manera digital<img src=\"/banco/images/bank.jpg\" class=\"img-fluid\" style=\"width:100vw;\">', 'realiza transacciones bancarias sin mucho problema.', 'on', 'off', '#7bd199', '#61bd81', '#417161', 'bs');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `passadmin` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `rol` varchar(255) NOT NULL DEFAULT '1',
  `password` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `cedula` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `passadmin`, `user`, `rol`, `password`, `lastname`, `cedula`) VALUES
(3, 'admin@admin.com', 'admin', 'admin', '1', 'admin', 'admion', 0),
(4, 'user@user.com', '', 'user@user.com', '2', '1234', 'nick', 0),
(32, 'profesor@gmail.com', '', 'profesor@gmail.com', '3', 'Profesor0', 'nick', 9989),
(33, 'user2@user.com', '', 'user', '2', 'user', 'usuario', 26344356),
(34, 'school@school.com', 'school', 'school', '1', 'school', 'school', 999);

-- --------------------------------------------------------

--
-- Table structure for table `move`
--

DROP TABLE IF EXISTS `move`;
CREATE TABLE IF NOT EXISTS `move` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `monto` float DEFAULT NULL,
  `sender` varchar(255) NOT NULL,
  `benefact` varchar(255) NOT NULL,
  `ref` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `move`
--

INSERT INTO `move` (`id`, `monto`, `sender`, `benefact`, `ref`) VALUES
(53, 50, '4', '5', '36977'),
(52, 1, '4', '4', '25687'),
(51, 1, '4', '4', '29094'),
(50, 1, '4', '4', '24376'),
(49, 1, '4', '4', '41663'),
(48, 1, '4', '4', '85778'),
(47, 1, '4', '4', '19275'),
(46, 1, '4', '4', '13979'),
(45, 1, '4', '4', '50067'),
(44, 1, '4', '4', '83582'),
(43, 122.99, '4', '4', '44197');

-- --------------------------------------------------------

--
-- Table structure for table `wallet`
--

DROP TABLE IF EXISTS `wallet`;
CREATE TABLE IF NOT EXISTS `wallet` (
  `accountnum` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `cash` int(11) NOT NULL,
  `owner` int(255) NOT NULL,
  UNIQUE KEY `accountnum` (`accountnum`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wallet`
--

INSERT INTO `wallet` (`accountnum`, `cash`, `owner`) VALUES
(3, 253, 4),
(4, 437, 33),
(5, 51, 34);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

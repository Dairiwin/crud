-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 13-10-2022 a las 02:04:03
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bank`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `app_info`
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
-- Volcado de datos para la tabla `app_info`
--

INSERT INTO `app_info` (`id`, `nombre`, `img`, `description`, `footer`, `aboutus`) VALUES
(1, 'proectoxddd', '4288564_banking_business_cash_income_money_icon.png', 'pag de proyecto', 'copyrycisaidjaidajids', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `config`
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
-- Volcado de datos para la tabla `config`
--

INSERT INTO `config` (`id`, `color`, `header`, `content`, `active`, `active_slider`, `color_gradient`, `color_gradient2`, `color_gradient3`, `coin`) VALUES
(1, '#020066', 'Bienvenido!', 'Bienvenido al sistema estudiantil ... mucho texto asi que ZZZ', 'on', 'on', '#1a0099', '#0b258e', '#050857', 'bs');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
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
  `cash` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id`, `email`, `passadmin`, `user`, `rol`, `password`, `lastname`, `cedula`, `cash`) VALUES
(3, 'admin@admin.com', 'admin', 'admin', '1', 'admin', 'admion', 0, 500),
(4, 'user@user.com', '', 'user@user.com', '2', 'Contraseña0', 'nick', 0, 501),
(32, 'profesor@gmail.com', '', 'profesor@gmail.com', '3', 'Profesor0', 'nick', 9989, 469.999);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `move`
--

DROP TABLE IF EXISTS `move`;
CREATE TABLE IF NOT EXISTS `move` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `monto` float DEFAULT NULL,
  `recept` varchar(255) NOT NULL,
  `benefact` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wallet`
--

DROP TABLE IF EXISTS `wallet`;
CREATE TABLE IF NOT EXISTS `wallet` (
  `accountnum` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `cash` int(11) NOT NULL,
  UNIQUE KEY `accountnum` (`accountnum`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `wallet`
--

INSERT INTO `wallet` (`accountnum`, `cash`) VALUES
(3, 4545);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 25-02-2019 a las 03:17:38
-- Versión del servidor: 5.7.21
-- Versión de PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `compensaciones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accion`
--

DROP TABLE IF EXISTS `accion`;
CREATE TABLE IF NOT EXISTS `accion` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) NOT NULL,
  `Status` tinyint(2) DEFAULT NULL,
  `Fecha_created` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `Fecha_update` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `accion`
--

INSERT INTO `accion` (`ID`, `Nombre`, `Status`, `Fecha_created`, `Fecha_update`) VALUES
(1, 'View', 1, '2018-06-29 16:48:18', '2018-06-29 16:48:18'),
(2, 'Insert', 1, '2018-06-29 16:48:18', '2018-06-29 16:48:18'),
(3, 'Update', 1, '2018-06-29 16:48:18', '2018-06-29 16:48:18'),
(4, 'Delete', 1, '2018-06-29 16:48:18', '2018-06-29 16:48:18'),
(5, 'Select', 1, '2018-06-29 16:48:18', '2018-06-29 16:48:18'),
(6, 'Search', 1, '2018-06-29 16:48:18', '2018-06-29 16:48:18'),
(7, 'Report', 1, '2018-06-29 16:48:18', '2018-06-29 16:48:18'),
(8, 'Details', 1, '2018-06-29 16:48:18', '2018-06-29 16:48:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora`
--

DROP TABLE IF EXISTS `bitacora`;
CREATE TABLE IF NOT EXISTS `bitacora` (
  `ID` int(15) NOT NULL AUTO_INCREMENT,
  `ID_Operador` int(15) DEFAULT NULL,
  `ID_Tabla` text,
  `ID_Accion` text,
  `Fecha_created` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `Fecha_update` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operador`
--

DROP TABLE IF EXISTS `operador`;
CREATE TABLE IF NOT EXISTS `operador` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `ID_Sucursal` int(10) NOT NULL,
  `ID_Rol` int(10) DEFAULT NULL,
  `Nombre` varchar(255) DEFAULT NULL,
  `App` varchar(255) DEFAULT NULL,
  `Apm` varchar(255) DEFAULT NULL,
  `Correo` varchar(255) DEFAULT NULL,
  `Telefono` varchar(255) DEFAULT NULL,
  `Archivo` varchar(255) NOT NULL,
  `Status` tinyint(2) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `Fecha_created` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `Fecha_update` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `operador`
--

INSERT INTO `operador` (`ID`, `ID_Sucursal`, `ID_Rol`, `Nombre`, `App`, `Apm`, `Correo`, `Telefono`, `Archivo`, `Status`, `Password`, `Fecha_created`, `Fecha_update`) VALUES
(1, 1, 1, 'Ignacio', 'Vazquez', 'Benitez', 'ignacio_juego@hotmail.com', '', 'avatar.png', 1, 'e807f1fcf82d132f9bb018ca6738a19f', '2018-11-27 03:00:47', '2018-11-27 03:00:47'),
(2, 1, 1, 'Ignacio', 'Vazquez', 'Benitez', 'ignacio_juego@hotmail.com', '', 'avatar.png', 0, '827ccb0eea8a706c4c34a16891f84e7b', '2018-11-27 03:00:47', '2019-02-25 02:34:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permiso`
--

DROP TABLE IF EXISTS `permiso`;
CREATE TABLE IF NOT EXISTS `permiso` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `ID_Rol` int(10) NOT NULL,
  `ID_Accion` int(10) NOT NULL,
  `ID_Tabla` int(10) NOT NULL,
  `Status` tinyint(2) DEFAULT NULL,
  `Fecha_created` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `Fecha_update` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `permiso`
--

INSERT INTO `permiso` (`ID`, `ID_Rol`, `ID_Accion`, `ID_Tabla`, `Status`, `Fecha_created`, `Fecha_update`) VALUES
(1, 1, 1, 1, 1, '2019-02-24 06:47:59', '2019-02-25 03:16:31'),
(2, 1, 2, 1, 1, '2019-02-24 06:47:59', '2019-02-24 06:47:59'),
(3, 1, 3, 1, 1, '2019-02-24 06:47:59', '2019-02-24 06:47:59'),
(4, 1, 4, 1, 1, '2019-02-24 06:47:59', '2019-02-24 06:47:59'),
(5, 1, 5, 1, 1, '2019-02-24 06:47:59', '2019-02-24 06:47:59'),
(6, 1, 6, 1, 1, '2019-02-24 06:47:59', '2019-02-24 06:47:59'),
(7, 1, 7, 1, 1, '2019-02-24 06:47:59', '2019-02-24 06:47:59'),
(8, 1, 8, 1, 1, '2019-02-24 06:47:59', '2019-02-24 06:47:59'),
(9, 1, 1, 2, 1, '2019-02-24 06:47:59', '2019-02-24 06:47:59'),
(10, 1, 2, 2, 1, '2019-02-24 06:47:59', '2019-02-24 06:47:59'),
(11, 1, 3, 2, 1, '2019-02-24 06:47:59', '2019-02-24 06:47:59'),
(12, 1, 4, 2, 1, '2019-02-24 06:47:59', '2019-02-24 06:47:59'),
(13, 1, 5, 2, 1, '2019-02-24 06:47:59', '2019-02-24 06:47:59'),
(14, 1, 6, 2, 1, '2019-02-24 06:47:59', '2019-02-24 06:47:59'),
(15, 1, 7, 2, 1, '2019-02-24 06:47:59', '2019-02-24 06:47:59'),
(16, 1, 8, 2, 1, '2019-02-24 06:47:59', '2019-02-24 06:47:59'),
(17, 1, 1, 3, 1, '2019-02-24 06:47:59', '2019-02-24 06:47:59'),
(18, 1, 2, 3, 1, '2019-02-24 06:47:59', '2019-02-24 06:47:59'),
(19, 1, 3, 3, 1, '2019-02-24 06:47:59', '2019-02-24 06:47:59'),
(20, 1, 4, 3, 1, '2019-02-24 06:47:59', '2019-02-24 06:47:59'),
(21, 1, 5, 3, 1, '2019-02-24 06:47:59', '2019-02-24 06:47:59'),
(22, 1, 6, 3, 1, '2019-02-24 06:47:59', '2019-02-24 06:47:59'),
(23, 1, 7, 3, 1, '2019-02-24 06:47:59', '2019-02-24 06:47:59'),
(24, 1, 8, 3, 1, '2019-02-24 06:47:59', '2019-02-24 06:47:59'),
(25, 1, 1, 4, 1, '2019-02-24 06:47:59', '2019-02-24 06:47:59'),
(26, 1, 2, 4, 1, '2019-02-24 06:47:59', '2019-02-24 06:47:59'),
(27, 1, 3, 4, 1, '2019-02-24 06:47:59', '2019-02-24 06:47:59'),
(28, 1, 4, 4, 1, '2019-02-24 06:47:59', '2019-02-24 06:47:59'),
(29, 1, 5, 4, 1, '2019-02-24 06:47:59', '2019-02-24 06:47:59'),
(30, 1, 6, 4, 1, '2019-02-24 06:47:59', '2019-02-24 06:47:59'),
(31, 1, 7, 4, 1, '2019-02-24 06:47:59', '2019-02-24 06:47:59'),
(32, 1, 8, 4, 1, '2019-02-24 06:47:59', '2019-02-24 06:47:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reporte`
--

DROP TABLE IF EXISTS `reporte`;
CREATE TABLE IF NOT EXISTS `reporte` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) NOT NULL,
  `Status` tinyint(2) DEFAULT NULL,
  `Fecha_created` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `Fecha_update` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `reporte`
--

INSERT INTO `reporte` (`ID`, `Nombre`, `Status`, `Fecha_created`, `Fecha_update`) VALUES
(1, 'Excel', 1, '2018-06-29 16:48:18', '2018-06-29 16:48:18'),
(2, 'Pdf', 1, '2018-06-29 16:48:18', '2018-06-29 16:48:18'),
(3, 'Graficas', 1, '2018-06-29 16:48:18', '2018-06-29 16:48:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

DROP TABLE IF EXISTS `rol`;
CREATE TABLE IF NOT EXISTS `rol` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) NOT NULL,
  `Archivo` varchar(255) NOT NULL,
  `Status` tinyint(2) DEFAULT NULL,
  `Fecha_created` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `Fecha_update` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`ID`, `Nombre`, `Archivo`, `Status`, `Fecha_created`, `Fecha_update`) VALUES
(1, 'Desarrollador', 'roles.png', 1, '2018-06-29 16:48:18', '2018-06-29 16:48:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursal`
--

DROP TABLE IF EXISTS `sucursal`;
CREATE TABLE IF NOT EXISTS `sucursal` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) NOT NULL,
  `Archivo` varchar(255) NOT NULL,
  `Status` tinyint(2) DEFAULT NULL,
  `Fecha_created` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `Fecha_update` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla`
--

DROP TABLE IF EXISTS `tabla`;
CREATE TABLE IF NOT EXISTS `tabla` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) NOT NULL,
  `Icono` varchar(45) NOT NULL,
  `Status` tinyint(2) DEFAULT NULL,
  `Fecha_created` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `Fecha_update` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tabla`
--

INSERT INTO `tabla` (`ID`, `Nombre`, `Icono`, `Status`, `Fecha_created`, `Fecha_update`) VALUES
(1, 'Panel', 'icon mdi mdi-account-circle', 1, '2018-06-29 16:48:18', '2018-09-22 00:37:49'),
(2, 'Roles', 'icon mdi mdi-shield-security', 1, '2018-06-29 16:48:18', '2018-09-22 00:37:49'),
(3, 'Operador', 'icon mdi mdi-shield-security', 1, '2018-06-29 16:48:18', '2018-09-22 00:37:49'),
(4, 'Configuracion', 'icon mdi mdi-shield-security', 1, '2018-06-29 16:48:18', '2018-09-22 00:37:49');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

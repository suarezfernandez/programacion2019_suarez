-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-09-2019 a las 18:14:12
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `infotep`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `decimales`
--

CREATE TABLE `decimales` (
  `_float` float DEFAULT NULL,
  `_double` double(6,2) DEFAULT NULL,
  `_decimal` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `decimales`
--

INSERT INTO `decimales` (`_float`, `_double`, `_decimal`) VALUES
(12454, 7877.00, '52654');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id` int(11) DEFAULT NULL,
  `nombre` text,
  `pais` text,
  `fecha_nacimiento` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id`, `nombre`, `pais`, `fecha_nacimiento`) VALUES
(NULL, 'Rony Frias', 'DR', NULL),
(NULL, 'Wentchelle Antoine', 'HT', NULL),
(NULL, 'Chris Nuñez', 'JP', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fecha`
--

CREATE TABLE `fecha` (
  `_date` date DEFAULT NULL,
  `_datetime` datetime DEFAULT NULL,
  `_time` time DEFAULT NULL,
  `_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `_year` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `fecha`
--

INSERT INTO `fecha` (`_date`, `_datetime`, `_time`, `_timestamp`, `_year`) VALUES
('1996-01-15', '1996-01-15 08:10:30', '11:58:30', '2019-01-01 05:01:01', 2019),
('2019-09-03', '2019-09-03 12:04:43', '12:04:43', '2019-09-03 16:04:43', 2019);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `numericos_con_decimales`
--

CREATE TABLE `numericos_con_decimales` (
  `nombre` text,
  `tipo` text,
  `Longitud_VAlores` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `numericos_enteros`
--

CREATE TABLE `numericos_enteros` (
  `_tinyint` tinyint(4) DEFAULT NULL,
  `_smallint` smallint(6) DEFAULT NULL,
  `_mediumint` mediumint(9) DEFAULT NULL,
  `_int` int(11) DEFAULT NULL,
  `_bigint` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `numericos_enteros`
--

INSERT INTO `numericos_enteros` (`_tinyint`, `_smallint`, `_mediumint`, `_int`, `_bigint`) VALUES
(127, 32767, 8388607, 2147483647, 9223372036854775807);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `numericos_enteros_sin_signo`
--

CREATE TABLE `numericos_enteros_sin_signo` (
  `_tinyint` int(10) UNSIGNED DEFAULT NULL,
  `_smallint` smallint(5) UNSIGNED DEFAULT NULL,
  `_meduimint` mediumint(8) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `numericos_enteros_sin_signo`
--

INSERT INTO `numericos_enteros_sin_signo` (`_tinyint`, `_smallint`, `_meduimint`) VALUES
(255, 65535, 16777215);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `texto`
--

CREATE TABLE `texto` (
  `_char` char(12) DEFAULT NULL,
  `_varchar` varchar(12) DEFAULT NULL,
  `_text` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `texto`
--

INSERT INTO `texto` (`_char`, `_varchar`, `_text`) VALUES
('rony rafael', 'rony rafael ', 'rony rafael frias pimentel');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

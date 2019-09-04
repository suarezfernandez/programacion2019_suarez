-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-09-2019 a las 18:21:31
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
-- Estructura de tabla para la tabla `celular`
--

CREATE TABLE `celular` (
  `id` int(10) UNSIGNED DEFAULT NULL,
  `nombre_equipo` int(11) DEFAULT NULL,
  `marca` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `decimales_2`
--

CREATE TABLE `decimales_2` (
  `_float` float DEFAULT NULL,
  `_double` double(6,2) DEFAULT NULL,
  `_decimal` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `familia`
--

CREATE TABLE `familia` (
  `nombre` varchar(50) DEFAULT NULL,
  `edad` tinyint(3) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `familia`
--

INSERT INTO `familia` (`nombre`, `edad`) VALUES
('juan', 15);

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
('2019-09-03', '2019-09-03 12:05:42', '12:05:42', '2019-09-03 16:05:42', 2019);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `participantes`
--

CREATE TABLE `participantes` (
  `id` bigint(20) UNSIGNED DEFAULT NULL,
  `nombre` text,
  `edad` tinyint(4) DEFAULT NULL,
  `cedula` varchar(14) DEFAULT NULL,
  `sexo` varchar(9) DEFAULT NULL,
  `direccion` text,
  `telefono` varchar(13) DEFAULT NULL,
  `estado_civil` varchar(9) DEFAULT NULL,
  `correo` varchar(80) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `participantes`
--

INSERT INTO `participantes` (`id`, `nombre`, `edad`, `cedula`, `sexo`, `direccion`, `telefono`, `estado_civil`, `correo`, `fecha_nacimiento`) VALUES
(1, 'liopo', 20, '8388607', 'masculino', 'puñal', '8388607', 'soltero', 'ronnyfrias@gmail.com', '0000-00-00'),
(2, 'PEPE', 22, '4701564879', 'masculino', 'partido', '8095256699', 'soltero', 'pepe12@gmail.com', '2002-01-02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `text`
--

CREATE TABLE `text` (
  `_char` char(12) DEFAULT NULL,
  `_varchar` varchar(12) DEFAULT NULL,
  `_text` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `text`
--

INSERT INTO `text` (`_char`, `_varchar`, `_text`) VALUES
('Luis alberto', 'Luis alberto', 'Luis alberto suarez fernandez');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

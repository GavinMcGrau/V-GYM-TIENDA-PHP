-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 21-10-2021 a las 16:44:21
-- Versión del servidor: 5.6.13
-- Versión de PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `alumnos`
--
CREATE DATABASE IF NOT EXISTS `alumnos` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `alumnos`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE IF NOT EXISTS `alumnos` (
  `Nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Apellidos` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `edad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`Nombre`, `Apellidos`, `edad`) VALUES
('Marc', 'Gavin Grau', 26),
('Ramon', 'Marimon Carabon', 69),
('dear', 'sade', 32),
('sawdeaf', 'tdebhre', 33),
('Prueba', 'Insert Sql', 19);
--
-- Base de datos: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
--
-- Base de datos: `usuarios`
--
CREATE DATABASE IF NOT EXISTS `usuarios` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `usuarios`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `nombre` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `contrasenya` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `correo` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `rol` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT 'users',
  `imagen` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`nombre`, `contrasenya`, `correo`, `rol`, `imagen`) VALUES
('sadda', '14641641', '', 'users', ''),
('Elboran', '546843541sad4a354', '', 'users', ''),
('root', '1234', 'pol@gmaosd.com', 'users', ''),
('pol', '1234', 'saoubjisd@mgls.vom', 'users', ''),
('', '', '', 'users', NULL),
('', '', '', 'users', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

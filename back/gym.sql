-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Temps de generació: 07-11-2021 a les 20:01:15
-- Versió del servidor: 5.6.13
-- Versió de PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de dades: `gym`
--
CREATE DATABASE IF NOT EXISTS `gym` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `gym`;

-- --------------------------------------------------------

--
-- Estructura de la taula `actividades`
--

CREATE TABLE IF NOT EXISTS `actividades` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) CHARACTER SET latin1 NOT NULL,
  `foto` varchar(500) CHARACTER SET latin1 NOT NULL,
  `clase` varchar(30) CHARACTER SET latin1 NOT NULL,
  `subclase` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `hecha` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de la taula `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `nombre` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `contrasenya` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `correo` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `rol` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT 'users',
  `imagen` varchar(500) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`correo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Bolcant dades de la taula `usuario`
--

INSERT INTO `usuario` (`nombre`, `contrasenya`, `correo`, `rol`, `imagen`) VALUES
('root', 'usbw', 'cacscasca@gmal.com', 'users', 'https://elcultural.com/wp-content/uploads/2020/04/a-9-696x392.jpg'),
('root', 'usbw', 'lopa@gmail.com', 'users', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

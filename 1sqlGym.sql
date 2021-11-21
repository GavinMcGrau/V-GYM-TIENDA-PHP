-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Temps de generació: 21-11-2021 a les 21:50:08
-- Versió del servidor: 10.4.21-MariaDB
-- Versió de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de dades: `gym`
--
CREATE DATABASE IF NOT EXISTS `gym` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `gym`;

-- --------------------------------------------------------

--
-- Estructura de la taula `actividades`
--

CREATE TABLE `actividades` (
  `id` int(2) NOT NULL,
  `nombre` varchar(30) CHARACTER SET latin1 NOT NULL,
  `foto` varchar(500) CHARACTER SET latin1 NOT NULL,
  `clase` varchar(30) CHARACTER SET latin1 NOT NULL,
  `subclase` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `descripcion` varchar(500) COLLATE utf8mb4_spanish_ci NOT NULL,
  `hecha` varchar(3) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT 'no',
  `idUsuario` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `cantidad` int(2) NOT NULL,
  `repeticiones` int(2) NOT NULL,
  `dia` varchar(18) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Bolcament de dades per a la taula `actividades`
--

INSERT INTO `actividades` (`id`, `nombre`, `foto`, `clase`, `subclase`, `descripcion`, `hecha`, `idUsuario`, `cantidad`, `repeticiones`, `dia`) VALUES
(1, 'flexiones', 'https://i.blogs.es/8f0e76/crossfit/450_1000.jpg', 'Tren Superior', 'Brazos', '', '0', 'cacscasca@gmal.com', 0, 0, 'lunes'),
(2, 'Crab Walk', 'https://evofitness.at/wp-content/uploads/2020/08/EVO-2020-PP-AUGUST-Banner_17-1200x675.jpg', 'Tren Superior', 'Trapecio - Deltoides - Biceps ', '', '0', 'cacscasca@gmal.com', 0, 0, ''),
(3, 'Fondos de triceps', 'https://as01.epimg.net/deporteyvida/imagenes/2017/08/06/portada/1502014266_073304_1502014358_noticia_normal.jpg\r\n', 'Tren Superior', 'Triceps', 'https://www.youtube.com/embed/PYapgguXgT8', '0', '1', 0, 0, ''),
(4, 'flexiones', 'https://i.blogs.es/8f0e76/crossfit/450_1000.jpg', 'Tren Superior', 'Brazos', 'https://www.youtube.com/embed/NklcXdowKww', '0', '1', 0, 0, ''),
(5, 'Crab Walk', 'https://evofitness.at/wp-content/uploads/2020/08/EVO-2020-PP-AUGUST-Banner_17-1200x675.jpg', 'Tren Superior', 'Trapecio - Deltoides - Biceps ', 'https://www.youtube.com/embed/I-3r4cl4ahA', '0', '1', 0, 0, ''),
(6, 'Plancha', 'https://www.yomeentreno.com/wp-content/uploads/2017/05/portada-480x369.png', 'Tren Superior', 'Abdominales', 'https://www.youtube.com/embed/61A2oTh10V8', '0', '1', 0, 0, ''),
(7, 'Sentadilla', 'https://static1.abc.es/media/bienestar/2021/04/08/sentadilla-correcta-kM0E--620x349@abc.jpg', 'Tren Inferior', 'Cuadriceps - Gluteos', 'https://www.youtube.com/embed/beSvHVN8pyc', '0', '1', 0, 0, ''),
(8, 'Zancadilla', 'https://css.adelgazarencasa.co/wp-content/uploads/2021/03/Zancada-deslizante-750x563.jpg', 'Tren Inferior', 'Cuadriceps', 'https://www.youtube.com/embed/lD_gfTofg4A', '0', '1', 0, 0, ''),
(9, 'Plancha Lateral', 'https://www.operaciontransformer.com/wp-content/uploads/2019/05/WBPR-quoblog-271213_09643.jpg', 'Tren Superior', 'Abdominales Laterales', 'https://www.youtube.com/embed/ewr7YpHJOv8', '0', '1', 0, 0, ''),
(11, 'Fondos de triceps', 'https://as01.epimg.net/deporteyvida/imagenes/2017/08/06/portada/1502014266_073304_1502014358_noticia_normal.jpg\r\n', 'Tren Superior', 'Triceps', 'https://www.youtube.com/embed/PYapgguXgT8', 'off', 'cacscasca@gmal.com', 12, 32, 'jueves'),
(13, 'flexiones', 'https://i.blogs.es/8f0e76/crossfit/450_1000.jpg', 'Tren Superior', 'Brazos', 'https://www.youtube.com/embed/NklcXdowKww', 'on', 'cacscasca@gmal.com', 3, 10, 'jueves'),
(33, 'Fondos de triceps', 'https://as01.epimg.net/deporteyvida/imagenes/2017/08/06/portada/1502014266_073304_1502014358_noticia_normal.jpg\r\n', 'Tren Superior', 'Triceps', 'https://www.youtube.com/embed/PYapgguXgT8', 'no', 'cacscasca@gmal.com', 1, 12, 'viernes');

-- --------------------------------------------------------

--
-- Estructura de la taula `usuario`
--

CREATE TABLE `usuario` (
  `nombre` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `contrasenya` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `correo` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `rol` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT 'users',
  `imagen` varchar(500) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `edad` int(3) NOT NULL,
  `peso` float NOT NULL,
  `altura` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Bolcament de dades per a la taula `usuario`
--

INSERT INTO `usuario` (`nombre`, `contrasenya`, `correo`, `rol`, `imagen`, `edad`, `peso`, `altura`) VALUES
('root', 'usbw', 'cacscasca@gmal.com', 'users', 'https://elcultural.com/wp-content/uploads/2020/04/a-9-696x392.jpg', 0, 0, 0),
('cal', '1234', 'lamar@v.com', 'users', NULL, 0, 0, 0),
('root', 'usbw', 'lopa@gmail.com', 'users', NULL, 0, 0, 0),
('Usuario', '1234', 'usuario@drop.com', 'users', NULL, 0, 0, 0);

--
-- Índexs per a les taules bolcades
--

--
-- Índexs per a la taula `actividades`
--
ALTER TABLE `actividades`
  ADD PRIMARY KEY (`id`);

--
-- Índexs per a la taula `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`correo`);

--
-- AUTO_INCREMENT per les taules bolcades
--

--
-- AUTO_INCREMENT per la taula `actividades`
--
ALTER TABLE `actividades`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-03-2016 a las 23:31:55
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tbgrado`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajog`
--

CREATE TABLE `trabajog` (
  `id` int(11) NOT NULL,
  `nombrep` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `autor1` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `autor2` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `autor3` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nombrea` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `nota` float DEFAULT NULL,
  `linea` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `trabajog`
--

INSERT INTO `trabajog` (`id`, `nombrep`, `autor1`, `autor2`, `autor3`, `nombrea`, `fecha`, `nota`, `linea`, `estado`) VALUES
(21341, 'carro automatico', 'juan mejia', 'carlos perez', '', 'pedro lopez', '2016-03-10', 4, 'automatizacion de dispositivos', 1),
(21342, 'Indicador de variables criticas de una moto', 'rafael martinez', 'kelly villareal', 'laura conde', 'samir perez', '2016-03-10', 4.9, 'identificar factores importantes', 1),
(21343, 'Gato hidraulico automatizado', 'alex salgado', 'carlos pastrana', 'stefania contreras', 'milton ', '2016-03-10', 5, 'automatizacion', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `trabajog`
--
ALTER TABLE `trabajog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `trabajog`
--
ALTER TABLE `trabajog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21344;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

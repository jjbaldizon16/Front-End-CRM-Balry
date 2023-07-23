-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-03-2018 a las 13:45:29
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `php_articulos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id` int(8) NOT NULL,
  `articulo_titulo` varchar(230) DEFAULT NULL,
  `descripcion_ar` varchar(250) DEFAULT NULL,
  `articulo_ar` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id`, `articulo_titulo`, `descripcion_ar`, `articulo_ar`) VALUES
(1, 'El mago de Oz', 'Cuenta la leyenda de un mago que vivio en un bosque.', '2018-03-26'),
(2, 'El secreto de cala', 'Los grande que albergaba a cientos de familias.', '2018-03-25'),
(3, 'El mago de Boca', 'La historia mago que vivio en un bosque.', '2018-03-24'),
(4, 'El secreto encantado', 'El tesoro mas grande que albergaba a cientos de familias.', '2018-03-23'),
(5, 'El mago de class', 'El trofeo de un mago que vivio en un bosque.', '2018-03-22'),
(6, 'El secreto de las marianas', 'Secretos de magadascar', '2018-03-21'),
(7, 'El domador x', 'Los mas grandes domadores de circo', '2018-03-20'),
(8, 'El mas fuerte', 'La lista de los hombres mas fuertes', '2018-03-19');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

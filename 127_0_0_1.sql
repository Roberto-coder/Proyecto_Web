-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-06-2023 a las 03:55:46
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `login`
--
CREATE DATABASE IF NOT EXISTS `login` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `login`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_datos`
--

CREATE TABLE `tabla_datos` (
  `nombres` text NOT NULL,
  `correo` varchar(50) NOT NULL,
  `telefonico` int(50) NOT NULL,
  `sitio_web` varchar(100) NOT NULL,
  `asunto` text NOT NULL,
  `mensaje` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tabla_datos`
--

INSERT INTO `tabla_datos` (`nombres`, `correo`, `telefonico`, `sitio_web`, `asunto`, `mensaje`, `id`) VALUES
('Rodriguez Valle', 'jar@gmail', 675657, 'www.peresz.mx', 'hola mundo', '', 24),
('juan', '', 99999, 'www.qwert.com', '', '', 25),
('practica final', '', 0, '', '', '', 26),
('practica', '', 0, '', '', 'vinculo con exito', 27),
('prueba con exito', '', 0, '', '', '', 28),
('formualario exityosasd d', '', 0, '', '', '', 29),
('formualario exityosasd d', '', 0, '', '', '', 30),
('formualario exityosasd d', '', 0, '', '', '', 31),
('sadasfas ', '', 0, '', '', '', 32),
('sadasfas ', '', 0, '', '', '', 33),
('hola mundo daasd', '', 0, '', '', '', 34),
('', '', 0, '', '', '', 35),
('', '', 0, '', '', '', 36),
('www', '', 0, '', '', '', 37),
('prueba con exito de envio de datos', '', 0, '', '', '', 38);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tabla_datos`
--
ALTER TABLE `tabla_datos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tabla_datos`
--
ALTER TABLE `tabla_datos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 28-03-2019 a las 04:17:59
-- Versión del servidor: 5.7.17-log
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cartuchon`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cartuchos`
--

CREATE TABLE `cartuchos` (
  `Id` int(11) NOT NULL,
  `Marca` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `Modelo` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `cartuchos`
--

INSERT INTO `cartuchos` (`Id`, `Marca`, `Modelo`) VALUES
(1, 'HP', '664 XL'),
(2, 'HP', '60'),
(3, 'HP', '711'),
(4, 'HP', '10'),
(5, 'HP', '94'),
(6, 'HP', '45'),
(7, 'HP', '95'),
(8, 'HP', '954'),
(9, 'HP', '21'),
(10, 'HP', '21'),
(11, 'HP', '951'),
(12, 'HP', '96'),
(13, 'HP', '97'),
(14, 'HP', '11'),
(15, 'HP', '22'),
(16, 'HP', '122'),
(17, 'HP', '970'),
(18, 'HP', '662'),
(19, 'HP', '933 XL'),
(20, 'HP', '701'),
(21, 'HP', '46'),
(22, 'HP', '23'),
(23, 'HP', '98'),
(24, 'HP', '01'),
(25, 'HP', '932'),
(26, 'HP', '932 XL'),
(27, 'HP', '664'),
(28, 'HP', '675'),
(29, 'HP', '564'),
(30, 'HP', '954 XL'),
(31, 'EPSON', '18'),
(32, 'EPSON', '18 XL'),
(33, 'EPSON', '29'),
(34, 'EPSON', '29 XL'),
(35, 'EPSON', '16'),
(36, 'EPSON', '16 XL'),
(37, 'EPSON ', '27'),
(38, 'EPSON', '27 XL'),
(39, 'EPSON ', '33'),
(40, 'EPSON ', '33 XL'),
(41, 'EPSON', '24'),
(42, 'EPSON', '24 XL'),
(43, 'CANON', 'CLI-171 XL SERIES BK C M Y'),
(44, 'CANON', 'CLI-8 SERIES BK C M Y'),
(46, 'CANON', 'CLI-171 SERIES BK C M Y'),
(47, 'CANON', 'CLI-32 SERIES BK C M Y'),
(48, 'CANON', 'CLI-30 SERIES BK C M Y'),
(49, 'CANON', 'CLI-36 SERIES BK C M Y'),
(50, 'CANON', 'CLI-221 SERIES BK C M Y'),
(51, 'LEXMARK', '200 XL SERIES BK Y M C'),
(52, 'LEXMARK', '200 SERIES BK Y M C'),
(53, 'LEXMARK', '100 SERIES BK Y M C'),
(54, 'LEXMARK ', '100 XL SERIES BK Y M C'),
(55, 'LEXMARK ', '105 XL BK ONLI'),
(56, 'LEXMARK', '2'),
(57, 'LEXMARK', '28'),
(58, 'LEXMARK', '29'),
(59, 'LEXMARK ', '28 A'),
(60, 'LEXMARK', '29 A'),
(61, 'LEXMARK', '83'),
(79, 'as', '111'),
(80, '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cartuchos`
--
ALTER TABLE `cartuchos`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cartuchos`
--
ALTER TABLE `cartuchos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

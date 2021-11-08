-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 22-09-2021 a las 06:44:06
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `testveiculos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anuncio`
--

CREATE TABLE `anuncio` (
  `idanuncio` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `pagado` varchar(2) NOT NULL,
  `direccion` int(11) DEFAULT 0,
  `telefono` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `idcategoria` int(11) DEFAULT NULL,
  `idmarca` int(11) DEFAULT NULL,
  `idmodelo` int(11) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `idclasificacion` int(11) DEFAULT NULL,
  `idcondicion` int(11) DEFAULT NULL,
  `idtransmission` int(11) DEFAULT NULL,
  `licencia` varchar(2) NOT NULL,
  `multas` varchar(2) NOT NULL,
  `millage` int(11) NOT NULL DEFAULT 0,
  `descripcion` text NOT NULL,
  `imagen` int(11) DEFAULT 0,
  `full_lablel` varchar(2) DEFAULT NULL,
  `idpueblo` int(11) DEFAULT NULL,
  `precio` decimal(15,2) NOT NULL,
  `mejoroferta` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncar tablas antes de insertar `anuncio`
--

TRUNCATE TABLE `anuncio`;
--
-- Volcado de datos para la tabla `anuncio`
--

INSERT IGNORE INTO `anuncio` (`idanuncio`, `nombre`, `pagado`, `direccion`, `telefono`, `email`, `idcategoria`, `idmarca`, `idmodelo`, `year`, `idclasificacion`, `idcondicion`, `idtransmission`, `licencia`, `multas`, `millage`, `descripcion`, `imagen`, `full_lablel`, `idpueblo`, `precio`, `mejoroferta`) VALUES
(96, 'Carlos 2', 'si', 0, '1233123132', 'mail@mail.com', 2, 1, 2, 2023, 1, 4, 1, 'si', 'si', 546, '58jhjghvghv', 0, 'si', 6, '455.00', 'si'),
(97, 'Carlos 232', 'si', 0, '9392512321', 'mail@mial.com', 2, 1, 2, 2023, 1, 1, 1, 'si', 'si', 123, '312231231', 0, 'si', 13, '312.00', 'si'),
(98, 'Carlos 10', 'si', 0, '9391231234', 'mail@mial.com', 2, 1, 2, 2023, 1, 1, 1, 'si', 'si', 3125, 'dfffffffffffffffsgvhleahcbiewuhc', 0, 'si', 8, '3125.00', 'si'),
(102, 'Carlos 20', 'si', 0, '1231231234', 'mail@mail.com', 2, 1, 7, 2023, 1, 3, 1, 'no', 'no', 231231, 'bsdafbdfsnbgfn gbsfdgghb', 0, 'no', 2, '897879.00', 'no');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `anuncio`
--
ALTER TABLE `anuncio`
  ADD PRIMARY KEY (`idanuncio`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `anuncio`
--
ALTER TABLE `anuncio`
  MODIFY `idanuncio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

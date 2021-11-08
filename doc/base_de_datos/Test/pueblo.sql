-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 02-09-2021 a las 23:11:45
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
-- Estructura de tabla para la tabla `pueblo`
--

CREATE TABLE `pueblo` (
  `idpueblo` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pueblo`
--

INSERT IGNORE INTO `pueblo` (`idpueblo`, `nombre`) VALUES
(1, 'Adjuntas'),
(2, 'Aguada'),
(3, 'Aguadilla'),
(4, 'Aguas Buenas'),
(5, 'Aibonito'),
(6, 'Arecibo'),
(7, 'Arroyo'),
(8, 'Añasco'),
(9, 'Barceloneta'),
(10, 'Barranquitas'),
(11, 'Bayamón'),
(12, 'Cabo Rojo'),
(13, 'Caguas'),
(14, 'Camuy'),
(15, 'Canóvanas'),
(16, 'Carolina'),
(17, 'Cataño'),
(18, 'Cayey'),
(19, 'Ceiba'),
(20, 'Ciales'),
(21, 'Cidra'),
(22, 'Coamo'),
(23, 'Comerío'),
(24, 'Corozal'),
(25, 'Culebra'),
(26, 'Dorado'),
(27, 'Fajardo'),
(28, 'Florida'),
(29, 'Guayama'),
(30, 'Guayanilla'),
(31, 'Guaynabo'),
(32, 'Gurabo'),
(33, 'Guánica'),
(34, 'Hatillo'),
(35, 'Hormigueros'),
(36, 'Humacao'),
(37, 'Isabela'),
(38, 'Jayuya'),
(39, 'Juana Díaz'),
(40, 'Juncos'),
(41, 'Lajas'),
(42, 'Lares'),
(43, 'Las Marías'),
(44, 'Las Piedras'),
(45, 'Loiza'),
(46, 'Luquillo'),
(47, 'Manatí'),
(48, 'Maricao'),
(49, 'Maunabo'),
(50, 'Mayagüez'),
(51, 'Moca'),
(52, 'Morovis'),
(53, 'Naguabo'),
(54, 'Naranjito'),
(55, 'Orocovis'),
(56, 'Patillas'),
(57, 'Peñuelas'),
(58, 'Ponce'),
(59, 'Quebradillas'),
(60, 'Rincón'),
(61, 'Rio Grande'),
(62, 'Sabana Grande'),
(63, 'Salinas'),
(64, 'San Germán'),
(65, 'San Juan'),
(66, 'San Lorenzo'),
(67, 'San Sebastián'),
(68, 'Santa Isabel'),
(69, 'Toa Alta'),
(70, 'Toa Baja'),
(71, 'Trujillo Alto'),
(72, 'Utuado'),
(73, 'Vega Alta'),
(74, 'Vega Baja'),
(75, 'Vieques'),
(76, 'Villalba'),
(77, 'Yabucoa'),
(78, 'Yauco');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pueblo`
--
ALTER TABLE `pueblo`
  ADD PRIMARY KEY (`idpueblo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pueblo`
--
ALTER TABLE `pueblo`
  MODIFY `idpueblo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

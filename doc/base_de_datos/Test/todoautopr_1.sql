-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 02-09-2021 a las 23:40:20
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
-- Base de datos: `todoautopr_1`
--
CREATE DATABASE IF NOT EXISTS `todoautopr_1` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `todoautopr_1`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anuncio`
--

CREATE TABLE `anuncio` (
  `idanuncio` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `pagado` varchar(2) NOT NULL,
  `direccion` text DEFAULT NULL,
  `telefono` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `categoria` varchar(50) DEFAULT NULL,
  `marca` varchar(255) DEFAULT NULL,
  `modelo` varchar(255) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `clasificacion` varchar(255) DEFAULT NULL,
  `condicion` varchar(255) DEFAULT NULL,
  `transmission` varchar(255) DEFAULT NULL,
  `licencia` varchar(2) NOT NULL,
  `multas` varchar(2) NOT NULL,
  `millage` int(11) NOT NULL DEFAULT 0,
  `descripcion` text NOT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `full_lablel` varchar(2) DEFAULT NULL,
  `idpueblo` int(11) DEFAULT NULL,
  `precio` decimal(15,2) NOT NULL,
  `mejoroferta` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idcategoria` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clasificacion`
--

CREATE TABLE `clasificacion` (
  `idclasificacion` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `condicion`
--

CREATE TABLE `condicion` (
  `idcondicion` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `condicion`
--

INSERT IGNORE INTO `condicion` (`idcondicion`, `nombre`) VALUES
(1, 'Como nuevo'),
(2, 'Exelente'),
(3, 'Muy Bueno'),
(4, 'Regular'),
(5, 'Malo'),
(6, 'Para Piezas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `idimagen` int(11) NOT NULL,
  `idanuncio` int(11) NOT NULL,
  `ruta_imagen` varchar(255) NOT NULL,
  `descripcion_imagen` varchar(255) NOT NULL,
  `nombre_directorio` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `idmarca` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `marca`
--

INSERT IGNORE INTO `marca` (`idmarca`, `nombre`) VALUES
(1, 'Toyota'),
(2, 'Nissan'),
(3, 'Kia'),
(4, 'Hyundai'),
(5, 'Ford'),
(6, 'Chrysler'),
(7, 'Mitsubishi'),
(8, 'Honda'),
(9, 'Suzuki'),
(10, 'Mazda'),
(11, 'Nueva');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelo`
--

CREATE TABLE `modelo` (
  `idmodelo` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `idmarca` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `modelo`
--

INSERT IGNORE INTO `modelo` (`idmodelo`, `nombre`, `idmarca`) VALUES
(1, 'Toyota Wigo', 1),
(2, 'Toyota Yaris', 1),
(3, 'Toyota FJ Cruiser', 1),
(4, 'Toyota Fortuner', 1),
(5, 'Toyota Rush', 1),
(6, 'Toyota Prado', 1),
(7, 'Toyota Rav4', 1),
(8, 'Toyota Land Cruiser', 1),
(9, 'Toyota Avanza', 1),
(10, 'Toyota Avanza Veloz', 1),
(11, 'Toyota Innova', 1),
(12, 'Toyota Wish', 1),
(13, 'Toyota Alphard', 1),
(14, 'Ford EcoSport', 5),
(15, 'Ford Everest', 5),
(16, 'Ford Expedition', 5),
(17, 'Toyota Avensis', 1),
(18, 'Acord', 9),
(19, 'Carro', 11);

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transmission`
--

CREATE TABLE `transmission` (
  `idtransmission` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `anuncio`
--
ALTER TABLE `anuncio`
  ADD PRIMARY KEY (`idanuncio`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idcategoria`);

--
-- Indices de la tabla `clasificacion`
--
ALTER TABLE `clasificacion`
  ADD PRIMARY KEY (`idclasificacion`);

--
-- Indices de la tabla `condicion`
--
ALTER TABLE `condicion`
  ADD PRIMARY KEY (`idcondicion`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`idimagen`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`idmarca`);

--
-- Indices de la tabla `modelo`
--
ALTER TABLE `modelo`
  ADD PRIMARY KEY (`idmodelo`);

--
-- Indices de la tabla `pueblo`
--
ALTER TABLE `pueblo`
  ADD PRIMARY KEY (`idpueblo`);

--
-- Indices de la tabla `transmission`
--
ALTER TABLE `transmission`
  ADD PRIMARY KEY (`idtransmission`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `anuncio`
--
ALTER TABLE `anuncio`
  MODIFY `idanuncio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idcategoria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `clasificacion`
--
ALTER TABLE `clasificacion`
  MODIFY `idclasificacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `condicion`
--
ALTER TABLE `condicion`
  MODIFY `idcondicion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `idimagen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `idmarca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `modelo`
--
ALTER TABLE `modelo`
  MODIFY `idmodelo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `pueblo`
--
ALTER TABLE `pueblo`
  MODIFY `idpueblo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT de la tabla `transmission`
--
ALTER TABLE `transmission`
  MODIFY `idtransmission` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

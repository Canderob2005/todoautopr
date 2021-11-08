-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: sql201.byetcluster.com
-- Tiempo de generación: 30-08-2021 a las 19:14:28
-- Versión del servidor: 5.6.48-88.0
-- Versión de PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `epiz_27965998_todoautopr`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anuncio`
--

CREATE TABLE `anuncio` (
  `idanuncio` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `pagado` varchar(2) NOT NULL,
  `direccion` text NOT NULL,
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
  `millage` int(11) NOT NULL DEFAULT '0',
  `descripcion` text NOT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `full_lablel` varchar(2) DEFAULT NULL,
  `idpueblo` int(11) DEFAULT NULL,
  `precio` decimal(15,2) NOT NULL,
  `mejoroferta` varchar(2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `anuncio`
--

INSERT INTO `anuncio` (`idanuncio`, `nombre`, `pagado`, `direccion`, `telefono`, `email`, `idcategoria`, `idmarca`, `idmodelo`, `year`, `idclasificacion`, `idcondicion`, `idtransmission`, `licencia`, `multas`, `millage`, `descripcion`, `imagen`, `full_lablel`, `idpueblo`, `precio`, `mejoroferta`) VALUES
(41, 'Carlos Aleman', 'si', '', '0', 'caleman9791@gmail.com', 2, 1, 1, 2020, 1, 1, 1, 'si', 'no', 2020, '2020', NULL, 'si', 12, '2020.00', 'si');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idcategoria` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idcategoria`, `nombre`) VALUES
(1, 'Van pasajero'),
(2, 'Auto'),
(3, 'Camiones'),
(4, 'Motora'),
(5, 'Pick-up'),
(6, 'Polaris'),
(7, 'Todo Rerreno '),
(8, 'Ucv'),
(9, 'Van carga');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clasificacion`
--

CREATE TABLE `clasificacion` (
  `idclasificacion` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clasificacion`
--

INSERT INTO `clasificacion` (`idclasificacion`, `nombre`) VALUES
(1, 'Nuevo'),
(2, 'Usado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `condicion`
--

CREATE TABLE `condicion` (
  `idcondicion` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `condicion`
--

INSERT INTO `condicion` (`idcondicion`, `nombre`) VALUES
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
  `nombre_directorio` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`idimagen`, `idanuncio`, `ruta_imagen`, `descripcion_imagen`, `nombre_directorio`) VALUES
(82, 41, '3218321229_337362961211967_5016960909371719571_n.jpg', 'Toyota Toyota Wigo', '../img/41'),
(80, 41, '1202282830_319280849706324_2808504529930952041_n.jpg', 'Toyota Toyota Wigo', '../img/41'),
(81, 41, '2203598297_326773325604264_2359510487532706786_n.jpg', 'Toyota Toyota Wigo', '../img/41'),
(79, 41, '0200597422_317158943251848_7080413922616780866_n.jpg', 'Toyota Toyota Wigo', '../img/41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `idmarca` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`idmarca`, `nombre`) VALUES
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
(17, 'Kawasaki'),
(16, 'Datsun');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelo`
--

CREATE TABLE `modelo` (
  `idmodelo` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `idmarca` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `modelo`
--

INSERT INTO `modelo` (`idmodelo`, `nombre`, `idmarca`) VALUES
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
(25, 'Xq 350', 17),
(24, 'B210', 16);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pueblo`
--

CREATE TABLE `pueblo` (
  `idpueblo` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `pueblo`
--

INSERT INTO `pueblo` (`idpueblo`, `nombre`) VALUES
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `transmission`
--

INSERT INTO `transmission` (`idtransmission`, `nombre`) VALUES
(1, 'Automática'),
(2, 'Standard');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `anuncio`
--
ALTER TABLE `anuncio`
  ADD PRIMARY KEY (`idanuncio`),
  ADD KEY `FK_categoria` (`idcategoria`),
  ADD KEY `FK_clasificacion` (`idclasificacion`),
  ADD KEY `FK_condicion` (`idcondicion`),
  ADD KEY `FK_transmission` (`idtransmission`),
  ADD KEY `FK_idmarca` (`idmarca`),
  ADD KEY `FK_modelo` (`idmodelo`);

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
  ADD PRIMARY KEY (`idmodelo`),
  ADD KEY `idmarca` (`idmarca`);

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
  MODIFY `idanuncio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idcategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `clasificacion`
--
ALTER TABLE `clasificacion`
  MODIFY `idclasificacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `condicion`
--
ALTER TABLE `condicion`
  MODIFY `idcondicion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `idimagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `idmarca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `modelo`
--
ALTER TABLE `modelo`
  MODIFY `idmodelo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `pueblo`
--
ALTER TABLE `pueblo`
  MODIFY `idpueblo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT de la tabla `transmission`
--
ALTER TABLE `transmission`
  MODIFY `idtransmission` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

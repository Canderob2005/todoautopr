-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 20-11-2021 a las 12:16:47
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `app_auto_001`
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
  `mejoroferta` varchar(2) DEFAULT NULL,
  `aprobado` varchar(2) DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncar tablas antes de insertar `anuncio`
--

TRUNCATE TABLE `anuncio`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idcategoria` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncar tablas antes de insertar `categoria`
--

TRUNCATE TABLE `categoria`;
--
-- Volcado de datos para la tabla `categoria`
--

INSERT IGNORE INTO `categoria` (`idcategoria`, `nombre`) VALUES
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncar tablas antes de insertar `clasificacion`
--

TRUNCATE TABLE `clasificacion`;
--
-- Volcado de datos para la tabla `clasificacion`
--

INSERT IGNORE INTO `clasificacion` (`idclasificacion`, `nombre`) VALUES
(1, 'Nuevo'),
(2, 'Usado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `condicion`
--

CREATE TABLE `condicion` (
  `idcondicion` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncar tablas antes de insertar `condicion`
--

TRUNCATE TABLE `condicion`;
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
  `nombre_directorio` varchar(100) NOT NULL,
  `numero_imagen` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncar tablas antes de insertar `imagenes`
--

TRUNCATE TABLE `imagenes`;
--
-- Volcado de datos para la tabla `imagenes`
--

INSERT IGNORE INTO `imagenes` (`idimagen`, `idanuncio`, `ruta_imagen`, `descripcion_imagen`, `nombre_directorio`, `numero_imagen`) VALUES
(241, 121, 'rava44.jpeg', 'Toyota Toyota Wigo', '121', 2),
(242, 122, 'rava41.jpeg', 'Marckkkkkfgfgg ', '122', 1),
(243, 122, 'rava42.jpeg', 'Marckkkkkfgfgg ', '122', 2),
(244, 122, 'rava43.jpeg', 'Marckkkkkfgfgg ', '122', 3),
(245, 122, 'rava44.jpeg', 'Marckkkkkfgfgg ', '122', 4),
(246, 123, '008.png', 'Toyota ', '123', 1),
(247, 123, 'rava42.jpeg', 'Toyota ', '123', 2),
(248, 123, 'rava43.jpeg', 'Toyota ', '123', 3),
(249, 123, 'rava44.jpeg', 'Toyota ', '123', 4),
(250, 124, '001.png', 'Toyota ', '124', 1),
(251, 124, '002.png', 'Toyota ', '124', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `idmarca` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncar tablas antes de insertar `marca`
--

TRUNCATE TABLE `marca`;
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
(74, 'Toyota Nuevo'),
(75, 'Toyota Nuevo uno'),
(76, 'Toyo Prueba'),
(77, 'Prueba uno'),
(78, 'Prueba dos'),
(79, 'Prueba tres'),
(80, 'Prueba cuatro'),
(81, 'Prueba cinco'),
(82, 'Prueba seis'),
(83, 'Prueba siete'),
(84, 'Prueba ocho'),
(85, 'Prueba ochos'),
(86, 'Prueba ochoss'),
(87, 'Prueba ochosss'),
(88, 'Prueba ochossss'),
(89, 'Prueba ochosssss'),
(90, 'Prueba ochossssso'),
(91, 'Prueba ochosssssos'),
(92, 'Prueba ochosssssoss'),
(93, 'Marca uno'),
(94, 'Nuevo dosr'),
(95, 'Nuevo dosrd'),
(96, 'prueba nnumlo'),
(97, 'foklor'),
(98, 'foklorf'),
(99, 'foklorfgagag'),
(100, 'foklorfgagagfff'),
(101, 'foklorfgagagffff'),
(102, 'agfdgbfdsghdfgggddddf'),
(103, 'nueva marca coool'),
(104, 'Mack'),
(105, 'Marckk'),
(106, 'Marckkk'),
(107, 'Marckkkk'),
(108, 'Marckkkkk'),
(109, 'Marckkkkkf'),
(110, 'Marckkkkkfg'),
(111, 'Marckkkkkfgf'),
(112, 'Marckkkkkfgfg'),
(113, 'Marckkkkkfgfgg'),
(114, 'ffd'),
(115, 'ffd'),
(116, 'ffdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelo`
--

CREATE TABLE `modelo` (
  `idmodelo` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `idmarca` int(11) NOT NULL,
  `idcategoria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncar tablas antes de insertar `modelo`
--

TRUNCATE TABLE `modelo`;
--
-- Volcado de datos para la tabla `modelo`
--

INSERT IGNORE INTO `modelo` (`idmodelo`, `nombre`, `idmarca`, `idcategoria`) VALUES
(1, 'Toyota Wigo', 1, 1),
(2, 'Toyota Yaris', 1, 1),
(3, 'Toyota FJ Cruiser', 1, 1),
(4, 'Toyota Fortuner', 1, 1),
(5, 'Toyota Rush', 1, 1),
(6, 'Toyota Prado', 1, 1),
(7, 'Toyota Rav4', 1, 1),
(8, 'Toyota Land Cruiser', 1, 2),
(9, 'Toyota Avanza', 1, 1),
(10, 'Toyota Avanza Veloz', 1, 1),
(11, 'Toyota Innova', 1, 1),
(12, 'Toyota Wish', 1, 1),
(13, 'Toyota Alphard', 1, 1),
(14, 'Ford EcoSport', 5, 1),
(15, 'Ford Everest', 5, 1),
(16, 'Ford Expedition', 5, 1),
(17, 'Toyota Avensis', 1, 1),
(18, 'Acord', 9, 1),
(24, 'gagfds', 102, 2),
(25, 'Carrito', 103, 2),
(26, 'Carritodd', 103, 2),
(27, 'Modelo 102', 104, 3),
(28, 'Modelo 102', 111, 3),
(29, 'Modelo 102', 111, 3),
(30, 'Modelo 102g', 112, 3),
(31, 'Modelo 102g', 112, 3),
(32, 'Modelo 102g', 113, 2),
(33, 'ffvvfdv', 114, 2),
(34, 'ffvvfdv', 116, 2),
(35, 'ffvvfdv', 116, 2),
(36, 'ffvvfdv', 116, 2),
(37, 'ffvvfdv', 116, 2),
(38, 'ffvvfdv', 116, 2),
(39, 'marca', 1, 2),
(40, 'aaaaaaaaaaaaaaa', 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pueblo`
--

CREATE TABLE `pueblo` (
  `idpueblo` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncar tablas antes de insertar `pueblo`
--

TRUNCATE TABLE `pueblo`;
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
-- Truncar tablas antes de insertar `transmission`
--

TRUNCATE TABLE `transmission`;
--
-- Volcado de datos para la tabla `transmission`
--

INSERT IGNORE INTO `transmission` (`idtransmission`, `nombre`) VALUES
(1, 'Automática'),
(2, 'Standard');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `apellido` varchar(20) DEFAULT NULL,
  `nombre_usuario` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `telefono` int(10) DEFAULT NULL,
  `id_rol_usuaro` int(11) DEFAULT NULL,
  `activacion` int(11) NOT NULL DEFAULT 0,
  `token` varchar(255) NOT NULL,
  `token_password` varchar(255) DEFAULT NULL,
  `password_request` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncar tablas antes de insertar `usuario`
--

TRUNCATE TABLE `usuario`;
--
-- Volcado de datos para la tabla `usuario`
--

INSERT IGNORE INTO `usuario` (`idusuario`, `nombre`, `apellido`, `nombre_usuario`, `email`, `pass`, `telefono`, `id_rol_usuaro`, `activacion`, `token`, `token_password`, `password_request`) VALUES
(1, 'carlos', NULL, 'user88', 'mail@mail.com', '$2y$10$rABv/kD87V6kroKId6mptepa42CgzrLMLWYqZCDTzFQMKQoKWt436', NULL, NULL, 0, '093d2f732dfd40e036a008bd2382dcf441794fa8dfc6e811b5889529e270eb72013300b546cb3770894be611fdc006a035ffdedaecf0d97cea48d2e6894894ebff584db1b6f3c33f90069a4d61bc', NULL, 0),
(2, 'Carlos', NULL, 'user2', 'mail2@mail.com', '$2y$10$bNiGHa3SQpBxKxdRyY1gje50F3Irm/0/wB9NlGlIx1pQhXyfoSSBW', NULL, NULL, 0, '8ffbe1cce17844af98c5a0ecb8e6f6bd075b6ecee741a3b6eaec4fe4962a45c26416fe4e0ffa83ceb6c6cf39571a2eb10c29c900b4720c463019fd7ae86fb7eb0e4a092a33c0a1d89a8de756d364', NULL, 0),
(3, 'Carlos', NULL, 'user3', 'mail3@mail.com', '$2y$10$PYlHXXVsC/hVsIaLhoHXSefr3EB.Qo.XuvBCPMGwbQbcWSfG6QjRi', NULL, NULL, 0, 'fa7d9534e76f17ee3702840c89d0858e7843462274903e56650eb91492340ae82add4323f69aab041e61211dd30fbee4dec0460e18328e16400b1ac0591ce497621aa80e215ff4338fe245c9b803', NULL, 0),
(4, 'Carlos ', NULL, 'user4', 'mail4@mail.com', '$2y$10$w7HNCAMd7w2uCm3xrVtrcukp6Nv98CxyCnqEeWkWfYVxR5OVOiwti', NULL, NULL, 0, '307153258d8f54ed138ba5c40d38508107727309d2181b6e4b0c09e694c52ab9b08f735f0b17d3bb34485b961c10e6c8ed89d9e2a9ac15c39d658c2aa0ae7c5738ba06c24fb699e81b1fe7675eb6', NULL, 0),
(5, 'Carloos ', NULL, 'user5', 'mail5@mail.com', '$2y$10$WebRJttriirDhADgam0y7u2ZpE8gROk4r0/YTjZdeeMuxdS68qAFe', NULL, NULL, 0, '87d94c17152562230b66b7f3644ef344f56e1511dea970087733a47198e3b291193b0f7ba9786b94ca30b4fd5cef9f9a578278473e1f3200d16191ecae352b97da438cb6703b3803d4d5e84f9a6a', NULL, 0),
(6, 'Carloos ', NULL, 'user6', 'mail6@mail.com', '$2y$10$.aKTrPU5Ee6YoWbiydAdTuP1Oa3Sw4sBLY5Ay1lDvMBx.o8MovLAG', NULL, NULL, 0, '3efa390f7fe4027963db37e35dc9af543c11dd73464e2ac825a54d18b470dc79a86c687d7ca45d61fedf0a6440e4957e60717582b4103f8e5a85c6ae8e789a393ab6858569d3859add8ec9c06953', NULL, 0),
(7, 'Carloos ', NULL, 'user7', 'mail7@mail.com', '$2y$10$LwkP4wNhcmFfuUo4Ai5Bx.PoX7iHSL3j58HRQDaLewts4YXL7DuGG', NULL, NULL, 1, '161dc471fd87eb028eedcf4bec85daa1548866f8', NULL, 0),
(8, 'Carloos ', NULL, 'user8', 'mail8@mail.com', '$2y$10$WKxXObmBH99mGnA.j4VcOeS1TuzOMBxuDbodBkT5enpl5XJHeOQGO', NULL, NULL, 1, '11e04dd646e56f228f6975e1443b9d7d0d0110c2', NULL, 0),
(10, 'Carlos', NULL, 'admin', 'admin@mail.com', '$2y$10$djrPB2SYaE4RD3oDjQr3tuUW0H0cKvA2zb806RGqC0bWm93nSJeLi', NULL, NULL, 1, 'dab766f3524a6d0e954bec516242ba090d45d7fe', NULL, 0);

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
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `anuncio`
--
ALTER TABLE `anuncio`
  MODIFY `idanuncio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

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
  MODIFY `idimagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=252;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `idmarca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT de la tabla `modelo`
--
ALTER TABLE `modelo`
  MODIFY `idmodelo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

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

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

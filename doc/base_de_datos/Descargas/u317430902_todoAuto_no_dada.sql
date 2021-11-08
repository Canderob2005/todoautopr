-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 04-09-2021 a las 03:59:49
-- Versión del servidor: 10.4.15-MariaDB-cll-lve
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `u317430902_todoAuto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clasificado`
--

CREATE TABLE `clasificado` (
  `id_slider` int(11) NOT NULL,
  `marca` varchar(120) COLLATE utf8_spanish_ci NOT NULL,
  `modelo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `ano` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `precio` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` longtext COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `link` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `imagen` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `estatus` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `metodoPago` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `tipoAnuncio` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `nombreCliente` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `nombreNegocio` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `friendly_url` text CHARACTER SET latin1 NOT NULL,
  `pago` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `id_serv` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `telefonoCliente` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `telefonoNegocio` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `direccionNegocio` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `pueblo` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `serv_dom` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `entrega_dom` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `intereses` varchar(800) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slider`
--

CREATE TABLE `slider` (
  `id_slider` int(11) NOT NULL,
  `titulo` varchar(120) COLLATE utf8_spanish_ci NOT NULL,
  `imagen` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `noticia` varchar(450) COLLATE utf8_spanish_ci NOT NULL,
  `link` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `orden` int(11) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sliderautoparts`
--

CREATE TABLE `sliderautoparts` (
  `id_slider` int(11) NOT NULL,
  `titulo` varchar(120) COLLATE utf8_spanish_ci NOT NULL,
  `imagen` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `noticia` varchar(450) COLLATE utf8_spanish_ci NOT NULL,
  `link` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `orden` int(11) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id` int(11) NOT NULL,
  `tipo` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(130) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `last_session` datetime DEFAULT NULL,
  `activacion` int(11) NOT NULL DEFAULT 0,
  `token` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `token_password` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `password_request` int(11) DEFAULT 0,
  `id_tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clasificado`
--
ALTER TABLE `clasificado`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `clientes` ADD FULLTEXT KEY `nombre` (`nombreNegocio`,`id_serv`,`pueblo`,`intereses`);
ALTER TABLE `clientes` ADD FULLTEXT KEY `nombre_2` (`nombreNegocio`);
ALTER TABLE `clientes` ADD FULLTEXT KEY `nombre_3` (`nombreNegocio`,`intereses`,`pueblo`);
ALTER TABLE `clientes` ADD FULLTEXT KEY `nombre_4` (`nombreNegocio`,`pago`,`id_serv`,`email`,`telefonoCliente`,`telefonoNegocio`,`direccionNegocio`,`pueblo`,`serv_dom`,`intereses`);
ALTER TABLE `clientes` ADD FULLTEXT KEY `nombre_5` (`nombreNegocio`,`pago`,`id_serv`,`email`,`telefonoCliente`,`telefonoNegocio`,`direccionNegocio`,`pueblo`,`serv_dom`,`intereses`);
ALTER TABLE `clientes` ADD FULLTEXT KEY `intereses` (`intereses`);
ALTER TABLE `clientes` ADD FULLTEXT KEY `pueblo` (`pueblo`);
ALTER TABLE `clientes` ADD FULLTEXT KEY `dirreccion` (`direccionNegocio`);

--
-- Indices de la tabla `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indices de la tabla `sliderautoparts`
--
ALTER TABLE `sliderautoparts`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clasificado`
--
ALTER TABLE `clasificado`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sliderautoparts`
--
ALTER TABLE `sliderautoparts`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 20-11-2021 a las 10:41:14
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
-- Base de datos: `app_clasificadospr`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cards`
--

CREATE TABLE `cards` (
  `id` int(11) NOT NULL,
  `servicio` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `pueblo` varchar(30) NOT NULL,
  `info` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  `intereses` varchar(800) COLLATE utf8_spanish_ci NOT NULL,
  `image` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `url_image` varchar(255) NOT NULL,
  `texto_boton` varchar(50) NOT NULL,
  `url_boton` text NOT NULL,
  `estilo_boton` varchar(30) NOT NULL,
  `estado` int(1) NOT NULL,
  `orden` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cards`
--
ALTER TABLE `cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

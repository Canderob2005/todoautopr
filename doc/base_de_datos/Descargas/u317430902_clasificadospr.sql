-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 04-09-2021 a las 03:54:17
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
-- Base de datos: `u317430902_clasificadospr`
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

--
-- Volcado de datos para la tabla `cards`
--

INSERT IGNORE INTO `cards` (`id`, `servicio`, `image`, `pueblo`, `info`) VALUES
(1, 'Accesorios para autos, camiones, motoras', 'accesorios.jpg', '', 'accesorios.php'),
(2, 'Aires Para Autos', 'aire-autos.jpg', '', 'aire.php'),
(3, 'Alineamiento Para Autos', 'alineamiento.jpg', '', 'alineamiento.php'),
(4, 'Alquiler Autos, Camiones, Vans', 'alquiler-autos.jpg', '', 'alquiler-autos.php'),
(5, 'Servicio en Carretera, Asistencia en la Carretera', 'asistencia.jpg', '', 'Asistencia.php'),
(6, 'Auto parts / Piezas para autos', 'auto-parts.jpg', '', 'auto-parts.php'),
(7, 'Dealers Autos Nuevos', 'autos-nuevos.jpg', '', 'autos-nuevos.php'),
(8, 'Dealers Autos Nuevos y Udados', 'autos-nuevos-usados.jpg', '', 'autos-nuevos-usados.php'),
(9, 'Body parts / piezas carroceria', 'body-parts.jpg', '', 'body-parts.php'),
(10, 'Dealer Camiones', 'camiones-dealer.jpg', '', 'camiones.php'),
(11, 'Piezas para camiones', 'camiones-piezas.jpg', '', 'Piezas-camiones.php'),
(12, 'Cotización Seguro de autos', 'cotizacion-seguro.jpg', '', 'cotizacion-seguro.php'),
(13, 'Cristales para  autos', 'cristal.jpg', '', 'cristales-autos.php'),
(14, 'Lavado autos, Detailing', 'detailling.jpg', '', 'detailling.php'),
(15, 'Distribuidor', 'distribuidor.jpg', '', 'distribuidor.php'),
(16, 'Electromecanico', 'electro.jpg', '', 'electro-mecanica.php'),
(17, 'Financiamiento de Autos', 'financiamiento.jpg', '', 'financiamiento.php'),
(18, 'Gestoria, traspaso, multas, marbete', 'gestoria.jpg', '', 'gestoria.php'),
(19, 'Gomeras, reparación, venta', 'gomeras.jpg', '', 'gomera.php'),
(20, 'Venta de Herramientas', 'herramientas.jpg', '', 'herramientas.php'),
(21, 'Centro de inspección', 'inspeccion.jpg', '', 'inspeccion.php'),
(22, 'Junkers de carro', 'junkers.jpg', '', 'junkers.php'),
(23, 'Cerrajeria', 'llaves.jpg', '', 'llaves.php'),
(24, 'Machine shop', 'machine-shop.jpg', '', 'machine-shop.php'),
(25, 'Mangas hidraulicas', 'mangas.jpg', '', 'mangas.php'),
(26, 'Mantenimiento autos', 'mantenimiento.jpg', '', 'mantenimiento.php'),
(27, 'venta motoras nuevas usadas piezas', 'motoras-venta-.jpg', '', 'motoras.php'),
(28, 'Reparación de muffler', 'muffler.jpg', '', 'muffler.php'),
(29, 'Centro de pinturas para autos', 'pinturas-autos.jpg', '', 'pinturas-autos.php'),
(30, 'Prestamos para autos ', 'prestamo.jpg', '', 'prestamo.php'),
(31, 'Reparación venta instalación de radiadores', 'radiadores.jpg', '', 'radiadores.php'),
(32, 'Rotulacion de vehiculos', 'rotulacion.jpg', '', 'rotulacion.php'),
(33, 'Seguros para vehiculos', 'seguros.jpg', '', 'seguros.php'),
(34, 'servicios domicilio electromecanico, mecanico y mucho mas', 'servicio.jpg', '', 'servicio-domicilio.php'),
(35, 'Servicio de grua,remolque', 'Servicio-grua.jpg', '', 'Servicio-grua.php'),
(36, 'Taller de hojalateria y pintura', 'taller-hojalateria.jpg', '', 'hojalateria.php'),
(37, 'Taller de mecanica autos', 'taller-mecanica.jpg', '', 'mecanica.php'),
(38, 'Tapiceria autos, camiones, motoras', 'tapiceria.jpg', '', 'tapiceria.php'),
(39, 'Tinte glass para autos, camiones, vans', 'Tinte-para=autos.jpg', '', 'tinte-glass.php'),
(40, 'Transmisiones para todo tipo de autos', 'transmisiones.jpg', '', 'transmisiones.php'),
(41, 'Dealers autos usados', 'autos-usados.jpg', '', '');

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
-- Volcado de datos para la tabla `slider`
--

INSERT IGNORE INTO `slider` (`id`, `titulo`, `descripcion`, `url_image`, `texto_boton`, `url_boton`, `estilo_boton`, `estado`, `orden`) VALUES
(2, 'Los mejores auto parts', 'Auto parts puerto rico', 'los-mejores-auto-parts.jpg', 'buscar Ahora!', 'autoparts.php', 'info', 1, 0),
(3, 'Los mejores Talleres de Puerto rico!', 'Los mejores Talleres de Puerto rico!', 'los-mejores-talleres.jpg', 'Buscar Ahora!', 'hojalateria.php', 'info', 1, 1),
(4, 'Galaxy A3 (2016)', 'El nuevo smartphone Galaxy A3 2016 tiene un diseÃ±o que combina elegancia.\r\n ', 'banner-taller-rosa-brown-1200.jpg', 'Comprar Ahora!', 'producto/10/televisor-60-j6200-led-full-hd-smart-tv', 'info', 1, 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de la tabla `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

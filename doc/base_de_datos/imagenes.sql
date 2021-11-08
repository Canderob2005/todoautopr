-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 22-09-2021 a las 06:39:53
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
(172, 96, 'yaris1.jpeg', 'Toyota Toyota Yaris', '../img/96', 1),
(173, 96, 'yaris2.jpeg', 'Toyota Toyota Yaris', '../img/96', 2),
(174, 96, 'yaris3.jpeg', 'Toyota Toyota Yaris', '../img/96', 3),
(175, 96, 'yaris4.jpeg', 'Toyota Toyota Yaris', '../img/96', 4),
(176, 97, 'yaris1.jpeg', 'Toyota Toyota Yaris', '../img/97', 1),
(177, 97, 'yaris2.jpeg', 'Toyota Toyota Yaris', '../img/97', 2),
(178, 97, 'yaris3.jpeg', 'Toyota Toyota Yaris', '../img/97', 3),
(179, 97, 'yaris4.jpeg', 'Toyota Toyota Yaris', '../img/97', 4),
(180, 98, 'yaris1.jpeg', 'Toyota Toyota Yaris', '../img/98', 1),
(181, 98, 'yaris2.jpeg', 'Toyota Toyota Yaris', '../img/98', 2),
(182, 98, 'yaris3.jpeg', 'Toyota Toyota Yaris', '../img/98', 3),
(183, 98, 'yaris4.jpeg', 'Toyota Toyota Yaris', '../img/98', 4),
(188, 102, 'rava41.jpeg', 'Toyota Toyota Rav4', '../img/102', 1),
(189, 102, 'rava42.jpeg', 'Toyota Toyota Rav4', '../img/102', 2),
(190, 102, 'rava43.jpeg', 'Toyota Toyota Rav4', '../img/102', 3),
(191, 102, 'rava44.jpeg', 'Toyota Toyota Rav4', '../img/102', 4);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`idimagen`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `idimagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=192;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

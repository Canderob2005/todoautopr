
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

-- INSERT IGNORE INTO `imagenes` (`idimagen`, `idanuncio`, `ruta_imagen`, `descripcion_imagen`, `nombre_directorio`, `numero_imagen`) VALUES
-- (204, 107, 'rava41.jpeg', 'Toyota Toyota Yaris', '../archivo/107', 1),
-- (205, 107, 'rava42.jpeg', 'Toyota Toyota Yaris', '../archivo/107', 2),
-- (206, 107, 'rava43.jpeg', 'Toyota Toyota Yaris', '../archivo/107', 3),
-- (207, 107, 'rava44.jpeg', 'Toyota Toyota Yaris', '../archivo/107', 4),
-- (208, 108, '2b9b2061b39a2e968a9862c54f9e37a1a511eefe1870ec79544c3232059c2e07.0.png', 'Toyota Toyota Innova', '../archivo/108', 1),
-- (209, 108, '3e01d71a76482fb8452e716fcc9af6978a232a15b0e67eb3bd32e7b4748a2c3c.0.png', 'Toyota Toyota Innova', '../archivo/108', 2),
-- (210, 108, '4a9084b89ba121506a9142dea4aa9d5694bcdf26c3ad1d6942fbccad8fec004f.0.png', 'Toyota Toyota Innova', '../archivo/108', 3),
-- (211, 108, '4c79cf90162c50b051aa306aca675ab3aa88c5c5c8bd8e0896b39a3eabd62200.0.png', 'Toyota Toyota Innova', '../archivo/108', 4),
-- (212, 109, 'rava41.jpeg', 'Toyota Toyota Yaris', '../archivo/109', 1),
-- (213, 109, 'rava42.jpeg', 'Toyota Toyota Yaris', '../archivo/109', 2),
-- (214, 109, 'rava43.jpeg', 'Toyota Toyota Yaris', '../archivo/109', 3),
-- (215, 109, 'rava44.jpeg', 'Toyota Toyota Yaris', '../archivo/109', 4);

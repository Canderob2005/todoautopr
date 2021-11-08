
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

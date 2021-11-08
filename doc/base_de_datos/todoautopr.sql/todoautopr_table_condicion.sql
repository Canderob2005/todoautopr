
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

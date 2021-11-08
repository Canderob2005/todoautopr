
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

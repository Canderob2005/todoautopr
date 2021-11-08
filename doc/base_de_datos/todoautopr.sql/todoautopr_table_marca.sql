
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
(10, 'Mazda');
